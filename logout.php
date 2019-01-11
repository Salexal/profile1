<?php
header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin:http://10.30.29.57:63341");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Headers:x-requested-with,content-type');
session_start();
$_SESSION['userName']="";

$data = array(
    "message"=>"success"
);

echo json_encode($data);

?>