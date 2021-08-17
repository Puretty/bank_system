<?php
    include "./DB/main_DB.php";

    $id = $_POST['userid'];
    $pw = $_POST['userpw'];

    if ( ($id== '') || ($pw=='') ) {
    echo "<script>alert('ID or PWを入力してください');
    location.href='../index.html';</script>";
    exit;
    }
?>

<?php
    
    session_start();
    
    $_SESSION['userid'] = $_POST['userid'];
    $_SESSION['userpw'] = $_POST['userpw'];
    
    
    if(isset($_SESSION['userid'])&&isset($_SESSION['userpw'])){
            $userid=$_SESSION['userid'];
            $userpw=$_SESSION['userpw'];
            
            $conn= mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
            $sql="SELECT * FROM s_sign where s_name='$userid'&&s_pw='$userpw'";

            if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
                
            echo("<script>alert(\"$userid\" + \"ようこそ！\")</script>");
            echo("<script>location.href='./main_view.php';</script>");
            exit;
            
            } else{
            echo ("<script>alert('ID or PWが違います。')</script>");
            echo("<script>location.href='../index.html';</script>");
            exit;
        }
    }
?>