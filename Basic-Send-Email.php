<?php
if(isset($_POST['email'])) {

$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$phone = $_POST['phone']; // not required
$comments = $_POST['comments']; // required

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "ap@planalink.com";
//$email_also ="test@yahoo.com";
$email_subject = $name . " Website Inquiry";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_message .= "First Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Phone: ".clean_string($phone)."\n";
$email_message .= "Comments: ".clean_string($comments)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
//@mail($email_also, $email_subject, $email_message, $headers);
?>
<!-- include your own success html here -->
<!--Thank you for contacting us. We will be in touch with you very soon.
<?php
}
?>