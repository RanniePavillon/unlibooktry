<?php
	define('DATABASEHOST','192.168.2.193');
	define('MAINDATABASEUSER','root');
	define('MAINDATABASEPASS','scp123');
	define('MAINDATABASENAME','unlibooks_for_services_main');
	define('MAINURL','/service/');


// require_once('registration/include_dao.php');
require_once('../../registration/include_dao_4.php');
$expiry = ServiceAccountsMySqlExtDAO::subscribedAccounts();

require_once '../amember_api.php';
require_once 'billing.php';

if(isset($expiry)){
	foreach($expiry as $each){
		if($each['type'] == 'free'){
			
			$start = new DATETIME(date("M d Y "));//, strtotime($each['date_start'])));
			$expired = new DATETIME(date("M d Y ", strtotime($each['date_expire'])));
						
			$daysRemaining = $start->diff($expired);
			
			 $days = $daysRemaining->format("%r%a");
			$day = 0;
			
			if($days == 7 || $days == 1 || $days == 2 || $days == 3 || $days == 0){
				$day = $days;
			} else {
				continue;
			}
			$msg = '';
			if($day == 0){
				$msg = ' Your 30-days free trial has expired.<br>
						Please <a href="http://sjcgroup.net/member/signup/ubservicebasic" target="_blank"><b>subscribe now</b></a> to continue.';
			} else {
				$msg = '
					Your trial period will expire in '.$day.' day(s).<br>
					To use the system  after this period, please <a href="http://sjcgroup.net/member/signup/ubservicebasic" target="_blank"><b>subscribe now !</b></a>
				';
			}
		}elseif($each['type'] == 'subscribed'){
			$start = new DATETIME(date("M d Y "));//, strtotime($each['date_start'])));
			$expired = new DATETIME(date("M d Y ", strtotime($each['date_expire'])));
						
			$api = new AmemberAPI();
			$payment = $each;
			$payment['expiration'] = $each['date_expire'];
			$info = $result = $api->validate_receipt($payment['receipt_id']);
			// print_r($result);
			$result = $api->get_lastpayment($result->s_user_id, $result->s_product);
			
			$daysRemaining = $start->diff($expired);
			
			$days = $daysRemaining->format("%r%a");
			$day = 0;
			
			$msg = '';
			if($days == 0){
				$msg = 'Your account has been temporarily disabled.<br> 
						Please <a href="http://sjcgroup.net/member/signup/ubservicebasic" target="_blank"><b>renew your subscription</b></a> to continue.';
			} else {
				if($days == 7 || $days == 1 || $days == 2 || $days == 3){
					$day = $days;
					 $msg = 'Your subscription will expire in '.$day.' day(s).<br>
						Please <a href="http://sjcgroup.net/member/signup/ubmedbasic" target="_blank"><b>renew your subscription</b></a> to continue.';
					$msg .= returnBilling($payment, $info, $result);
				} else {
					continue;
				}
			}
		}
			 $to = $each['email'];
			 $subject = 'Welcome to UNLIBOOKS SERVICE';
			 $headers  = 'MIME-Version: 1.0' . "\r\n";
			 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Additional headers
			 $headers .= 'To: '.$each['email']. "\r\n";
			 $headers .= 'From: UNLIBOOKS SERVICE <webmaster_med@example.com>' . "\r\n";
			 $headers .= 'Bcc: nlgesite@scp-ph.com' . "\r\n";

			$message = '
		
				<html>
					<head>
						<style>
							.mainHolder{
								width: 680px;
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
							.content{
								padding: 20px;
								margin-top: 100px;
								text-align: center;
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
						<div class="mainContainer">
							<div class="mainHolder">
								<div class="header">
									<div class="logo">
										<img src="http://service.unlibooks.com/public/images/serviceNewLogo_small.png" style="height: 100px;"/>
									</div>
									<div class="content">
										' . $msg . '
									</div>
									<div class="note">
										Note: This message may contain confidential and privileged information. If you are not the intended recipient, you are hereby notified 
										that any dissemination, disclosure, copying or taking any action in reliance on the contents of this information is strictly prohibited.
									</div>
									<div class="footer">
										@ All rights reserve - UBService 2015: Aktus Global Management Inc.
									</div>
								</div>
							</div>
						</div>
					</body>
				</html>
			';
		/* if($each['type'] == 'subscribed'){
			echo $message;
		} */
		mail($to, $subject, $message, $headers);
		
	}
}
	
?>
