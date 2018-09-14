<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = 'Website VZW KrommeBoom';

// an email address that will receive the email with the output of the form
$sendTo = 'dekrommeboom@telenet.be';

// subject of the email
$subject = 'Nieuw bericht van website VZW KrommeBoom contacteer ons ';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Naam', 'surname' => 'Voornaam', 'phone' => 'Tel', 'email' => 'Email', 'message' => 'Bericht'); 

// message that will be displayed when everything is OK :)
$okMessage = 'Bericht verzonden, we contacteren u spoedig.';

// If something goes wrong, we will display this message.
$errorMessage = 'Oeps.. Er is iets misgegaan, probeer later nog eens.';

$goto_after_mail = "http://localhost/website/VZWDeKrommeBoom/index.html";

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(0);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "Nieuw bericht van contact pagina VZW KrommeBoom\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array(
        'From: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));
    header("Location: ".$goto_after_mail);
    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}