<?php include_once "base.php";

$menu=[
  [
    "title"=>"首頁",
   "url"=>"index.php"
  ],
  [
    "title"=>"註冊會員",
   "url"=>"javascript:loadpage('reg.php')"
  ],
];

if(!empty($_SESSION['login']) && $_SESSION['user']=="admin"){

  $menu[]=["title"=>"管理頁面","url"=>"javascript:loadpage('admin.php')"];
  $menu[]=["title"=>"登出","url"=>"logout.php"];
  
}else if(!empty($_SESSION['login'])){
  
  $menu[]=["title"=>"登出","url"=>"logout.php"];

}else{
  $menu[]=["title"=>"登入","url"=>"javascript:loadpage('login.php')"];
  
}

echo json_encode($menu);

?>
