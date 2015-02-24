<?php 
$paises = array("USA", "CA");
$json = json_decode(file_get_contents("http://ipinfo.io/json"));
if(in_array($json->country, $paises)) {
	echo "Pais Bloqueado!!";
}
else{
	echo "Pais no bloqueado!!";
}
?>
