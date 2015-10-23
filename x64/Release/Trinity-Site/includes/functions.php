<?php

include 'includes/base.php';

/*
 * Site wide functions
 * To be used throughout the entire site
 * Revolving document and may chaneg without notice
 *
*/

function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
}

function showBugs() {
	// Connect to the database
	mysql_select_db($tc_site) or die("MySQL Error: " . mysql_error());
	
	// pull the bug info from the bugs table
	$current_bugs = mysql_query("SELECT * FROM current_bugs") or die("MySQL Error: " . mysql_error());
	
}

function check_for_symbols($string)
{
	$len=strlen($string);
	
	$allowed_chars = "abcdefghijklmnovqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
	
		for($i=0;$i<$len;$i++)if(!strstr($allowed_chars, $string[$i]))
			return TRUE;
		return FALSE;
}

function sha_password($user,$pass)
{
	$user = strtoupper($useremail);
	$pass = strtoupper($password);
		
	return SHA1($user.':'.$pass);
}

function g6status() {
	
	$ip_world = "localhost";
	$port_wod = "8085";
	
	// World
if (! $sock = @fsockopen($ip_world, $port_wod, $num, $error, 3)) {
echo '<table border="0" cellpadding="1" cellspacing="1">';
echo '<tr>';
echo '<td>Trinity (Wod)</td>';
echo '<td>&nbsp;</td>';
echo '<td><img src="images/wow_off.png"></td>';
echo '<td>&nbsp;</td>';
echo '<td class="tcdown"><font color="#ff0000"><strong>DOWN</strong></font></td>';
echo '</tr>';
echo '</table>';
}
else{
echo '<table border="0" cellpadding="1" cellspacing="1">';
echo '<tr>';
echo '<td>Trinity (Wod)</td>';
echo '<td>&nbsp;</td>';
echo '<td><img src="images/wow_on.png"></td>';
echo '<td>&nbsp;</td>';
echo '<td class="tcdown"><font color="#00ff00"><strong>UP</strong></font></td>';
echo '</tr>';
echo '</table>'; 
fclose($sock);
}
}

function realmStatus() {
	// Realms
	
	$ip_auth = "localhost";
	$port_auth = "1119";
	
if (! $sock = @fsockopen($ip_auth, $port_auth, $num, $error, 3)) {
echo '<table border="0" cellpadding="1" cellspacing="1">';
echo '<tr>';
echo '<td>Realms</td>';
echo '<td>&nbsp;</td>';
echo '<td><img src="images/wow_off.png"></td>';
echo '<td>&nbsp;</td>';
echo '<td class="tcdown"><font color="#ff0000"><strong>DOWN</strong></font></td>';
echo '</tr>';
echo '</table>';
}
else{
echo '<table border="0" cellpadding="1" cellspacing="1">';
echo '<tr>';
echo '<td>Realms</td>';
echo '<td>&nbsp;</td>';
echo '<td><img src="images/wow_on.png"></td>';
echo '<td>&nbsp;</td>';
echo '<td class="tcdown"><font color="#00ff00"><strong>UP</strong></font></td>';
echo '</tr>';
echo '</table>'; 
fclose($sock);
}	
}



/*
 * TODO
 * Patches
 * Admin Message
 * Forums
 * Site Login
 */

  ?>


