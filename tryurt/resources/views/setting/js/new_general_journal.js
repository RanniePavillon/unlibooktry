$(function () {
    checkStatus(status);
    
    $('.addLineGeneral').click(function () {
        $.post(URL + 'generaljournal/newGeneralLine')
                .done(function (returnData) {
                    $('.tblNewGeneralJournal').append(returnData);
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });

    $(document).on('change', '.selectAccount', function () {
        $(this).parents('tr').find('.description').val($('option:selected', this).attr('accountName'));
    });
    
    $(document).on('click', '.addline', function () {
        $.post(URL + 'generaljournal/newGeneralLine')
                .done(function (returnData) {
                    $('.tblNewGeneralJournal').append(returnData);
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });
    
    $(document).on('click', '.removeline', function () {
        $(this).parents('tr').remove();
        computeTotal();
    });

//    $(document).on('keyup', 'input[name="amount[]"]', function () {
//        total = 0;
//        $('input[name="amount[]"]').each(function () {
//            total += getInt($(this).val());
//        });
//
//        $('input[name="totalAmount"]').val(roundFloat(total));
//    });

    $('.saveGeneral').click(function () {
        $('input[name="status"]').val('');
    });

    $('.postGeneral').click(function () {
        $('input[name="status"]').val('post');
    });

    $(document).on("keyup", ".debit", function () {
        if ($(this).val().replace(/,/g, '') > 0) {
            $(this).parents('tr').find('.credit').val("0.00");
        }
        computeTotal();
    });

    $(document).on("keyup", ".credit", function () {
        if ($(this).val().replace(/,/g, '') > 0) {
            $(this).parents('tr').find('.debit').val("0.00");
        }
        computeTotal();
    });

    $('.frmGeneralJournal').submit(function () {
        if (tin) {
            displayCompany();
            return false;
        }

        saveBilling();
        
        return false;
    });
});

function saveBilling() {
    if (getInt($('input[name="totaldebit"]').val()) == 0 && getInt($('input[name="totalcredit"]').val()) == 0) {
        alert('Total debit and credit should not be zero.');
        return false;
    }
    if ($('input[name="totaldebit"]').val().replace(/,/g, '') != $('input[name="totalcredit"]').val().replace(/,/g, '')) {
        alert('Total debit should be equal total credit');
        return false;
    }
    
    $.post(URL + 'generaljournal/updategeneraljournal', $('.frmGeneralJournal').serialize())
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

function computeTotal() {
    totaldebit = totalcredit = 0;
    $('.selectAccount').each(function (i) {
        totaldebit += parseFloat($(this).parents('tr').find('.debit').val().replace(/,/g, ''));
        totalcredit += parseFloat($(this).parents('tr').find('.credit').val().replace(/,/g, ''));
    });

    $('input[name="totaldebit"]').val($.number(totaldebit, 2));
    $('input[name="totalcredit"]').val($.number(totalcredit, 2));
    $('input[name="totalAmount"]').val(roundFloat(totaldebit));

    if (totaldebit != totalcredit) {
        $('input[name="totaldebit"]').css('color', 'red');
        $('input[name="totalcredit"]').css('color', 'red');
    } else {
        $('input[name="totaldebit"]').css('color', 'black');
        $('input[name="totalcredit"]').css('color', 'black');
    }
}

function checkStatus(status) {
    if (status == 'posted') {
        $('.frmGeneralJournal input[type="text"], .frmGeneralJournal select').attr('disabled', true);
    }
}