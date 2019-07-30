<?php

	function clean($string) {
		$string = str_replace(' ', '', $string); 		// Replaces all spaces with hyphens.

		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}
	
	
	
	$conn = new mysqli(DATABASEHOST, GENERATEDDATABASEUSER, GENERATEDDATABASEPASS);
	
//	echo '
//		<script>
//			$(".loginDevider").html("<div>LOADING 50%. . .</div>");
//		</script>
//	';
        
	$conn->select_db($account[0]->databaseName);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

        $result = $conn->query("SHOW TABLES LIKE 'tbl_user_login'");
        
        if($result->num_rows > 0){ 
            return false;
        }
//	echo '1
//		<script>
//			$(".loginDevider").html("<div>Preparing your account 55. . .</div>");
//		</script>
//	';
	
//	$filename = "../unlibooks.com/databases/generate_trading_database_new.sql";
/* 
        $filename = "../unlibooks.com/databases/trading/db_parts/generate_trading_database_part2.sql";
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
	 */
	
//	echo '
//		<script>
//			$(".loginDevider").html("<div>Preparing your account 57. . .</div>");
//		</script>
//	';
	
//	require_once('registration/include_dao.php');
	
//	echo '
//		<script>
//			$(".loginDevider").html("<div>Preparing your account 75. . .</div>");
//		</script>
//	';
        
//        echo '
//		<script>
//			$("#loginForm").submit();
//		</script>
//	';
//	exit;
	
?>