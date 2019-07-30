$(function () {
    newrecord = 'new';
    eventLoader();
    computeAmount();

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

    $('.form-Sales').submit(function () {
        stat = false;

        if ($('#client').val() == '') {
            $('.bPost').prop('disabled', false);
            $('input[name="status"]').val('');
            alert('Please add/select client');
            return false;
        }

/*
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
*/
        if ($('input[name="status"]').val() == 'post') {
            confirmation101 = confirm('Do you want to post the Sales Invoice?');
            if (confirmation101) {
                saveBilling();
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
            }
        } else {
            confirmation101 = confirm('Are you sure you want to save the Sales Invoice?');
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

function saveBilling() {
    status = $('input[name="status"]').val();
    $.post(URL + 'salesinvoice/updateSalesInvoice', $('.form-Sales').serialize())
            .done(function (returnData) {
                $('body').css('overflow', 'hidden');

                if (returnData == '') {
                    location = URL + 'sales/salesInvoice';
                } else if (returnData == 'add') {
                    location = URL + 'sales/newSalesInvoice';
                } else if (returnData == 'duplicate code') {
                    alertWithoutNotice('Sales invocie number already exists');
                    $('.popBack').addClass('hidden');
                    $('body').css('overflow', 'auto');
                    return false;
                } else {
                    if (status == '') {
                        location = URL + 'sales/salesInvoice';
                    } else {
                        location = URL + 'sales/newSalesInvoice';
                    }

                    $('.popBack').html($('.popBack').html() + returnData);
                    $('.popBack').removeClass('hidden');
                    $('.seconds').show();
                    $('body').css('overflow', 'hidden');
                    return false;
                }
            });

}

$(document).on("change", ".deliverySelect", function () {
    if ($(this).val() === 'showDr') {
        $('#deliverySelect option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        showSr();
        $('.returnurl').val('');
        $('.closeCNTs').click(function () {
            $('.popBack').addClass('hidden');
            $('.clientfrm').addClass('hidden');
            $('body').css('overflow', 'auto');
        });
    }

});

function showSr() {
    if ($('#client :selected').val() != '') {
        $.post(URL + 'salesinvoice/deliveryReceiptForm', {view: 'invoice', clientid: $('#client :selected').val()})
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
                })
                .fail(function () {
                    alertWithoutNotice('Connection Error!');
                });
    } else {
        alertWithoutNotice('Please select client.');
    }

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

function filterSalesOrder(clientid) {
    $.post(URL + 'salesinvoice/getSalesOrder', {'clientid': clientid})
            .done(function (returnData) {
                $('#salesOrderId option').remove();
                $('#salesOrderId').append(returnData);
                salesOrderSelect();
            });
}

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
                $('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                //$('body').css('overflow', 'hidden');
                $('body').css('overflow', 'auto');
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

function addNewDriver() {
    $.post(URL + 'sales/newDriver', {view: 'invoice'})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                //$('body').css('overflow', 'hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.close1Client').click(function () {
                    $('.driverselect').removeClass('activeObj');
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
$(document).on("change", ".driverselect", function () {
    if ($(this).val() === 'addDriver') {
        $(this).addClass('activeObj');
        $('.activeObj option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        addNewDriver();
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
//            rate = getInt($(this).parent('td').parent('tr').find('td:nth-child(4) select option:selected').attr('rate'));
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
//    if (vattype == 'Vatable') {
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

function salesOrderSelect() {
    var s = document.getElementById('salesOrderId').options,
            l = 0,
            d = '';

    for (i = 0; i < s.length; i++) {
        if (s[i].text.length > l)
            l = s[i].text.length;
    }

    for (i = 0; i < s.length; i++) {
        d = '';
        line = s[i].text.split(';');
        l1 = (l - line[0].length);

        for (j = 0; j < l1; j++) {
            d += '\u00a0';
        }

        d2 = '';
        l2 = (l - line[1].length);
        for (j = 0; j < l2; j++) {
            d2 += '\u00a0';
        }
        s[i].text = line[0] + d + line[1] + d2 + line[2];
    }
}
