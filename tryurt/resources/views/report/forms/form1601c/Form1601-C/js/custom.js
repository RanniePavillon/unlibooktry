$(function() {
    $('.item_2yes').click(function() {
        $('.item_2yes').val('');
        $(this).val('x');

        tempVal = $(this).parent().find('#item2').val();

        $('#item2Value').val(tempVal);
    });

    $('.item_4').click(function() {
        $('.item_4').val('');
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

    $('input[name="part2Item15"], input[name="part2Item16A"], input[name="part2Item16B"], input[name="part2Item16C"]').change(function() {
        part2Item15 = getInt($('input[name="part2Item15"]').val());
        part2Item16A = getInt($('input[name="part2Item16A"]').val());
        part2Item16B = getInt($('input[name="part2Item16B"]').val());
        part2Item16C = getInt($('input[name="part2Item16C"]').val());

        // part2Item17 = part2Item15 + part2Item16A + part2Item16B + part2Item16C;
        part2Item17 = part2Item15 - (part2Item16A + part2Item16B + part2Item16C);

        $('input[name="part2Item17"]').val(part2Item17);
        $('input[name="part2Item17"]').change();
    });

    $('input[name="part2Item18"], input[name="part2Item19"]').change(function() {
        part2Item18 = getInt($('input[name="part2Item18"]').val());
        part2Item19 = getInt($('input[name="part2Item19"]').val());

        part2Item20 = part2Item18 + part2Item19;

        $('input[name="part2Item20"]').val(part2Item20);
        $('input[name="part2Item20"]').change();
    });

    $('input[name="part2Item21A"], input[name="part2Item21B"]').change(function() {
        part2Item21A = getInt($('input[name="part2Item21A"]').val());
        part2Item21B = getInt($('input[name="part2Item21B"]').val());

        part2Item22 = part2Item21A + part2Item21B;

        $('input[name="part2Item22"]').val(part2Item22);
        $('input[name="part2Item22"]').change();
    });

    $('input[name="part2Item20"], input[name="part2Item22"]').change(function() {
        part2Item20 = getInt($('input[name="part2Item20"]').val());
        part2Item22 = getInt($('input[name="part2Item22"]').val());

        part2Item23 = part2Item20 - part2Item22;

        $('input[name="part2Item23"]').val(part2Item23);
        $('input[name="part2Item23"]').change();
    });

    $('input[name="part2Item24A"], input[name="part2Item24B"], input[name="part2Item24C"]').change(function() {
        part2Item24A = getInt($('input[name="part2Item24A"]').val());
        part2Item24B = getInt($('input[name="part2Item24B"]').val());
        part2Item24C = getInt($('input[name="part2Item24C"]').val());

        part2Item24D = part2Item24A + part2Item24B + part2Item24C;

        $('input[name="part2Item24D"]').val(part2Item24D);
        $('input[name="part2Item24D"]').change();
    });

    $('input[name="part2Item23"], input[name="part2Item24D"]').change(function() {
        part2Item23 = getInt($('input[name="part2Item23"]').val());
        part2Item24D = getInt($('input[name="part2Item24D"]').val());

        part2Item25 = part2Item23 + part2Item24D;

        $('input[name="part2Item25"]').val(part2Item25);
        $('input[name="part2Item25"]').change();
    });

});