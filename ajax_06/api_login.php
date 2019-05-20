<?php
include_once "base.php";
if(!empty($_POST)){  //判斷是否有POST的值傳入

    $acc=$_POST['acc'];
    $pw=$_POST['pw'];

    //檢查欄位是否有輸入
    if($acc=="" || $pw==""){
      
      echo 4;

    }else{
        //建立查詢帳號密碼的語法
        $sql="select count(*) from user where acc='$acc' && pw='$pw'";
      
        //取得查詢結果的筆數
        $user=$pdo->query($sql)->fetchColumn();

        if($user){ //判斷帳號密碼是否正確

          //建立session變數來存放登入的狀態及使用者的帳號
          $_SESSION['login']=true;
          $_SESSION['user']=$acc;

          if($acc=='admin'){
            
            //header("location:index.php?do=admin"); //帳密符符合的話導向ADMIN.PHP頁面,並帶入成功的訊息
            echo 1;
          }else{

            //header("location:index.php?do=member"); //帳密符符合的話導向MEMEBER.PHP頁面,並帶入成功的訊息
            echo 2;
          }
        }else{
          echo 3;
        }
    }

}

?>