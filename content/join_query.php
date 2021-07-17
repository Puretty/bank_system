<html>
    <head>
        <meta charset = "utf-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>

        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <style>
            .length{
                width: 240px;
                margin-top: 5%;              
            }
            .lengthh{
                width: 500px;
            }
        </style>
    </head>

    <body>

    <form method = "post" action = "./dbdb.php">
    
    <div class="mb-3 container">
  <input type="text" class="form-control length" name="name" placeholder="이름" maxlength="10">
</div>

<div class="mb-3 container">
  <input type="text" class="form-control length" name="pw" placeholder="비번" maxlength="10">
</div>

<div class = "container">

<input type = "submit" values = "가입하기">


</div>

    </form>
</html>
