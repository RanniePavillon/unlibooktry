$(function () {
//    $('.showWarehouse').click(function () {
//        if ($(this).is(':checked')) {
//            $('.warehouse').removeClass('hidden');
//        } else {
//            $('.warehouse').addClass('hidden');
//        }
//    });


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
            // return false;
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

        $().redirect(URL + 'sales/newSalesOrder', {'id': checked, 'status': 'edit', 'task101': 'updatesalesorder'})

        return false;
    } else {
        alert('Please select record to edit');
    }
}
