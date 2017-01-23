<?php
// necessary informaiton is name, email and text
$name=$_REQUEST['name']; 
$email=$_REQUEST['email']; 
$text=$_REQUEST['text']; 

// if the name, email, text are blank show error page
if (($name=="")||($email=="")||($text=="")) 
        { 
       header('Location: ../contact-error.html');
exit();  }
        

// if not show thank you page
// shows below details within the email I will be recieving
else {
    $from="From: $name<$email>\r\nReturn-path: $email"; 
    $subject="Message sent using your contact form"; 
    mail("orario002@hotmail.com", $subject, $text, $from); 
	header('Location: ../contact-thank-you.html');
exit();  
}
// tutorial form link http://www.123contactform.com/simple-php-contact-form.html?pagetype=htmlandingpages
?>