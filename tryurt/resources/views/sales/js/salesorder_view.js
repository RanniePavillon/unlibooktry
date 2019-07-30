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
        $('input[name="copy"]').addClass('hidden');
        $('input[name="del"]').addClass('hidden');
        $('.sendEmail').addClass('hidden');

        if ($('input[name="chk[]"]:checked').length == 0) {
            $('input[name="edit"]').removeClass('hidden');
            $('input[name="copy"]').removeClass('hidden');
            $('input[name="del"]').removeClass('hidden');
            $('input[name="print"]').removeClass('hidden');
            $('.sendEmail').removeClass('hidden');
            return false;
        }

        if ($('input[name="chk[]"]:checked').length == 1) {
            $('input[name="copy"]').removeClass('hidden');
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

    computeDr();

});


function computeDr() {

        $('[name="qty[]"]').change(function(){
            var subTotal = 0;
            var discountTotal = 0;
            var netAmountTotal = 0;
            var vatAmount = 0;
            var grandTotal = 0;
            $('[name="qty[]"]').each(function(){

                myTr = $(this).parent('td').parent('tr');

                var qty = getInt($(this).val());
                var vatType = $(myTr).find('td:nth-child(3) input').val();
                var unitPrice = getInt($(myTr).find('td:nth-child(7) input').val());
                var discount = getInt($(myTr).find('td:nth-child(9) input').val()) / 100;

                amount = (qty * unitPrice);
                $(myTr).find('td:nth-child(8) input').val(roundFloat(amount));

                netAmount = amount * (1 - discount);
                $(myTr).find('td:nth-child(10) input').val(roundFloat(netAmount));

                vat = 0;
                sub = amount - vat;
                disc = sub * discount;
                netAmnt = sub - disc;

                if(vatType == 'Vatable') {
                    vat = (amount / 1.12) * 0.12;
                    sub = amount - vat;
                    disc = sub * discount;
                    netAmnt = sub - disc;
                    vat = vat * (1 - discount);
                }

                subTotal += sub;
                discountTotal += disc;
                netAmountTotal += netAmnt;
                vatAmount += vat;
                grandTotal += netAmountTotal + vatAmount;
            });
            
            $('[name="subTotalAmount"]').val(roundFloat(subTotal));
            $('[name="discountAmount"]').val(roundFloat(discountTotal));
            $('.netamounttotal').val(roundFloat(netAmountTotal));
            $('[name="vatAmount"]').val(roundFloat(vatAmount));
            $('[name="grandTotal"]').val(roundFloat(grandTotal));
        });

}


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
            alert('Cash Receipt may be posted/reversed. You can no longer edit the cash receipt.');
            $('input[name="chk[]"]:checked').prop('checked', false);
            return false;
        }

        $().redirect(URL + 'sales/newSalesOrder', {'id': checked, 'status': stat, 'task101': 'updateinvoice'})

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

        $().redirect(URL + 'sales/newSalesOrder', {'id': checked, 'status': stat, 'task101': 'copy'})
                .fail(function () {
                    alert('Connection Error!');
                });
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
            alert('Sales order(s) may be posted/reversed. You can no longer delete the sales order.');
            $('input[name="chk[]"]').prop('checked', false);
            return false;
        }

        if (confirm('Are you sure you want to delete the following record(s)?')) {
            $('input[name="task"]').val('delsalesorder');
            $('#form').submit();
        }
    } else {
        alert('Please select record to delete');
    }
}