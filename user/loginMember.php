<?php
 header('Content-Type: text/html; charset=utf-8');
 $host = 'localhost';
 $dbUser = 'parksodam0328';
 $dbPW = 'Ppsjdh198603281!';
 $dbName = 'parksodam0328';
 $conn = mysql_connect($host, $dbUser, $dbPW);
 $dbName = mysql_select_db('parksodam0328', $conn);
 mysql_query("SET NAMES utf8");


 $userID = $_POST['userID'];
 $userPW = $_POST['userPW'];

 //아이디 중복체크
 $loginUserSql = mysql_query("select * from user where userID='".$userID."' and userPW='".$userPW."'");
 $checkID = mysql_fetch_array($loginUserSql);

 if($checkID == 0){
   echo "<script>alert('회원정보가 없습니다. 다시 로그인해주세요!');</script>";
 }else{
   session_start();
   $_SESSION['userID'] = $userID;
    echo "<script>alert('로그인!');</script>";
    echo "<meta http-equiv='Refresh' content='0;url=../index.php'>";
 }
?>
