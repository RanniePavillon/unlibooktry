<?php
/* 
	define('DATABASEHOST','192.168.2.193');
	define('MAINDATABASEUSER','root');
	define('MAINDATABASEPASS','scp123');
	define('MAINDATABASENAME','unlibooks_for_trading_main');
	define('MAINURL','/dev_urt.unlibooks.com/');
// */
	// /* 
	define('DATABASEHOST','localhost');
	define('MAINDATABASEUSER','unlibook_clients');
	define('MAINDATABASEPASS','sjc-123');
	define('MAINDATABASENAME','unlibook_for_retail_main');
	define('MAINURL','http://urt.unlibooks.com/');
 // */


// require_once('registration/include_dao.php');
require_once('registration/include_dao_4.php');
// $expiry = ServiceAccountsMySqlExtDAO::subscribedAccounts();
date_default_timezone_set('Asia/Taipei');
$expiry = ServiceAccountsMySqlExtDAO::subscribedAccountsDeadLine(date('Y-m-d'));

// exit;
require_once 'registration/amember_api.php';
require_once 'billing.php';
if(isset($expiry) && !empty($expiry)){
	// echo '<pre>';
	foreach($expiry as $var=>$each){
		$start = new DATETIME(date("M d Y "));//, strtotime($each['date_start'])));
		$expired = new DATETIME(date("M d Y ", strtotime($each['date_expire'])));
		
		$daysRemaining = $start->diff($expired);
		
		$days = $daysRemaining->format("%r%a");
		$day = 0;
		
		$type = 'subscription';
		if($each['type'] == 'free'){
			$type = 'free trial';
		}
		//old link http://sjcgroup.net/member/signup/0SHUaaew
		$msg = 'Your '.$type.' will expire in '.$days.' day(s). 
					<a href="http://sjcgroup.net/member/signup/wF1q7pov" target="_blank">RENEW YOUR SUBSCRIPTION NOW!</a>';
		
		if($days == 7 || $days == 1 || $days == 2 || $days == 3 || $days == 0){
			$day = $days;
		} else {
			continue;
		}
		
		if($day == 0){
			if($each['type'] == 'free'){
				$msg = ' Your 30-days free trial has expired.<br>
						Please <a href="http://sjcgroup.net/member/signup/wF1q7pov" target="_blank"><b>subscribe now</b></a> to continue.';
			} else {
				$msg = 'Your account has been temporarily disabled.<br> 
						Please <a href="http://sjcgroup.net/member/signup/wF1q7pov" target="_blank"><b>renew your subscription</b></a> to continue.';
			}
		}
/* 
		$code = $each['code'];
		
		if($each['code'] == ''){
			$coupon = ServiceAccountsMySqlExtDAO::getOneCoupon();
			
			$code = $expiry[$var]['code'] = $coupon->code;
			$data = array();
			$data['trans_date'] = date('Y-m-d');
			$data['coupon_code_id'] = $coupon->id;
			$data['account_id'] = $each['id'];
			$data['email_add'] = $each['email'];
			
			ServiceAccountsMySqlExtDAO::updateCouponCodeDAO($coupon->id,'used');
			
			ServiceAccountsMySqlExtDAO::insertCouponTrans($data);
		} */
		$vat = $discount = $rate = $netAmount  = $oAmount = $amount = $address = $name = '';
		
		$oAmount = 1999.00;
		$netAmount = 1784.82;
		$discount = 0;
		$vat = 107.09;
		$amount = 1999.00;
		
		if($each['receipt_id'] != ''){
			$api = new AmemberAPI();
			$each['expiration'] = $each['date_expire'];
			$info = $api->validate_receipt($each['receipt_id']);
			$amount = $result = $api->get_lastpayment($info->s_user_id, $info->s_product);
			$price = $result = $api->get_lastpayment_v2($info->s_user_id, $info->s_product);
			
			// print_r($price);
			
			$name = $info->s_name;
			$address = $info->s_address;
			
			$oAmount = ($price->original) / 1.12;
			$netAmount = ($price->original * ( $price->discount_percentage / 100 )) / 1.12;
			$discount = ($price->original * ( (100 - $price->discount_percentage) / 100 ) ) / 1.12;
			$vat = $netAmount * 0.12;
			$amount = $price->paid;
			// echo '<pre>';
			// print_r($info);
			// print_r($result);
		} else {
			
		}
		$type = 'subscription';
		if($each['type'] == 'free'){
			$type = 'free trial';
		}
		
		$to = $each['email'];
		//$to = 'vdmetran@scp-ph.com';
		$subject = 'UNLIBOOKS RETAIL';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		$headers .= 'To: '.$name.'<'.$to. "> \r\n";
		$headers .= 'From: UNLIBOOKS RETAIL<urt@unlibooks.com>' . "\r\n";
		$headers .= 'Bcc: vdmetran@scp-ph.com' . "\r\n";

		
		$message = '
			<div style="width: 600px;">
				<div>
					'.$msg.'
				</div>
				<br/>
				<div>
					Customer Name: '.$name.'
				</div>
				<br/>
				<div>
					Address: '.$address.'
				</div>
				<br/>
				<div>
					Particular:  Subscription for Unlibooks
				</div>
				<br/>
				<div>
					Amount:      '. getFloat($oAmount) .'
				</div>
				<br/>
				<div>
					Discount:      ('. getFloat($discount) .')
				</div>
				<br/>
				<div>
					Net Amount: '. getFloat($netAmount) .'
				</div>
				<br/>
				<div>
					VAT:               '. getFloat($vat) .'
				</div>
				<br/>
				<div>
					Total Amount Due: '. getFloat($amount) .'
				</div>
				<br/>
				<div>
					Regards,<br/>
					Unlibooks Team
				</div>
			</div>
		';
		/* if($each['type'] == 'subscribed'){
			echo $message;
		} */
//		echo $message;
		mail($to, $subject, $message, $headers);
	}
	
	
}
	
?>