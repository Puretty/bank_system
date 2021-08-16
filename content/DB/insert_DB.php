<?php 
include "./main_DB.php";
include "../member.php";
ini_set('display_errors', '0');

$s_name = $_POST['name'];
$s_pw = $_POST['pw'];

if( ($s_name=='') || ($s_pw=='') )  {
   echo("<script>alert(\"공백금지\")</script>");
   echo("<script>location.href='../member.php';</script>");
   exit;
}

$number = mt_rand(10000, 20000);
$number2 = mt_rand(10, 20);
$number3 = mt_rand(10000, 20000);
$number4 = mt_rand(5000, 10000);
$str = "-";

$s_ko = $number.$str.$number2.$str.$number3;
$s_ze = $number4;

// 중복값 
$c_sql = "SELECT * FROM s_sign where s_name = '$s_name'";
$c_result = mysqli_query($db_server, $c_sql);

while ($member = $c_result->fetch_array()) {
    $c_name = $member['s_name'];
}


if($c_name == $s_name){

   echo("<script>alert(\"ID重複です。\")</script>");
   echo("<script>location.href='/bank_system/index.html';</script>");
   

} else {

   $Insert = "INSERT INTO s_sign VALUES (
      null ,'$s_name','$s_pw', '$s_ko' ,'$s_ze')";
   
   $result = mysqli_query($db_server, $Insert);

   $result;
   echo("<script>alert(\"登録完了しました。\")</script>");
   echo("<script>location.href='/bank_system/index.html';</script>");
   
}

?>
