savenew = '';
$('.cmForm').submit(function () {
    $.post(URL + 'sales/setUom', $(this).serialize())
            .done(function (returnData) {

                if (typeof (newrecord) == "undefined") {
                    newrecord = '';
                }

                if ($.isNumeric(returnData)) {
                    if (newrecord == 'new' && typeof (uom_function) == 'undefined') {
                        $('.uom').each(function () {
                            $('option:last', $(this)).before($('<option/>', {
                                value: returnData,
                                text: $('input[name="abbreviation"]').val()
                            }));

                            $('.activeObj option').removeAttr('selected')
                                    .filter('[value="' + returnData + '"]')
                                    .attr('selected', true);

                            $('.uom').removeClass('activeObj');

                            $('.popBack').addClass('hidden');
                            $('body').css('overflow', 'auto');
                        });
                    } else {
                        $('#uom, .uom').each(function (i) {
                            $('option:last', $(this)).before($('<option/>', {
                                value: returnData,
                                text: $('input[name="abbreviation"]').val()
                            }));
                        });

                        $('#uom option').removeAttr('selected')
                                .filter('[value="' + returnData + '"]')
                                .attr('selected', true);
                        $('.popup2').addClass('hidden');

                        if (savenew == 'savenew') {
                            addNewUOM();
                        }
                    }
                } else {
                    alert(returnData);
                }
            })
            .fail(function () {
                alert('Connection error');
            });

    savenew == '';
    return false;
});

$('.cmForm #saveAddNew').click(function () {
    savenew = 'savenew';
    $('.cmForm').submit();
});