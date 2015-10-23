<?php
/*
$res = mysql_query("SELECT count(*) FROM account;");
$val = mysql_fetch_array($res);
echo "<p><b>Accounts: </b>".$val[0]."</p>";

$res = mysql_query("SELECT count(*) FROM account_banned;");
$val = mysql_fetch_array($res);
echo "<p><b>Banneds: </b>".$val[0]."</p>";
*/

$dbhost = "localhost";
$dbname = "auth";
$dbuser = "trinity";
$dbpass = "h6a91c62a";

// Connect to your server and database
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

$sql="SELECT name FROM auth ORDER BY name";

	$query = mysql_query("SELECT name FROM realmlist ORDER BY name") or die('Error: '. mysql_error() );
	while($row = mysql_fetch_array($query)){
		$realm = $row['name'];
				
		echo '<p>'.$realm.'</p>';
	}

?>