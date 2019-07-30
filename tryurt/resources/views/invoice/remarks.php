<style>
.remarksHolder{
	width: 500px;
	margin: 80 auto;
	box-shadow: 1px 1px 33px #c8c8c8;
	background:#fff;
}
.remarksCont{
	padding:20px;
	margin-left:20px;
}
.remarksDiv{
	font-family:Verdana;
	font-size:12px;
}
.remarksText{
	width:418px;
	height:100px;
	border:1px solid #000;
	text-align: left;
}
textarea {
    max-width: 418px; 
    max-height: 100px;
}
.closeCNTsexp {
    background-image: url('<?= URL?>public/images/popx.png');
    background-size: 100% 100%;
    border: none;
    width: 23px;
}
.okDiv{
	text-align: right;
    margin-right: 43px;
    padding-bottom: 20px;
}
.okButton{
	background:#7BA931;
	color:#fff;
	border:none;
	border-radius:5px;
	width:80px;
	height:27px;
	font-weight:bold;
	font-family:Verdana;
}
.img2{
	z-index:-1!important;
}
.img3{
	z-index:-1!important;
}
</style>
<div class="remarksHolder">
	<div style="text-align:right;">
		<input type="button" class="closeCNTsexp">
	</div>
	<div class="remarksCont">
		<div class="remarksDiv">
			<div><b>REMARKS:</b></div>
			<br/>
			<div>
				<textarea  class="remarksText" required></textarea>
			</div>
		</div>
	</div>
	<div class="okDiv">
		<input type="button" value="OK" class="okButton">
	</div>
</div>