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
        if ($('.chk').is(':checked')) {
            var checked = '';
            if ($('.chk:checked').length > 1) {
                alert('Please select one record only to view.');
                $('input[type="checkbox"]').prop('checked', false);
                return false;
            } else {
                $("input[name='chk[]']:checked").each(function ()
                {
                    checked = parseInt($(this).val());
                    return false;
                });
                invoiceprintview = checked;
                printPreview(checked);
            }
        } else {
            alert('Please select record to preview');
        }
    });

    $('.createNCR').click(function () {
        validateSeries('newreceipt');
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
            alert('Sales Invoice may be posted/reversed. You can no longer edit the Sales Invoice.');
            $('input[name="chk[]"]:checked').prop('checked', false);
            return false;
        }

        $().redirect(URL + 'sales/newSalesInvoice', {'id': checked, 'status': stat, 'task101': 'updateinvoice'})

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
            alert('Cash Receipt is posted. You can no longer edit the Cash Receipt.');
            return false;
        }

        $().redirect(URL + 'sales/newSalesInvoice', {'id': checked, 'status': stat, 'task101': 'copy'})
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    } else {
        alert('Please select record to edit');
    }
}
function printPreview(id) {
    $.post(URL + 'salesInvoice/deliveryReceipt', {drid: id})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('.closePrint').click(function () {
                    $('.popBack').addClass('hidden');
                    $('.popBack').html('');
                    $('body').css('overflow', 'auto');
                    $('.chk').removeAttr('checked');
                });
            })
            .fail(function () {
                alert('Connection Error!');
            });
    return false;
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
            alert('Sales invoice(s) may be posted/reversed. You can no longer delete the sales invoice.');
            $('input[name="chk[]"]').prop('checked', false);
            return false;
        }

        if (confirm('Are you sure you want to delete the following record(s)?')) {
            $('input[name="task"]').val('delsalesinvoice');
            $('#form').submit();
        }
    } else {
        alert('Please select record to delete');
    }
}