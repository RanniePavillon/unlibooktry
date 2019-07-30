$(function () {
    newrecord = 'new';
    computeAmount();
    eventLoader();
    $('.deltask').first().remove();
    $('#addtasks, .addNewTaskButton, .addtaskslines').click(function () {
        $.ajaxSetup({async: false});
        $.post(URL + "sales/salesOrderTask",
                function (result) {
                    $('.tablesalesnew > tbody:last').append(result);
                });
        $.ajaxSetup({async: true});
    });

    $(document).on("click", ".deltask", function () {
        $(this).parents('tr').remove();
        computeAmount();
    });

    $('input[name="discounttype"]').click(function () {
        if ($(this).val() == 'percent') {
            $('input[name="discount"],.percentNew').removeClass('hidden');
            $('input[name="discountPesoAmount"]').addClass('hidden');
            $('input[name="discountPesoAmount"]').val(0);
        } else {
            $('input[name="discountPesoAmount"]').val('0.00').removeClass('hidden');
            $('input[name="discount"], .percentNew').addClass('hidden');
            $('input[name="discount"]').val(0);
        }
    });

    $('input[name="inclusiveOfVat"]').change(function () {
        computeAmount();
    });

    $('.bPost').click(function () {
        $('input[name="status"]').val('post');
    });

    $('.cm').click(function () {         
         clientid = $('#client option:selected').val();
        
        if(clientid ==''){
            alertWithoutNotice('Please select client first.');
            return false;
        }
        
        $.post(URL + 'cm/applyCm',{type:'sales', clientid:clientid})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.close1Client, .close1Client2').click(function () {
                        if (confirm('Are you sure you want to leave this page without posting?')) {
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
    });
    
    $(document).on('change', '.qty, .warehouseId', function(){
        itemid = $(this).parents('tr').find('.itemid :selected').val();
        warehouseid = $(this).parents('tr').find('.warehouseId :selected').val();
        uomid = $(this).parents('tr').find('.uom :selected').val();
        qty = $(this).parents('tr').find('.qty').val();

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
            alert('Item inventory is insufficient');
            $('option', $(this).parents('tr').find('.warehouseId')).removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
            return false;
        }
        
    });

    $('.form-Sales').submit(function () {
        stat = invent_stat = false;
        $('.bPost').prop('disabled', true);

        if ($('#client').val() == '') {
            $('.bPost').prop('disabled', false);
            $('input[name="status"]').val('');
            alert('Please add/select client');
            return false;
        }


        $('.netAmountLine').each(function () {
            if (getInt($(this).val()) == 0) {
                $('.bPost').prop('disabled', false);
                $('input[name="status"]').val('');
                stat = true;
                return false;
            }
            
            itemid = $(this).parents('tr').find('.itemid :selected').val();
            warehouseid = $(this).parents('tr').find('.warehouseId :selected').val();
            uomid = $(this).parents('tr').find('.uom :selected').val();
            qty = $(this).parents('tr').find('.qty').val();
            
            $.ajaxSetup({async: false});
            $.post(URL + 'inventory/checkItemInventory',{itemid:itemid, warehouseid:warehouseid, uomid:uomid, qty:qty})
                    .done(function(returnData){
                    if(returnData == 'insufficient'){ 
                        invent_stat = true; 
                    }
            }).fail(function(){
               alertWithoutNotice('Connection error.'); 
            });
        });
        
        if (stat) {
            alert('Net amount lines should not be equal to 0');
            $('.bPost').prop('disabled', false);
            $('input[name="status"]').val('');
            return false;
        }
        
        if (invent_stat == true) {
            alert('Unable to post. Item inventory is insufficient');
            $('.bPost').prop('disabled', false);
            $('input[name="status"]').val('');
            return false;
        }

        if (tin) {
            $.post(URL + 'invoice/getInfoForm')
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.logoUploadHolder').addClass('hidden');
                        $('.popBack').removeClass('hidden');
                        $('.seconds').show();
                        $('popBack').css('overflow', 'auto');
                        $('.top').addClass('hidden');
                        $('.footerHolderNew').addClass('hidden');
                        $('.tableCompany22').addClass('hidden');
                        $('.tableCompany222').addClass('hidden');
                        $('body').css('overflow', 'hidden');
                        $('.popBack').css('overflow', 'auto');
                        $('.company-form').submit(function () {
                            if ($('.company-form input[name="tinNum"]').val() != '') {
                                $.post(URL + 'invoice/setCompany?type=ajax', $('.company-form').serialize())
                                        .done(function (returns) {
                                            if (returns == 0) {
                                                // alert('done');
                                                saveBilling();
                                            } else {
                                                alert(returns);
                                                location.reload();
                                            }
                                        })
                                        .fail(function () {
                                            location.reload();
                                        });
                            } else {
                                alert('Pls fill-up the required feilds.');
                                $('.company-form input[name="tinNum"]').focus();
                            }
                            return false;
                        });
                    });
            return false;
        }

        if ($('input[name="status"]').val() == 'post') {
            confirmation101 = confirm('Do you want to post the Cash Invoice?');
            if (confirmation101) {
                saveBilling();
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
            }
        } else {
            confirmation101 = confirm('Are you sure you want to save the Cash Invoice?');
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

//    $(document).on("change", ".itemid", function () {
//        $(this).parents('tr').find('input[name="itemDescription[]"]').val($('option:selected', this).attr('description'));
//        $(this).parents('tr').find('input[name="unitPrice[]"]').val(roundFloat($('option:selected', this).attr('uprice')));
//        $(this).parents('tr').find('.uom option').removeAttr('selected')
//                .filter('[value="' + $('option:selected', this).attr('uom') + '"]')
//                .attr('selected', true);
//        computeNetLine($(this));
//    });

    function saveBilling() {
        status = $('input[name="status"]').val();

        $.post(URL + 'cashinvoice/updateCashInvoice', $('.form-Sales').serialize())
                .done(function (returnData) {
                    $('body').css('overflow', 'hidden');
                    
                    if (returnData == '') {
                        location = URL + 'sales';
                    } else if (returnData == 'add') {
                        location = URL + 'sales/newCashInvoice';
                    } else if (returnData == 'duplicate code') {
                        alertWithoutNotice('Cash invoice number already exists');
                        $('body').css('overflow', 'auto');
                        $('.popBack').addClass('hidden');
                        return false;
                    } else {
                        if (status == '') {
                            location = URL + 'sales';
                        } else {
                            location = URL + 'sales/newCashInvoice';
                        }

                        $('.popBack').html($('.popBack').html() + returnData);
                        $('.popBack').removeClass('hidden');
                        $('.seconds').show();
                        $('body').css('overflow', 'hidden');
                        return false;
                    }
                });

    }
});

$(document).on("keyup, focusout", ".unitPrice, .rate, .qty, .discountline", function () {
    computeNetLine($(this));
    computeAmount();

});

$(document).on("change", "#taxId", function () {
    computeNetLine($(this));
    computeAmount();
});

$(document).on("keyup", "input[name='discount'],input[name='discountPesoAmount']", function () {
//    computeNetLine($(this));
    computeAmount();
});


$(document).on("change", "#glPosting2", function () {
    object = $(this);
    $activeobjct = $(this);
    if ($(this).val() === 'addBank') {
        $(this).addClass('activeObj');
        $('.activeObj option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        $('.returnurl').val('invoice');
        addNewBank();
    } else if ($(this).val() != 3) {
        $('input[name="pOSO"]').attr("required", true);
    } else if ($(this).val() == 3) {
        $('input[name="pOSO"]').attr("required", false);
    }

    return false;
});

function addNewBank() {
    $.post(URL + 'accounting/addBankAccount', {view: 'invoice'})
            .done(function (returnData) {
                newrecord = 'new';
                $('.popBack').html(returnData);
                $('.forBank').val('addBankOption');
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');

                $('.closeAccount').click(function () {
                    if (confirm('Are you sure you want to leave this page without saving?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                    }
                });
                return false;
            })
            .fail(function () {
                alert('Connection Error!');
            });
    return false;
}


$(document).on("change", "#client", function () {
    $('#address').text('');
    if ($(this).val() === 'addclient') {
        $('#client option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        addNewClient();
        $('.popBack').removeClass('hidden');
        $('.clientfrm').removeClass('hidden');
        $('.returnurl').val('invoice');
        $('body').css('overflow', 'hidden');
        $('.close1Client').click(function () {
            $('.popBack').addClass('hidden');
            $('.clientfrm').addClass('hidden');
            $('.returnurl').val('');
            $('body').css('overflow', 'auto');
        });
    }
    if ($(this).val() !== 'addclient' && $(this).val() !== '') {
        $.ajax({
            url: URL + "invoice/getAddress",
            type: "POST",
            data: {
                clientId: $(this).val()
            },
            dataType: "JSON", async: false,
            success: function (jsonStr) {
                $('#address').text(jsonStr.address);


            }
        });
    }
});

function addNewClient() {
    $.post(URL + 'invoice/newcustomer', {view: 'invoice'})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.close1Client').click(function () {
                    $('.popBack').addClass('hidden');
                    $('.popBack').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function addNewUOM2() {
    $.post(URL + 'sales/newUom')
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.close1Client').click(function () {
                    $('.uom').removeClass('activeObj');
                    $('.popBack').addClass('hidden');
                    $('.popBack').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}



function addNewItem() {
    $.post(URL + 'sales/newItems', {view: 'invoice'})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                // $('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('#formtask input[name="task"]').val('additemr');

                $('.closeCNTs').click(function () {
                    $('.itemid').removeClass('activeObj');
                    $('.popBack').addClass('hidden');
                    $('.popBack').html('');
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
                $('.popBack').html(returnData);
                //$('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                //$('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.cmForm input[name="task"]').val('addwarehouser');
                $('.close1Client').click(function () {
                    $('.warehouseId').removeClass('activeObj');
                    $('.popBack').addClass('hidden');
                    $('.popBack').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

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

$(document).on("change", ".itemid", function () {
    if (!$.isNumeric($('#client :selected').val())) {
        $('.itemid option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);

        alertWithoutNotice('Please select client first.');
        return false;
    }

    if ($(this).val() === 'addItem') {
        $(this).addClass('activeObj');
        $('.activeObj option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        addNewItem();
    } else {
        price = $('#client :selected').attr('type') == 'Branch' ? $('option:selected', this).attr('uprice') : $('option:selected', this).attr('fprice');

        $(this).parents('tr').find('input[name="itemDescription[]"]').val($('option:selected', this).attr('description'));
        $(this).parents('tr').find('input[name="unitPrice[]"]').val(roundFloat(price));
//        $(this).parents('tr').find('.uom option').removeAttr('selected')
//                .filter('[value="' + $('option:selected', this).attr('uom') + '"]')
//                .attr('selected', true);

        $(this).parents('tr').find('.uom').removeAttr('selected').val($('option:selected', this).attr('uom'))
                .find('option[value="' + $('option:selected', this).attr('uom') + '"]')
                .attr('selected', true);

        computeNetLine($(this));
        computeAmount();
    }
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

/* function printPreview(id) {
 $.post(URL + 'sales/printReceipt', {invoiceid: id})
 .done(function (returnData) {
 $('.popBack').html(returnData);
 $('.popBack').removeClass('hidden');
 $('body').css('overflow', 'hidden');
 $('.popx').click(function () {
 $('.popBack').addClass('hidden');
 $('.popBack').html('');
 $('body').css('overflow', 'auto');
 $('.chk').removeAttr('checked');
 });
 })
 .fail(function () {
 alert('Connection Error!');
 });
 } */



function computeAmount() {
    total = 0;
    vat = 0;
    discountAmount = 0;
    cmamount = 0;

    discountClass = getDiscount();
    if (discountClass == '') {
        discountClass = 0;
    }

    if ($('input[name="cm_amount"]').length > 0) {
        cmamount = getInt($('input[name="cm_amount"]').val());
    }

    discount = $('input[name="discounttype"]:checked').val() == 'percent' ? parseFloat(discountClass) / parseInt(100) : discountClass;

    if ($('input[name="inclusiveOfVat"]').is(':checked')) {
        $('.netAmountLine').each(function () {
//            rate = getInt($(this).parent('td').parent('tr').find('td:nth-child(4) select option:selected').attr('rate'));
            discountline = $(this).parents('tr').find('.discountline').val() / 100;
            vattype = $(this).parents('tr').find('.vatcontainer option:selected').text().trim();

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
//            rate = getInt($(this).parent('td').parent('tr').find('td:nth-child(4) select option:selected').attr('rate'));
            discountline = $(this).parents('tr').find('.discountline').val() / 100;
            vattype = $(this).parents('tr').find('.vatcontainer option:selected').text().trim();
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
    discountAmount += cmamount;
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
//            }
        });
        discountClass = getInt($('input[name="discountPesoAmount"]').val()) / amount * 100;
//        alert(discountClass);
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

//            alert(net);

    $($object).parents('tr').find('.tasknet').val(roundFloat(net));

}

function setCm() {
//    $('.cmids').each(function () {
//        alert($(this).val());
//        return false;
//
//    });
//    return false;

    $html = '';
    amount = 0;

    $('.chkcm:checked').each(function () {
        amount += getInt($(this).parents('tr').find('.chk_cmamount').val());
        $html += '<input type="hidden" name="cmid" value="' + $(this).val() + '"  />';
    });

    if ($('input[name="cm_amount"]').length > 0) {
        cmamount = getInt($('input[name="cm_amount"]').val());
        $('#discount').val(getInt($('#discount').val()) - cmamount);
    }

    $html += '<input type="hidden" name="cm_amount" value="' + amount + '"  />';

    $('.cm_content2').html($html);
    $('#discount').val(roundFloat(getInt($('#discount').val()) + amount));
    $('.popBack').html('').addClass('hidden');
    computeAmount();

    return false;
}

function roundFloat(intVal) {
    intVal = parseFloat(intVal);
    intVal = Number((intVal).toFixed(2));

    array = intVal.toString().split('.');

    if (array[1]) {
        if (array[1].length == 1) {
            array[1] += '0';
        }
    } else {
        array[1] = '00';
    }

    intVal = array.join('.');

    hasComma = commafy(intVal);

    if (hasComma[0] == '-') {
        hasComma = hasComma.toString().replace(/-/g, '');
        hasComma = '(' + hasComma + ')';
    }
    return hasComma;
}

function commafy(num) {
    var n = num.toString().split(".");
    n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return n.join(".");
}

function getInt(intVal) {
    if (typeof (intVal) == 'undefined') {
        intVal = 0;
    }
    if (intVal != '') {
        intVal = intVal.toString().replace(/,/g, '');
    }
    if (intVal[0] == '(') {
        intVal = intVal.toString().replace(/\(/g, '');
        intVal = intVal.toString().replace(/\)/g, '');
        intVal *= -1;
    }
    intVal = parseFloat(intVal);
    if (isNaN(intVal)) {
        return 0;
    }
    return intVal;
}


	