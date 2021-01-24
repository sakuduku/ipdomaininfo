<?php 
$getdomain=$_GET['domain'];
$domainip=gethostbyname($getdomain);
$string = file_get_contents("https://get.apigeoip.com/json/".$domainip);
$json_a = json_decode($string,true);
echo '<table>';
foreach ($json_a as $key => $value){
  echo  '<tr><td>'.$key . '</td><td> : ' . $value.'</td></tr>';
} 
echo '</table>';
?>
