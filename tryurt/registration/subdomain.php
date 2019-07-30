<?php

// *** *** *** *** *** CREATE SUBDOMAIN *** *** *** *** *** //

	define('SUBDOMAIN',strtolower($subdomain));

	require_once("cpanel_api.php");
	
	// $cpanel = new CPanel_Api;
	
	echo '<script>document.getElementById("Loaded").style.width = "8%";</script>';

	// $cpanel->create_subdomain(SUBDOMAIN, DOMAIN, DOMAIN_PATH);
	
	echo '<script>document.getElementById("Loaded").style.width = "25%";</script>';
	
	sleep(5);

//  *** *** *** *** *** CREATE DATABASE *** *** *** *** *** //

	echo '<script>document.getElementById("Loaded").style.width = "30%";</script>';
	
	// $databasename = DATABASE_PRE."_for_" . SUBDOMAIN;
	
	// $cpanel->create_database($databasename);
	
	echo '<script>document.getElementById("Loaded").style.width = "45%";</script>';
	
	sleep(5);
	
	echo '<script>document.getElementById("Loaded").style.width = "50%";</script>';

//echo "[".SUBDOMAIN."@service.unlibooks.com]: Establishing Connection to Database...<br/>";

// $conn = new mysqli('localhost', $databaseuser, $databasepass, GENERATEDDATABASEUSER_PRE . $databasename);
$conn = new mysqli('localhost', $databaseuser, $databasepass, "".$databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/** 	The below do while loop will check if creating table will not cause an error.
 * 	-> this will prevent execution of next mass query for creating table will error.
 * 	-> this will create a dummy table and drop it if done
 */
/* do {
    try {
        $conn->query('create table test');
        break;
    } catch (Exception $e) {
        
    }
} while (true);
$conn->query('drop table test');
 */
echo '
		<script>
			document.getElementById("Loaded").style.width = "55%";
		</script>
	';
//echo "[".SUBDOMAIN."@service.unlibooks.com]: Configuring database structure...<br/>";
/*
$filename = DBFILELOC;
$handle = fopen($filename, "rb");
$sql = fread($handle, filesize($filename));
fclose($handle);
*/
/* $sql = file_get_contents('http://unlibooks.com/subdomains/dbfileloc/urt/generate_urt.sql');
if ($conn->multi_query($sql) === TRUE) {
    $conn->close();
} else {
    echo "Error Setting up Data Tables: " . $conn->error;
    $conn->close();
    exit;
}

// *** Checking if database is already done *** //

do {
    try {
        $result = DAOFactory::getTblUserLevelDAO()->queryAll();
        break;
    } catch (Exception $e) {
        
    }
} while (true);
 */
// *** All tables created *** //

echo '
		<script>
			document.getElementById("Loaded").style.width = "57%";
		</script>
	';

//echo "[".SUBDOMAIN."@service.unlibooks.com]: Waiting for the Subdomain to response...<br/>";

require_once('registration/include_dao.php');

echo '
		<script>
			document.getElementById("Loaded").style.width = "75%";
		</script>
	';
//echo "[".SUBDOMAIN."@service.unlibooks.com]: Saving subdomain.<br/>";

$account = new ServiceAccount;

$account->subdomain = $subdomain;
$account->databaseName = str_replace(GENERATEDDATABASEUSER_PRE,"",$databasename);
$account->databaseUser = $databaseuser;
$account->dateRegistered = date('Y-m-d H:i:s');
$account->accountName = $_POST['orgname'];
$account->suffix = $code;
$account->email = $_POST['email'];
$account->verified = 0;
$account->trialExpirationDate = date('Y-m-d',strtotime('+'.NUMBERDAYS.' day',strtotime(date('Y-m-d'))));

$mainId = DAOFactory2::getServiceAccountsDAO()->insert($account);

//SET-UP FOR ONLINE ORDERING USER ACCOUNT END

// *** *** *** *** *** END *** *** *** *** *** //
?>