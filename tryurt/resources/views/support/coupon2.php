<style>
.couponform{
	width:100%;
}
.couponcontainer{
	  width: 400px;
	  margin: auto;
	  margin: auto;
	  padding: 20px;
	  background-color: #fff;
	  margin-top: 30px;
	  padding-bottom: 45px;
}
.formcoupon{
	margin-left:10px;
	padding-top:25px;
	font-family:verdana;
	font-size:12px;
}
.selectmember{
	  width: 163px;
	  height: 27px;
	  font-size: 12px;
	  padding: 5px;
	  margin-left: 10px;
}
.couponclose{
	background: none;
	  border: none;
	  float: right;
}
.maincon{
	margin-top:25px;
}
.buttoncouponcon{
	text-align:center;
}
.submitcoupon{
	margin-top: 59px;
	  width: 169px;
	  height: 38px;
	  border-radius: 5px;
	  border: none;
	  color: #fff;
	  font-weight: bold;
	  font-family: tahoma;
	  font-size: 15px;
	  text-align: center;
	  background-color: rgb(255, 179, 40);
}
.titlecouponform{
	text-align:center;
	font-family:verdana;
	font-size:12px;
	margin-top:15px;
}
.bodycoupon{
	margin-top:25px;
}
</style>
<link rel="stylesheet" href="/med.unlibooks.com/public/css/popup.css">
<div class="couponform">
	<div class="couponcontainer boxshadow">
		<input type="button" class="popx couponclose">
		<form class="formcoupon">
			<div class="maincon">
				<div class="titlecouponform">Unlibooks Medical has <br> Exclusive Offer to PCP, PDA, PMA Members <br> & Medasia Doctors</div>
				<div class="bodycoupon">Please choose your membership: 
					<select class="selectmember">
						<option value="PCP">PCP</option>
						<option value="PDA">PDA</option>
						<option value="PMA Members">PMA Members</option>
						<option value="Medasia Doctors">Medasia Doctors</option>
					</select>
					
					<div class="buttoncouponcon"><input type="submit" class="submitcoupon" value="GET COUPON CODE"></div>
				</div>
			</div>
		</form>
	</div>
<div>

<script>
	 $(function() {
        $('.buttoncouponcon').click(function() {
			// alert(URL);
			type = $('.selectmember').val();
			$.post(URL + 'support/sendCuppon',{'type':type})
				.done(function(returnData){
					if(returnData != 0){
						alert(returnData);
					} else {
						alert('Thank you. Your discount coupon code was sent to your email. Please check your inbox or spam folder.');
					}
					$('.popBack').addClass('hidden');
					$('body').css('overflow','auto');
				});
			return false;
		})
	})
</script>