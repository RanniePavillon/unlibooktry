savenew = false;

$(function () {
    $('#saveAddNew').click(function () {
        savenew = true;
    });

    $('#save').click(function () {
        savenew = false;
    });

    $('.cmForm').submit(function () {
        if (typeof rdata == 'undefined') {
            rdata = false;
        }

        var formData = $(this).serialize() + '&savenew=' + savenew + '&rdata=' + rdata;

        $.post(URL + 'area/setArea', formData)
                .done(function (result) {
                    result = result.trim();
                    if ($.isNumeric(result) && rdata == true) {
                        rdata = false;

                        $('#areaId option').removeAttr('selected');
                        $("<option value=" + result + " selected>" + $("input[name='areaName']").val() + "</option>").insertBefore('#areaId option:last');

                        savenew == false ? $('.popup2').addClass('hidden') : '';

                        return false;
                    }

                    if (result != '' && savenew == false) {
                        alertWithoutNotice(result);
                        return false;
                    }

                    if (savenew == true)
                    {
                        savenew = false;
                        $('.cnitableAllInvoice').append(result);
                        $('.createNLocation').click();
                    } else
                    {
                        location.reload();
                    }

                });
        return false;
    });
});