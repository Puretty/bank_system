<?php
  session_start();
  session_destroy();

  echo("<script>alert(\"로그아웃 성공 빨리 꺼져\")</script>");
  echo("<script>location.href='../index.php';</script>");
?>