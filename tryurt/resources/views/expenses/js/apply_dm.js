$(function () {
    $('#buttonCm').click(function () {
        $html = '';
        $('.chkcm:checked').each(function(){
            amount = getInt($(this).parents('tr').find('.chk_cmamount').val());
            type = $(this).parents('tr').find('.type').val();
            $html += '<input type="hidden" class="cmids" value="'+ $(this).val() +'" amount="'+ amount +'" discount_type="'+ type +'"  />';
        
        });
        
        $('.cm_content').html($html);
        $('body').css('overflow','auto');
        setCm();
    });
});

function setCm() {
//    $('.cmids').each(function () {
//        alert($(this).val());
//        return false;
//
//    });
//    return false;

    $('.enterpaymentForm input[name="cmid[]"], .enterpaymentForm .cmamount').val('');
    
    $('input[name="chkcol[]"]:checked').each(function (index, chkcol) {
        amount = getInt($('#amountReceived').val());
        balance = getInt($(chkcol).parents('tr').find('.balance').val());
        
        $amount_field = $(chkcol).parents('tr').find('.cmamount');
        $applied_amount_field = $(chkcol).parents('tr').find('.appliedAmount');
        $appliedamount2 = $(chkcol).parents('tr').find('.prevAppliedAmount');
        
        partialpayments = getInt($('.partialpayments').val());

        $balance_field = $(chkcol).parents('tr').find('.balance');

        $ar = $('#amountReceived');
        
        type = $(this).parents('tr').find('input[name="type[]"]').val();
        
        if(type == 'purchase_invoice'){
            $('.cmids').each(function () {
    //            type   = $(this).attr('discount_type');
                $cm =  $(chkcol).parents('tr').find('.cm');

                cmamount = getInt($(this).attr('amount'));
                cmid = $(this).val();

                if (balance > 0 && balance >= amount) {
                    $cm.val(cmid);
                    $amount_field.val(cmamount);
                    $($ar).val(getInt($($ar).val()) + cmamount);

                    $(this).removeClass('cmids');
                }else if(partialpayments == 0){
                    $cm.val(cmid);
                    $amount_field.val(cmamount);
                    $($ar).val(getInt($($ar).val()) - getInt($($appliedamount2).val())  + cmamount);

//                    $(this).removeClass('cmids');
                }

                else{ 
                    $cm.val(cmid);
                    $amount_field.val(cmamount);
                    $($ar).val(getInt($($ar).val()) - getInt($($appliedamount2).val())  + cmamount);

                    $(this).removeClass('cmids');
                }

//                if(type=='cm'){
//                    $(chkcol).parents('tr').find('.sr').val('');
//                }else{
//                    $(chkcol).parents('tr').find('.cm').val('');
//                }
            });
        }

        $('.popup2').html('').addClass('hidden');
    });

    computeInvoice();
    return false;
}

