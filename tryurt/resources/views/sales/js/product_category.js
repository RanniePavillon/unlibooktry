savenew = '';
$('.cmForm').submit(function () {
    $.post(URL + 'sales/setProductCategory', $(this).serialize())
            .done(function (returnData) {
                returnData = returnData.trim();
                if ($.isNumeric(returnData)) {
                    $('#productCategoy').each(function (i) {
                        $('option:last', $(this)).before($('<option/>', {
                            value: returnData,
                            text: $('.cmForm input[name="description"]').val()
                        }));
                    });

                    $('#productCategoy option').removeAttr('selected')
                            .filter('[value="' + returnData + '"]')
                            .attr('selected', true);

                    $('.popup2').addClass('hidden');

                    if (savenew == 'savenew') {
                        addNewCategory();
                    }
                } else if (returnData == '') {
                    if (savenew == 'savenew') {
                        $('.newProductCategory').click();
                        return false;
                    }
                    location = URL + 'inventory/productCategory';
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