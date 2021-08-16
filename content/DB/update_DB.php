<?php
session_start();
include "./main_DB.php";
$user = $_SESSION['userid'];
$user_pw = $_SESSION['userpw'];

// open.php 에서 가져온 값 
$u_open = $_POST['open'];
$u_pw = $_POST['in_pw'];

$sql = "UPDATE s_sign set s_ze = s_ze + '$u_open' where s_name = '$user'";


if (($u_open == '') || ($u_pw == '')) {
    echo "<script>alert('空欄があります。');location.href='../main_view.php';</script>";
    exit;

} else if ($u_pw != $user_pw) {
    echo "<script>alert('PWが違います。');location.href='../main_view.php';</script>";
    exit;
    
} else {

    $result = mysqli_query($db_server, $sql);
    $result;
    echo "<script>alert('成功しました。ご利用ありがとうございます。');location.href='../main_view.php';</script>";
}
?>
