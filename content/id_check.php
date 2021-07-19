<?php
include "./DB/main_DB.php";
?>

<html>

<head>
    <meta charset="utf-8">
    <title>

    </title>
</head>

<body style="text-align: center; margin-top: 40%;" >

    <form method="post" action="../id_check_DB.php">
        <p>아이디 입력해주삼</p>
        <div class="mb-3 container">
            <input type="text" class="form-control length" name="id_check" placeholder="ID" maxlength="10">
            <input type="submit" value="중복확인">
        </div>
    </form>

</body>

</html>