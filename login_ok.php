<?php
    session_start();    
        include "./main_DB.php";
    

    $_SESSION['userid'] = $_POST['userid'];
    $_SESSION['userpw'] = $_POST['userpw'];
    
    if(isset($_SESSION['userid'])&&isset($_SESSION['userpw'])){
            $userid=$_SESSION['userid'];
            $userpw=$_SESSION['userpw'];

            $conn= mysqli_connect('localhost', 'cheol', '4852', 'web_test');

            $sql="SELECT * FROM s_sign where s_name='$userid'&&s_pw='$userpw'";

            if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
                
            echo("<script>alert(\"$userid\" + \"님 반갑습니다 씨발\")</script>");
            echo("<script>location.href='./content/main_view.php';</script>");
            
            } else{
            echo ("<script>alert(\" 똑디쳐라 \")</script>");
            echo("<script>location.href='./index.php';</script>");
        }
    }
?> 


