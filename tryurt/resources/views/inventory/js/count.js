$(function () {
    $(document).on('change', '.item', function () {
        $(this).parents('tr').find('.desc').val($(':selected', this).attr('title'));
    });

    $('.newcount').keyup(function () {
        $object = $(this).parents('tr');
        variance = getInt($(this).val()) - getInt($($object.find('.qty')).text());
        $($object).find('.variance').text(variance);

        return false;
    });

    $('#form').submit(function () {
        $.post(URL + 'counting/setCount', $(this).serialize())
                .done(function (returnData) {
                    let result = returnData.trim();
                    if (result == '') {
                        location = URL + 'inventory/counting';
                    } else {
                        alertWithoutNotice(returnData);
                    }
                })
                .fail(function () {
                    alertWithoutNotice('Connection error');
                });
        return false;
    });

    $('input[name="transdate"]').change(function () {
        current_date = $.datepicker.formatDate('m/d/Y', new Date());

        if ($(this).val() > current_date) {
            alertWithoutNotice('Date shoud not be greater than current date.');
            $('input[name="transdate"]').val('');
            return false;
        }

        $.post(URL + 'counting/validateDate', {transdate: $(this).val()})
                .done(function (returnData) {
                    if (returnData == 1) {
                        alertWithoutNotice('Unable to set count for this date entered. Please another select date.');
                        $('input[name="transdate"]').val('');
                    }

                }).fail(function () {
            alertWithoutNotice('Connection error');
        });
    });
});


