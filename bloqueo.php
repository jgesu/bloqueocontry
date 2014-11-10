<?php
$deny = array("CA","US");
$url ="http://ipinfo.io/".$_SERVER['REMOTE_ADDR']."/json";
$json = json_decode(file_get_contents($url), TRUE);
$region = $json['country'];
if(in_array($region, $deny)){
 	echo "Si Bloqueo";
}
else{
	echo "No Bloqueado";
}
?>