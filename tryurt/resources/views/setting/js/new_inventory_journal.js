$(function () {
    checkStatus(status);
    checkBegBalance();
    
    $('.addLineInv').click(function () {
        $.post(URL + 'inventoryjournal/newInventoryLine')
                .done(function (returnData) {
                    $('.tblNewInventoryJournal').append(returnData);
                    checkBegBalance();
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });
    
    $(document).on('click', '.addline', function () {
        $.post(URL + 'inventoryjournal/newInventoryLine')
                .done(function (returnData) {
                    $('.tblNewInventoryJournal').append(returnData);
                    checkBegBalance();
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });
    
    $(document).on('click', '.removeline', function () {
        $(this).parents('tr').remove();
        computeAmount();
    });

    $(document).on('change', '.selectItem', function () {
        if ($(this).val() === 'addItem') {
            $('.selectItem').removeAttr('activeObj');
            $(this).addClass('activeObj');
            $('option', this).removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewItem();
            $('.popup3').removeClass('hidden');
            $('body').css('overflow', 'hidden');
            $('.close1Client').click(function () {
                $('.popup3').addClass('hidden');
                $('.clientfrm').addClass('hidden');
                $('.returnurl').val('');
                $('body').css('overflow', 'auto');
            });
        }else{
            getAverageCost($(this));
        }
        
        return false;

    });

    $(document).on("change", ".warehouseId", function () {
        if ($(this).val() === 'addLocation') {
            $(this).addClass('activeObj');
            $('.activeObj option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewWarehouse();
        }
    });

    $(document).on("change", ".uom", function () {
        if ($(this).val() === 'addnewUom') {
            $(this).addClass('activeObj');
            $('.activeObj option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewUOM2();
            // $('.categoryfrm').removeClass('hidden');
            // $('body').css('overflow', 'hidden');
            // $('.close1Client').click(function () {
            // $('.popup2').addClass('hidden');
            // $('.categoryfrm').addClass('hidden');
            // $('body').css('overflow', 'auto');
            // });
        }
    });
    
    $('input[name="begBalance"]').click(function(){
        checkBegBalance();
    });
    
    $(document).on('keyup', 'input[name="weightedAverage[]"], input[name="qty[]"]', function () {
        computeLineAmount($(this));
        computeAmount();
    });

    $(document).on('keyup', 'input[name="totalAmount[]"]', function () {
        computeAmount();
    });

    $('.saveInventory').click(function () {
        $('input[name="status"]').val('');
    });

    $('.postInventory').click(function () {
        $('input[name="status"]').val('post');
    });

    $('.frmInventoryJournal').submit(function () {
        amount = getInt($('input[name="amount"]').val());
        check_beg_bal = $('input[name="begBalance"]').is(':checked');
        
        check_amount = true;
        
        if($('input[name="totalAmount[]"]').length == 1){
            check_amount = $('input[name="totalAmount[]"]').val() > 0 ? true : false;
        }
        
        if((amount == 0 && !check_beg_bal) || (check_beg_bal && check_amount)){
            saveBilling();
        }else if(!check_amount){
            alertWithoutNotice('Invalid amount');
        }else{
            alertWithoutNotice('Amount entry should be balance.');
        }        

        return false;
    });
});

function addNewItem() {
    $.post(URL + 'sales/newItems', {view: 'invoice'})
            .done(function (returnData) {
                $('.popup3').html(returnData);
                $('#formtask > input[name="task"]').val('additemr');
                $('.newClientTask').val('addNewClientOption');
                $('.popup3').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.closeCNTs').click(function () {
                    $('.popup3').addClass('hidden');
                    $('.popup3').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function addNewWarehouse() {
    $.post(URL + 'inventory/newLocation', {view: 'invoice'})
            .done(function (returnData) {
                $('.popup3').html(returnData);
                //$('.newClientTask').val('addNewClientOption');
                $('.popup3').removeClass('hidden');
                //$('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.cmForm input[name="task"]').val('addwarehouser');
                $('.close1Client').click(function () {
                    $('.warehouseId').removeClass('activeObj');
                    $('.popup3').addClass('hidden');
                    $('.popup3').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function saveBilling() {
    $.post(URL + 'inventoryjournal/updateInventoryJournal', $('.frmInventoryJournal').serialize())
            .done(function (returnData) {
                returnData = returnData.trim();
                if (returnData == '') {
                    location.reload();
                } else {
                    alertWithoutNotice(returnData);
                }
            }).fail(function () {
        alertWithoutNotice('Connection failed.');
    });

    return false;
}

function addNewUOM2() {
    newrecord = 'new';
    $.post(URL + 'sales/newUom')
            .done(function (returnData) {
                $('.popup3').html(returnData);
                $('.popup3').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.close1Client').click(function () {
                    $('.uom').removeClass('activeObj');
                    $('.popup3').addClass('hidden');
                    $('.popup3').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function checkBegBalance(){
    if($('input[name="begBalance"]').is(':checked')){
        $('.glPostingtd').addClass('hidden');
        $('.glPosting').removeAttr('required');
    }else{
        $('.glPostingtd').removeClass('hidden');
        $('.glPosting').attr('required', true);
    }
}

function getAverageCost($item){
    itemid = $($item).val();
    
    $.post(URL + 'inventoryjournal/getAverageCost', {itemid: itemid})
            .done(function(returnData){
                $($item).parents('tr').find('input[name="weightedAverage[]"]').val(returnData);   
                computeLineAmount($item);
                computeAmount();
    }).fail(function(){
        alertWithoutNotice('Connection Error'); 
    });
}

function computeLineAmount($object){
    qty = getInt($($object).parents('tr').find('input[name="qty[]"]').val());
    unitcost = getInt($($object).parents('tr').find('input[name="weightedAverage[]"]').val());
    
    $total = $($object).parents('tr').find('input[name="totalAmount[]"]');
    
    $($total).val(roundFloat(qty * unitcost));
    
    return false;
}

function computeAmount(){
    total = 0;
    $('input[name="totalAmount[]"]').each(function () {
        total += getInt($(this).val());
    });

    $('input[name="amount"]').val(roundFloat(total));
        
    return false;    
}

function checkStatus(status) {
    if (status == 'posted') {
        $('.frmInventoryJournal input, .frmInventoryJournal select').attr('disabled', true);
       }
}