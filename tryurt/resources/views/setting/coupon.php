<style>
.mainformcoupon{
	width:100%;
}
.formcoupon{
	width:300px;
	margin:auto;
	padding:25px;
	font-family:verdana;
	font-size:12px;
	background:#fff;
	margin-top:30px;
	
}
.submitcontainer{
	text-align:center;
}
.submitbutton{
	width: 100px;
    height: 27px;
    margin-top: 38px;
    border-radius: 5px;
    border: none;
	color:#fff;
	background-color:#183867;
}
.couponcode{
	font-size:12px;
	font-family:verdana;
	height:27px;
	width:151px;
}
.close1Clienthmo{
	float:right;
	background:none;
	background: transparent;
    color: black;
    border: none;
    border-radius: 2px;
    font-family: Arial black;
    font-weight: bold;
    font-size: 24px;
    outline-style: none;
    cursor: pointer;
    float: right;
}
</style>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/popup.css"/>
<div class="mainformcoupon">
	<form>
		<div class="boxshadow formcoupon">
			<input type="button" class="close1Client close1Clienthmo popx" value="x" style="margin-right:-19px;margin-top:-27px;">
			<div style="margin-top:15px;">Enter Coupon Code: <input type="text" class="couponcode"></div>
			<div class="submitcontainer"><input type="submit" class="submitbutton addsavebutton" value="Submit"></div>
		</div>
	</form>
</div>