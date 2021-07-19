<?php
    include "./DB/main_DB.php";

    $id = $_POST['userid'];
    $pw = $_POST['userpw'];

    if ( ($id== '') || ($pw=='') ) {
    echo "<script>alert('아디 비번 치삼');
    location.href='../index.php';</script>";
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

            $conn= mysqli_connect('localhost', 'cheol', '4852', 'web_test');

            $sql="SELECT * FROM s_sign where s_name='$userid'&&s_pw='$userpw'";

            if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
                
            echo("<script>alert(\"$userid\" + \"님 방가방가\")</script>");
            echo("<script>location.href='./main_view.php';</script>");
            exit;
            
            } else{
            echo ("<script>alert('비번or아디 틀림')</script>");
            echo("<script>location.href='../index.php';</script>");
            exit;
        }
    }
?>