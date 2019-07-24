$(function () {

    checkStatus(status);

    $('.addLineSales').click(function () {
        $.post(URL + 'salesjournal/newSalesLine')
                .done(function (returnData) {
                    $('.tblNewSalesJournal').append(returnData);
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });
    
    $(document).on('click', '.addline', function () {
        $.post(URL + 'salesjournal/newSalesLine')
                .done(function (returnData) {
                    $('.tblNewSalesJournal').append(returnData);
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });

    $(document).on('change', '.selectCustomer', function () {
        $('#address').text('');
        if ($(this).val() === 'addclient') {
            $(this).addClass('activeSelect');
            $('option', this).removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewClient();
            $('.popup2').removeClass('hidden');
            $('.clientfrm').removeClass('hidden');
            $('.returnurl').val('invoice');
            $('body').css('overflow', 'hidden');
            $('.close1Client').click(function () {
                $('.popup2').addClass('hidden');
                $('.clientfrm').addClass('hidden');
                $('.returnurl').val('');
                $('body').css('overflow', 'auto');
            });
        }

    });

    $(document).on('keyup', 'input[name="amount[]"]', function () {
        computeAmount();
    });
    
    $(document).on('click', '.removeline', function () {
        $(this).parents('tr').remove();
        computeAmount();
    });

    $('.saveSales').click(function () {
        $('input[name="status"]').val('');
    });

    $('.postSales').click(function () {
        $('input[name="status"]').val('post');
    });

    $('.frmSalesJournal').submit(function () {
        if (tin) {
            displayCompany();
            return false;
        }

        saveBilling();

        return false;
    });
});

function addNewClient() {
    $.post(URL + 'invoice/newcustomer', {view: 'invoice'})
            .done(function (returnData) {
                $('.popup2').html(returnData);
                $('.newClientTask').val('addNewClientOption');
                $('.popup2').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
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

function saveBilling() {
    $.post(URL + 'salesjournal/updateSalesJournal', $('.frmSalesJournal').serialize())
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

function computeAmount(){
    total = 0;
        $('input[name="amount[]"]').each(function () {
            total += getInt($(this).val());
        });

        $('input[name="totalAmount"]').val(roundFloat(total));
}

function checkStatus(status) {
    if (status == 'posted') {
        $('.frmSalesJournal input[type="text"], .frmSalesJournal select').attr('disabled', true);
    }
}