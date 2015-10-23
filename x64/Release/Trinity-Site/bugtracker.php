<?php

/*
 * Twisted Trinity
 * twistedtrinity.org
 * index.php
 * found in /
 *
 * Copyright Scott Cilley scott@twedev.com
 * Twisted Development
 * www.twedev.com
*/

// include the header
include 'includes/header.php';

/* Content only below the ?>
 * use the <div></div>
 * content div is closed in the footer
 * for universal usage
*/
?>

<div class="post">
    <h2>Bug Tracker</h2>
    <p>Below are the Current Bugs that have been reported</p>
    <p>Hover over the <strong>title</strong> to see the issue on <strong>GitHub</strong></p>
    
<?php

// Setup the table
echo '<table border="0" cellpadding="2" cellspacing="2" width="100%" align="center">';
echo '<tr>';

// Connect to the database
	mysql_select_db($tc_site) or die("MySQL Error: " . mysql_error());
	
	// pull the bug info from the bugs table
	$current_bugs = mysql_query("SELECT * FROM current_bugs ORDER BY ID DESC") or die("MySQL Error: " . mysql_error());

// Setup the loop
while($bugs = mysql_fetch_array($current_bugs)){
	
	// Setup the variables
	$bugid = $bugs['id'];
	$faction = $bugs['faction'];
	$race = $bugs['race'];
	$class = $bugs['class'];
	$bug_title = $bugs['bug_title'];
	$bug_contents = $bugs['bug_contents'];
	$link = $bugs['link'];
	
	// Show the data
	echo '<td>';
	
	// Content table
	echo '<table border="0" cellspacing="2" cellpadding="2" width="100%">';
	echo '<tr>';
	echo '<td><a href="'.$link.'" target="_blank"><h2>6x00'.$bugid.' '.$bug_title.'</h2></a></td></tr>';
	echo '<tr><td>'.$bug_contents.'</td></tr></table><hr>';
	// End the content table
	
	echo '</td></tr>';
	
// End the loop
}

// Close the table
echo '</table>';
echo '</div>';

// include the footer
include 'includes/footer.php';
?>