<?php
 header('Content-Type: text/html; charset=utf-8');
 $host = 'localhost';
 $dbUser = 'parksodam0328';
 $dbPW = 'Ppsjdh198603281!';
 $dbName = 'parksodam0328';
 $conn = mysql_connect($host, $dbUser, $dbPW);
 $dbName = mysql_select_db('parksodam0328', $conn);
 mysql_query("SET NAMES utf8");
 $id=$_POST['id'];
 $userName = $_POST['userName'];
 $userID = $_POST['userID'];
 $userPW = $_POST['userPW'];
 $userPWCheck = $_POST['userPWCheck'];

 $userGender = $_POST['userGender'];
 $userEmail = $_POST['userEmail'];

 $phone1 = $_POST['phone1'];
 $phone2 = $_POST['phone2'];
 $phone3 = $_POST['phone3'];
 $userPhoneNumber = $phone1.$phone2.$phone3;

 //아이디 중복체크
 $checkUserSql = mysql_query("select * from user where userID='".$userID."'");
 $checkID = mysql_fetch_array($checkUserSql);

 if($checkID == 0){
   $sql = "insert into user (userName, userID, userPW, userGender, userEmail, userPhoneNumber) values('$userName','$userID','$userPW','$userGender','$userEmail','$userPhoneNumber')";
   $result = mysql_query($sql);
   if(!$result){
     echo 'database insert error';
   }else{
     echo "<script>alert($userName.'님 회원가입을 축하드립니다!');</script>";
     echo "<meta http-equiv='Refresh' content='5;url=../outerShop.php'>";
   }
 }else{
   echo "<script>alert('아이디가 중복되었습니다! 다시 입력해주세요!');history.go(-1);</script>";
 }
?>
