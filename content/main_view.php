<div style="margin: bottom 8%;">
    <h1>メインページ</h1>
</div>


<?php
session_start();
include "./DB/main_DB.php";
$user = $_SESSION['userid'];

echo "おはようございます ", $user, "様！<br>";

//계좌, 잔액 불러오는 쿼리문
$select = "SELECT * FROM s_sign where s_name = '$user'";
$result = mysqli_query($db_server, $select);

while ($board = $result->fetch_array()) {

    if ($result) {

        $u_ko = $board['s_ko'];
        $u_ze = $board['s_ze'];
    }
}


?>

<html>

<head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body style="text-align: center; margin-top: 10%;">
    
    
    <form action="./logout.php" method="post">
        <input type="submit" value="Sign out">
    </form>

    <br><br>
    
    <?php
    echo "※口座の暗証番号はログインの時使うPWでございます。<br><br>";
    
    echo "私の口座番号:", $u_ko, "<br>";
    
    echo "残高: ", $u_ze, "円", "<br>";
    
    ?>

    <br><br>
        <div>
        <table style="margin-left:45%;">
            <thead>
                <tr>
                    <th><button onclick="location.href='./open.php'">入金</button></th>

                    <th><button onclick="location.href='./send.php'">出金</button></th>

                    <th><button onclick="location.href='./remit.php'">送金</button></th>
                </tr>
            </thead>
        </table>
        </div>    
</body>

</html>