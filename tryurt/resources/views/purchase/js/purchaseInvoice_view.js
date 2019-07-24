stat = '';
$(function () {
    $('#edit').click(function () {
        stat = '';
    });

    $('.toggle').click(function () {
        if ($(this).is(':checked')) {
            $('input[type="checkbox"]').prop('checked', true);
        } else {
            $('input[type="checkbox"]').prop('checked', false);
        }
    });

    $('input[name="chk[]"]').change(function () {

        $('input[name="edit"]').addClass('hidden');
        $('input[name="del"]').addClass('hidden');
        $('.sendEmail').addClass('hidden');

        if ($('input[name="chk[]"]:checked').length == 0) {
            $('input[name="edit"]').removeClass('hidden');
            $('input[name="del"]').removeClass('hidden');
            $('input[name="print"]').removeClass('hidden');
            $('.sendEmail').removeClass('hidden');
            return false;
        }

        if ($('input[name="chk[]"]:checked').length == 1) {
            transStatus = $('input[name="chk[]"]:checked').parent('td').parent('tr').find('td:nth-child(7)').html();
            if (transStatus == 'Posted') {
                $('input[name="print"]').removeClass('hidden');
                $('.sendEmail').removeClass('hidden');
            } else if (transStatus == 'Open') {
                $('input[name="edit"]').removeClass('hidden');
                $('input[name="del"]').removeClass('hidden');
            }
        } else {
            canCancel = true;
            $('input[name="chk[]"]:checked').each(function () {
                transStatus = $(this).parent('td').parent('tr').find('td:nth-child(7)').html();
                if (transStatus != 'Open') {
                    canCancel = false;
                }
            });
            if (canCancel) {
                $('input[name="del"]').removeClass('hidden');
            }
        }

    });

    $('.printPrev').click(function () {
        if ($('.chk:checked').length > 1) {
            alertWithoutNotice('Please select one(1) item only to preview.');
        } else if ($('.chk:checked').length == 1) {
            $.post(URL + 'purchaseinvoice/purchaseInvoicePrev', {'id': $('.chk:checked').not('.hide').first().val()})
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
        } else {
            alertWithoutNotice('Please select one(1) item to preview');
        }
        return false;

    });
});

function editrec(invoiceid) {
    if ($('.chk').is(':checked') || invoiceid != '') {
        var checked = "";
        count = 0;
        myThis = '';
        $("input[name='chk[]']:checked").each(function ()
        {
            checked = parseInt($(this).val());
            count++;
            myThis = $(this);
        });
        if (invoiceid != '') {
            checked = parseInt(invoiceid);
        }

        if (count > 1) {
            alert('Please select one record only to edit.');
            $('input[type="checkbox"]').prop('checked', false);
            return false;
        }

        status = $(myThis).parent('td').parent('tr').find('td:nth-child(7)').html();

        if (status == 'Posted' || status == 'Reversed' && stat != 'copy') {
            alert('Purchase Order may be posted/reversed. You can no longer edit the purchase order.');
            $('input[name="chk[]"]:checked').prop('checked', false);
            return false;
        }

        $().redirect(URL + 'purchase/newPurchaseInvoice', {'id': checked, 'status': stat, 'task101': 'updatepurchaseinvoice'})

        return false;
    } else {
        alert('Please select record to edit');
    }
}

function copyrec(invoiceid, stat) {
    if ($('.chk').is(':checked') || invoiceid != '') {
        var checked = "";
        count = 0;
        myThis = '';
        $("input[name='chk[]']:checked").each(function ()
        {
            checked = parseInt($(this).val());
            count++;
            myThis = $(this);
        });
        if (invoiceid != '') {
            checked = parseInt(invoiceid);
        }

        if (count > 1) {
            alert('Please select one record only to copy');
            $('input[type="checkbox"]').prop('checked', false);
            return false;
        }

        status = $(myThis).parent('td').parent('tr').find('td:nth-child(7)').html();
        if (status == 'posted' && stat != 'copy') {
            alert('Purchase Order is posted. You can no longer edit the Purchase Order.');
            return false;
        }

        $().redirect(URL + 'purchase/newPurchaseOrder', {'id': checked, 'status': stat, 'task101': 'copy'})
        // .fail(function () {
        // alert('Connection Error!');
        // });
        return false;
    } else {
        alert('Please select record to edit');
    }
}

function deleterec() {
    status = '';
    if ($('.chk').is(':checked')) {
        $("input[name='chk[]']:checked").each(function () {
            status = $(this).parent('td').parent('tr').find('td:nth-child(7)').html();
            if (status == 'Posted' || status == 'Reversed') {
                return false;
            }
        });

        if (status == 'Posted' || status == 'Reversed') {
            alert('Purchase invoice(s) may be posted/reversed. You can no longer delete the purchase invoice.');
            $('input[name="chk[]"]').prop('checked', false);
            return false;
        }

        if (confirm('Are you sure you want to delete the following record(s)?')) {
            $('input[name="task"]').val('delpurchaseinvoice');
            $('#form').submit();
        }
    } else {
        alert('Please select record to delete');
    }
}