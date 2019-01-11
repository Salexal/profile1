<?php
header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin:http://10.30.29.57:63341");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Headers:x-requested-with,content-type');
session_start();
$rws_post =  file_get_contents('php://input') ;
$mypost = json_decode($rws_post);

if($mypost->userName==123&&$mypost->passWord==123){
    $_SESSION['userName']=$mypost->userName;
    $data = array(
        "message"=>"success"
    );
}else{
    $data = array(
        "message"=>"error"
    );
}
echo json_encode($data);
?>