$(function () {
    checkStatus(status);

    $('.addLinePurchase').click(function () {
        $.post(URL + 'purchasejournal/newPurchaseLine')
                .done(function (returnData) {
                    $('.tblNewSalesJournal').append(returnData);
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });
    
    $(document).on('click', '.addline', function () {
        $.post(URL + 'purchasejournal/newPurchaseLine')
                .done(function (returnData) {
                    $('.tblNewSalesJournal').append(returnData);
                }).fail(function () {
            alertWithoutNotice('Connection failure.');
        });
    });
    
    $(document).on('click', '.removeline', function () {
        $(this).parents('tr').remove();
        computeAmount();
    });

    $(document).on('change', '.selectSupplier', function () {
        if ($(this).val() === 'addsupplier') {
            $(this).addClass('activeSelect');
            $('option', this).removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewSupplier();
            $('.popup2').removeClass('hidden');
            $('.supplierfrm').removeClass('hidden');
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

    $(document).on('keyup', 'input[name="totalAmount[]"]', function () {
        computeAmount();
    });

    $('.savePurchase').click(function () {
        $('input[name="status"]').val('');
    });

    $('.postPurchase').click(function () {
        $('input[name="status"]').val('post');
    });

    $('.frmPurchaseJournal').submit(function () {
        if (tin) {
            displayCompany();
            return false;
        }

        saveBilling();

        return false;
    });
});

function addNewSupplier() {
    $.post(URL + 'expenses/newvendor', {returnurl: 'expense'})
            .done(function (returnData) {
                
                $('.popup2').html(returnData);
                $('.popup2').removeClass('hidden');
                $('body').css('overflow', 'auto');
                addnew = true;
                 $('input[name="trig"]').val('ajaxLoad2');
                // $('.vendor101').addClass('objSelected');
                $('.closeNewVendor1, .closeNewVendor').click(function () {
                    if (confirm('Are you sure you want to leave this page without saving?')) {
                        $('#supplierId').val('');
                        $('#supplierId').change();
                        $('.popup2').addClass('hidden');
                        $('.popup2').html('');
                    }
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}

function saveBilling() {
    $.post(URL + 'purchasejournal/updatePurchaseJournal', $('.frmPurchaseJournal').serialize())
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
        $('input[name="totalAmount[]"]').each(function () {
            total += getInt($(this).val());
        });

        $('input[name="amount"]').val(roundFloat(total));
}

function checkStatus(status) {
    if (status == 'posted') {
        $('.frmPurchaseJournal input[type="text"], .frmPurchaseJournal select').attr('disabled', true);
    }
}