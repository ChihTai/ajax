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
  <script src="js.js"></script>
</head>
<body>
<h1 style="text-align:center"><?=date("Y-m-d H:i:s");?></h1>
<div class="wrap">
  <div id="header">
    <!--插入導覽列檔案-->
    <div id="nav"></div>
    <div id="banner"></div>
  </div>
    <!--插入左側選單檔案-->
    <div id="sidebar"> <?php include "sidebar.php" ;?></div>
  <div id="content">

  </div>
  <!--插入頁腳檔案-->
  <?php include "footer.php" ;?>
</div>  
</body>
</html>
