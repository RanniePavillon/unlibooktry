$(function () {
    $(document).on("click", '.addtaskslines', function () {
        whId = $('select[name="fromWarehouseId"] option:selected').val();

        $.ajaxSetup({async: false});
        $.post(URL + "transfer/itemLines", {warehouseId: whId})
                .done(function (result) {
                    $('.transferBlockTable > tbody:last').append(result);
                });
        $.ajaxSetup({async: true});
        return false;
    });

    $(document).on("click", ".deltask", function () {
        $(this).parents('tr').remove();

        return false;
    });

    $(document).on("change", ".itemId", function () {
        $(this).addClass('activeObj');
        $.post(URL + 'transfer/getItemData', {itemid: $(this).val(), abbr: $('option:selected', this).attr('abbrv'), warehouseid: $('option:selected', this).attr('warehouseid')})
                .done(function (returnData) {
                    $('.jsHolder').html(returnData);
                    $('.itemId').removeClass('activeObj');
                });

        return false;
    });

    $(document).on("keyup", ".qty, .amount", function () {
        qty = $(this).parents('tr').find('.qty').val();
        amount = getInt($(this).parents('tr').find('.amount').val());

        $(this).parents('tr').find('.totalamount').val(roundFloat(qty * amount));

        return false;
    });

    $('#postBtn').click(function () {
        $('input[name="status"]').val('post');
    });

    $('.nif1Client').submit(function () {
        if ($('select[name="fromWarehouseId"]').val() == $('select[name="toWarehouseId"]').val()) {
            alertWithoutNotice('Transfer from and transfer to should not be the same');
            $('input[name="status"]').val('');
        } else if (checkQty() == 'invalid') {
            alertWithoutNotice('Invalid input. Please make sure qty not greater than available.');
            return false;
        } else {
            saveTransfer();
        }

        return false;
    });

    $('select[name="fromWarehouseId"]').change(function () {
        whId = $('select[name="fromWarehouseId"] option:selected').val();
        $html = '';

        $.ajaxSetup({async: false});
        $.post(URL + 'transfer/itemOption', {warehouseId: whId})
                .done(function (returnData) {
                    $html = returnData;
                });

        $('transferBlockTable > input[type="text"]').val('');

        $('.itemId').each(function () {
            $('option', this).remove();
            $(this).append($html);
        });
    });
});

function saveTransfer() {
    $('.popup').html('<div class="loadingevent"><img src="' + URL + 'public/images/processing.gif" class="loadingimg" /></div>');

    $.post(URL + 'transfer/updateTransfer', $('.nif1Client').serialize())
            .done(function (returnData) {
                returnData = returnData.trim();
                if (returnData == '') {
                    $('.popBack').html('').addClass('hidden');
                    location = URL + 'inventory/transfer';
                }else{
                    alertWithoutNotice(returnData);
                }
            });

    return false;
}

function checkQty() {
    msg = '';
    $('.itemId').each(function () {
        qty = $(this).parents('tr').find('.qty').val();
        av_qty = $('option:selected', this).attr('qty');

        if (qty > av_qty) {
            msg = 'invalid';
        }
    });

    return msg;
}

