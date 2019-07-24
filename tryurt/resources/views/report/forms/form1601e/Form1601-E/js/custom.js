$(function() {
    $('.item_2').click(function() {
        $('.item_2').val('');
        $(this).val('x');

        tempVal = $(this).parent().find('#item2').val();

        $('#item2Value').val(tempVal);
    });

    $('.item_4x').click(function() {
        $('.item_4x').val('');
        $(this).val('x');

        tempVal = $(this).parent().find('#item4').val();

        $('#item4Value').val(tempVal);
    });

    $('.item_12').click(function() {
        $('.item_12').val('');
        $(this).val('x');

        tempVal = $(this).parent().find('#item12').val();

        $('#item12Value').val(tempVal);
    });

    $('.item_13').click(function() {
        $('.item_13').val('');
        $(this).val('x');

        tempVal = $(this).parent().find('#item13').val();

        $('#item13Value').val(tempVal);
    });

    $('.input1601e18').click(function() {
        $('.input1601e18').val('');
        $(this).val('x');

        tempVal = $(this).parent().find('#item18').val();

        $('#item18Value').val(tempVal);
    });

    $('input[name="item14"], input[name="item15C"]').change(function() {
        item14 = getInt($('input[name="item14"]').val());
        item15C = getInt($('input[name="item15C"]').val());

        item16 = item14 - item15C;

        $('input[name="item16"]').val(roundFloat(item16));
        $('input[name="item16"]').change();
    });

    $('input[name="item17A"], input[name="item17B"], input[name="item17C"]').change(function() {
        item17A = getInt($('input[name="item17A"]').val());
        item17B = getInt($('input[name="item17B"]').val());
        item17C = getInt($('input[name="item17C"]').val());

        item17D = item17A + item17B + item17C;

        $('input[name="item17D"]').val(roundFloat(item17D));
        $('input[name="item17D"]').change();
    });

    $('input[name="item16"], input[name="item17D"]').change(function() {
        item16 = getInt($('input[name="item16"]').val());
        item17D = getInt($('input[name="item17D"]').val());

        item18 = item16 + item17D;

        $('input[name="item18"]').val(roundFloat(item18));
        $('input[name="item18"]').change();
    });
    $('input[name="item15A"], input[name="item15B"]').change(function() {
        item15A = getInt($('input[name="item15A"]').val());
        item15B = getInt($('input[name="item15B"]').val());

        item15C = item15A + item15B;

        $('input[name="item15C"]').val(roundFloat(item15C));
        $('input[name="item15C"]').change();
    });
			
	$('input[name="item1"],' + 
		' input[name="item5[]"],' +
		' input[name="item10"],' +
		' input[name="item6"],' +
		' input[name="item7"],' +
		' input[name="item9"],' +
		' input[name="item11"],' +
		' input[name="item8"],' +
		' input[name="item16"],' +
		' input[name="item18"],' +
		' input[name="item14"],' +
		' input[name="item15C"],' +
		' input[name="item17D"]'
	).prop('readonly',true);
	

});