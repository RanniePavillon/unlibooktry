<style>
.contntconfirm{
	width:100%;
}
.confirm{
	width:1000px;
	margin:auto;
	background-color:#fff;
	
}
#lowerLink, .belowTop, .toremove{
	display:none;
}
#headerHead{
	height:95px !important;
}
.hrconfirm{
	background-color: #c51400;
	height:3px;
	width: 979px;
	border:none;
}
.confirmform{
	padding-top:25px;
	padding-top:35px;
	padding-bottom: 155px;
	
}
.confirmBody{
	padding-top:25px;
	padding-left:40px;
	font-family:verdana;
	font-size:15px;
}
.phone{
	width: 44px;
    height: 38px;
    margin-top: 4px;
    margin-left: 20px;
}
.textphone{
	margin-top: -25px;
    margin-left: 83px;
}

.resend {
	font-family: agency fb2;
	font-size: 20px;
	font-weight: bold;
	border-radius: 5px;
	color: rgb(230, 230, 230);
	-moz-border-radius: 30px;
	background: rgb(28, 181, 239);
	background: -moz-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
	background: -webkit-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
	background: -o-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
	background: -ms-linear-gradient(90deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
	background: linear-gradient(0deg, rgb(156, 26, 11) 30%, rgb(197, 56, 40) 78%);
	-moz-box-shadow: 0px 2px 1px rgba(50, 50, 50, 0.75);
	border:none;
	width: 218px;
    text-align: center;
    padding: 7px;
    border: none;
    margin-top: 15px;

}
</style>
<?php
	$user = DAOFactory::getTblUserDAO()->load(Session::getSession('userId'));
?>

<div class="contntconfirm">
	<div class="confirm">
			
			<div style="" class="confirmform">
				<hr class="hrconfirm">
				<div class="confirmBody">
					Hi <?= $user->fullName != '' ? ucfirst($user->fullName) : ($user->emailAddress) ?>,
					<br>
					<br> 
					You have to confirm your email address first, <u><b><?= ($user->emailAddress) ?></b></u> to continue.
					<br>
					<br>
					Check your inbox to confirm your account.
					<br>
					<br> 
					Need assistance? Feel free to contact us:
					<br>
					<br>
					 <div><img class="phone"  style="" src="<?= URL ?>public/images/phone.png"> <div class="textphone">+63977 6495377</div></div>
					<br>
					<div style="padding-bottom:20px;"><img class="phone"  style="" src="<?= URL ?>public/images/email.jpg"> <div class="textphone">vip@unlibooks.com</div> </div>
					<?php if(!Session::getSession('isResend')){ ?>
					<div>
						<a href="<?= URL ?>user/resendConfirmation">
						<input type="button" value="Resend Email Confirmation" class="resend">
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
	</div>
</div>

<?php Session::setSession('firstlog', 1); ?>