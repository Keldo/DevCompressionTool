<?php

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

  ?>


