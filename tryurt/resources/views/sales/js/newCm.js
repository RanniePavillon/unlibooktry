$(function () {
    $(document).on("change", "#client", function () {
        $('#address').text('');
        if ($(this).val() === 'addclient') {
            $('#client option').removeAttr('selected')
                    .filter('[value=""]')
                    .attr('selected', true);
            addNewClient();
            $('.popBack').removeClass('hidden');
            $('.clientfrm').removeClass('hidden');
            $('.returnurl').val('invoice');
            $('body').css('overflow', 'hidden');
            $('.close1Client').click(function () {
                $('.popBack').addClass('hidden');
                $('.clientfrm').addClass('hidden');
                $('.returnurl').val('');
                $('body').css('overflow', 'auto');
            });
        }
        if ($(this).val() !== 'addclient' && $(this).val() !== '') {
            $.ajax({
                url: URL + "invoice/getAddress",
                type: "POST",
                data: {
                    clientId: $(this).val()
                },
                dataType: "JSON", async: false,
                success: function (jsonStr) {
                    $('#address').text(jsonStr.address);
                }
            });
        }
    });

    $(document).on('keyup', '.amountline', function () {
        total = 0;
        $('.amountline').each(function () {
            total += getInt($(this).val());
        });

        $('input[name="grandTotal"]').val(roundFloat(total));
    });

    $(document).on('click', '#addtask', function () {
  
        $html = '<tr>' +
                '<td><div class="del"><input type="button" name="delete" class="del deltask"></div></td>' +
                '<td><input type="text" name="description[]" required /></td>' +
                '<td><input type="text" name="qty[]" style="text-align:center;" required /></td>' +
                '<td><input type="text" name="amount[]"  style="text-align:right; class="amountline" required /></td>' +
                '<td></td>' +
                '</tr>';
        $('.tablesalesnew > tbody').append($html);
    });

    $(document).on("click", ".deltask, .del", function () {
        $(this).parents('tr').remove();
        $('.amountline').keyup();
    });

    $('#save').click(function () {
        $('input[name="status"]').val('open');
    });

    $('.bPost').click(function () {
        $('input[name="status"]').val('post');
    });

    $('.form-Sales').submit(function () {
        amount = getInt($('input[name="grandTotal"]').val());

        if (amount == 0) {
            alertWithoutNotice('Amount should not be equal to zero.')
            return false;
        }

        $.post(URL + 'cm/setCreditMemo', $(this).serialize())
                .done(function (returnData) {
                    returnData = returnData.trim();
                    if (returnData == '') {
                        location = URL + 'sales/cm';
                    } else {
                        alertWithoutNotice(returnData);
                        $('.popBack').addClass('hidden');
                    }
                });
        return false;
    });
});

function addNewClient() {
    $.post(URL + 'invoice/newcustomer', {view: 'invoice'})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.newClientTask').val('addNewClientOption');
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $('#saveAddNew').hide();
                $('.close1Client').click(function () {
                    $('.popBack').addClass('hidden');
                    $('.popBack').html('');
                    $('body').css('overflow', 'auto');
                });
            })
            .fail(function () {
                alertWithoutNotice('Connection Error!');
            });
    return false;
}