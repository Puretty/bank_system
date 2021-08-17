<?php
session_start();
include "./main_DB.php";
$user = $_SESSION['userid'];
$user_pw = $_SESSION['userpw'];

// open.php 에서 가져온 값 
$u_open = $_POST['open'];
$u_pw = $_POST['in_pw'];

$sql = "UPDATE s_sign set s_ze = s_ze + '$u_open' where s_name = '$user'";

// 계좌번호용
$check = "SELECT * FROM s_sign where s_name = '$user'";   
$c_result = mysqli_query($db_server, $check);
 
while($borad = $c_result -> fetch_array()){
    $zbzb = $borad['s_zb'];
   } 

   
if (($u_open == '') || ($u_pw == '')) {
    echo "<script>alert('空欄があります。');location.href='../main_view.php';</script>";
    exit;

} else if ($u_pw != $zeze) {
    echo "<script>alert('PWが違います。');location.href='../main_view.php';</script>";
    exit;
    
} else {

    $result = mysqli_query($db_server, $sql);
    $result;
    echo "<script>alert('成功しました。ご利用ありがとうございます。');location.href='../main_view.php';</script>";
    echo "<script>'alert('.$u_pw.');</script>'";

}
?>
