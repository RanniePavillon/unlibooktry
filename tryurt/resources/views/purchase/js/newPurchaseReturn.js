$(function () {
    eventLoader();

    $('#supplierId').change(function () {
        if ($(this).val() == 'addsupplier') {
            $.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'auto');

                        $('.closeNewVendor1').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('#supplierId').val('');
                                $('#supplierId').change();
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                            }
                        });
                    })
                    .fail(function () {
                        alert('Connection Error!');
                    });
        } else if ($(this).val() != '') {
            address = $('select[name="supplierId"] option:selected').attr('address');
            tin = $('select[name="supplierId"] option:selected').attr('tin');
            $('textarea[name="address"]').val(address);
            $('input[name="tin"]').val(tin);

            $('.purchaseinvoice option[value!=""]').remove();

            $('.purchaseinvoice option').removeAttr('selected')
                    .filter('option[0]')
                    .attr('selected', true);

//            filterPurchaseInvoice($(this).val());
        }
    });

    $(document).on('change', '.qty', function () {
        computeNetLine($(this));
        computeAmount();
    });

    $('.form-Sales').submit(function () {
        stat = false;

        msg = validateQtyEntry();
        if (msg != '') {
            alertWithoutNotice(msg);
            return false;
        }

        if ($('#supplierId').val() == '') {
            $('.bPost').prop('disabled', false);
            $('input[name="status"]').val('');
            alert('Please add/select supplier');
            return false;
        }


        $('.netAmountLine').each(function () {
            if (getInt($(this).val()) == 0) {
                $('.bPost').prop('disabled', false);
                $('input[name="status"]').val('');
                stat = true;
                return false;
            }
        });

        if (stat) {
            alert('Net amount lines should not be equal to 0');
            $('.bPost').prop('disabled', false);
            $('input[name="status"]').val('');
            return false;
        }

        if ($('input[name="status"]').val() == 'post') {
            confirmation101 = confirm('Do you want to post the Purchase Return?');
            if (confirmation101) {
                saveBilling();
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
            }
        } else {
            confirmation101 = confirm('Are you sure you want to save the Purchase Return?');
            if (confirmation101) {
                saveBilling();
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
            }
        }
        $('.bPost').prop('disabled', false);
        $('input[name="status"]').val('');

        return false;
    });

    $('.purchaseinvoice').change(function () {
        if ($('#supplierId :selected').val() != '') {
            $.post(URL + 'purchasereturn/purchaseInvoiceForm', {view: 'invoice', supplierId: $('#supplierId :selected').val()})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');
						$('.popBack').css('overflow', 'auto');

                        $('.closeCNTs').click(function () {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        });

                        $('.purchaseinvoice option').removeAttr('selected')
                                .filter('option[0]')
                                .attr('selected', true);
                    })
                    .fail(function () {
                        alertWithoutNotice('Connection Error!');
                    });
        } else {
            alertWithoutNotice('Please select supplier.');
        }

        return false;
    });

    $('.bPost').click(function () {
        $('.bPost').prop('disabled', true);
        $('input[name="status"]').val('post');
        $('.form-Sales').submit();
    });
});

function showPi() {
    if ($('#client :selected').val() != '') {
        $.post(URL + 'purchase/purchaseInvoiceForm', {clientid: $('#client :selected').val()})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.closeCNTs').click(function () {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                    });
                })
                .fail(function () {
                    alertWithoutNotice('Connection Error!');
                });
    } else {
        alertWithoutNotice('Please select client.');
    }

    return false;
}

function filterPurchaseInvoice(supplierid) {
    $.post(URL + 'purchasereturn/getPurchaseInvoice', {supplierId: supplierid})
            .done(function (returnData) {
                $('.purchaseinvoice option').remove();
                $('.purchaseinvoice').append(returnData);
            });
}

function saveBilling() {
    status = $('input[name="status"]').val();
    $.post(URL + 'purchasereturn/updatePurchaseReturn', $('.form-Sales').serialize())
            .done(function (returnData) {
                $('body').css('overflow', 'hidden');
                if (returnData == '') {
                    location = URL + 'Purchase/purchaseReturn';
                } else if (returnData == 'add') {
                    location = URL + 'Purchase/newpurchaseReturn';
                } else if (returnData == 'duplicate code') {
                    alertWithoutNotice('Purchase return number already exists');
                    $('body').css('overflow', 'auto');
                    $('.popBack').addClass('hidden');
                    return false;
                } else {
                    if (status == '') {
                        location = URL + 'Purchase/purchaseReturn';
                    } else {
                        location = URL + 'Purchase/newpurchaseReturn';
                    }

                    $('.popBack').html($('.popBack').html() + returnData);
                    $('.popBack').removeClass('hidden');
                    $('.seconds').show();
                    $('body').css('overflow', 'hidden');
                    return false;
                }
            });
    return false;
}

function eventLoader() {
    $('.tablesalesnew').find('tr').mouseover(function () {
        $(this).find('#addtask, .addtaskslines').addClass('a-hover');
        $(this).find('.del').addClass('del-hover');
    });
    $('.tablesalesnew').find('tr').mouseout(function () {
        $(this).find('#addtask, .addtaskslines').removeClass('a-hover');
        $(this).find('.del').removeClass('del-hover');
    });
}

function printPreview(id) {

    $.post(URL + 'purchasereturn/purchaseReturnPrev', {'id': id})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popBack").css('z-index', '100');

                $('.closePrint').click(function () {
                    if (confirm('Are you sure you want to leave this page?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                    }
                });

            })
            .fail(function () {
                alert('Connection Error!');
            });
    return false;
}

