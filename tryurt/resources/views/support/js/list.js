/* 
$('.listemail').click(function() {
    $.post(URL + 'support/supports')
            .done(function(returnData) {
                $('.popup').html(returnData);
                $('.popup').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popup").css('z-index', '100');

                $('.xsupport').click(function() {
                    if (confirm('Are you sure, you want to leave this page without sending?')) {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
                        $('body').css('overflow', 'auto');
//							location.reload();
                    }
                });

            })
            .fail(function() {
                alertWithoutNotice('Connection Error!');
            });
    return false;
});

$('.listtax').click(function() {
    $.post(URL + 'support/taxExpert')
            .done(function(returnData) {
                $('.popup').html(returnData);
                $('.popup').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popup").css('z-index', '100');

                $('.xsupport').click(function() {
                    if (confirm('Are you sure, you want to leave this page without sending?')) {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
                        $('body').css('overflow', 'auto');
//							location.reload();
                    }
                });

            })
            .fail(function() {
                alertWithoutNotice('Connection Error!');
            });
    return false;
});


$('.listbir').click(function() {
    $.post(URL + 'support/birNews')
            .done(function(returnData) {
                $('.popup').html(returnData);
                $('.popup').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popup").css('z-index', '100');

                $('.xsupport').click(function() {
                    if (confirm('Are you sure, you want to leave this page?')) {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
                        $('body').css('overflow', 'auto');
//							location.reload();
                    }
                });

            })
            .fail(function() {
                alertWithoutNotice('Connection Error!');
            });

    return false;

});


$('.listtaxupdate').click(function() {
    $.post(URL + 'support/taxUpdates')
            .done(function(returnData) {
                $('.popup').html(returnData);
                $('.popup').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popup").css('z-index', '100');

                $('.xsupport').click(function() {
                    if (confirm('Are you sure, you want to leave this page?')) {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
                        $('body').css('overflow', 'auto');
//							location.reload();
                    }
                });

            })
            .fail(function() {
                alertWithoutNotice('Connection Error!');
            });

    return false;

}); */
// $('.linkformsupport').remove();
// $('.linkformsupport').addClass('hidden');
// alert('sadf');