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

            $('.receiveorder option[value!=""]').remove();

//            filterReceivedOrder($(this).val());
        }
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

        if ($('input[name="status"]').val() == 'post') {
            confirmation101 = confirm('Do you want to post the Purchase Invoice?');
            if (confirmation101) {
                saveBilling();
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
            }
        } else {
            confirmation101 = confirm('Are you sure you want to save the Purchase Invoice?');
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

    $('.bPost').click(function () {
        $('.bPost').prop('disabled', true);
        $('input[name="status"]').val('post');
        $('.form-Sales').submit();
    });

    $('.receiveorder').change(function () {

        if ($('option:selected', this).text() === 'Show RO') {
            $('.receiveorder option').removeAttr('selected')
                    .filter('option[0]')
                    .attr('selected', true);
            showRO();
            $('.returnurl').val('');
            $('.closeCNTs').click(function () {
                $('.popBack').addClass('hidden');
                $('.clientfrm').addClass('hidden');
                $('body').css('overflow', 'auto');
            });
        }
//        if ($(this).val() != '') {
//            $.post(URL + 'purchaseinvoice/getReceiveOrderTask', {receiveorderid: $(this).val()})
//                    .done(function (returnData) {
//                        $('.tablesalesnew > tbody').html(returnData);
//                    });
//        }


        return false;
    });
});

function filterReceivedOrder(supplierid) {
    $.post(URL + 'purchaseinvoice/getReceiveOrder', {supplierId: supplierid})
            .done(function (returnData) {
                $('.receiveorder option').remove();
                $('.receiveorder').append(returnData);
            });
}

function showRO() {
    if ($('#supplierId :selected').val() != '') {
        $.post(URL + 'purchaseinvoice/receivedOrderForm', {view: 'invoice', supplierId: $('#supplierId :selected').val()})
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    //$('.newClientTask').val('addNewClientOption');
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.popBack').css('overflow', 'auto');

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

$(document).on("change", ".itemid", function () {
    if ($(this).val() === 'addItem') {
        $(this).addClass('activeObj');
        $('.activeObj option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        addNewItem();
    } else if ($(this).val() != '') {
        $(this).parents('tr').find('input[name="itemDescription[]"]').val($('option:selected', this).attr('description'));
        $(this).parents('tr').find('.uom option').removeAttr('selected')
                .filter('[value="' + $('option:selected', this).attr('uom') + '"]')
                .attr('selected', true);
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
    $.post(URL + 'purchaseinvoice/updatePurchaseInvoice', $('.form-Sales').serialize())
            .done(function (returnData) {
                $('body').css('overflow', 'hidden');
                if (returnData == '') {
                    if ($('input[name="status"]').val() == 'post') {
                        location = URL + 'Purchase/newpurchaseInvoice';
                    } else {
                        location = URL + 'Purchase/purchaseInvoice';
                    }
                } else if (returnData == 'add') {
                    location = URL + 'Purchase/newpurchaseInvoice';
                } else if (returnData == 'duplicate code') {
                    alertWithoutNotice('Purchase invoice number already exists');
                    $('body').css('overflow', 'auto');
                    $('.popBack').addClass('hidden');
                    return false;
                } else {
                    if (status == '') {
                        location = URL + 'Purchase/purchaseInvoice';
                    } else {
                        location = URL + 'Purchase/newPurchaseInvoice';
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
//            }
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
    $.post(URL + 'purchaseinvoice/purchaseInvoicePrev', {'id': id})
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