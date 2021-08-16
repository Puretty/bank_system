<html>

<head>
    <meta charset="utf-8">
    </meta>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function id_check() {
            var userid = document.getElementById("uid").value;
            if (userid) {
                url = "./DB/id_check_DB.php?userid=" + userid;
                window.open(url, "chkid", "witdh=300px, height=100px");
            } else {
                alert("IDを入力してください。");
            }
        }
    </script>
</head>


<body style="margin-top: 5%;">

    <form method="post" action="./DB/insert_DB.php">

        <div class="mb-3 container">
            <input type="text" class="form-control" name="name" id="uid" placeholder="ID" maxlength="10" style="text-align: center;">
            <input type="button" value="重複確認" onclick="id_check();">
        </div>

        <div class="mb-3 container">
            <input type="password" class="form-control length" name="pw" placeholder="PW" maxlength="10" style="text-align: center;">
        </div>

        <div class="container">

            <input type="submit" value="会員登録">
            <input type="button" value="バック" onclick="history.back();">
            

        </div>
    </form>
</body>
</html>