<script src="assets/js/jquery-3.3.1.min.js"></script>
<?php
/*
index.php ->
	fill out the subscription form ->
	press button ->
	request is being sent to form.php ->

		form.php:
			foreach form_fields
				sanitize input
				add to user_data
				(email, vorname?, nachname?, organisation?)

			generate random id_string
			check if id_string is unique and retry if not
			add id_string to user_data
			add timestamp (Y.m.d_H:i:s) to user_data

			add user_data to file id_string.json to newsletter/

			construct activation email
				add activation link in the form of: https://independentspaceindex.at/confirm.php?s=id_string

			send activation mail to users email

		User is being presented success page: signup email has been sent!


	user clicks on link in email ->
		https://independentspaceindex.at/confirm.php?s=id_string

		confirm.php:
			foreach user_data in nl-unconfirmed
				IF (current time - 24h (activation timeframe) <= user_data[timestamp])
					false: drop user_data from nl-unconfirmed (cleans up file)
					true: add user_data to newsletter_users.json
								send confirmation email to user -> subscription completed...
								inform admin? (send mail to admin -> new subscription?)
*/


// REMOVE //////////////////////////////////////////////
	require 'settings.php';
	require 'classes.php';
	require 'passwords.php';

	date_default_timezone_set('Europe/Vienna');
// REMOVE //////////////////////////////////////////////

$filename = basename(__FILE__);
if (file_exists($filename))
{
    echo"<p><b>$filename</b> last modified: " . date("H:i:s - d.m.Y", filemtime($filename)) . "</p>";
}

?>
<hr>
<script>
	$(document).ready(function(){
		 $('form#newsletter_signup').submit(function(event) {
	    event.preventDefault(); // Prevent the form from submitting via the browser
	    var $form = $(this);
	    $.ajax({
	      type: $form.attr('method'),
	      url: $form.attr('action'),
	      data: $form.serialize()
	    }).done(function(data) {
	    	console.log(data);
	      $form.find('#subscription_status').prepend("<h3>" + data + "</h3>");
	    }).fail(function(data) {
	    	console.log(data);
	      $form.find('#subscription_status').prepend("<h3>Error: XHR fail " + data + " </h3>");
	    });
	  });
	});
</script>

<form class=nlsignup action="form.php" id="newsletter_signup">
    <label for="mail">Newsletter:</label>
    <input type="email" id="mail" name="mail" required placeholder="email@yourserver.abc">
    <input type="submit" value="Subscribe">
    <div id="subscription_status"></div>
</form>
<p><i>Newsletter under construction!</i></p>
<hr>
<?php

// ///////////////////////// PHPMailer /////////////////////////////////////////7

/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/SMTP.php';

$email_to_add = "aak.van.kraak@gmail.com";
//$email_to_add = "bruno.mokross@googlemail.com";

$confimation_url = "https://independentspaceindex.at/confirm.php?s=randomstring*yC<2hKt";


$mailbody = "<br>
	Independent Space Index Vienna

	<h3>ANMELDUNG ZUM NEWSLETTER</h3>

	Jemand hat uns aufgefordert Ihre Emailadresse <{$email_to_add}> bei unserem Newsletter einzutragen.<br>
	Wenn Sie von uns Informationen zugesandt bekommen möchten, klicken Sie bitte auf den untenstehenden Link und bestätigen Sie damit ihre Emailadresse!<br>
	Sollten Sie keine Emails von <a href='https://independentspaceindex.at'>Independent Space Index Vienna</a> bekommen möchten, können Sie diese Nachricht einfach ignorieren!<br>
	<br>
	<br>

	<h3>NEWSLETTER SIGNUP</h3>

	Someone requested to add your email address <{$email_to_add}> to our newsletter!<br>
	If this was not you and you do not wish to receive news from the <a href='https://independentspaceindex.at'>Independent Space Index Vienna</a>, please ignore this message!<br>
<br>
<br>
<a href='http://rossi.klingt.org/no-touch/no-no.jpg'><button> Confirm your email address </button></a>
<br>
<br>
<br>
	";




$mail = new PHPMailer;

try{
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP();                                      		// Set mailer to use SMTP
	$mail->Host = 'mailout.one.com';  												// Specify main and backup SMTP servers
	$mail->Port = 587;
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;                               		// Enable SMTP authentication
	$mail->Username = 'contact@independentspaceindex.at';     // SMTP username
	$mail->Password = EMAILACCOUNT_PW;             						// SMTP password
	$mail->SMTPSecure = 'tls';                            		// Enable encryption, 'ssl' also accepted
	$mail->From = 'contact@independentspaceindex.at';
	$mail->FromName = 'Independent Space Index Vienna';
	$mail->addAddress($email_to_add);     // Add a recipient
	$mail->addReplyTo('contact@independentspaceindex.at', 'Independent Space Index Vienna');
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	$mail->isHTML(true);                                  // Set email format to html
	$mail->Subject = 'Newsletter Bestätigung / Newsletter Confirmation';
	$mail->Body    = $mailbody;
	$mail->AltBody = 'still testing - nonHTML :)';

}
catch(Exception $e)
{
	echo "Mailer Error:"  . $mail->ErrorInfo;
}


if(!$mail->send())
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else
{
    echo 'Message has been sent';
}
*/

?>