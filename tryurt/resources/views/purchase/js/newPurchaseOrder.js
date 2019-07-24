$(function () {
    eventLoader();
    computeAmount();
    newrecord = 'new';

    $('.deltask').first().remove();
    function clickAddtasks() {
        $('#addtasks, .addNewTaskButton, .addtaskslines').unbind('click');
        $('#addtasks, .addNewTaskButton, .addtaskslines').bind('click',function () {
            $.ajaxSetup({async: false});
            $.post(URL + "purchase/purchaseOrderTask",
                    function (result) {
                        $('.tablesalesnew > tbody:last').append(result);
                        clickAddtasks();
                    });
            $.ajaxSetup({async: true});
        });
    }
    clickAddtasks();

    $(document).on("click", ".deltask, input[name='inclusiveOfVat']", function () {
        $(this).parents('tr').remove();
        computeAmount();
    });

    $(document).on("keyup, focusout, change", ".unitPrice, .rate, .qty, .discountline, .vatcontainer", function () {
        computeNetLine($(this));
        computeAmount();

    });

    $(document).on("change", "#taxId", function () {
        computeNetLine($(this));
        computeAmount();
    });

    $(document).on("keyup", "input[name='discount'],input[name='discountPesoAmount']", function () {
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

    $('#supplierId').change(function () {
        if ($(this).val() == 'addsupplier') {
            $.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'auto');
                        
                        $('input[name="trig"]').val('ajaxLoad');
			$('.vendor101').addClass('objSelected');

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
            //alert(tin);
        } /*  else {
         $('textarea[name="address"]').val('');
         } */
    });

    $('.bPost').click(function () {
        $('input[name="status"]').val('post');
    });

    $('.form-Sales').submit(function () {
        stat = false;

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

        if (comp_tin) {
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
            confirmation101 = confirm('Do you want to post the Purchase Order?');
            if (confirmation101) {
                saveBilling();
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
            }
        } else {
            confirmation101 = confirm('Are you sure you want to save the Purchase Order?');
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

});

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
    $.post(URL + 'sales/newLocation', {view: 'invoice'})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
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
    }
});
// open modal when click item no.

$(document).on("click", ".itemid", function () {
    // var clickItem;
    $(this).blur();
    $(this).addClass('activeObj');
    $(this).closest('tr').find('input[name="itemDescription[]"], input[name="unitPrice[]"], select[name="uomId[]"], input[name="rate[]"]').addClass('activeObj');
    // alert($(this).html());return false;

    $.post(URL + 'sales/chooseItemCode')
        .done(function (returnData) {
            $('.popBack').html(returnData);
            $('.popBack').removeClass('hidden');
            $('body').css('overflow', 'hidden');
        });
    computeNetLine($(this));
    computeAmount();
    return false;
});

// changes upon choose item
$(document).on("change", ".itemid", function () {
    if ($(this).val() === 'addItem') {
        $(this).addClass('activeObj');
        $('.activeObj option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        addNewItem();
    } else if ($(this).val() != '') {
        $(this).parents('tr').find('input[name="itemDescription[]"]').val($('option:selected', this).attr('description'));
        $(this).parents('tr').find('input[name="unitPrice[]"]').val(roundFloat($('option:selected', this).attr('uprice')));

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

function saveBilling() {
    status = $('input[name="status"]').val();
    $.post(URL + 'purchase/updatePurchaseOrder', $('.form-Sales').serialize())
            .done(function (returnData) {
                $('body').css('overflow', 'hidden');

                if (returnData == '') {
                    location = URL + 'Purchase';
                } else if (returnData == 'add') {
                    location = URL + 'Purchase/newPurchaseOrder';
                } else if (returnData == 'duplicate code') {
                    alertWithoutNotice('Purchase order number already exists');
                    $('body').css('overflow', 'auto');
                    $('.popBack').addClass('hidden');
                    return false;
                } else {
                    if (status == '') {
                        location = URL + 'Purchase';
                    } else {
                        location = URL + 'Purchase/newPurchaseOrder';
                    }

                    $('.popBack').html($('.popBack').html() + returnData);
                    $('.popBack').removeClass('hidden');
                    $('.seconds').show();
                    $('body').css('overflow', 'hidden');
                    return false;
                }
            });

}

function computeAmount() {
    total =  0;
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
    rate= $($object).parents('tr').find('.rate').val(roundFloat(unitprice * qty));
    discount = $($object).parents('tr').find('.discountline').val();    
    net = 0;
    vattype = $($object).parents('tr').find('.vatcontainer option:selected').text().trim();

    if (vattype == '') {
        vattype = $($object).parent('td').parent('tr').find('.vatselectInvoice').val();
    }

//    if (vattype == 'Vat-Exempt') {
//    if (vattype == 'Vatable') {
//        net = (unitprice * qty) / 1.12 - (((unitprice * qty) / 1.12) * discount / 100);
//    } else {
    net = (unitprice * qty) - ((unitprice * qty) * discount / 100);
//    }

    $($object).parents('tr').find('.tasknet').val(roundFloat(net));

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