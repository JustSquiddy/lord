<?php
$Empfaenger = "lrdsquddy@gmail.com";
?>
<html>
<head>
<meta http-equiv=“refresh“ content=“3; url=./index.html“>
<title>Kontakt</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<style media="screen">
  .parent {
  display: flex;
  justify-content: center;
  align-items: center;
  }
  body, html {
    height: 100%;
  }
</style>
</head>
<body class="parent">

<?php
if($_REQUEST['submit']){
if(empty($_REQUEST['firstname']) || empty($_REQUEST['email']) || empty($_REQUEST['lastname']))
{
echo"Bitte gehen Sie <a href=\"javascript:history.back();\">
zur&uuml;ck</a> und f&uuml;llen Sie alle Felder aus";
}
else{
$Mailnachricht="Sie haben eine Anfrage ueber ihr Kontaktformular erhalten:\n";
$Mailnachricht .= "Name: ".$_REQUEST['firstname']." ".$_REQUEST['lastname']."\n".
"E-Mail: ".$_REQUEST['email']."\n".
"Datum: ".date("d.m.Y H:i")."\n".
"\n\n".$_REQUEST['message']."\n";
$Mailbetreff = "Kontakt: ".$_REQUEST['firstname']." ".$_REQUEST['lastname'];
mail($Empfaenger, $Mailbetreff, $Mailnachricht, "From: "
.$_REQUEST['email']);
echo "<body style=\"background-color:#82c91e;\">";
echo "<h1 style=\"text-align:center;\">Das ging gut. <i class=\"fas fa-paper-plane\"></i>";
echo "<p style=\"text-align:center;\">Ihre Nachricht wurde versendet.</p>";
}
}
else
{
echo "<body style=\"background-color:#C1121C;\">";
echo "<h1 style=\"text-align:center;\">Hoopla! Da ging was schief. <i class=\"fas fa-exclamation-triangle\"></i>";
echo "<p style=\"text-align:center;\">Keine Sorge. Es liegt nicht an Ihnen.</p>";
}
?>
</body>
</html>
