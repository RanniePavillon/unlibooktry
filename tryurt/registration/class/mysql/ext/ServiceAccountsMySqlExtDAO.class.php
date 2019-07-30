<?php
/**
 * Class that operate on table 'service_accounts'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-09 09:07
 */
class ServiceAccountsMySqlExtDAO extends ServiceAccountsMySqlDAO{

	static function subscribedAccounts(){
		$txt = "
			SELECT * FROM(
				SELECT 
				med.email,
				case when api.date_start IS NULL
					then med.date_registered
					else MAX(api.date_start)
					end  date_start,
				case when api.expiration IS NULL
					then DATE_ADD(med.date_registered, INTERVAL 30 DAY)
					else MAX(api.expiration)
					end  date_expire,
				case when api.expiration IS NULL
					then 'free'
					else 'subscribed'
					end type,
				api.receipt_id
				
				FROM 
				service_accounts med
				
				LEFT JOIN 
					am_api_subscription api
				ON api.ub_user_id = med.id
				
				GROUP BY med.id
			)service
			
			
			WHERE service.date_start != '0000-00-00 00:00:00'
		";
		
		$sqlQuery = new SqlQuery2($txt);
		
		$tab = QueryExecutor2::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		return $tab;
	}
	
	static function subscribedAccountsDeadLine($date){
		// echo '<pre>'.
		$txt = "
			SELECT 
				*
				 FROM(
					SELECT 
						med.id,
						med.email,
						case when api.date_start IS NULL
							then med.date_registered
							else MAX(api.date_start)
							end  date_start,
						case when api.expiration IS NULL
							then DATE_ADD(med.date_registered, INTERVAL 30 DAY)
							else MAX(api.expiration)
							end  date_expire,
						case when api.expiration IS NULL
							then 'free'
							else 'subscribed'
							end type,
						api.receipt_id,
						'' code,
						0 coupon_id
						/*
						coupon.code,
						coupon.id coupon_id
						*/
						
						FROM 
						service_accounts med
						
						LEFT JOIN 
							am_api_subscription api
						ON api.ub_user_id = med.id
						/*
						LEFT JOIN coupon_trans cTrans
						ON cTrans.account_id = med.id
						
						LEFT JOIN coupon_code coupon
						ON coupon.id = cTrans.coupon_code_id
						*/
						/* GROUP BY med.id */
						GROUP BY med.database_name
				)service
				
				
				WHERE 
					service.date_start != '0000-00-00 00:00:00'
					AND 
					DATEDIFF(service.date_expire,'".$date."') <= 8
					AND 
					DATEDIFF(service.date_expire,'".$date."') >= 0
		";
		
		$sqlQuery = new SqlQuery2($txt);
		
		$tab = QueryExecutor2::execute($sqlQuery);
		
		if(empty($tab)){ return false; }
		return $tab;
	}
	
	function getSubscription($email)
	{
		$sql = "SELECT aas.* FROM service_accounts acc
					LEFT JOIN am_api_subscription aas
						ON aas.ub_user_id = acc.id
						
					WHERE
						acc.email = '{$email}'
				
				ORDER BY date_start DESC
				LIMIT 1
				";
		$sqlQuery = new SqlQuery2($sql);
		return QueryExecutor2::execute($sqlQuery);
	}
	
}
?>