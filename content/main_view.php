<?php
session_start();
include "./DB/main_DB.php";
$user = $_SESSION['userid'];

echo "반가워요 ", $user, "님";

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

<body>
    <form action="./logout.php" method="post">
        <input type="submit" value="로그아웃하기">
    </form>

    <br><br>
    
    <?php
    echo "내 계좌번호:", $u_ko, "<br>";
    ?>

    <?php
    echo "현재 잔액: ", $u_ze, "원", "<br>";
    ?>
    
    <br><br>
    <div>
        <table>
            <thead>
                <tr>
                    <th><button onclick="location.href='./open.php'">입금</button></th>

                    <th><button onclick="location.href='./send.php'">출금</button></th>

                    <th><button onclick="location.href='./remit.php'">송금</button></th>
                </tr>
            </thead>
        </table>
    </div>
</body>

</html>