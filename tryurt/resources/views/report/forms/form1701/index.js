$(function() {
	$('select[name="page"]').change(function(){
		id = $(this).val();
		$('select[name="page"]').val(id);
		loadForm(id);
	});
	
	$('.form1701input').submit(function(){
		form1701Save();
		return false;
	});
		
	$('.postform1701').click(function(){
		confirmPost = confirm('Are you sure you want to post?');
		if(confirmPost){
			$('body').append('<div class="popBack1701"><div class="loadingeventreport1701"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform1701" /></div></div>');
			$.post(URL + 'report_form_1701/post1701',$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						$('.generate').click();
					} else {
						alert(returnData);
					}
					$('.popBack1701').remove();
				});
		}
	});
	
    $('.prevPage').click(function() {
        id = getInt($('select[name="page"]').val());
        if (id > 1) {
			page = $('select[name="page"]').val();
			$('body').append('<div class="popBack1701"><div class="loadingeventreport1701"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform1701" /></div></div>');
			$.post(URL + 'report_form_1701/setPage?page=' + page,$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						id = id - 1;
						$('select[name="page"]').val(id);
						$('select[name="page"]').change();
					} else {
						alert(returnData);
					}
					$('.popBack1701').remove();
				});
        }
    });
    $('.nextPage').click(function() {
        id = getInt($('select[name="page"]').val());
        if (id < 12) {
			page = $('select[name="page"]').val();
			$('body').append('<div class="popBack1701"><div class="loadingeventreport1701"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform1701" /></div></div>');
			$.post(URL + 'report_form_1701/setPage?page=' + page,$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						id = id + 1;
						$('select[name="page"]').val(id);
						$('select[name="page"]').change();
					} else {
						alert(returnData);
					}
					$('.popBack1701').remove();
				});
        }
    });
    $('.generate').click(function() {
        month = $('select[name="month"]').val();
        year = $('input[name="year"]').val();
		clinicId = $('#clinicId').val();
        $('.buttonHolder').removeClass('hidden');
        $('form').removeClass('hidden');
        $('.generated1701Reports').html('<div class="loadingeventreport1701"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform1701" /></div>');
      //  return false;
		$.post(URL + 'report/form1701/getReport', {'month': month, 'year': year, 'clinicId': clinicId})
                .done(function(returnData) {
                    $('select[name="page"]').val(1);
                    $('.generated1701Reports').html(returnData);
                    $('form').removeClass('hidden');
					$('select[name="page"]').change();
                })
    });

    $('.viewForm').click(function() {
        year = $('input[name="year"]').val();

        window.open(URL + 'report/form1701_newtab?year=' + year);
        return false;
    });
});
function getInt(intVal) {
    if (typeof (intVal) == 'undefined') {
        intVal = 0;
    }
    if (intVal != '') {
        intVal = intVal.toString().replace(/,/g, '');
    }
    if (intVal[0] == '(') {
        intVal = intVal.toString().replace(/\(/g, '');
        intVal = intVal.toString().replace(/\)/g, '');
        intVal *= -1;
    }
    intVal = parseFloat(intVal);
    if (isNaN(intVal)) {
        return 0;
    }
    return intVal;
}

function roundFloat(intVal) {
    intVal = getInt(intVal);
    intVal = Number((intVal).toFixed(2));

    array = intVal.toString().split('.');

    if (array[1]) {
        if (array[1].length == 1) {
            array[1] += '0';
        }
    } else {
        array[1] = '00';
    }

    intVal = array.join('.');

    hasComma = commafy(intVal);

    if (hasComma[0] == '-') {
        hasComma = hasComma.toString().replace(/-/g, '');
        // intVal *= -1;
        hasComma = '(' + hasComma + ')';
    }
    return hasComma;
}

function commafy(num) {

    var n = num.toString().split(".");
    n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return n.join(".");
}
                
				
		function form1701Save(){
			page = $('select[name="page"]').val();
			$('body').append('<div class="popBack1701"><div class="loadingeventreport1701"><img src="'+ URL +'public/images/loadingbar.gif" class="loadingreportform1701" /></div></div>');
			$.post(URL + 'report_form_1701/setPage?page=' + page,$('form').serialize())
				.done(function(returnData){
					if(returnData == 0){
						// $('.generate').click();
						loadForm(page);
					} else {
						alert(returnData);
					}
					$('.popBack1701').remove();
				});
				
		}
		
		function loadForm(id){
			year = $('input[name="year"]').val();
			clinicId = $('#clinicId').val();
			$.post( URL + 'report_form_1701/getPage',{'page':id, 'year':year, 'clinicId' : clinicId})
				.done(function(returnData){
					$('.generated1701Reports2').html(returnData);
					$('form').removeClass('hidden');
				})
		}
		