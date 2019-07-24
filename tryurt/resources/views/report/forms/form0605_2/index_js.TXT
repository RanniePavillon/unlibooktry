$(function() {
    $('#zoomIn').click(
            function() {
                $("#divelement").animate({'zoom': 0.7}, 400);
            });

    $('#zoomOut').click(
            function() {
                $("#divelement").animate({'zoom': 0.4}, 400);
            });

    // $('.generate').click(function() {
        // vendor = $('.selectVendorName').val();
        // if (vendor == '') {
            // alert('Please select vendor.');
            // return false;
        // }
        // date = $('input[name="enddate"]').val();
        // $('form').removeClass('hidden');
        // $('.birform0605').html('<div class="loadingeventreport22" style="margin-top: 589px;"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform" /></div>');
        // $.post(URL + 'report/form0605/getReport', {'vendor': vendor, 'date': date})
                // .done(function(returnData) {
                    // $('.birform0605').html(returnData);
                    // $('.isNumeric').each(function() {
                        // $(this).val($.number($(this).val(), 2));
                    // });

                // })
    // });
	
	$('.generate').click(function(){
		$('form').removeClass('hidden');
		// $('.printPdf2').removeClass('hidden');
		clinicId = $('#clinicId').val();
        $('.birform0605').html('<div class="loadingeventreport22" style="margin-top: 589px;"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform" /></div>');
		$.post(URL +'report/form0605/getReport',{'month':$('select[name="month"]').val(), 'year': $('input[name="year"]').val(), 'clinicId': clinicId})
			.done(function(returnData){
				$('.birform0605').html(returnData);
			});
	});

    $('form').submit(function() {
        $.post(URL + 'report/form0605/setReport', $('form').serialize())
                .done(function(returnData) {
                    if (returnData == 0) {
                        alert('Saved.');
                        $('.generate').click();
                    } else {
                        alert(returnData);
                    }
                });
        return false;
    });

    $('.postform0605').click(function() {
        confirmPost = confirm('Are you sure you want to post?');
        if (confirmPost) {
            $.post(URL + 'report/form0605/setReport?status=post', $('form').serialize())
                    .done(function(returnData) {
                        if (returnData == 0) {
                            $('.generate').click();
                        } else {
                            alert(returnData);
                        }
                    });
        }
    });

   /*  $('.viewForm').click(function() {
        year = $('.yearname2').val();
        vendor = $('.selectVendorName').val();

        window.open(URL + 'report/form0605_newtab?year=' + year + '&vendor=' + vendor);
        return false;
    }); */

	$('.viewForm').click(function() {
        month = $('select[name="month"]').val();
        year = $('input[name="year"]').val();
        window.open(URL + 'report/form0605_newtab?month=' + month + '&year=' + year);
        return false;
    });

    //datepicker
    $('.hasDate').prop('readonly', true);
    $('.hasDate').datepicker({
        dateFormat: 'yy-mm-dd'
    });
    $('.hasDate').change(function() {
        dates = $.datepicker.formatDate('yy-mm-dd', new Date($(this).val()));
        $(this).val(dates);
    });
	$('.printPdf2').click(function(){
		month = $('select[name="month"]').val();
        year = $('input[name="year"]').val();
		clinicId = $('#clinicId').val();

        window.open(URL + 'report/form0605/printReport?month=' + month + '&year=' + year + '&clinicId=' + clinicId);
        return false;
	});
})