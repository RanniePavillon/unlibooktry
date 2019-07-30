$(function () {
    $('#buttonCm').click(function () {
        $html = '';
        $('.chkcm:checked').each(function(){
            amount = getInt($(this).parents('tr').find('.chk_cmamount').val());
            type = $(this).parents('tr').find('.type').val();
           $html += '<input type="hidden" class="cmids" value="'+ $(this).val() +'" amount="'+ amount +'" discount_type="'+ type +'"  />';
        });
        
        $('.cm_content').html($html);
        $('body').css('overflow','auto');
        setCm();
    });
});


