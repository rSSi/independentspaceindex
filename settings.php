<?php
/*
** SETTINGS & CONSTANTS
*/

// Paths & Filenames:
define("NL_FILES", "newsletter/");										//	Directory That Holds Signup Files
define("NL_PENDING", NL_FILES . "nl-unconfirmed.json");					//	Pendeing Newsletter Applications
define("NL_USERS", NL_FILES . "nl-users.json"); 			//	Confirmed Newsletter Subscriptions
define("EMAIL_REGEX", "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/i");		//	Email Regex Pattern (Mozilla Dev Network)


// UI Messages:
define("NL_EMAIL_SENT", "Submission successful, please check your mail within the next 24 hours!");
define("NL_XHR_FAIL", "Something went wrong. Please try again!");
define("NL_EMAIL_INVALID", "No Valid Email Address Found! Please Try Again!");
define("NL_NO_EMAIL", "No Email Supplied! Try Again!");
define("NL_CONFIRMED", "Thank You For Activating Your Account!");
?>