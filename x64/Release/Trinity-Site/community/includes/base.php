<?php

$dbhost = "localhost";
$dbname = "auth";
$dbuser = "trinity";
$dbpass = "h6a91c62a";

// Connect to your server and database
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

?>