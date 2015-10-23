<?php

/*
 * Twisted Trinity
 * twistedtrinity.org
 * right-block.php
 * found in /blocks/
 *
 * Copyright Scott Cilley scott@twedev.com
 * Twisted Development
 * www.twedev.com
*/
?>

<div id="right">
  <h2>Realm Status</h2>
  <?php 
  
  $dbhost = "localhost";
$dbname = "auth";
$dbuser = "trinity";
$dbpass = "h6a91c62a";

// Connect to your server and database
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());

echo '<p>If it\'s listed, it\'s online</p>';

$sql="SELECT name FROM auth ORDER BY name";

	$query = mysql_query("SELECT name FROM realmlist ORDER BY name") or die('Error: '. mysql_error() );
	while($row = mysql_fetch_array($query)){
		$realm = $row['name'];
		
		
				
		echo '<p>'.$realm.'</p>';
	}
	
	include 'blocks/patch-status.php';
?>
</div>