$(function () {
    $(document).on("change", 'input[name="returnQty[]"]', function () {
        computeNetLine($(this));
        computeAmount();
    });

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

    $('.bPost').click(function () {
        $('.bPost').prop('disabled', true);
        $('input[name="status"]').val('post');
        $('.form-Sales').submit();
    });

    $('.form-Sales').submit(function () {
        stat = false;

        msg = validateQtyEntry();
        if (msg != '') {
            alertWithoutNotice(msg);
            return false;
        }

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
        });
        if (stat) {
            alert('Net amount lines should not be equal to 0');
            $('.bPost').prop('disabled', false);
            $('input[name="status"]').val('');
            return false;
        }

        if ($('input[name="status"]').val() == 'post') {
            confirmation101 = confirm('Do you want to post the Sales Return?');
            if (confirmation101) {
                saveBilling();
                $('body').css('overflow', 'hidden');
                $('.popBack').html('<div class="loadingHolder"><img src="' + URL + 'public/images/processing2.gif" class="loadingimg" /></div>');
                $('.popBack').removeClass('hidden');
            }
        } else {
            confirmation101 = confirm('Are you sure you want to save the Sales Return?');
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
    $.post(URL + 'salesreturn/updateSalesReturn', $('.form-Sales').serialize())
            .done(function (returnData) {
                $('body').css('overflow', 'hidden');

                if (returnData == '') {
                    location = URL + 'sales/salesReturn';
                } else if (returnData == 'add') {
                    location = URL + 'sales/newSalesReturn';
                } else if (returnData == 'duplicate code') {
                    alertWithoutNotice('Sales return number already exists');
                    $('.popBack').addClass('hidden');
                    $('body').css('overflow', 'auto');
                    return false;
                } else {
                    if (status == '') {
                        location = URL + 'sales/salesReturn';
                    } else {
                        location = URL + 'sales/newSalesReturn';
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

$(document).on("change", "#salesInvoiceSelect", function () {
    if ($(this).val() === 'showSi') {
        $('#salesInvoiceSelect option').removeAttr('selected')
                .filter('[value=""]')
                .attr('selected', true);
        showSi();
        $('.returnurl').val('');
        $('.closeCNTs').click(function () {
            $('.popBack').addClass('hidden');
            $('.clientfrm').addClass('hidden');
            $('body').css('overflow', 'auto');
        });
    }
});

function showSi() {
    if ($('#client :selected').val() != '') {
        $.post(URL + 'salesreturn/salesInvoiceForm', {view: 'invoice', clientid: $('#client :selected').val()})
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
            rate = getInt($(this).parent('td').parent('tr').find('.rate').val());
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
            rate = getInt($(this).parent('td').parent('tr').find('.rate').val());
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
//    if (vattype == 'Vatable') {
//        net = (unitprice * qty) / 1.12 - (((unitprice * qty) / 1.12) * discount / 100);
//    } else {
    net = (unitprice * qty) - ((unitprice * qty) * discount / 100);
//    }

    $($object).parents('tr').find('.tasknet').val(roundFloat(net));

}

function validateQtyEntry() {
    msg = '';
    $('.itemid').each(function () {
        actual_qty = getInt($(this).parents('tr').find('.invoiceqty').val());
        return_qty = getInt($(this).parents('tr').find('.qty').val());

        if (return_qty > actual_qty) {
            msg = 'Return quantity should not be more than the invoiced quantity';
            return false;
        }
    });

    return msg;
}








