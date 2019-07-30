<?php
	function _CreateEmailMessage($email, $subdomain){
		
		@require_once('registration/include_dao.php');
		$account = DAOFactory2::getMedAccountsDAO()->queryByEmail($email);
		$id = intval($account[0]->id) + 64;

		return '
			<html>
				<head>	
					<style>
						.clear{clear: both;}
						.globalcontainer{
							width: 728px;
							background-color: #fcfcfc;
							box-shadow: 0px 1px 5px 0px #888;
						}
						.header{
							padding: 10px 0px;
							background-color: #fcfcfc;
							border-bottom: 8px solid #365879;
							box-shadow: 0px 4px 5px 0px #888;
						}
						.logo{
							width: 200px;
							float: left;
						}
						.nav{
							width: 215px;
							min-height: 50px;
							float: right;
							padding: 45px 15px 0 0;
							color: #398f72;
							font: 17px Arial;
						}
						.content{
							padding: 20px;
						}
						.welcomemessage{
							padding: 10px 0px;
							text-align: center;
							font: 20px Arial;
							font-weight: bold;
							color: #398f72;
						}
						.paragraphmessage{
							padding: 15px 0px 10px;
							font: 13px Arial;
							color: #777;
						}
						.note{
							margin-top: 20px;
							border-top: 1px solid #d4d4d4;
							padding: 15px 0px 0px;		
							font: 11px Arial;
							color: #777;
						}
						.footer{
							border-top: 8px solid #365879;
							text-align: center;
							font: 13px Arial;
							color: #398f72;
							padding: 10px;
						}
					</style>
				</head>
				<body>
					<div style="padding: 10px;">
						<div class="globalcontainer">
							<div class="header">
								<div class="logo">
									<img src="http://'.DOMAIN.'/public/images/usv_logo_long.png" style="height: 100px;"/>
								</div>
								<div class="nav">
									<a href="http://'. $subdomain .'.'.DOMAIN.'/login">GO TO MY ACCOUNT</a>
								</div>
								<div class="clear"></div>
							</div>
							<div class="content">
								<br>
								<div>
									Hi [registered name/email add],
									<br>
									<br>
									You must confirm your subscription first by clicking this: <a href="">http://rbyumang-1.med-dev.unlibooks.com/login</a>
									<br>
									<br>
									Thanks again for registering.If you have any questions or concerns, feel free to contact us.
								</div>
								
								<div>
									<br>
									<br>
									<br>
									Thank you.<br>
									Unlibooks Team
									
								</div>
								
								<div class="note">
									Note: This message may contain confidential and privileged information. If you are not the intended recipient, you are hereby notified 
									that any dissemination, disclosure, copying or taking any action in reliance on the contents of this information is strictly prohibited.
								</div>
							</div>
							<div class="footer">
								@ All rights reserve - UBMed 2015: Aktus Global Management Inc.
							</div>
						</div>
					</div>
				</body>
			</html>
		';


	}
		function _sendConfirmEmailMessage($email, $subdomain){
		// echo $email;
		@require_once('registration/include_dao.php');
		$account = DAOFactory2::getServiceAccountsDAO()->queryByEmail($email);
		$user = DAOFactory::getTblUserDAO()->queryByEmailAddress($email);
		$user = $user[0];
		$id = intval($account[0]->id) + 64;

		return '
			<html>
				<head>	
					<style>
						.clear{clear: both;}
						.globalcontainer{
							width: 728px;
							background-color: #fcfcfc;
							box-shadow: 0px 1px 5px 0px #888;
						}
						.header{
							padding: 10px 0px;
							background-color: #fcfcfc;
							border-bottom: 8px solid #365879;
							box-shadow: 0px 4px 5px 0px #888;
						}
						.logo{
							width: 200px;
							float: left;
						}
						.nav{
							width: 215px;
							min-height: 50px;
							float: right;
							padding: 45px 15px 0 0;
							color: #398f72;
							font: 17px Arial;
						}
						.content{
							padding: 20px;
						}
						.welcomemessage{
							padding: 10px 0px;
							text-align: center;
							font: 20px Arial;
							font-weight: bold;
							color: #398f72;
						}
						.paragraphmessage{
							padding: 15px 0px 10px;
							font: 13px Arial;
							color: #777;
						}
						.note{
							margin-top: 20px;
							border-top: 1px solid #d4d4d4;
							padding: 15px 0px 0px;		
							font: 11px Arial;
							color: #777;
						}
						.footer{
							border-top: 8px solid #365879;
							text-align: center;
							font: 13px Arial;
							color: #398f72;
							padding: 10px;
						}
					</style>
				</head>
				<body>
					<div style="padding: 10px;">
						<div class="globalcontainer">
							<div class="header">
								<div class="logo">
									<img src="http://'.DOMAIN.'/public/images/usv_logo_long.png" style="height: 100px;"/>
								</div>
								<div class="nav">
									<a href="http://'. $subdomain .'.'.DOMAIN.'/login">GO TO MY ACCOUNT</a>
								</div>
								<div class="clear"></div>
							</div>
							<div class="content">
								<br>
								<div>
									Hi '.$email.',
									<br>
									<br>
									You must confirm your subscription first by clicking this: 
										<a href="http://'. $subdomain .'.'.DOMAIN.'/login?email='.$email.'&code='.md5(md5($user->password)).'&autologin=true">
											http://'. $subdomain .'.'.DOMAIN.'
										</a>
									<br>
									<br>
									Thanks again for registering.If you have any questions or concerns, feel free to contact us.
								</div>
								
								<div>
									<br>
									<br>
									<br>
									Thank you.<br>
									Unlibooks Team
									
								</div>
								
								<div class="note">
									Note: This message may contain confidential and privileged information. If you are not the intended recipient, you are hereby notified 
									that any dissemination, disclosure, copying or taking any action in reliance on the contents of this information is strictly prohibited.
								</div>
							</div>
							<div class="footer">
								@ All rights reserved - UBRetail 2016: Aktus Global Management Inc.
							</div>
						</div>
					</div>
				</body>
			</html>
		';


	}
?>
<!--<div class="paragraphmessage">
	Please click <a href="http://'. $subdomain .'.'.DOMAIN.'/login&verify='. $id .'">here</a> to confirm that you own this account.
</div>-->