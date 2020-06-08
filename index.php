<?php

//##############################################################
//############################################################## - Functions
//##############################################################

function user_hash(){
  //Hash is generated using users useragent and cookies to build an identifier
  //This is used to validate the users session
  $hash=$_SERVER['HTTP_USER_AGENT'];
  foreach ($_COOKIE as $key=>$val){
    $keysave=true;
    if (strpos($key,'wp-settings-time')!==false){
      $keysave=false;
    }
    if (strpos($key,'__cfduid')!==false){
      $keysave=false;
    }
    if (strpos($key,'__gads')!==false){
      $keysave=false;
    }
    if (strpos($key,'_ga')!==false){
      $keysave=false;
    }
    if (strpos($key,'_gat_gtag')!==false){
      $keysave=false;
    }
    if (strpos($key,'_gid')!==false){
      $keysave=false;
    }
    if (strpos($key,'PHPSESSID')!==false){
      $keysave=false;
    }
    if ($keysave==true){
      $hash="".$hash."/".$key."-".$val."";
    }
  }
  return sha1($hash);
}

//##############################################################
//############################################################## - Startup
//##############################################################

$nh_panel_url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$nh_panel_session=$_GET["session"];
$nh_panel_user_hash=user_hash();

if (is_file("/config/settings.json")){
  $nh_panel_settings=json_decode(file_get_contents("/config/settings.json"),true);
}else{
  die("Config broken");
}

//##############################################################
//############################################################## - Load Session
//##############################################################



//##############################################################
//############################################################## - Start Checks
//##############################################################



//##############################################################
//############################################################## - Save Users Session
//##############################################################



?>
