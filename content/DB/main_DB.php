<?php

    $db_hostname = '127.0.0.1'; // 102.168.126.78 방화벽
    //db_hostname = '192.168.31.41';
    $db_database = 'web_test'; // 내 db 이름 확인
    $db_username = 'cheol'; // 내 sql 정보
    $db_password = '4852';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
    

    if (!$db_server) 
        echo "DB Server connect Error<br>";
    else
        // echo "DB Server connect<br>";
?>