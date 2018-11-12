<?php
 header('Content-Type: text/html; charset=utf-8');
 $host = 'localhost';
 $dbUser = 'parksodam0328';
 $dbPW = 'Ppsjdh198603281!';
 $dbName = 'parksodam0328';
 $conn = mysqli_connect($host, $dbUser, $dbPW, $dbName);

 $id=$_POST['id'];
 $userName = $_POST['userName'];
 $userID = $_POST['userID'];
 $userPW = $_POST['userPW'];
 $userPWCheck = $_POST['userPWCheck'];

 $passwordCheck = strcmp($userPW, $userPWCheck);
 if($passwordCheck!=0){
   echo "<script>window.alert('비밀번호가 일치하지 않습니다');history.go(-1);</script>";
 }

 $userGender = $_POST['userGender'];
 $userEmail = $_POST['userEmail'];

 $phone1 = $_POST['phone1'];
 $phone2 = $_POST['phone2'];
 $phone3 = $_POST['phone3'];

 $userPhoneNumber = $phone1.$phone2.$phone3;

 $sql = "insert into USER (userName, userID, userPW, userGender, userEmail, userPhoneNumber) values('$userName','$userID','$userPW','$userGender','$userEmail','$userPhoneNumber')";
 $result = mysqli_query($conn, $sql);
 if(!$result){
   echo 'database insert error';

 }else{
   echo "<script>window.alert($userName.'님 회원가입을 축하드립니다!');
   </script>";
   echo "<meta http-equiv='Refresh' content='0;url=../outerShop.php'>";
 }
?>
