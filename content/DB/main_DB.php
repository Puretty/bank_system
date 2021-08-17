<?php

    $db_hostname = 'Localhost'; 
    $db_database = 'w1004mesmg'; 
    $db_username = 'w1004mesmg'; 
    $db_password = 'sunmoons1s2s3!';

    // 로컬 확인용
    // $db_hostname = 'localhost';
    // $db_database = 'web_test';
    // $db_username = 'cheol'; 
    // $db_password = '4852';

    $db_server = new mysqli($db_hostname, $db_username, $db_password, $db_database, 3306);
    

    if (!$db_server) 
        echo "DB Server connect Error<br>";
    else
        // echo "DB Server connect<br>";
?>