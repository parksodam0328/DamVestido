  <!DOCTYPE html>
  <?php session_start(); header('Content-Type: text/html; charset=utf-8');?>
  <html lang="utf-8" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    <div>
      <center>
      <a href="index.php">
        <img style="margin-top:2%" width="350px" src="images/logo.png">
      </a>
      </center>
      <?
           if(!isset($_SESSION['userID'])) {?>
      <div class="information">
        <a href="user/login.php">로그인 </a>|
        <a href="user/join.php"> 회원가입 </a>|
        <a href="user/cart.php"> 장바구니 </a>|
        <a href="user/question.php"> 문의</a>
      </div>
        <?}else{
          $user_id = $_SESSION['userID'];
          ?>
          <div class="information">
            <a href="#"><b><?=$user_id?> 님 </b></a>|
            <a href="user/logout.php">로그아웃 </a>|
            <a href="user/cart.php"> 장바구니 </a>|
            <a href="user/myPage.php"> 마이페이지 </a>|
            <a href="user/question.php"> 문의</a>
          </div>
        <?}?>

      <center>
      <div class="topnav">
        <a href="outerShop.php">아우터</a>
        <a href="topShop.php">상의</a>
        <a href="shirtShop.php">셔츠 & 블라우스</a>
        <a href="pantShop.php">팬츠</a>
        <a href="skirtShop.php">스커트</a>
        <a href="onepieceShop.php">원피스</a>
        <a href="shoesShop.php">신발 & 가방</a>
        <a href="accessoriesShop.php">악세사리</a>
      </div>
    </center>
    </div>

  </body>
  </html>
