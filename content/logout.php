<?php
  session_start();
  session_destroy();

  echo ("<script>alert('Sign out成功')</script>");
  echo("<script>location.href='../index.html';</script>");
  exit;
?>