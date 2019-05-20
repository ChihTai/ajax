<!---上方導覽列--->
<?php include_once "base.php";?>
  <ul class="nav">
    <li><a href="index.php">首頁</a></li>
    <li><a href="javascript:loadpage('reg.php')">註冊會員</a></li>
    <?php 
        //利用session來判斷使用者是否為管理者，如果是管理者就顯示管理頁面的連結
        if(!empty($_SESSION['login']) && $_SESSION['user']=='admin'){
          echo "<li><a href=&#34;javascript:loadpage(&#39;admin.php&#39;)&#34;>管理頁面</a></li>";
        }
        ?>
    <?php 
        //利用session來判斷使用者的登入狀態用以決定要顯示登出或登入的功能
        if(!empty($_SESSION['login'])){
          echo "<li><a href='logout.php'>登出</a></li>";
        }else{
          ?><li><a href="javascript:loadpage('login.php')">登入</a></li><?php 
        }
      ?>
  </ul>