function computeAmount() {
    total = 0;
    vat = 0;
    discountAmount = 0;

    discountClass = getDiscount();
    if (discountClass == '') {
        discountClass = 0;
    }

    discount = $('input[name="discounttype"]:checked').val() == 'percent' ? parseFloat(discountClass) / parseInt(100) : discountClass;

    if ($('input[name="inclusiveOfVat"]').is(':checked')) {
        $('.netAmountLine').each(function () {
            discountline = $(this).parents('tr').find('.discountline').val() / 100;
            vattype = $(this).parents('tr').find('.vatcontainer').val().trim();

            value = getInt($(this).parents('tr').find('.unitPrice').val()) * getInt($(this).parents('tr').find('.qty').val());
            amount = getInt(value / ((parseInt(100) + 12) / parseInt(100)));
            if (vattype == 'Vatable') {
                total += amount;
                discountAmount += (amount * discount) + (amount * discountline);
                vat += getInt((amount - (amount * discount) - (amount * discountline)) * 0.12);
            } else {
                total += value;
                discountAmount += (value * discount) + (value * discountline);
            }
        });

    } else {
        $('.netAmountLine').each(function () {
            discountline = $(this).parents('tr').find('.discountline').val() / 100;
            vattype = $(this).parents('tr').find('.vatcontainer').val().trim();
            value = getInt($(this).parents('tr').find('.unitPrice').val()) * getInt($(this).parents('tr').find('.qty').val());
            amount = getInt(value / ((parseInt(100) + 12) / parseInt(100)));

            if (vattype == 'Vatable') {
                total += value;
                discountAmount += (value * discount) + (value * discountline);
                vat += (value - (value * discount) - (value * discountline)) * 0.12;
            } else {
                total += value;
                discountAmount += (value * discount) + (value * discountline);
            }
        });
    }
    $('input[name="subTotalAmount"]').val(roundFloat(total));

    $('input[name="vatAmount"]').val(roundFloat(vat));
    $('input[name="discountAmount"]').val(roundFloat(discountAmount));
//    $('.netamounttotal').val(roundFloat((total - discountAmount)));
//    $('input[name="grandTotal"]').val(roundFloat((total + vat) - discountAmount));
    $('.netamounttotal').val(roundFloat((total - discountAmount)));
    $('input[name="grandTotal"]').val(roundFloat((total + vat) - discountAmount));
}

function getDiscount() {
    discountClass = 0;
    if ($('input[name="discounttype"]:checked').val() == 'percent') {
        discountClass = getInt($('input[name="discount"]').val());

        return discountClass;
    } else {
        amount = 0;
        $('.itemid').each(function (i) {
            rate = getInt($(this).parents('tr').find('.unitPrice').val());
            qty = getInt($(this).parents('tr').find('.qty').val());
            amount += rate * qty;
        });
        discountClass = getInt($('input[name="discountPesoAmount"]').val()) / amount * 100;

        return discountClass / 100 || 0;
    }
}

function computeNetLine($object) {
    qty = getInt($($object).parents('tr').find('.qty').val());
    unitprice = getInt($($object).parents('tr').find('.unitPrice').val());

    $($object).parents('tr').find('.rate').val(roundFloat(unitprice * qty));
    discount = $($object).parents('tr').find('.discountline').val();

    net = 0;
    vattype = $($object).parents('tr').find('.vatselectInvoice option:selected').text().trim();

    if (vattype == '') {
        vattype = $($object).parent('td').parent('tr').find('.vatselectInvoice').val();
    }

//    if (vattype == 'Vat-Exempt') {
//        net = (unitprice * qty) / 1.12 - (((unitprice * qty) / 1.12) * discount / 100);
//    } else {
    net = (unitprice * qty) - ((unitprice * qty) * discount / 100);
//    }

    $($object).parents('tr').find('.tasknet').val(roundFloat(net));

}

function validateQtyEntry() {
    msg = '';
    $('.itemid').each(function () {
        remain_qty = getInt($(this).parents('tr').find('.remain_qty').val());
        return_qty = getInt($(this).parents('tr').find('.qty').val());

        if (return_qty > remain_qty) {
            msg = 'Return quantity should not be more than the invoiced quantity';
            return false;
        }
        
        check_inv = getAvailableItem($(this));
        
        if(check_inv != ''){
            msg = 'Unable to return. Item inventory is insufficient';
            return false;
        }
    });

    return msg;
}

function getAvailableItem($object){
    itemid = $($object).val();
    warehouseid = $($object).parents('tr').find('input[name="warehouseId[]"]').val();
    uomid = $($object).parents('tr').find('input[name="uomId[]"]').val();
    qty = $($object).parents('tr').find('input[name="returnQty[]"]').val();

    invent_stat = false;

    if(itemid != '' && $.isNumeric(itemid) && warehouseid != '' && $.isNumeric(warehouseid) && uomid != '' && $.isNumeric(uomid) && qty !=''){
        $.ajaxSetup({async: false});
        $.post(URL + 'inventory/checkItemInventory',{itemid:itemid, warehouseid:warehouseid, uomid:uomid, qty:qty})
                .done(function(returnData){ 
                if(returnData == 'insufficient'){ 
                    invent_stat = true; 
                }
        }).fail(function(){
           alertWithoutNotice('Connection error.'); 
        });
    }

    if (invent_stat == true) {
        return 'insufficient';        
    }
    
    return '';
}