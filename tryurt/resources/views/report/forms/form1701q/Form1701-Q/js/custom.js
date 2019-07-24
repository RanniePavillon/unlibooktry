$(function() {
//    $('.item_24').click(function() {
//        $('.item_24').val('');
//        $(this).val('x');
//
//        tempVal = $(this).parent().find('#item24').val();
//
//        $('#item24Value').val(tempVal);
//    });
    $('input[name="iTR1701Q27A"], input[name="iTR1701Q26A"]').change(function() {
        $('input[name="iTR1701Q28A"]').val((getInt($('input[name="iTR1701Q26A"]').val()) + getInt($('input[name="iTR1701Q27A"]').val())));
        $('input[name="iTR1701Q28A"]').change();

        $('input[name="iTR1701Q30A"]').val((getInt($('input[name="iTR1701Q28A"]').val()) - getInt($('input[name="iTR1701Q29A"]').val())));
        $('input[name="iTR1701Q30A"]').change();

        $('input[name="iTR1701Q32A"]').val((getInt($('input[name="iTR1701Q30A"]').val()) + getInt($('input[name="iTR1701Q31A"]').val())));
        $('input[name="iTR1701Q32A"]').change();

        if (paymentmode == 'osd') {
            $('input[name="iTR1701Q33A"]').val((getInt($('input[name="iTR1701Q32A"]').val()) * (40 / 100)));
			$('input[name="iTR1701Q33A"]').change();
        }

        $('input[name="iTR1701Q34A"]').val((getInt($('input[name="iTR1701Q32A"]').val()) - getInt($('input[name="iTR1701Q33A"]').val())));
        $('input[name="iTR1701Q34A"]').change();

        $('input[name="iTR1701Q36A"]').val((getInt($('input[name="iTR1701Q34A"]').val()) + getInt($('input[name="iTR1701Q35A"]').val())));
        $('input[name="iTR1701Q36A"]').change();

        $.post(URL + 'report/provisionaryIncomeTax', {net: getInt($('input[name="iTR1701Q36A"]').val())},
        function(returnData) {
            $('input[name="iTR1701Q37A"]').val((returnData));
			$('input[name="iTR1701Q37A"]').change();

            $('input[name="iTR1701Q39A"]').val((getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));
			$('input[name="iTR1701Q39A"]').change();
            
            taxpayerComputation();
        });

    });

    $('input[name="iTR1701Q35A"]').change(function() {
        $('input[name="iTR1701Q36A"]').val((getInt($('input[name="iTR1701Q34A"]').val()) + getInt($('input[name="iTR1701Q35A"]').val())));
        $('input[name="iTR1701Q36A"]').change();

        $.post(URL + 'report/provisionaryIncomeTax', {net: $('input[name="iTR1701Q36A"]').val()},
        function(returnData) {
            $('input[name="iTR1701Q37A"]').val((returnData));
            $('input[name="iTR1701Q37A"]').change();

            $('input[name="iTR1701Q39A"]').val((getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));
            $('input[name="iTR1701Q39A"]').change();
            
            taxpayerComputation();
        });
    });

    $('input[name="iTR1701Q37A"]').change(function() {
        $('input[name="iTR1701Q39A"]').val((getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));
        $('input[name="iTR1701Q39A"]').change();

        taxpayerComputation();
    });

    $('input[name="iTR1701Q40A"],input[name="iTR1701Q40C"],input[name="iTR1701Q40E"]').change(function() {
        $('input[name="iTR1701Q40G"]').val((getInt($('input[name="iTR1701Q40A"]').val()) + getInt($('input[name="iTR1701Q40C"]').val()) + getInt($('input[name="iTR1701Q40E"]').val())));
        $('input[name="iTR1701Q40G"]').change();

        taxpayerComputation();
    });

    $('input[name="iTR1701Q38A"],input[name="iTR1701Q38C"],input[name="iTR1701Q38E"],input[name="iTR1701Q38G"],input[name="iTR1701Q38K"]').change(function() {
        $('input[name="iTR1701Q38M"]').val((getInt($('input[name="iTR1701Q38A"]').val()) + getInt($('input[name="iTR1701Q38C"]').val()) + getInt($('input[name="iTR1701Q38E"]').val()) + getInt($('input[name="iTR1701Q38G"]').val()) + getInt($('input[name="iTR1701Q38K"]').val())));
        $('input[name="iTR1701Q38M"]').change();

        $('input[name="iTR1701Q39A"]').val((getInt($('input[name="iTR1701Q37A"]').val()) - getInt($('input[name="iTR1701Q38M"]').val())));
        $('input[name="iTR1701Q39A"]').change();

        taxpayerComputation();
    });

    //spouse
    $('input[name="iTR1701Q27B"],input[name="iTR1701Q26B"],input[name="iTR1701Q29B"],input[name="iTR1701Q33B"],input[name="iTR1701Q31B"]').change(function() {
        $('input[name="iTR1701Q28B"]').val((getInt($('input[name="iTR1701Q26B"]').val()) + getInt($('input[name="iTR1701Q27B"]').val())));
        $('input[name="iTR1701Q28B"]').change();

        $('input[name="iTR1701Q30B"]').val((getInt($('input[name="iTR1701Q28B"]').val()) - getInt($('input[name="iTR1701Q29B"]').val())));
        $('input[name="iTR1701Q30B"]').change();

        $('input[name="iTR1701Q32B"]').val((getInt($('input[name="iTR1701Q30B"]').val()) + getInt($('input[name="iTR1701Q31B"]').val())));
        $('input[name="iTR1701Q32B"]').change();
       
        if (paymentmode == 'osd') {
            $('input[name="iTR1701Q33B"]').val((getInt($('input[name="iTR1701Q32B"]').val() * (40 / 100))));
            $('input[name="iTR1701Q33B"]').change();
        }

        $('input[name="iTR1701Q34B"]').val((getInt($('input[name="iTR1701Q32B"]').val()) - getInt($('input[name="iTR1701Q33B"]').val())));
        $('input[name="iTR1701Q34B"]').change();

        $('input[name="iTR1701Q36B"]').val((getInt($('input[name="iTR1701Q34B"]').val()) + getInt($('input[name="iTR1701Q35B"]').val())));
        $('input[name="iTR1701Q36B"]').change();

        $.post(URL + 'report/provisionaryIncomeTax', {net: getInt($('input[name="iTR1701Q36B"]').val())},
        function(returnData) {
            $('input[name="iTR1701Q37B"]').val((returnData));
            $('input[name="iTR1701Q37B"]').change();

            $('input[name="iTR1701Q39B"]').val((getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));
            $('input[name="iTR1701Q39B"]').change();
            
            spouseComputation();
        });

//        $('input[name="iTR1701Q36B"]').number(true, 2);
    });

//    $('input[name="iTR1701Q33B"]').change(function() {
//        $('input[name="iTR1701Q34B"]').val(getInt($('input[name="iTR1701Q32B"]').val()) - getInt($('input[name="iTR1701Q33B"]').val()));
//        $('input[name="iTR1701Q34B"]').number(true, 2);
//        
//        $('input[name="iTR1701Q36B"]').val(getInt($('input[name="iTR1701Q34B"]').val()) + getInt($('input[name="iTR1701Q35B"]').val()));
//
//        $.post(URL + 'report/provisionaryIncomeTax', {net: $('input[name="iTR1701Q36B"]').val()},
//        function(returnData) {
//            $('input[name="iTR1701Q37B"]').val(returnData);
//            $('input[name="iTR1701Q37B"]').number(true, 2);
//
//            $('input[name="iTR1701Q39B"]').val(getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val()));
//            $('input[name="iTR1701Q39B"]').number(true, 2);
//            
//            spouseComputation();
//        });
//
//        $('input[name="iTR1701Q36B"]').number(true, 2);
//    });
    
    $('input[name="iTR1701Q35B"]').change(function() {
        $('input[name="iTR1701Q36B"]').val((getInt($('input[name="iTR1701Q34B"]').val()) + getInt($('input[name="iTR1701Q35B"]').val())));
        $('input[name="iTR1701Q36B"]').change();

        $.post(URL + 'report/provisionaryIncomeTax', {net: getInt($('input[name="iTR1701Q36B"]').val())},
        function(returnData) {
            $('input[name="iTR1701Q37B"]').val((returnData));
            $('input[name="iTR1701Q37B"]').change();

            $('input[name="iTR1701Q39B"]').val((getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));
            $('input[name="iTR1701Q39B"]').change();
            spouseComputation();
        });

//        $('input[name="iTR1701Q36B"]').number(true, 2);
    });

    $('input[name="iTR1701Q37B"],input[name="iTR1701Q38N"]').change(function() {
        $('input[name="iTR1701Q39B"]').val((getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));
        $('input[name="iTR1701Q39B"]').change();

        spouseComputation();
    });

    $('input[name="iTR1701Q40B"],input[name="iTR1701Q40D"],input[name="iTR1701Q40F"]').change(function() {
        $('input[name="iTR1701Q40H"]').val((getInt($('input[name="iTR1701Q40B"]').val()) + getInt($('input[name="iTR1701Q40D"]').val()) + getInt($('input[name="iTR1701Q40F"]').val())));
        $('input[name="iTR1701Q40H"]').change();

        spouseComputation();
    });

    $('input[name="iTR1701Q38B"],input[name="iTR1701Q38D"],input[name="iTR1701Q38F"],input[name="iTR1701Q38H"],input[name="iTR1701Q38L"]').change(function() {
        $('input[name="iTR1701Q38N"]').val((getInt($('input[name="iTR1701Q38B"]').val()) + getInt($('input[name="iTR1701Q38D"]').val()) + getInt($('input[name="iTR1701Q38F"]').val()) + getInt($('input[name="iTR1701Q38H"]').val()) + getInt($('input[name="iTR1701Q38L"]').val())));
        $('input[name="iTR1701Q38N"]').change();

        $('input[name="iTR1701Q39B"]').val((getInt($('input[name="iTR1701Q37B"]').val()) - getInt($('input[name="iTR1701Q38N"]').val())));
        $('input[name="iTR1701Q39B"]').change();

        spouseComputation();
    });
		
	$('input[name="item1"],' + 
		' input[name="item5[]"],' +
		' input[name="item11"],' +
		' input[name="item6"],' +
		' input[name="item19"],' +
		' input[name="item9"],' +
		' input[name="item15"],' +
		' input[name="item14"],' +
		' input[name="iTR1701Q26A"],' +
		' input[name="iTR1701Q28A"],' +
		' input[name="iTR1701Q29A"],' +
		' input[name="iTR1701Q30A"],' +
		' input[name="iTR1701Q31A"],' +
		' input[name="iTR1701Q32A"],' +
		' input[name="iTR1701Q33A"],' +
		' input[name="iTR1701Q34A"],' +
		' input[name="iTR1701Q36A"],' +
		' input[name="iTR1701Q37A"],' +
		' input[name="iTR1701Q38G"],' +
		' input[name="iTR1701Q38M"],' +
		' input[name="iTR1701Q39A"],' +
		' input[name="iTR1701Q40G"],' +
		' input[name="iTR1701Q41A"],' +
		' input[name="iTR1701Q41C"],' +
		' input[name="iTR1701Q28B"],' +
		' input[name="iTR1701Q30B"],' +
		' input[name="iTR1701Q38N"],' +
		' input[name="iTR1701Q39B"],' +
		' input[name="iTR1701Q41B"]'
	).prop('readonly',true);
})

function taxpayerComputation() {
    $('input[name="iTR1701Q41A"]').val((getInt($('input[name="iTR1701Q39A"]').val()) + getInt($('input[name="iTR1701Q40G"]').val())));
    $('input[name="iTR1701Q41A"]').change();

    $('input[name="iTR1701Q41C"]').val((getInt($('input[name="iTR1701Q41A"]').val()) + getInt($('input[name="iTR1701Q41B"]').val())));
    $('input[name="iTR1701Q41C"]').change();
}

function spouseComputation() {
    $('input[name="iTR1701Q41B"]').val((getInt($('input[name="iTR1701Q39B"]').val()) + getInt($('input[name="iTR1701Q40H"]').val())));
    $('input[name="iTR1701Q41B"]').change();

    $('input[name="iTR1701Q41C"]').val((getInt($('input[name="iTR1701Q41A"]').val()) + getInt($('input[name="iTR1701Q41B"]').val())));
    $('input[name="iTR1701Q41C"]').change();
}