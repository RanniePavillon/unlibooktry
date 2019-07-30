stat ='';
function editrec(cmdid) {
    if ($('.chk').is(':checked') || cmdid != '') {
        var checked = "";
        count = 0;
        myThis = '';
        $("input[name='chk[]']:checked").each(function ()
        {
            checked = parseInt($(this).val());
            count++;
            myThis = $(this);
        });
        if (cmdid != '') {
            checked = parseInt(cmdid);
        }

        if (count > 1) {
            alert('Please select one record only to edit.');
            $('input[type="checkbox"]').prop('checked', false);
            return false;
        }

        status = $(myThis).parent('td').parent('tr').find('td:nth-child(6)').html();

        if (status == 'Posted' || status == 'Reversed' && stat != 'copy') {
            alert('Credit memo may be posted/reversed. You can no longer edit the Credit memo.');
            $('input[name="chk[]"]:checked').prop('checked', false);
            return false;
        }

        $().redirect(URL + 'sales/newcm', {'id': checked, 'status': stat, 'task101': 'updatecm'})

        return false;
    } else {
        alert('Please select record to edit');
    }
}

function deleterec() {
    status = '';
    if ($('.chk').is(':checked')) {
        $("input[name='chk[]']:checked").each(function () {
            status = $(this).parent('td').parent('tr').find('td:nth-child(6)').html();
            if (status == 'Posted' || status == 'Reversed') {
                return false;
            }
        });

        if (status == 'Posted' || status == 'Reversed') {
            alert('Credit memo(s) may be posted/reversed. You can no longer delete the Credit memo.');
            $('input[name="chk[]"]').prop('checked', false);
            return false;
        }

        if (confirm('Are you sure you want to delete the following record(s)?')) {
            $('input[name="task"]').val('delcm');
            $('#form').submit();
        }
    } else {
        alert('Please select record to delete');
    }
}

