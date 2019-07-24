$(function () {
    $('.itempage').change(function () {
        $.post(URL + 'generaljournal/getData?page=1&ipp=' + this[this.selectedIndex].value)
                .done(function (returnData) {
                    $('.tblGenJournal > tbody').html(returnData);

                }).fail(function () {
            alertWithoutNotice('Connection Failed');
        });

        $.post(URL + 'generaljournal/getPage?page=1&ipp=' + this[this.selectedIndex].value)
                .done(function (returnData) {
                    $('.page option').remove();
                    $('.page').append(returnData);

                }).fail(function () {
            alertWithoutNotice('Connection Failed');
        });
    });

    $('.page').change(function () {
        $.post(URL + 'generaljournal/getData?page=' + this[this.selectedIndex].value + '&ipp=' + $('.itempage option:selected').val())
                .done(function (returnData) {
                    $('.tblGenJournal > tbody').html(returnData);
                }).fail(function () {
            alertWithoutNotice('Connection Failed');
        });
    });
});

function editrec(id) {
    $.post(URL + 'generaljournal/newGeneral', {gjid:id})
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');

                $('.closeNewBegBal').click(function () {
                    if (confirm('Are you sure you want to leave this page without posting?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        //location.reload();
                    }
                });
            })
            .fail(function () {
                alert('Connection Error!');
            });
    return false;
}