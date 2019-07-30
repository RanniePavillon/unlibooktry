<style>
     .contnt{
        /*background-color: #837F7F;*/
        /*width: 400px;*/
        height: 100%;
        margin: 0 auto;
        padding-top: 30px;
    }

    .optcontent{
        width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 15px;
		font-family:verdana;
		font-size:12px;
        /*margin-top: 50px;*/
		margin-top: 18px;
    }

    .okSubmit{
          display: block;
		  margin: 0 auto;
		  width: 63px;
		  height: 25px;
		  background-color:rgb(167, 12, 12);
		  border: none;
		  color: #fff;
		  font-weight: bold;
		  border-radius: 3px;
		  cursor:pointer;
    }
	.linestand {
		z-index:-1;
	}
	.hrlink{
		z-index:-1;
	}
	.img2 {
	  position: absolute;
	  margin-left: 24px;
	  height: 17px;
	  z-index: -1 !important;
	  top: 210px;
	}
	.red {
		color: red;
		font-size: 12px;
		font-family: verdana;
	}
	.mopPopBack{
		overflow: hidden !important;
	}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="popup mopPopBack">
    <div class="contnt">
        <div class="optcontent boxshadow">
            <form method="post" class="mopForm">
                <span style="font-weight:bold;">Mode of Payment:</span>
                <ul>
                    <li><input type="radio" name="modeOfPayment" checked value="osd" required>Optional Standard Deduction (Automatic maximum deduction of 40% of income even without supporting receipts) <span class="red OSD">You cannot change this for 1 year</span></li>
                    <li   style="margin-top: 15px;"><input type="radio" name="modeOfPayment" value="itemized" required>Itemized Deduction (Can be used if expenses is more than 40% of income. Should provide expense receipts) <span class="red Itemized">You cannot change this for 1 year</span></li>
                </ul>
				<br>
				<br>
				<b>Are you a Top 5,000 Individual Taxpayer?</b>
                <ul>
                   <li><input type="radio" name="individualTaxPayers" value="yes"> Yes</li>
                   <li style="margin-top:10px;"><input type="radio" checked name="individualTaxPayers" value="no"> No</li>
                </ul>
				
                <input type="submit" value="OK" class="okSubmit"/>
            </form>
        </div>
    </div>
</div>
<script>
$(function(){
	$('.mopForm').submit(function(){
		$.post(URL + 'expenses/setMop',$(this).serialize())
			.done(function(returnData){
				if(returnData == 0){
					$('.mopPopBack').remove();
					location.reload();
				} else {
					alert(returnData);
					location.reload();
				}
			})
			.fail(function(){
				location.reload();
			});
		return false;
	})
})
</script>

<script>
$(function() {
	$('input[name="modeOfPayment"]').change(function(){
		value = $('input[name="modeOfPayment"]:checked').val();
		$('.Itemized').addClass('hidden');
		$('.OSD').addClass('hidden');
		if (value === 'osd') {
			$('.OSD').removeClass('hidden');
		} else if (value === 'itemized') {
			$('.Itemized').removeClass('hidden');
		}
	});
	$('input[name="modeOfPayment"]').change();
});
</script>