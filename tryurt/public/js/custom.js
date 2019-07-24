$(function() {
    $('.close').click(function() {
        $('.popBack').addClass('hidden');
    });

    // $('.tasknet').number(true, 2);
    // $('.itemnet').number(true, 2);
    // $('.numeric').number(true, 2);


    /*  $('.nodecimal').number(true, 0); */

    $(document).on("click", ".numeric", function() {
        $(this).number(true, 2);
    });

//    $(document).on("input", ".rate", function() {
//        alert('test');//$(this).number(true, 2);
//    });

    $(document).on("focusout", ".isNumeric", function() {
        $(this).val($.number($(this).val(), 2));
    });
    $(document).on("focusin", ".isNumeric", function() {
        if ($(this).val() === '0.00') {
            $(this).val('');
        }
    });

    $(document).on("focusin", ".nodecimal", function() {
        if ($(this).val() === '0') {
            $(this).val('');
        }
    });

    $(document).on("focusout", ".nodecimal", function() {
        $(this).val($.number($(this).val(), 0));
    });
	
	$(document).on("focusin", ".nodecimal2", function() {
        if ($(this).val() === '0.00') {
            $(this).val('');
        }
    });

    /* $(document).on("focusout", ".nodecimal2", function() {
      //  $(this).val($.number($(this).val(), 0.00));
	  $(this).val($.number($(this).val(), 2));
    }); */
	
	
	
$("#di, .dd").datepicker(
            { 
                dateFormat: 'mm/dd/yy'//,
//                changeMonth:true,
//                changeYear:true
            }

    );

})
function getInt(intVal){
	// intVal = intVal.join(", ");
	
	if(intVal != ''){
		intVal = intVal.toString().replace(/,/g,'');
	}
	if(intVal[0] == '('){
		intVal = intVal.toString().replace(/\(/g,'');
		intVal = intVal.toString().replace(/\)/g,'');
		intVal *= -1;
	}
	intVal = parseFloat(intVal);
	if(isNaN(intVal)){
		return 0.00;
	}
	// alert(intVal);
	return intVal;
}

function roundFloat(intVal){
	// intVal = getInt(intVal);
	// alert(intVal);
	intVal = parseFloat(intVal);
	intVal = Number((intVal).toFixed(2));
	
	array = intVal.toString().split('.');
	
	if(array[1]){
		if(array[1].length == 1){
			array[1] += '0';
		}
	} else {
		array[1] = '00';
	}
	
	intVal = array.join('.');
	
	hasComma = commafy(intVal);
	
	if(hasComma[0] == '-'){
		hasComma = hasComma.toString().replace(/-/g,'');
		// intVal *= -1;
		hasComma = '('+hasComma+')';
	}
	return hasComma;
}

function getFLoat(intVal){
	intVal = parseFloat(intVal);
	intVal = Number((intVal).toFixed(2));
	return intVal;
}

function commafy(num) {

    var n = num.toString().split(".");
    n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return n.join(".");
}
function alertWithoutNotice(message) {
    setTimeout(function() {
        alert(message);
    }, 1000);
}

function validateSeries(type) {
    validate = '';

    $.ajaxSetup({async: false});
    $.post(URL + 'invoice/validateSeries')
            .done(function (returnData) {
                validate = returnData;
            }).fail(function () {
        alert('Connection Failed');
    });
    
    if (validate == 'invalid') {
        alert('Series number is already invalid.\n Please set up a new one.');

        displayAtp();
        return false;
    }
    if(type == 'newreceipt' || type == 'add'){
    window.location.href = URL + 'invoice/' + type;
    }else if(type == 'collection'){
        displayCollection();
    }
    
    return false;
}

function validateSeries2(type) {
    validate = '';

    $.ajaxSetup({async: false});
    $.post(URL + 'expenses/validateSeries2')
            .done(function (returnData) {
                validate = returnData;
            }).fail(function () {
        alert('Connection Failed');
    });
    
    if (validate == 'invalid') {
        alert('Series number is already invalid.\n Please set up a new one.');

        displayAtp();
        return false;
    }
    
    if(type == 'newreceipt' || type == 'add'){
    window.location.href = URL + 'expenses/' + type;
    }else if(type == 'expenses'){
        displayPayment();
    }
    
    return false;
}

function displayAtp() {
    $.post(URL + 'invoice/bir')
            .done(function (returnData) {
                $('.popBack').html(returnData);
                $('.popBack').removeClass('hidden');
                $('body').css('overflow', 'hidden');
                $(".popBack").css('z-index', '100');

                $('.no').click(function () {
                    if (confirm('Are you sure you want to leave this page?')) {
                        $('.popBack').addClass('hidden');
                        $('.popBack').html('');
                        $('body').css('overflow', 'auto');
                        // location.reload();
                    }
                });

            })
            .fail(function () {
                alert('Connection Error!');
            });

    return false;
}

function displayCollection(){
    $.post(URL + 'invoice/enterpayment')
                .done(function(returnData) {
					/* if (returnData == '') {
                        location = URL + 'invoice/collection';
					} else if (returnData == 'duplicate') {
                        $('body').css('overflow', 'visible');
                        alertWithoutNotice('OR Number already used!');
                        $('.popBack').addClass('hidden');
					} else { */
						$('.popBack').html(returnData);
						$('.popBack').removeClass('hidden');
						$('body').css('overflow', 'hidden');
					// }
                    $('.cancel').click(function() {
                        if (confirm('Are you sure you want to leave this page without posting?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                })
                .fail(function() {
                    alertWithoutNotice('Connection Error!');
                });
        return false;
}
function displayPayment(){
    $.post(URL + 'expenses/enterpayment')
                .done(function(returnData) {
					/* if (returnData == '') {
                        location = URL + 'invoice/collection';
					} else if (returnData == 'duplicate') {
                        $('body').css('overflow', 'visible');
                        alertWithoutNotice('OR Number already used!');
                        $('.popBack').addClass('hidden');
					} else { */
						$('.popBack').html(returnData);
						$('.popBack').removeClass('hidden');
						$('body').css('overflow', 'hidden');
					// }
                    $('.cancel').click(function() {
                        if (confirm('Are you sure you want to leave this page without posting?')) {
                            $('.popBack').addClass('hidden');
                            $('.popBack').html('');
                            $('body').css('overflow', 'auto');
                        }
                    });
                })
                .fail(function() {
                    alertWithoutNotice('Connection Error!');
                });
        return false;
}