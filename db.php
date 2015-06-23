<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


	echo 'hello world<br>';


	$db_host = "localhost";
	$db_user = "administrator";
	$db_password = "netmarble1!";
	$db_name = "test";
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	
	if (mysqli_connect_errno()) {
		echo "DB connect fail : ".mysqli_connect_error();
	} else {
		echo "DB Connected <br>";
			$rs = mysqli_query($conn, "select * from tb_sample");
		
			while($row = mysql_fetch_array($rs)) {
				echo $row['name'];
				echo "<br>";
			}
	};

	mysqli_close($conn);
?>