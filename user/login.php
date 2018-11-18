<!DOCTYPE html>
<html lang="utf8" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <script type="text/javascript" src="../js/user.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
      .loginForm {
        width:350px;
        height:600px;
        margin-top:20px;
        margin: auto;
      }
      input[type=text], input[type=password], input[type=email] {
        background-color: #fff;
        border:1px solid #bcbbcc;
        color: #000;
        padding: 4px 4px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        width:300px;
        height:25px;
      }
      select {
        background-color: #fff;
        border:1px solid #bcbbcc;
        color: #000;
        padding: 4px 4px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        width:70px;
        height:30px;
      }
      input[type=text]#phone2, input[type=text]#phone3 {
        background-color: #fff;
        border:1px solid #bcbbcc;
        color: #000;
        padding: 4px 4px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        width:88px;
        height:20px;
      }
      input[type=button] {
        background-color: #4AD9D9;
        color: #fff;
        font-weight: 600;
        padding: 4px 4px;
        text-decoration: none;
        margin: 10px 4px;
        cursor: pointer;
        border: none;
        width:325px;
        height:35px;
      }
      input[type=button]:hover, input[type=reset]:hover {
        background-color: #36B1BF;
        color: #000;
        padding: 4px 4px;
        text-decoration: none;
        margin: 10px 4px;
        cursor: pointer;
        border: none;
        width:325px;
        height:35px;
      }
      input[type=button]#doubleCheck{
        background-color: #4AD9D9;
        color: #000;
        padding: 4px 4px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border: none;
        width:70px;
        height:35px;
      }
      .content {
        font-size: 15px;
        font-weight: 600;
      }
      hr {
        border: 1px solid #4AD9D9;
        width: 320px;
      }
    </style>
  </head>
  <body>
    <center>
      <a href="../index.php"><img src="../images/logo.png" width="300px" style="margin-top:30px; margin-bottom:30px;"></a>
    </center>
  <form name="userForm" method="post" action="loginMember.php">
    <div class="loginForm" style="padding-top:10px; padding-left:30px">
        <span class="content">아이디</span><br>
        <hr align="left">
        <input type="text" name="userID" id="userID" placeholder="아이디(12자 이내)"><br><br>
        <span class="content">비밀번호</span><br>
        <hr align="left">
        <input type="password" name="userPW" ID="userPW" placeholder="비밀번호(16자 이내)"><br><br><br><br>
        <a href="javascript:loginMember()"><input type="button" value="로그인"></a>
    </div>
  </form>
  </body>
</html>
