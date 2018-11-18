<?php
  header('Content-Type: text/html; charset=utf-8');
    session_start();
    session_destroy();
    echo "<script>alert('로그아웃!')</script>"
?>
<meta http-equiv="refresh" content="0;url=../index.php" />
