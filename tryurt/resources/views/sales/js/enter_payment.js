$(function () {
    clientid = 0;
    currencyid = 0;
    amount = 0;
    search = '';
    newrecord = "new";
    $('.client').change(function () {
        clientid = $(this).val();
        amount = 0;
        $('#amountReceived').val(0);

        $('#useEnterPayment').prop('checked', false);

        if (clientid != '') {
            viewOP();
            invoicePayment(clientid, '');
            
            checkCM(clientid);
        } else {
            $('.mainTable > tbody > tr').remove();
            $('.cm').addClass('hidden');
            $('.hasClientSelected').addClass('hidden');
        }
    });

    $('input[name="search"]').keyup(function () {
        search = $(this).val();
    });

    $('#search').click(function () {
        invoicePayment(clientid, search);
    });
    $('#salesCollectionForm').submit(function () {
        hasWht = true;
        wht = $('#whtax').val();
        id = $('[name="clientId"]').val();
        $('#whtax').parent('td').parent('tr').removeClass('hidden');
        mType = '';

        if (id == '' && typeof (id) != 'undefined') {
            alertWithoutNotice('Please select client.');
            return false;
        }

        // checkOrNum = checkDuplicateOrNum();
        // if (checkOrNum == 'duplicate') {
        // alertWithoutNotice('Sorry, OR No. already in used!');
        // return false;
        // } else if (checkOrNum == 'invalidOR') {
        // alertWithoutNotice('The OR number is invalid.');
        // return false;
        // }


        if (typeof $('input[name="received2307"]:checked').val() == 'undefined') {
            alert('Received 2307 form is required');
            return false;
        }

        confirmDoyou = confirm('Do you want to record the payment?');
        if (!confirmDoyou) {
            return false;
        }
        $('body').css('overflow', 'hidden');
        $('.popup').html('<div class="loadingevent"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');
        $('.popup').removeClass('hidden');

        amountreceived = parseFloat(amount);
        if ($('input[name="chkcol[]"]:checked').length == 0) {
            alertWithoutNotice('Please select invoice(s) from the list');
            $('.popup').addClass('hidden');
            return false;
        } else {
            if (amount == 0) {
                alertWithoutNotice("Please enter amount received.");
                $('input[name="amountReceived"]').css('border-color', 'red').focus();
            } else {
            }
        }
        $('[name="chkcol[]"]').not(':checked').parent('td').parent('tr').remove();
        $('#salesCollectionForm #post').attr('disabled', 'disabled');

    });

    $('.partialpayments').keyup(function () {
        amount = 0;
        if (getInt($(this).val()) > 0) {
            $('input[name="amountReceived"]').val($(this).val());
            amount = getInt($(this).val());
            selectedInvoice();
        } else {
            selectedInvoice();
        }
    });

    $(document).on("click", 'input[name="chkcol[]"]', function () {
        checkPreviousTrans($(this));
        selectedInvoice();
    });

    $('#whtax').change(function () {
        selectedInvoice();
    });

    $('#toggle').click(function () {
        if ($(this).is(':checked')) {
            $('input[name="chkcol[]"]').prop('checked', true).change();
        } else {
            $('input[name="chkcol[]"]').prop('checked', false).change();
        }
        $('#whtax').change();

    });

    $('.cm').click(function () {
        clientid = $('.client option:selected').val();
        
        if(clientid ==''){
            alertWithoutNotice('Please select client first.');
            return false;
        }
        
        if($('.chkcol:checked').length == 0){
            alertWithoutNotice('Please select transaction from the list');
            return false;
        }
        
        $.post(URL + 'cm/applyCm',{type:'collection', clientid:clientid, currencyid:currencyid})
                .done(function (returnData) {
                    $('.popup2').html(returnData);
                    $('.popup2').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.close1Client, .close1Client2').click(function () {
                        if (confirm('Are you sure you want to leave this page?')) {
                            $('.popup2').addClass('hidden');
                            $('.popup2').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
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
                    $('.popup2').html(returnData);
                    $('.forBank').val('addBankOption');
                    $('.popup2').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.closeAccount').click(function () {
                        if (confirm('Are you sure you want to leave this page without saving?')) {
                            $('.popup2').addClass('hidden');
                            $('.popup2').html('');
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

    function checkCM(clientid){
        $.post(URL + 'cm/checkCM',{type:'collection', clientid:clientid})
            .done(function (returnData) {
                returnData == 0 ? $('.cm').addClass('hidden') : $('.cm').removeClass('hidden');
            })
            .fail(function () {
                alert('Connection Error!');
            });
        
        return false;
    }
});

function invoicePayment(clientid, search) {
    $('.mainTable > tbody > tr').remove();
    $.post(URL + 'sales/clientNotCollectedInvoice', {'clientid': clientid, 'search': search})
            .done(function (returnData) {
                $('.mainTable > tbody').html(returnData);
            })
            .fail(function () {
                alert('Connection Error!');
            });
    return false;
}

function viewOP() {
    clientId = $('.client').val();
    $('input[client] ').addClass('hidden');
    if (typeof $('.client').val() != 'undefined' && typeof $('input[client="' + clientid + '"]') != 'undefined') {

    }
}

function selectedInvoice() {
    balances = 0;
    total_cmamount = 0;
    partial = 0;
    
    $('input[name="chkcol[]"]:checked').each(function () {
        vats = 1.12;
        
        partial = getInt($('.partialpayments').val());
        
        appliedAmount = getInt($(this).parent('td').parent('tr').find('.appliedAmount').val());
        cmamount = getInt($(this).parent('td').parent('tr').find('.cmamount').val());
        
        currentWht = getInt($(this).parent('td').parent('tr').find('.currentWht').val());
        totalinvoice = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
        linebalance = totalinvoice - (appliedAmount + currentWht);
        balances += linebalance;
        total_cmamount += cmamount;
        
        vatableamount = getInt($(this).parent('td').parent('tr').find('.vatableamount').val());
        vatexemptamount = getInt($(this).parent('td').parent('tr').find('.exemptamount').val());        

        if (appliedAmount + currentWht + linebalance == totalinvoice) {            
            if(partial >= linebalance || partial == 0){
                whtax = getInt($('#whtax option:selected').val());
//                nwhtax = (vatableamount / vats) * (whtax / 100);
                nwhtax = (vatableamount) * (whtax / 100);
                nwhtax += vatexemptamount * (whtax / 100);
//                balances -= nwhtax;
                balances -= nwhtax.toFixed(2);
            }else{ 
                tax_type = setTaxValue(vatableamount,vatexemptamount, partial);
                nwhtax = genWitholdingTax(tax_type['vatableamount'], 1.12);
                nwhtax += genWitholdingTax(tax_type['vatexemptamount'], 1);
//                balances -= nwhtax;
                balances -= nwhtax.toFixed(2);
            }
        }
    });

    discount_sp = 0;//getInt($('input[name="cmamount"]').val());
    amount = partial > 0 ? partial + discount_sp + total_cmamount : balances;

    $('#amountReceived').val(partial > 0 ? partial + discount_sp + total_cmamount : balances);

    generateAmounts();
}

function generateAmounts() {
    amountReceived2 = amount;
    partial = getInt($('.partialpayments').val());
    whtax = $('#whtax option:selected').val();
    whtaxPercent = whtax != 0 ? whtax / 100 : 0;
    amountBalance = 0;
    amountBalance2 = 0;
    count = 0;
//alert(amountReceived2);
    $('input[name="chkcol[]"]').each(function () {
        is_partial = false;
        nwhtax = 0;
        vats = 1.12;
        
        cmamount = 0;
        appliedAmount = getInt($(this).parent('td').parent('tr').find('.appliedAmount').val());
        
        currentWht = getInt($(this).parent('td').parent('tr').find('.currentWht').val());
        totalinvoice = getInt($(this).parent('td').parent('tr').find('.totalinvoice').val());
        sub_total_amount = getInt($(this).parent('td').parent('tr').find('.sub_total_amount').val());
        balance = getInt($(this).parent('td').parent('tr').find('.balance').val());
        
        vatableamount = getInt($(this).parent('td').parent('tr').find('.vatableamount').val());
        vatexemptamount = getInt($(this).parent('td').parent('tr').find('.exemptamount').val());

        if ($(this).is(':checked')) {
            cmamount = getInt($(this).parent('td').parent('tr').find('.cmamount').val());
            
            if ($(this).parent('td').parent('tr').find('.taxline').val() == 'vat-exempt') {
                vats = 1;
            }

            count++;
            linebalance = appliedAmount > 0 ? totalinvoice - (appliedAmount + currentWht) : totalinvoice;

            whtax = getInt($('#whtax option:selected').val());
            
            if(amountReceived2 >= linebalance || partial == 0){
//                nwhtax = (vatableamount / vats) * (whtax / 100);
                nwhtax = (vatableamount) * (whtax / 100);
                nwhtax += vatexemptamount * (whtax / 100);
            }else if(amountReceived2 > 0){
                tax_type = setTaxValue(vatableamount,vatexemptamount, partial);
                nwhtax = genWitholdingTax(tax_type['vatableamount'], 1.12);
                nwhtax += genWitholdingTax(tax_type['vatexemptamount'], 1);
            }
            
            nwhtax = nwhtax.toFixed(2);
            linebalance -= nwhtax;
//            linebalance = parseFloat(linebalance.toFixed(2));

            if (amountReceived2 >= linebalance && appliedAmount > 0) {
                is_partial = true;
                if (appliedAmount > 0) {
                    amountReceived = linebalance + appliedAmount + currentWht;
                    amountReceived2 -= linebalance;
                    amount_paid = parseFloat(linebalance + nwhtax);
                }
            } else {
                if (amountReceived2 >= linebalance) {
                    amountReceived = linebalance + appliedAmount + currentWht;
                    amountReceived2 -= linebalance;
                    amount_paid = parseFloat(linebalance + nwhtax);
                } else {
                    is_partial = true;

                    amountReceived = amountReceived2 + appliedAmount + currentWht;
                    amount_paid = parseFloat(amountReceived2);
                    amountReceived2 -= amountReceived2;
                }
            }

            amountBalance = totalinvoice - (amountReceived);
            amountBalance2 = amountBalance;

            if (amountBalance < 0) {
                appliedAmount = totalinvoice - currentWht;
                amountReceived = amountReceived - totalinvoice;
                amountBalance = 0;
            } else {
                appliedAmount = amountReceived - currentWht;
                amountReceived = 0;
            }

//            if (is_partial && $('select[name="type"]').val() != 'philhealth') {
//                currentWht = genWitholdingTax(appliedAmount, vats);
//
//            } else if (currentWht == 0) {
//                sub_total_amount = totalinvoice / vats;
//                currentWht = sub_total_amount * whtaxPercent;
//            }
            
            if (is_partial) { 
    //                        currentWht = genWitholdingTax(appliedAmount - currentWht , amountBalance2); 
//                tax_value = setTaxValue(vatableamount, vatexemptamount, parseFloat(amount_paid));
//
//                currentWht += genWitholdingTax(tax_value['vatableamount'], 1.12);
//                currentWht += genWitholdingTax(tax_value['vatexemptamount'], 1);
                  currentWht += parseFloat(nwhtax);
            } else if (currentWht == 0) {
    //                        sub_total_amount = totalinvoice / vats;
//                sub_total_amount = (vatableamount/vats) + vatexemptamount;
                sub_total_amount = vatableamount + vatexemptamount;
                currentWht = sub_total_amount * whtaxPercent;
            }
                    
            amountBalance = totalinvoice - (parseFloat(appliedAmount.toFixed(2)) + parseFloat(currentWht.toFixed(2)));
            $(this).parent('td').parent('tr').find('.whtax').val(roundFloat(currentWht));
        } else {
            amountBalance = totalinvoice - (appliedAmount + currentWht);

            $(this).parent('td').parent('tr').find('.whtax').val(roundFloat(appliedAmount > 0 ? currentWht : 0));

        }

        checkboxlength = $('input[name="chkcol[]"]:checked').length;

        $(this).parent('td').parent('tr').find('.balance').val(roundFloat(count == checkboxlength && count != 0 && amountReceived2 > 0 ? amountReceived2 * -1 : amountBalance));

        if (count == checkboxlength && count != 0) {
            count++;
        }

        $(this).parent('td').parent('tr').find('.amount, .appliedAmount2').val(roundFloat(totalinvoice == appliedAmount ? appliedAmount : appliedAmount));
//        $balance = $(this).parent('td').parent('tr').find('.balance');
//        $balance.val(roundFloat(getInt($balance.val()) - cmamount));

    });
}

function setTaxValue(vatableamount, exemptamount, amountReceived){
//            new_vatable_amount = new_exempt_amount = 0;
            
    if(vatableamount <= amountReceived && vatableamount != 0){
//               new_vatable_amount = vatableamount;
       amountReceived -= vatableamount;
    }else if(vatableamount != 0){
       vatableamount = amountReceived;
       amountReceived -= amountReceived;
    }

    if(exemptamount <= amountReceived && exemptamount != 0){
//               new_exempt_amount = exemptamount;
       amountReceived -= exemptamount;
    }else if(exemptamount != 0){
       exemptamount = amountReceived;
       amountReceived -= amountReceived; 
    }

    var data = {'vatableamount': vatableamount, 'vatexemptamount': exemptamount};

    return data; 
}

function genWitholdingTax(amount, vat_value) {
    whtax = getInt($('#whtax option:selected').val());
    cwt = 0;
    if (whtax > 0) {
        switch (whtax) {
            case 15:
                cwt = vat_value == 1.12 ? 97 : 85;
                break;
            case 10:
                cwt = vat_value == 1.12 ? 102 : 90;
                break;
            case 5:
                cwt = vat_value == 1.12 ? 107 : 95;
                break;
            case 2:
                cwt = vat_value == 1.12 ? 110 : 98;
                break;
            case 1:
                cwt = vat_value == 1.12 ? 111 : 99;
                break;
        }
        netvat = amount / (cwt / 100);
        return netvat * (whtax / 100);
    }
    return 0;
}

function checkPreviousTrans($object) {
    whtax = $($object).parents('tr').find('.whtpercent').val();
    if (whtax != 0 && $($object).is(':checked')) {
        $("#whtax option[value != '" + whtax + "']").attr('disabled', true);
        
        $('#whtax option').removeAttr('selected').removeAttr('disabled')
                .filter('[value="' + whtax + '"]')
                .attr('selected', true);

        $('.whtpercent').each(function () {
            if ($(this).val() != whtax && $(this).val() != 0) {
                $(this).parents('tr').find('input[name="chkcol[]"]').attr('disabled', true);
            }
        });
    } else if (whtax != 0) {
        $("#whtax option").removeAttr('disabled');
        $('input[name="chkcol[]"]').removeAttr('disabled');
    }
}



function setCm() {
//    $('.cmids').each(function () {
//        alert($(this).val());
//        return false;
//
//    });
//    return false;


    $('input[name="chkcol[]"]:checked').each(function (index, chkcol) {
        balance = getInt($(chkcol).parents('tr').find('.balance').val());

        $amount_field = $(chkcol).parents('tr').find('.cmamount');
        $applied_amount_field = $(chkcol).parents('tr').find('.amount');
        $appliedamount2 = $(chkcol).parents('tr').find('.appliedAmount2');
        $refcode_field = $(chkcol).parents('tr').find('.refCode');

        partialpayments = getInt($('.partialpayments').val());

        $balance_field = $(chkcol).parents('tr').find('.balance');

        $ar = $('#amountReceived');
        $('.cmids').each(function () {
            type = $(this).attr('discount_type');
            code = $(this).attr('code');
            $cm = type == 'cm' ? $(chkcol).parents('tr').find('.cm') : $(chkcol).parents('tr').find('.sr');

            cmamount = getInt($(this).attr('amount'));
            cmid = $(this).val();
            
            if (checkCM(cmid, type) == true) {
                return false;
            }

            if (balance > 0 && balance >= amount) {
                $cm.val(cmid);
                $amount_field.val(cmamount);
                $refcode_field.val(code);
//                $applied_amount_field.val(roundFloat(getInt($applied_amount_field.val()) + cmamount));
//                $balance_field.val(roundFloat(getInt($balance_field.val()) - cmamount));

//                $($appliedamount2).val(getInt($($appliedamount2).val()) + cmamount);
                $($ar).val(getInt($($ar).val()) + cmamount);

//                $(this).removeClass('cmids');
            } else if (partialpayments == 0) {
                $cm.val(cmid);
                $amount_field.val(cmamount);
                $refcode_field.val(code);
//                $applied_amount_field.val(roundFloat(getInt($applied_amount_field.val()) - cmamount));
//                $balance_field.val('0.00');

//                $($appliedamount2).val(getInt($($appliedamount2).val()));
                $($ar).val(getInt($($ar).val()) - getInt($($appliedamount2).val()) + cmamount);

//                $(this).removeClass('cmids');
            } else {
                $cm.val(cmid);
                $amount_field.val(cmamount);
                $refcode_field.val(code);
//                $applied_amount_field.val(roundFloat(cmamount));
//                $balance_field.val('0.00');

//                $($appliedamount2).val(cmamount);
                $($ar).val(getInt($($ar).val()) - getInt($($appliedamount2).val()) + cmamount);

                $(this).removeClass('cmids');
            }
        });

        if (type == 'cm') {
            $(chkcol).parents('tr').find('.sr').val('');
        } else {
            $(chkcol).parents('tr').find('.cm').val('');
        }
    });

    $('.popup2').html('').addClass('hidden');
    selectedInvoice();
//    generateAmounts();
    return false;
}

function checkCM(cmid, type) {
    result = false;
    $('input[name="chkcol[]"]:checked').each(function () {
        if (type == 'cm' && $(this).parents('tr').find('.cm').val() == cmid) {
            result = true;
        } else if ($(this).parents('tr').find('.sr').val() == cmid) {
            result = true;
        }
    });

    return result;
}
