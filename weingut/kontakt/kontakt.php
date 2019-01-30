<?php
$Empfaenger = „lrdsquddy@gmail.com“;
?>
<html>
<head>
<title>Einfaches Kontaktformular mit HTML und PHP</title>
</head>
<body>
<?php
if($_REQUEST[’submit‘]){
if(empty($_REQUEST[’firstname‘]) || empty($_REQUEST[‚email‘]) || empty($_REQUEST[‚lastname‘]))
{
echo“Bitte gehen Sie <a href=\“javascript:history.back();\“>
zur&uuml;ck</a> und f&uuml;llen Sie alle Felder aus“;
}
else{
$Mailnachricht=“Sie haben eine Anfrage über ihr Kontaktformular erhalten:\n“;
$Mailnachricht .= „Name: „.$_REQUEST[’lastname‘].“\n“.
„E-Mail: „.$_REQUEST[‚email‘].“\n“.
„Datum: „.date(„d.m.Y H:i“).“\n“.
„\n\n“.$_REQUEST[‚message‘].“\n“;
$Mailbetreff = „Kontakt: „.$_REQUEST[‚lastname‘];
mail($Empfaenger, $Mailbetreff, $Mailnachricht, „From: „
.$_REQUEST[‚email‘]);
echo „Wir haben Ihre Anfrage erhalten und werden sie so schnell wie möglich bearbeiten. <br>
<a href=\“javascript:history.back();\“>Zur&uuml;ck</a>“;
}
}
else
{
echo“Ein Fehler ist aufgetreten. Hier können Sie eine <a href=\“kontakt.html\“>Anfrage</a> an uns senden.“;
}
?>
</body>
</html>
