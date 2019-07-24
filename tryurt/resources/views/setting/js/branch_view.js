function editrec(id) {
    if ($('.chk:checked').length > 1) {
        alertWithoutNotice('Please select one(1) item only.');
        return false;
    } else if (id == '' && $('.chk:checked').length == 0) {
        alertWithoutNotice('Please select item.');
        return false;
    }

    if (id == '') {
        id = $('.chk:checked').val();
    }

    $.post(URL + 'setting/addBranch', {'id': id})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');

                $('.closeCNTs').click(function () {
                    if (confirm('Are you sure you want to leave this page?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        location.reload();
                    }
                });
            })
            .fail(function () {
                alert('Connection Error!');
            });
    return false;
}



