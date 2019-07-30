<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<link rel="stylesheet" href="<?php echo URL; ?>views/invoice/css/widhold_tax.css"/>
<style>
	.ul {
		list-style: none;
	}
</style>
<div class="popBack">
    <div class="contnt">
        <div class="optcontent boxshadow">
            <form method="post" action="<?php echo URL ?>invoice/whtTax" class="whtForm">
                Select your current year's gross income:
				
			   <ul style="list-style: none;">
                    <li><input type="radio" name="whtTax" value="10%" checked required>10% for Income < 720,000</li>
                    <li style="margin-top:10px;"><input type="radio" name="whtTax" value="15%" required>15% for income > 720,000</li>
                </ul>
                <input type="submit" value="OK" class="submitok"/>
            </form>
        </div>
    </div>
</div>

<script>
	$('.whtForm').submit(function(){
		$.post(URL + 'invoice/setWhtCompany',$(this).serialize())
			.done(function(returnData){
				if(returnData != 0){
					alert(returnData);
				}
				$('.popBack').html('');
				$('.createNPAyment').click();
			});
		
			
		return false;
	});
	/* $('.submitok').click(function() {
		
		$.post(URL + 'invoice/enterPayment')
                .done(function(returnData) {
                    $('.popup').html(returnData);
                    $('.popup').removeClass('hidden');
					

                    $('.cancel').click(function() {
                        $('.popup').addClass('hidden');
                        $('.popup').html('');
                    });
                })
                .fail(function() {
                    alertWithoutNotice('Connection Error!');
                });
        return false;
    }); */
</script>


