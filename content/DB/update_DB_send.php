<?php
session_start();
include "./main_DB.php";
$user = $_SESSION['userid'];
$user_pw = $_SESSION['userpw'];

//send.php 에서 가져온 값 
$u_send = $_POST['send'];
$u_pw = $_POST['in_pw'];

// 출금 쿼리문
$sql = "UPDATE s_sign set s_ze = (s_ze - '$u_send') where s_name = '$user'"; 

// 출금액 비교용 쿼리문
$check = "SELECT * FROM s_sign where s_name = '$user'";   
$c_result = mysqli_query($db_server, $check);

//계속 돌려서 바뀐 값 불러오기 
while($borad = $c_result -> fetch_array()){
    $zeze = $borad['s_ze'];
   } 

if ( ($u_send== '') || ($u_pw=='') ) {
    echo "<script>alert('공백 금지임');
    location.href='../main_view.php';</script>";
    exit;
} else if ( $u_pw != $user_pw) {
        echo "<script>alert('비번 틀림');
        location.href='../main_view.php';</script>>";
    exit;
}

if ($u_pw == $user_pw) {
    
    if($zeze < $u_send) {
    echo "<script>alert('잔액이 부족해요');
    location.href='../main_view.php';</script>";
    exit;
    }

        $result = mysqli_query($db_server, $sql); 
        $result;
        echo "<script>alert('출금 성공 이용 ㄳ');
        location.href='../main_view.php';</script>";
}
?>
