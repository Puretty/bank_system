<?php
include "./content/DB/main_DB.php";
?>

<html>

<head>
    <meta charset="utf-8">
    <title>
        은행 시스템
    </title>
</head>

<body>
    <div class="container">
        <p>은행 시스템을 구현해 보앗다</p>
    </div>

    <form action="./content/login_ok.php" method="post">
        <div class="mb-3 container">

            아이디 : <input type="text" class="form-control length" name="userid" maxlength="10">

        </div>

        <div class="mb-3 container">

            비번 : <input type="password" class="form-control length" name="userpw" maxlength="10">
        </div>

        <input type="submit" value="로긴"></input>

    </form>

    <form action="./content/member.php" method="post">
        <input type="submit" value="회원가입"></input>
    </form>
    </div>
</body>

</html>