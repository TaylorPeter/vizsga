<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//HU" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Levél küldése</title>
</head>

<body>
<?php
require("class.phpmailer.php");


class MyMailer extends PHPMailer {
    // Alapértelmezett adatok beállítása
    var $From     = '78012163912@szily.hu';//e-mail gmail-os
    var $FromName = 'Tibor';
    var $Host     = "ssl://smtp.gmail.com"; //ezt állítsd be
    var $Mailer   = "smtp";                         // Alternative to IsSMTP()
   // var $port = 587;

    // hibajelzések error_handler
    function error_handler($msg) {
        print("My Site Error");
        print("Description:");
        printf("%s", $msg);
        exit;
    }

}



$mail = new MyMailer;

$jelszo="dog";

$mail->isSMTP();

$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "78012163912@szily.hu"; // SMTP username, GMAIL cím
$mail->Password = $jelszo; // SMTP password
$mail->Port=465;
$mail->CharSet = 'UTF-8';
$file_name = "teszt.txt";
$mail->addAttachment("uploads/".$file_name);

$cimzett_neve='xy';
$targy="Itt lesz a targy";


$cimzett="78012163912@szily.hu"; //ide jön az az e-mail-cím amire küldje a levelet!

$mail->AddAddress("$cimzett", "$cimzett_neve");
//üzenet
$mail->Subject = "$targy";
$mail->Body    = "Ez egy tesztüzenet a weblapomról!";


if(!$mail->Send())
{
   echo "Hiba a levél küldésekor. Próbálja újra!";
   exit;
}

echo "Az üzenet sikeresen továbbítva.";
?>
</body>
</html>
