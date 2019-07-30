<?php

	$newEmail = explode('@',$_POST['email']);
	$subdomain = strtolower(clean($newEmail[0]));

	//echo "[*@service.unlibooks.com]: Generating a subdomain name.<br/>";
	
	echo '
		<script>
			document.getElementById("Loaded").style.width = "4%";
		</script>
	';
	
	$code = 0;
	/*$tempsub = $subdomain;
	while(true){
	
		if(!isDomainAvailable('http://'.$tempsub.'.'.DOMAIN)){
			$subdomain = $tempsub;
			break;
		} else {
			$code++;
			$tempsub = $subdomain .'-'. $code;
		}
	
	}*/
	require_once('Database.class.php');
	
	$databasename = Database::registerDatabase();
	
	$databasename = $database = $databasename->{0};
	// echo $databasename;
	// exit;
	
	// $databasename = 'unlibook_'.DATABASE_PRE.'_for_'.$subdomain;
	$databaseuser = GENERATEDDATABASEUSER;
	$databasepass = GENERATEDDATABASEPASS;
	
	define("DATABASE_NAME",$databasename); // will be used on other php file (never remove)
	define("DATABASE_USER",$databaseuser); // will be used on other php file (never remove)
	define("DATABASE_PASS",$databasepass); // will be used on other php file (never remove)

	echo '
		<script>
			document.getElementById("Loaded").style.width = "6%";
		</script>
	';
	//echo "[".$subdomain."@service.unlibooks.com]: SUBDOMAIN is set to ".$subdomain.".<br/>";

	function clean($string) {
		$string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}

       function isDomainAvailable($domain)
       {
               //check, if a valid url is provided
               if(!filter_var($domain, FILTER_VALIDATE_URL))
               {
                       return false;
               }

               //initialize curl
               $curlInit = curl_init($domain);
               curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
               curl_setopt($curlInit,CURLOPT_HEADER,true);
               curl_setopt($curlInit,CURLOPT_NOBODY,true);
               curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

               //get answer
               $response = curl_exec($curlInit);

               curl_close($curlInit);

               if ($response) return true;

               return false;
       }
	
?>