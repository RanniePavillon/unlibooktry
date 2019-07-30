$(function () {
    $('.createNIItem').click(function () {
        $.post(URL + 'sales/newItems')
                .done(function (returnData) {
                    $('.popBack').html(returnData);
                    $('.popBack').removeClass('hidden');
                    $('body').css('overflow', 'hidden');

                    $('.closeCNTs').click(function () {
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

    $('#searchby').change(function () {
        if ($(this).val() == 3) {
            $('input[type="search"]').addClass('hidden');
            $('.date').removeClass('hidden');
            $('.search2').removeClass('hidden');
            $('.search2Col').addClass('hidden');
        } else {
            $('input[type="search"]').removeClass('hidden');
            $('.date').addClass('hidden');
            $('.search2').addClass('hidden');
            $('.search2Col').removeClass('hidden');

        }
    });
    $('#searchby').change();
    $(".date").datepicker({
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
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
})

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

            $.post(URL + 'sales/newItems', {itemid: checked})
                    .done(function (returnData) {
                        $('.popBack').html(returnData);
                        $('.popBack').removeClass('hidden');
                        $('body').css('overflow', 'hidden');


                        $('.closeCNTs').click(function () {
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
		
function printPreview(id) {
	$.post(URL + 'sales/printItems', {invoiceid:id})
			.done(function (returnData) {
				$('.popBack').html(returnData);
				$('.popBack').removeClass('hidden');
				$('body').css('overflow', 'hidden');
				$('.popx').click(function () {
					$('.popBack').addClass('hidden');
					$('.popBack').html('');
					$('body').css('overflow', 'auto');
					$('.chk').removeAttr('checked');
					invoiceprintview = paymentpreview ='';
				});
			})
			.fail(function () {
				alert('Connection Error!');
			});
	return false;
}

