<?php
session_start();
include "../main_DB.php";
$user = $_SESSION['userid'];

echo "반가워요",$user,"님";

$select3 = "SELECT * FROM s_sign where s_name = '$user'"; 
$result3 = mysqli_query($db_server, $select3);

while($board = $result3->fetch_array()){

    if($result3){

        $t_title = $board['s_ko'];
        $t_user = $board['s_ze'];

    }
}


?>

<html>
    <head>
        <meta charset = "utf-8">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </head>
    
    <body>
        <form action="../logout.php/" method="post">
        <input type="submit" value="로그아웃하기">
        </form>
        <br><br>
        <?php
        echo "내 계좌번호:", $t_title, "<br>";
        ?>
        <?php
        echo "현재 잔액: ", $t_user, "<br>";
        ?>
    </body>
</html>