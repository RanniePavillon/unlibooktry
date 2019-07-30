<?php

// *** *** *** *** *** CREATE SUBDOMAIN *** *** *** *** *** //
//define('SUBDOMAIN', strtolower($subdomain));

$cpaneluser = CPANELUSER;
$cpanelpass = CPANELPASS;
$cpanel_skin = CPANEL_SKIN;
$domain_path = DOMAIN_PATH;

echo '
		<script>
			document.getElementById("Loaded").style.width = "8%";
		</script>
	';

$doms = array(DOMAIN . ";" . strtolower($subdomain));

function subd($host, $port, $ownername, $passw, $request) {

    $sock = fsockopen('localhost', 2082);
    if (!$sock) {
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
        $result .= fgets($sock, 128);
    }

    fclose($sock);

    return $result;
}

$subd = "";

foreach ($doms as $dom) {
    $lines = explode(';', $dom);

    $domain = trim($lines[0]);
    $subd = trim($lines[1]);

    $request = "/frontend/$cpanel_skin/subdomain/doadddomain.html?rootdomain=$domain&domain=$subd&dir=" . $domain_path;
    $result = subd('localhost', 2082, $cpaneluser, $cpanelpass, $request);
}

echo '
		<script>
			document.getElementById("Loaded").style.width = "25%";
		</script>
	';
//echo "[".SUBDOMAIN."@service.unlibooks.com]: Securing Subdomain...<br/>";

sleep(5);

//  *** *** *** *** *** CREATE DATABASE *** *** *** *** *** //

echo '
		<script>
			document.getElementById("Loaded").style.width = "30%";
		</script>
	';
//echo "[".SUBDOMAIN."@service.unlibooks.com]: Creating Database...<br/>";

include("registration/xmlapi.php");

$databasename = GENERATEDDATABASENAME_PRE . '_for_' . $subd;
$databaseuser = GENERATEDDATABASEUSER; // Warning: in most of cases this can't be longer than 8 characters
$databasepass = GENERATEDDATABASEPASS; // Warning: be sure the password is strong enough, else the CPanel will reject it ....

$xmlapi = new xmlapi(HOST);
$xmlapi->password_auth("" . CPANELUSER . "", "" . CPANELPASS . "");
$xmlapi->set_port(2082);
$xmlapi->set_debug(1); //output actions in the error log 1 for true and 0 false  
$xmlapi->set_output('array'); //set this for browser output  
//create database    
$createdb = $xmlapi->api1_query(CPANELUSER, "Mysql", "adddb", array($databasename));
//add user 
$addusr = $xmlapi->api1_query(CPANELUSER, "Mysql", "adduserdb", array(GENERATEDDATABASEUSER_PRE . $databasename . "", GENERATEDDATABASEUSER . "", 'all'));

echo '
		<script>
			document.getElementById("Loaded").style.width = "45%";
		</script>
	';
//echo "[".SUBDOMAIN."@service.unlibooks.com]: Securing Database...<br/>";

echo '
		<script>
			document.getElementById("Loaded").style.width = "50%";
		</script>
	';
//echo "[".SUBDOMAIN."@service.unlibooks.com]: Establishing Connection to Database...<br/>";

$conn = new mysqli('localhost', $databaseuser, $databasepass, GENERATEDDATABASEUSER_PRE . $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/** 	The below do while loop will check if creating table will not cause an error.
 * 	-> this will prevent execution of next mass query for creating table will error.
 * 	-> this will create a dummy table and drop it if done
 */
do {
    try {
        $conn->query('create table test');
        break;
    } catch (Exception $e) {
        
    }
} while (true);
$conn->query('drop table test');

echo '
		<script>
			document.getElementById("Loaded").style.width = "55%";
		</script>
	';
//echo "[".SUBDOMAIN."@service.unlibooks.com]: Configuring database structure...<br/>";
//	$filename = DBFILELOC;
$filename = SERVERTYPE == 'local' ? "../unlibooks.com/databases/trading/db_parts/generate_trading_database_part1.sql" : DBFILELOC_PART1;

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

// *** Checking if database is already done *** //

do {
    try {
        $result = DAOFactory::getTblUserLevelDAO()->queryAll();
        break;
    } catch (Exception $e) {
        
    }
} while (true);

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

$account = new ServiceAccount();

$account->subdomain = $subdomain;
$account->databaseName = $databasename;
$account->databaseUser = $databaseuser;
$account->dateRegistered = date('Y-m-d H:i:s');
$account->accountName = $_POST['orgname'];
$account->suffix = $code;
$account->email = $_POST['email'];
$account->verified = 0;

$mainId = DAOFactory2::getServiceAccountsDAO()->insert($account);


/* setup for online order - slnidea
 *
  $url = SERVERTYPE == 'local' ? 'http://localhost/dev_urt_online_ordering/user/setUser' : ONLINE_ORDERING_USER;
  $curl_connection = curl_init($url);
  curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
  curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);


  //        $post_string = '';
  //        foreach ($_POST as $name => $value) {
  //            $post_string .= urlencode($name) . '=' . urlencode($value) . '&';
  //        }
  $main_email = DAOFactory::getTblOrganizationInfoDAO()->load(Session::getSession('infoid'))->emailAddress;

  $post_string = "accountid=".$mainId ."&userno=".'User-' . sprintf('%1$07d', 1)."&email=".$account->email ."&".
  "mainemail=". $main_email ."&".
  "password=". $_POST['password'] ."&type=staff&active=yes&date_created=".date('Y-m-d');

  curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
  $result = curl_exec($curl_connection);

  curl_close($curl_connection);

  if ($result != "")
  return json_decode($result);

 * setup for online order end 
 */

// *** *** *** *** *** END *** *** *** *** *** //

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