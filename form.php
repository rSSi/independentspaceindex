<?php
//header('Content-Type: application/json');
require('settings.php');
require('classes.php');

if(isset($_REQUEST['mail']))
{
	$nl = new Newsletter();

	if( $nl->add_user_to_untrusted($_REQUEST['mail']) )
	{
		echo NL_EMAIL_SENT;
	}
	else
	{
		echo NL_EMAIL_INVALID;
	}

	//echo "<pre>" . json_encode($nl->unconfirmed, JSON_PRETTY_PRINT) . "</pre>\n";
}
else
{
	echo NL_NO_EMAIL;
}
?>