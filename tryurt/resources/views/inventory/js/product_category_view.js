
$(function () {
    $('.newProductCategory').click(function () {
        $.post(URL + 'sales/newProductCategory')
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.close1Client').click(function () {
                        if (confirm('Are you sure you want to leave this page without saving?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                })
                .fail(function () {
                    alert('Connection Error!');
                });
        return false;
    });
});

function editrec(taskid) {

        if ($('.chk').is(':checked') || taskid != '') {
            var checked = [];
            count = 0;
            $("input[name='chk[]']:checked").each(function ()
            {
                checked = parseInt($(this).val());
                count++;
            });

            if (count > 1) {
                alertWithoutNotice('Please select only one item');
                $('.chk').removeAttr('checked');
                return false;
            }

            if (taskid != '') {
                checked = taskid;
                $('.chk').removeAttr('checked');
            }

            $.post(URL + 'sales/newProductCategory', {productcategoryid: checked})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.close1Client').click(function () {
                            if (confirm('Are you sure you want to leave this page without saving?')) {
                                $('.popBack').addClass('hidden');
                                $('.popBack').html('');
                                $('body').css('overflow', 'auto');
                                $('input[name="chk[]"]:checked').prop('checked', false);
                            }
                        });
                    })
                    .fail(function () {
                        alertWithoutNotice('Connection Error!');
                    });
            return false;
        } else {
            alertWithoutNotice('Please select record to edit');
        }
    }