<?php 

$s_name = $_POST['name'];
$s_pw = $_POST['pw'];

$number = mt_rand(10000, 20000);
$number3 = mt_rand(5000,10000);

$s_ko = $number;
$s_ze = $number3;

$db_hostname = '127.0.0.1'; // 102.168.126.78 방화벽
//db_hostname = '192.168.31.41';
$db_database = 'web_test'; // 내 db 이름 확인
$db_username = 'cheol'; // 내 sql 정보
$db_password = '4852';

$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database, 3306);



$Insert = "INSERT INTO s_sign VALUES (
   null ,'$s_name','$s_pw','$s_ko','$s_ze')";

$result = mysqli_query($db_server, $Insert);

?>