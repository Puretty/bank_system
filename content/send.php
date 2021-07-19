<?php
include "./DB/main_DB.php";
?>

<html>

<head>
    <meta charset="utf-8">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div style="margin-top: 5%;">

        <form method="post" action="./DB/update_DB_send.php">

            <div class="mb-3 container">
                <input type="number" class="form-control length" name="send" placeholder="출금액" maxlength="10">
            </div>

            <div class="mb-3 container">
                <input type="password" class="form-control length" name="in_pw" placeholder="계좌 비번" maxlength="10">
            </div>
    </div>

    <div class="container">

        <input type="submit" value="실행">
        <input type="button" value="뒤로가기" onclick="history.back();">
        </form>
    </div>
</body>
</html>