<?php

require 'config.php';

$jsonObject = json_decode(implode('', file("php://input")));

$query_sms = $mysqli->query("select * from sms where message = '".$jsonObject->message."'");
$check_query_sms = $query_sms->num_rows;

if($check_query_sms==0){

$amount = GetStringBetween($jsonObject->message, "x  ", " เหลือ");
$tatal = GetStringBetween($jsonObject->message, "เหลือ ", " (");

$mysqli->query("INSERT INTO sms(subject, message, amount, tatal, send_date) VALUES ('".$jsonObject->subject."','".$jsonObject->message."','".$amount."','".$tatal."','".date('Y-m-d H:i:s')."')");

}else{
    echo '{"error": duplicate data}';
  }
function GetStringBetween($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

?>