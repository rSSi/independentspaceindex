<?php
require('settings.php');
require('classes.php');

// REMOVE
date_default_timezone_set('Europe/Vienna');

$filename = basename(__FILE__);
if (file_exists($filename))
{
    echo"<p><b>$filename</b> last modified: " . date("H:i:s - d.m.Y", filemtime($filename)) . "</p>";
}
// REMOVE

$nl = new Newsletter();

if( isset($_REQUEST['s']) )
{
	$id = $_REQUEST['s'];
	if( $nl->check_id($id) )
	{
		if( $nl->move_user_to_confirmed($id) )
		{
			echo "I know you!! {$nl->email}<br>\n";
		}
	}
	else
	{
		echo "<pre>Wrong ID! Try again!!... \n{$nl->get_id} : {$id}</pre>\n";
	}
}


?>