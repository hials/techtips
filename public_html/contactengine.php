<?php

$EmailFrom = "contact@techtips.com";
$EmailTo = "ebnesjen@gmail.com";
$Subject = "New message from Techtips contact form";
$Name = Trim(stripslashes($_POST['Name'])); 
$City = Trim(stripslashes($_POST['City'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
   print "<meta http-equiv=\"refresh\" content=\"0;URL=contactsent.html\">";
}
?>

