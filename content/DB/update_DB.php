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
    echo "<script>alert('공백 금지임');location.href='../main_view.php';</script>";
    exit;

} else if ($u_pw != $user_pw) {
    echo "<script>alert('비번이 틀립니다');location.href='../main_view.php';</script>";
    exit;
    
} else {

    $result = mysqli_query($db_server, $sql);
    $result;
    echo "<script>alert('입금 성공');location.href='../main_view.php';</script>";
}
?>
