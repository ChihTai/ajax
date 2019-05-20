<?php

//引入基本程式碼片段，可能包含常用的變數，設定，或自訂函式
include_once "base.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>我的店</title>
  <link rel="stylesheet" href="style.css">
  <script src="jquery-2.1.4.min.js"></script>
</head>
<body>
<h1 style="text-align:center"><?=date("Y-m-d H:i:s");?></h1>
<div class="wrap">
  <div id="header">
    <!--插入導覽列檔案-->
    <div id="nav"><?php include_once "nav.php" ;?></div>
    <div id="banner"></div>
  </div>
    <!--插入左側選單檔案-->
    <div id="sidebar"> <?php include "sidebar.php" ;?></div>
  <div id="content">
  <?php
    //判斷是否有GET 變數 do 存在並設定$do的值
    if(!empty($_GET['do'])){
      $do=$_GET['do'];
    }else{
      $do="";  //如果沒有$_GET值時，$do以空字串來代替
    }

    //利用$do的值來決定在主區塊要插入那個檔案的內容
    switch($do){
      case "login":
        include "login.php";
      break;
      case "reg":
        include "reg.php";
      break;
      case "member":
        include "member.php";
      break;
      case "admin":
        include "admin.php";
      break;
      default:
        //各項條件都不符時執行這區塊,或不做任何事
      
    }

    ?>
  </div>
  <!--插入頁腳檔案-->
  <?php include "footer.php" ;?>
</div>  
</body>
</html>
<script>
//寫一個function可以在content中載入頁面內容，取代iframe的功能

function loadpage(url){
  $("#content").load(url);
}

</script>