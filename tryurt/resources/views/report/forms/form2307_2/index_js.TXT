$(function() {
    $('#zoomIn').click(
            function() {
                $("#divelement").animate({'zoom': 0.7}, 400);
            });

    $('#zoomOut').click(
            function() {
                $("#divelement").animate({'zoom': 0.4}, 400);
            });

    $('.generate').click(function() {
        vendor = $('.selectVendorName').val();
        if (vendor == '') {
            alert('Please select vendor.');
            return false;
        }
        date = $('input[name="enddate"]').val();
        month = $('input[name="month"]').val();
        year = $('input[name="year"]').val();
		clinicId = $('#clinicId').val();
        $('form').removeClass('hidden');
        $('.printPdf2').removeClass('hidden');
        $('.birform2307').html('<div class="loadingeventreport22" style="margin-top: 589px;"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform" /></div>');
        $.post(URL + 'report/form2307/getReport', {'vendor': vendor, 'date': date, 'month': month, 'year': year, 'clinicId': clinicId})
                .done(function(returnData) {
                    $('.birform2307').html(returnData);
                    $('.isNumeric').each(function() {
                        $(this).val($.number($(this).val(), 2));
                    });

                })
    });

    $('form').submit(function() {
		return false;
        $.post(URL + 'report/form2307/setReport', $('form').serialize())
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

    $('.postform2307').click(function() {
        confirmPost = confirm('Are you sure you want to post?');
        if (confirmPost) {
            $.post(URL + 'report/form2307/setReport?status=post', $('form').serialize())
                    .done(function(returnData) {
                        if (returnData == 0) {
                            $('.generate').click();
                        } else {
                            alert(returnData);
                        }
                    });
        }
    });

    $('.viewForm').click(function() {
        year = $('.yearname2').val();
        vendor = $('.selectVendorName').val();

        window.open(URL + 'report/form2307_newtab?year=' + year + '&vendor=' + vendor);
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
        year = $('.yearname2').val();
        vendor = $('.selectVendorName').val();
		clinicId = $('#clinicId').val();
        date = $('input[name="enddate"]').val();

        window.open(URL + 'report/form2307/printReport?vendor=' + vendor + '&date=' + date + '&clinicId=' + clinicId);
        return false;
	});
})