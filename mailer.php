<?php
$EmailFrom = 'dev.greatsolution.site';
$EmailTo = "ofir@tower-land.co.il";


$Name = Trim(stripslashes($_POST['name']));
$Tel = Trim(stripslashes($_POST['tel']));
$Email = Trim(stripslashes($_POST['email']));


$Subject = "eMojo - Towerland Landing Page Lead";


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}
//heder
$headers = "From: <".$EmailFrom.">\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8";
// prepare email body text
$Body = "";

$Body .= "\n";

$Body .= "Name: " .$_POST['name'];
$Body .= "\n";
$Body .= "Email: " .$_POST['email'];
$Body .= "\n";
$Body .= "Tel: " .$_POST['tel'];
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, $headers);
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.php\">";
}

?>
