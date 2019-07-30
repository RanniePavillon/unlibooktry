$(function () {
    $('.newSRPselect').change(function () {
        $('.formCmtable').html('');
        if ($.isNumeric($(this).val())) {
            $.post(URL + 'sales/outletList', {'areaId': $(this).val()})
                    .done(function (returnData) {
                        $('.formCmtable').html(returnData);
                    });
        }
    });

    $('#srpForm').submit(function () {
        $('.srplist').html($('.srplist').html() + srpList());
        $('.popup2').html('').addClass('hidden');

        return false;
    });
});

function srpList() {
    area_id = $('select[name="areaId"] :selected').val();
    $('input[name="srpstatus[]"]').val('');

    $('input[name="srpAmount"]').val($('input[name="srpAmount2"]').val());

    $html = '<input type="hidden" name="area[]" value="' + area_id + '" />';
    $html += '<input type="hidden" name="srpstatus[]" value="selected" />';

    $('input[name="outlet[]"]:checked').each(function () {
        $html += '<input type="hidden" name="outlet' + area_id + '[]" value="' + $(this).val() + '" />';
    });

    $('.addSRPSelect option').each(function () {
        if (!$.isNumeric($(this).val())) {
            $(this).val('new');
        }
    });

    $('.addSRPSelect option:last').before($('<option/>', {
        value: 'new_' + area_id,
        text: $('input[name="srpAmount2"]').val()
    }));

    $('.addSRPSelect option').removeAttr('selected')
            .filter('[value="new_' + area_id + '"]')
            .attr('selected', true);

    return $html;
}