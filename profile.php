<?php
header('Content-Type:application/json; charset=utf-8');
header("Access-Control-Allow-Origin;http://10.30.29.90:63341");//前端ip和端口
header("Access-Control-Allow-Credentials;true");
$userName=array('userName'=>'123456');
echo json_encode($userName);
?>
