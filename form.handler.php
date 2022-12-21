<?<php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'annabelmary@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name:$name.\n".
              "User Email: $visitor_email.\n".
              "Subject:$subject.\n".
              "Message: $message.\n";

 $t0 = 'omomary04@gmail.com';

 $headers = "From: $email_from \r\n";

 $headers =  "Reply-To: $visitor_email \r\n";

 header(location: "contact.html") ;

?>
