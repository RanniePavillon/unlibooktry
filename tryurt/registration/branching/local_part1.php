<?php

$newEmail = explode('@', $_POST['email']);
$database = strtolower(clean($newEmail[0]));
$database = "unlibook_trading_for_" . $database;

//	define("DATABASE_NAME",$database); 					// will be used on other php file (never remove)
//	define("DATABASE_USER",GENERATEDDATABASEUSER); 		// will be used on other php file (never remove)

function clean($string) {
    $string = str_replace(' ', '', $string);   // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

$conn = new mysqli(DATABASEHOST, GENERATEDDATABASEUSER, GENERATEDDATABASEPASS);

$conn->query('Create database `' . $database . '`;');

echo '
		<script>
			document.getElementById("Loaded").style.width = "50%";
		</script>
	';

$conn->select_db($database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo '
		<script>
			document.getElementById("Loaded").style.width = "55%";
		</script>
	';

//	$filename = "../unlibooks.com/databases/generate_trading_database_new.sql";
$filename = "../unlibooks.com/databases/trading/db_parts/generate_trading_database_part1.sql";
$handle = fopen($filename, "rb");
$sql = fread($handle, filesize($filename));
$sql .= setupAccount();
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

echo '
		<script>
			document.getElementById("Loaded").style.width = "57%";
		</script>
	';

//	require_once('registration/include_dao.php');

echo '
		<script>
			document.getElementById("Loaded").style.width = "75%";
		</script>
	';

$account = new ServiceAccount();

$account->subdomain = "Local";
$account->databaseName = $database;
$account->databaseUser = "root";
$account->dateRegistered = date('Y-m-d H:m:s');
$account->accountName = $_POST['email'];
$account->suffix = "NA";
$account->email = $_POST['email'];
$account->verified = 0;

$mainId = DAOFactory2::getServiceAccountsDAO()->insert($account);

/* setup for online order - slnidea
 * 
  Model::$host = DATABASEHOST;
  Model::$user = OODATABASEUSER;
  Model::$password = OODATABASEPASS;
  Model::$database = OODATABASENAME;

  $main_email = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->emailAddress;

  $sql = '
  INSERT INTO tbl_user VALUES
  (null,'.$mainId.',
  "'.'User-' . sprintf('%1$07d', 1).'","",
  "'.$account->email.'",
  "'.$main_email.'",
  "'.$_POST['password'].'",
  "staff","yes","'.date('Y-m-d').'","0000-00-00")
  ';

  Model::executeSqlInsert($sql);
 * setup for online order end 
 */

/* echo '
  <pre>
  alert("'.$mainId.'");
  </pre>
  ';
  exit; */

function setupAccount() {
    $sql = '
			INSERT INTO tbl_organization VALUES
				(null,"","","","' . date('Y-m-d') . '","0000-00-00");
                                    
                        INSERT INTO tbl_organization_info VALUES
                                    (null,1,"","","","' . $_POST['email'] . '","","","","","","","","","","vat","0","","' . date('Y-m-d') . '","0000-00-00");
                                        
                        INSERT INTO tbl_user VALUES
				(null,"1","User-0000001","","' . $_POST['email'] . '","' . $_POST['password'] . '","admin","sub","yes","' . date('Y-m-d') . '","0000-00-00");
		';

    return $sql;
}

?>