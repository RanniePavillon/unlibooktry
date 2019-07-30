<style>
.sendEmailHolder{
	width:805px;
	height:auto!important;
	/* border:1px solid #000; */
	padding:20px;
	margin:auto;
}
.sendEmailCont{
	margin-top:20px;
	font-family:Verdana;
	font-size:12px;
}
.PaymentTypeFormInvoice{
	border:1px solid #000;
}

@media print{
	.hidetext{
		display:none;
	}	
	.PaymentTypeFormInvoice{
		border:none;
	}
	.sendEmailHolder{
		padding:0px;
	}
}
</style>
<div class="sendEmailHolder">
	<div class="sendEmailCont">
		<div>
			Subject: Chiltern Philippines_Bill#0000937
		</div>
		<div style="margin-top:20px;">
			<i>Dear (put Contact Person here),</i>
		</div>
		<div style="margin-top:30px;">
			<i>
				Thank you for giving us the opportunity to do business with you.
				<br>
				We support eco-friendly practices. This is an official billing sent through email.
			</i>
		</div>
		<div>
			<?php
				require_once 'print_invoice.php';
			?>
		</div>
		
		<div style="margin-top:20px;">
			<i>Please feel free to contact us at <a href="#" style="text-decoration:none;">billings@scp-ph.com</a> if you want to request for a printed copy or you have any
				concern about this billing. 
			</i>
		</div>
		<div style="margin-top:20px;">
			<i>
				Thank you and regards,
				<br>
				SCP & Co.- Billing and Collection Department
			</i>
		</div>
	<div>
</div>