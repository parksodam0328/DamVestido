<?php

$db_host = "localhost";

$db_user = "parksodam0328";

$db_passwd = "Ppsjdh198603281!";

$db_name = "parksodam0328";

header('Content-Type: text/html; charset=utf-8');

// MySQL - DB 접속.

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

if (mysqli_connect_errno()){

echo "MySQL 연결 오류: " . mysqli_connect_error();

exit;

} else {

echo "DB : \"$db_name\"에 접속 성공.<br/>";

}



// table 만들기

$sql = "CREATE TABLE Person

(

PID bigint(20) unsigned not null auto_increment,

Name CHAR(255),

Address CHAR(255),

Age INT,

PRIMARY KEY(PID)

) charset=utf8";



if (mysqli_query($conn,$sql)){

echo "성공적으로 테이블을 만들었습니다.<br/>";

} else {

echo "테이블 생성 오류 : " . mysqli_error($conn);

exit;

}

?>
