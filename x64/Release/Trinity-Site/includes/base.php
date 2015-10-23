<?php

$dbhost = "localhost";
$dbuser = "trinity";
$dbpass = "h6a91c62a";

// Connect to your server and database
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
//mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

$tc_auth = 'auth';
$tc_characters = 'characters';
$tc_world = 'world';
$tc_site = 'site';

$tc_version = '6.2.2.20490';

?>