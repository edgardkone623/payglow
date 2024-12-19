<?php 

include('settings.php');

    if(!isset($_SESSION)){
        session_start();  // Et on ouvre la session
    } 



if($test_mode){
  $ip = "128.78.14.206";

}
else{
  $ip = $_SERVER['REMOTE_ADDR']; 
}



function getIpInfo($ip = '') { 
  
    $ipinfo = file_get_contents("http://ip-api.com/json/".$ip); 
    $ipinfo_json = json_decode($ipinfo, true); 

    return $ipinfo_json; 
} 
    if($test_mode){
      $visitor_ip = "128.78.14.206";

    }
    else{
      $visitor_ip = $_SERVER['REMOTE_ADDR']; 
    }
    $ipinfo_json = getIpInfo($visitor_ip); 



  if($ipinfo_json['status'] != 'fail'){

    $org = "{$ipinfo_json['as']}"; // On récupère l'oprateur
    $isps = "{$ipinfo_json['isp']}"; // La mem 

  }
  else{

    $org = "Introuvable";
    $isps = "Introuvable";

  }

 

  if(strpos($org,"Neuf") || strpos($org,"Bouygues") || strpos($org,"Orange") || strpos($org,"B&YOU") || strpos($org,"Prixtel") || strpos($org,"Lycamobile") || strpos($org,"NRJ") || strpos($org,"La Poste Mobile") || strpos($org,"La Poste") || strpos($org,"EI Télécom") || strpos($org,"Sosh") || strpos($org,"Lebara Mobile") || strpos($org,"Lebara") || strpos($org,"NRJ Mobile") || strpos($org,"Sfr") || strpos($org,"SFR") || strpos($org,"Free") || strpos($org,"Wanadoo")) { 
  
  } 
else{ 

  die('HTTP/1.0 404 Not Found'); 
}