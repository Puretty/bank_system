<?php
include "./main_DB.php";
?>

<html>
    <head>
        <meta charset="utf-8">
            <title>
                게시판
            </title>
    </head>

    <body> 
        <div class="container">
            <p>ㅎㅇ 쓸라면 횐가입 해야한다 시발련아</p>
        </div>

            <form action = "./login_ok.php" method = "post">
                <div class="mb-3 container">
                    
                    아이디 : <input type="text" class="form-control length" name="userid" maxlength="10">
                        
                </div>

                <div class="mb-3 container">

                    비번 : <input type="password" class="form-control length" name="userpw" maxlength="10">
                </div>

                <input type = "submit" value = "로긴"></input>
            </form>

            <form action = "./content/join_query.php" method = "post">
                <input type = "submit" value = "회원가입"></input>
            </form>
        </div>
    </body>   
</html>

