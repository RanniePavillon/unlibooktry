<?php

// *** *** *** *** *** CREATE SUBDOMAIN *** *** *** *** *** //

	define('SUBDOMAIN',strtolower($subdomain));

	$cpaneluser= CPANELUSER;
	$cpanelpass= CPANELPASS;
	$cpanel_skin = CPANEL_SKIN;
	$domain_path = DOMAIN_PATH;

//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "8%";
//		</script>
//	';

	$doms = array( DOMAIN . ";" . SUBDOMAIN );

	function subd($host,$port,$ownername,$passw,$request) {

		$sock = fsockopen('localhost',2082);
		if(!$sock) {
			print('Socket error');
			exit();
		}

		$authstr = "$ownername:$passw";
		$pass = base64_encode($authstr);
		$in = "GET $request\r\n";
		$in .= "HTTP/1.0\r\n";
		$in .= "Host:$host\r\n";
		$in .= "Authorization: Basic $pass\r\n";
		$in .= "\r\n";

		fputs($sock, $in);
		
		while (!feof($sock)) {
			$result .= fgets ($sock,128);
		}
		
		fclose( $sock );

		return $result;
	}

	$subd = "";

	foreach($doms as $dom) {
		$lines = explode(';',$dom);

		$domain = trim($lines[0]);
		$subd = trim($lines[1]);

//		$request = "/frontend/$cpanel_skin/subdomain/doadddomain.html?rootdomain=$domain&domain=$subd&dir=".$domain_path;
//		$result = subd('localhost',2082,$cpaneluser,$cpanelpass,$request);

	}

//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "25%";
//		</script>
//	';
	//echo "[".SUBDOMAIN."@service.unlibooks.com]: Securing Subdomain...<br/>";
	
	sleep(5);

//  *** *** *** *** *** CREATE DATABASE *** *** *** *** *** //

//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "30%";
//		</script>
//	';
	//echo "[".SUBDOMAIN."@service.unlibooks.com]: Creating Database...<br/>";
	
	include("registration/xmlapi.php");

	$databasename = GENERATEDDATABASENAME_PRE.'_for_' . $subd; //'urt_for_'.$subd; // for online GENERATEDDATABASENAME_PRE.'_for_'
	$databaseuser = GENERATEDDATABASEUSER; // Warning: in most of cases this can't be longer than 8 characters
	$databasepass = GENERATEDDATABASEPASS; // Warning: be sure the password is strong enough, else the CPanel will reject it ....

//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "45%";
//		</script>
//	';
	//echo "[".SUBDOMAIN."@service.unlibooks.com]: Securing Database...<br/>";
	
//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "50%";
//		</script>
//	';
	//echo "[".SUBDOMAIN."@service.unlibooks.com]: Establishing Connection to Database...<br/>";
	
	$conn = new mysqli('localhost', $databaseuser, $databasepass, GENERATEDDATABASEUSER_PRE.$databasename);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	/**	The below do while loop will check if creating table will not cause an error.
	 *	-> this will prevent execution of next mass query for creating table will error.
	 *	-> this will create a dummy table and drop it if done
	 */
	 
        $result = $conn->query("SHOW TABLES LIKE 'tbl_user_login'");
        
        if($result->num_rows > 0){ 
            return false;
        }
        
	do{
		try{
			$conn->query('create table test');
			break;
		} catch (Exception $e){
		
		}
	} while (true);
	$conn->query('drop table test');

//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "55%";
//		</script>
//	';
	//echo "[".SUBDOMAIN."@service.unlibooks.com]: Configuring database structure...<br/>";
	
//	$filename = DBFILELOC;
        $filename = SERVERTYPE == 'local' ? "../unlibooks.com/databases/trading/db_parts/generate_trading_database_part2.sql" : DBFILELOC_PART2;
	$handle = fopen($filename, "rb");
	$sql = fread($handle, filesize($filename));
	fclose($handle);
	
	if ($conn->multi_query($sql) === TRUE) {
            while($conn->next_result()) {}
            
            $conn->close();
	} else {
		echo "Error Setting up Data Tables: " . $conn->error;
		$conn->close();
		exit;
	}
	
	// *** Checking if database is already done *** //
	
	do{
		try{
			$result = DAOFactory::getTblUserLevelDAO()->queryAll();
			break;
		} catch(Exception $e){
		
		}
	} while (true);
	
	// *** All tables created *** //
	
//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "57%";
//		</script>
//	';
	
	//echo "[".SUBDOMAIN."@service.unlibooks.com]: Waiting for the Subdomain to response...<br/>";
	
//	require_once('registration/include_dao.php');
	
//	echo '
//		<script>
//			document.getElementById("Loaded").style.width = "75%";
//		</script>
//	';
	//echo "[".SUBDOMAIN."@service.unlibooks.com]: Saving subdomain.<br/>";
	
//	$account = new ServiceAccount;
//
//	$account->subdomain = $subdomain;
//	$account->databaseName = $databasename;
//	$account->databaseUser = $databaseuser;
//	$account->dateRegistered = date('Y-m-d H:i:s');
//	$account->accountName = $_POST['orgname'];
//	$account->suffix = $code;
//	$account->email = $_POST['email'];
//	$account->verified = 0;
//	
//	$mainId = DAOFactory2::getServiceAccountsDAO()->insert($account);

// *** *** *** *** *** END *** *** *** *** *** //

?>