<?php

	// OVERRIDE THE FOLLOWING IN CODE!

	$CONTENT  = "";
	$TITLE    = "Whube!";
	$SCRIPT   = array();
	$PRELOAD  = array();

	$PAGE_MAX_COUNT = 200;

	$GUILT_ME = true; // The donate banner.
	$TWEETER  = true; // Twitter stuff. check conf/twitter.php
	$PIWIK    = false; // Piwik stats.  Check conf/piwik.php

	// CONF THE FOLLOWING

	$SITE_PREFIX   =   "http://localhost/whube/";
	$MY_IP         =   "127.0.0.1";

	array_push( $SCRIPT, "jQuery.js");  // dep
	array_push( $SCRIPT, "effects.js"); // fade out messages etc.

?>
