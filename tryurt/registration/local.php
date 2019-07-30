<?php

$newEmail = explode('@', $_POST['email']);
$subdomains = strtolower(clean($newEmail[0]));

	require_once('Database.class.php');
	
	$databasename = Database::registerDatabase();
	
	
	
	// $database = "unlibook_nonprofit_for_" . $database;
	$databasename = $database = $databasename->{0};

define("DATABASE_NAME", $database);      // will be used on other php file (never remove)
define("DATABASE_USER", GENERATEDDATABASEUSER);   // will be used on other php file (never remove)

function clean($string) {
    $string = str_replace(' ', '', $string);   // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

$conn = new mysqli(DATABASEHOST, GENERATEDDATABASEUSER, GENERATEDDATABASEPASS);

// $conn->query('Create database `' . $database . '`;');

echo '
		<script>
			document.getElementById("Loaded").style.width = "50%";
		</script>
	';

$conn->select_db($database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* 
echo '
		<script>
			document.getElementById("Loaded").style.width = "55%";
		</script>
	';

$filename = "../unlibooks.com/databases/generate_retail_database_new.sql";
$handle = fopen($filename, "rb");
$sql = fread($handle, filesize($filename));
fclose($handle);

if ($conn->multi_query($sql) === TRUE) {
    $conn->close();
} else {
    echo "Error Setting up Data Tables: " . $conn->error;
    $conn->close();
    exit;
}

do {
    try {
        $result = DAOFactory::getTblUserLevelDAO()->queryAll();
        break;
    } catch (Exception $e) {
//                    print_r($e);
    }
} while (true);
 */
echo '
		<script>
			document.getElementById("Loaded").style.width = "57%";
		</script>
	';

require_once('registration/include_dao.php');

echo '
		<script>
			document.getElementById("Loaded").style.width = "75%";
		</script>
	';

$account = new ServiceAccount;

$account->subdomain = $subdomains;
$account->databaseName = str_replace(GENERATEDDATABASEUSER_PRE,"",$database);
$account->databaseUser = "root";
$account->dateRegistered = date('Y-m-d H:m:s');
$account->accountName = $_POST['email'];
$account->suffix = "NA";
$account->email = $_POST['email'];
$account->verified = 0;
if($extendTrial == '')
{
	$account->trialExpirationDate = date('Y-m-d',strtotime('+'.NUMBERDAYS.' day',strtotime(date('Y-m-d'))));
}
else
{
	$account->trialExpirationDate = $extendTrial;
}
$mainId = DAOFactory2::getServiceAccountsDAO()->insert($account);
$amSubscription = Session::getSession('amSubscription');

if(!empty($amSubscription))
{
	$am = new AmApiSubscription();

	$am->ubUserId = $mainId;
	$am->amUserId = 0;
	$am->productId = 1;
	$am->dateStart = $amSubscription['dateStart'];
	$am->expiration = $amSubscription['expiration'];
	$am->receiptId = $amSubscription['receiptId'];
	$am->status = $amSubscription['status'];

	DAOFactory2::getAmApiSubscriptionDAO2()->insert($am);
	
	
}
//
//if (SERVERTYPE == 'local') {
//
//    Model::$host = DATABASEHOST;
//    Model::$user = OODATABASEUSER;
//    Model::$password = OODATABASEPASS;
//    Model::$database = OODATABASENAME;
//
//    $sql = '
//			INSERT INTO tbl_user VALUES
//				(null,' . $mainId . ',
//					"' . 'User-' . sprintf('%1$07d', 1) . '","",
//					"' . $account->email . '",
//					"' . $_POST['password'] . '",
//					"admin","yes","' . date('Y-m-d') . '","0000-00-00")
//		';
//
//    Model::executeSqlInsert($sql);
//} else {

/* setup for online order - slnidea
 * 
    $url = SERVERTYPE == 'local' ? 'http://localhost/dev_urt_online_ordering/user/setUser' : ONLINE_ORDERING_USER;
    $curl_connection = curl_init($url);
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);

    $post_string = "accountid=".$mainId ."&userno=".'User-' . sprintf('%1$07d', 1)."&email=".$account->email ."&".
                   "password=". $_POST['password'] ."&type=admin&active=yes&date_created=".date('Y-m-d');
    
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
    $result = curl_exec($curl_connection);

    curl_close($curl_connection);

    if ($result != "")
        return json_decode($result);

    return false;
 
 * setup for online order end 
 */ 

//}

/* echo '
  <pre>
  alert("'.$mainId.'");
  </pre>
  ';
  exit; */
?>