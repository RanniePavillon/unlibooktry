$(function () {
    savenew = false;
    uom_function = 'popup';

    $(document).on("change", "#productCategoy", function () {
        if ($(this).val() === 'addnewcategory') {
            $('#productCategoy option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewCategory();
            
            $('.categoryfrm').removeClass('hidden');
            $('body').css('overflow', 'hidden');
            $('.close1Client').click(function () {
                $('.popup2').addClass('hidden');
                $('.categoryfrm').addClass('hidden');
                //$('.returnurl').val('');
                $('body').css('overflow', 'auto');
            });
        }

    });

    $(document).on("change", "#uom", function () {
        if ($(this).val() === 'addnewUom') {
            $('#uom option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewUOM();
            
            $('.categoryfrm').removeClass('hidden');
            $('body').css('overflow', 'hidden');
            $('.close1Client').click(function () {
                $('.popup2').addClass('hidden');
                $('.categoryfrm').addClass('hidden');
                //$('.returnurl').val('');
                $('body').css('overflow', 'auto');
            });
        }

    });

    $(document).on("change", ".addSRPSelect", function () {
        if ($(this).val() === 'addSrp') {
            $('.addSRPSelect option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewSrp();
            
            $('.categoryfrm').removeClass('hidden');
            $('body').css('overflow', 'hidden');
            $('.close1Client').click(function () {
                $('.popup2').addClass('hidden');
                $('.categoryfrm').addClass('hidden');
                $('body').css('overflow', 'auto');
            });
        }
    });

    $('.cnt-formCNTs #saveAddNew').click(function () {
        savenew = true;
        $('.cnt-formCNTs').submit();
    });

    $('.cnt-formCNTs').submit(function () {
        $('.glpost').attr("disabled", false);
        $.post(URL + 'sales/setItem', $(this).serialize())
                .done(function (returnData) {
                    if ($.isNumeric(returnData)) {
                        if (typeof (type) != 'undefined') {
                            price = $('#formtask input[name="purchaseCost"]').val();
                        } else {
                            price = $('#client :selected').attr('type') == 'Branch' ? $('#formtask input[name="srp"]').val() : $('#formtask input[name="franchiseSellingPrice"]').val();
                        }

                        $('.itemid').each(function (i) {
                            $('option:last', $(this)).before($('<option/>', {
                                value: returnData,
                                text: $('input[name="itemCode"]').val() + ' - ' + $('input[name="description"]').val(),
                                'description': $('#formtask input[name="description"]').val(),
                                'uom': $('#formtask #uom :selected').val(),
                                'uprice': price,
                                'fprice': $('#formtask input[name="franchiseSellingPrice"]').val()
                            }));

                            $(this).attr('description', $('input[name="description"]').val()).attr('uom', $('#uom option:selected').val());
                        });

                        if (typeof (type) != 'undefined') {
                            price = $('#formtask input[name="purchaseCost"]').val();
                        } else {
                            price = $('#client :selected').attr('type') == 'Branch' ? $('input[name="srp"]').val() : $('input[name="franchiseSellingPrice"]').val();
                        }

                        $('.activeObj').parents('tr').find('input[name="itemDescription[]"]').val($('input[name="description"]').val());
                        $('.activeObj').parents('tr').find('.unitPrice').val(price);
//                    $('.activeObj').parents('tr').find('.tasknet').val($.number(jsonStr.value.replace(/,/g, '') * $('.activeObj').parents('tr').find('.hour').val().replace(/,/g, ''), 2));
                        $('.activeObj option').removeAttr('selected')
                                .filter('[value="' + returnData + '"]')
                                .attr('selected', true);

                        uomid = $('#uom option:selected').val();
                        uom_exist = false;

                        $('.uom option').each(function () {
                            if ($(this).val() == uomid) {
                                uom_exist = true;
                                return false;
                            }
                        });

                        if (!uom_exist) {
                            $('.uom').each(function () {
                                $('option:last', $(this)).before($('<option/>', {
                                    value: uomid,
                                    text: $('select[name="uomId"] :selected').text(),
                                    'description': $('#formtask input[name="description"]').val(),
                                    'uom': $('#formtask #uom :selected').val(),
                                    'uprice': $('#formtask input[name="srp"]').val(),
                                    'fprice': $('#formtask input[name="franchiseSellingPrice"]').val()
                                }));
                            });

                            $('.activeObj').parents('tr').find('.uom option').removeAttr('selected')
                                    .filter('[value="' + uomid + '"]')
                                    .attr('selected', true);
                        } else {
                            $('.activeObj').parents('tr').find('.uom option').removeAttr('selected')
                                    .filter('[value="' + uomid + '"]')
                                    .attr('selected', true);
                        }

                        if ($('.itemid').length > 0) {
                            computeNetLine($('.activeObj'));
                            computeAmount();
                        }

                        $('.activeObj').removeClass('activeObj');
                        $('.popBack').html('').addClass('hidden');
                        $('body').css('overflow', 'auto');
                    } else if (returnData == '') {
                        if (savenew == true) {
                            $('.createNIItem').click();
                            return false;
                        }
                        location = URL + 'sales/items';
                    } else {
                        alertWithoutNotice(returnData);
                    }
                }).fail(function () {
            alert('Connection error.');
        });
        return false;
    });

    $(document).on("change", ".conversioning", function () {
        if ($(this).val() === 'addnewConversion') {
            $('.conversioning option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewConversion();
            
            $('.categoryfrm').removeClass('hidden');
            $('body').css('overflow', 'hidden');
            $('.close1Client').click(function () {
                $('.popup2').addClass('hidden');
                $('.categoryfrm').addClass('hidden');
                $('body').css('overflow', 'auto');
            });
        }

    });

    $(".viewBranch").click(function () {
        $.post(URL + 'sales/newSrp')
                .done(function (returnData) {
                    $('.popup2').html(returnData);
                    $('.popup2').removeClass('hidden');
                    $('body').css('overflow', 'hidden');
                    $('.cmForm input[name="task"]').val('addpcr');
                    $('.cmForm  #saveAddNew').hide();
                    $('.close1Client').click(function () {
                        $('.popup2').addClass('hidden');
                        $('.popup2').html('');
                        $('body').css('overflow', 'auto');
                    });
                })
                .fail(function () {
                    alertWithoutNotice('Connection Error!');
                });
        return false;
    });

//    $('.cmForm').submit(function () {
//        addConversion(); alert(1);
//        return false;
//    });
});

function addNewCategory() {
    $.post(URL + 'sales/newProductCategory')
            .done(function (returnData) {
                $('.popup2').html(returnData);
                $('.popup2').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('.cmForm input[name="task"]').val('addpcr');
                // if (typeof (newrecord) != "undefined") {
                $('.cmForm  #saveAddNew').hide();
                // }
                $('.close1Client').click(function () {
                    $('.popup2').addClass('hidden');
                    $('.popup2').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function addNewUOM() {
    $.post(URL + 'sales/newUom')
            .done(function (returnData) {
                $('.popup2').html(returnData);
                //$('.newClientTask').val('addNewClientOption');
                $('.popup2').removeClass('hidden');
                $('body').css('overflow', 'hidden');

                if (typeof (newrecord) != "undefined") {
                    $('.cmForm  #saveAddNew').hide();
                }
                // 
                $('.close1Client').click(function () {
                    $('.popup2').addClass('hidden');
                    $('.popup2').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function addNewSrp() {
    $.post(URL + 'sales/newSrp')
            .done(function (returnData) {
                $('.popup2').html(returnData);
                $('.popup2').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('.cmForm input[name="task"]').val('addpcr');
                // if (typeof (newrecord) != "undefined") {
                $('.cmForm  #saveAddNew').hide();
                // }
                $('.close1Client').click(function () {
                    $('.popup2').addClass('hidden');
                    $('.popup2').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function addNewConversion() {
    $.post(URL + 'sales/newConversion')
            .done(function (returnData) {
                $('.popup2').html(returnData);
                $('.popup2').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('.cmForm input[name="task"]').val('addpcr');
                // if (typeof (newrecord) != "undefined") {
                $('.cmForm  #saveAddNew').hide();
                // }
                $('.close1Client').click(function () {
                    $('.popup2').addClass('hidden');
                    $('.popup2').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

//function addConversion() {
//    $('#conversion-line input[name="uomId2[]"]').val($('#uomId option:selected').val());
//    $('#conversion-line input[name="roundOff[]"]').val($('#roundoff option:selected').val());
//    $('#conversion-line input[name="operation[]"]').val($('#operation option:selected').val());
//    $('#conversion-line input[name="qty[]"]').val($('#qty').val());
//
//    $('#tblconversion > tbody').append($('#conversion-line').html());
//    $('#conversion-line input[type="hidden"]').val('');
//}



