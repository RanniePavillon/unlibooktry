$(function(){
	$('input[name="item2"],' + 
		' input[name="item9[]"],' +
		' input[name="item10"],' +
		' input[name="item11"],' +
		' input[name="item12"],' +
		' input[name="item13"],' +
		' input[name="item14"],' +
		' input[name="item15"],' +
		' input[name="item16"],' +
		' input[name="item17"],' +
		' input[name="item20D"],' +
		' input[name="item21"]'
	).prop('readonly',true);
	
    $('input[name="item20A"], input[name="item20B"], input[name="item20C"]').change(function() {
        item20A = getInt($('input[name="item20A"]').val());
        item20B = getInt($('input[name="item20B"]').val());
        item20C = getInt($('input[name="item20C"]').val());

        item20D = item20A + item20B + item20C;

        $('input[name="item20D"]').val(item20D);
        $('input[name="item20D"]').change();
    });
	
    $('input[name="item19"], input[name="item20D"]').change(function() {
        item19 = getInt($('input[name="item19"]').val());
        item20D = getInt($('input[name="item20D"]').val());

        item21 = item19 + item20D;

        $('input[name="item21"]').val(item21);
        $('input[name="item21"]').change();
    });
})
















