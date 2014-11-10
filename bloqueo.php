<?php 
$allowed_countries = array("USA", "CA");
$country = json_decode(file_get_contents("http://ipinfo.io/json"));
if(in_array($country->country, $allowed_countries)) {
	echo "Pais Bloqueado!!";
}
else{
	echo "Pais no bloqueado!!";
}
?>