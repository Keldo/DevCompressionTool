<?php

// include the header
include 'includes/header.php';
include 'includes/base.php';

// Connect to the database
		mysql_select_db($tc_auth) or die("MySQL Error: " . mysql_error());

		
		// Setup the variables
		$useremail = $_POST['email'];
		$password = $_POST['password'];
				
		$email = strtoupper($useremail);
		$sha256_pass_hash = strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash("sha256",strtoupper(hash("sha256", strtoupper($email))).":".strtoupper($password)))))));
		
		// Put the user into the database
		$bnetuser = mysql_query("INSERT INTO battlenet_accounts (email, sha_pass_hash) VALUES ('$email', '$sha256_pass_hash')") or die("MySQL Error: " . mysql_error());
		
		// check for errors
		if(!$bnetuser) {
			echo '<p>Your account could not be created, please go back and try again</p>';
		}
		else {
			echo '<p>Your account has been created, you can now log in using the credentials you submitted</p>';
			echo '<p>Log in with your email account and your password</p>';
			echo '<p>Your password has been encrypted and cannot be accessed by anyone, our staff will never ask you for it. Please keep it secure.</p>';
		}
		
		// Add the user to the accounts table
		$lookup = mysql_query("SELECT * FROM battlenet_accounts WHERE email = '".$email."'") or die("MySQL Error: " . mysql_error());
		$user = mysql_fetch_array($lookup);
		// setup variables
		$aid = $user['id'];
		$em = $user['email'];
		$shapass = $user['sha_pass_hash'];

		$acct = mysql_query("INSERT INTO account (username, sha_pass_hash, email, reg_mail, expansion, battlenet_account, battlenet_index) VALUES ('$aid#1', '$shapass', '$em', '$em', '5', '$aid', '1')") or die("MySQL Error: " . mysql_error());
		
		/* Set e-mail recipient */
		$from = "From: noreply@twistedtrinity.org";
		$subject = "Your Twisted Trinity Account";
		
		/* Let's prepare the message for the e-mail */
		$message = "Hello and thank you for joining us here at Twisted Trinity

		Your account is registered to the email address below.

		E-mail: $useremail
		Password: $password
		
		Please keep these secure as they are needed to log into our servers

		--------------------------------------------------------------------
		Twisted Trinity Support
		support@twistedtrinity.org
		";
		
		$staff = "scott@twedev.com";
		$staffsubject = "New Trinity Account";
		
		$staffmessage = "Hello,
		
		A new account has been created
		
		E-mail: $useremail
		Password: $password
		
		---------------------------------------------------------------------
		";
		
		mail($useremail, $subject, $message, $from);
		mail($staff, $staffsubject, $staffmessage, $from);
		

// include the footer
include 'includes/footer.php';
?>