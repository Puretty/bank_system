<?php
session_start();
include "./main_DB.php";

$user = $_SESSION['userid'];
$user_pw = $_SESSION['userpw'];

//remit.php 에서 가져온 값 
$u_remit_money = $_POST['remit_money'];
$u_remit_ko = $_POST['remit_ko'];
$u_my_pass = $_POST['remit_pw'];


if ( ($u_remit_money== '') || ($u_remit_ko=='') || ($u_my_pass=='')) {
    echo "<script>alert('공백 금지임');
    location.href='../main_view.php';</script>";
    exit;
} else if ( $u_my_pass != $user_pw) {
        echo "<script>alert('비번 틀림');
        location.href='../main_view.php';</script>>";
    exit;
}

if ($u_my_pass == $user_pw) {
    
        // 출금 쿼리문 내 계좌에서 뺀다 
        $send_sql = "UPDATE s_sign set s_ze = (s_ze - '$u_remit_money') where s_name = '$user'";

        // 출금액 비교용 쿼리문
        $check = "SELECT * FROM s_sign where s_name = '$user'";   
        $check2 = mysqli_query($db_server, $check);

        while($s_borad1 = $check2 -> fetch_array()){
        $zeze = $s_borad1['s_ze'];
        }

        // 입력값 받아온 계좌의 주인 찾는 쿼리문 
        $r_sql = "SELECT * from s_sign where s_ko = '$u_remit_ko'";
        $r_result = mysqli_query($db_server, $r_sql);

        while($a_borad = $r_result -> fetch_array()){
        $a_ko = $a_borad['s_ko'];
        $a_name = $a_borad['s_name'];
        } 
            
            if($zeze < $u_remit_money) {
                echo "<script>alert('잔액 부족임');
                location.href='../main_view.php';</script>";
                exit;
            } else if ($a_ko != $u_remit_ko) {
                    echo "<script>alert('이런 계좌 없다');
                    location.href='../main_view.php';</script>";
                    exit;
            } else {

                $add_sql = "UPDATE s_sign set s_ze = (s_ze + '$u_remit_money') where s_name = '$a_name'";
                $add_result = mysqli_query($db_server, $add_sql);
                $send_result = mysqli_query($db_server, $send_sql); 

                $send_result;
                $add_result;
                echo "<script>alert('송금 성공 이용 ㄳ');
                location.href='../main_view.php';</script>";
                exit;
              }
        }
?>