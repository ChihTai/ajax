
<?php 
if(empty($_SESSION['login'])){ //判斷是否有狀態值或GET值
?>
<form action="api_login.php" method="post">
<table class="login">
  <tr>
    <td>帳號:(mack)</td>
    <td><input type="text" name="acc" id="acc" value=""></td>
  </tr>
  <tr>
    <td>密碼:(1234)</td>
    <td><input type="password" name="pw" id="pw" value=""></td>
  </tr>
  <tr>
    <td><input type="button" value="確認" onclick="login()"></td>
    <td><input type="reset" value="清除"></td>
  </tr>
</table>
</form>
<?php 
}else{
  echo "你已登入過<br>";
  echo "<a href='index.php?do=member'>回到會員中心</a>";
}
?>

<script>

function login(){
  let acc=$("#acc").val();
  let pw=$("#pw").val();

  console.log(acc,pw);
  $.post("api_login.php",{acc,pw},function(res){
    console.log(res)
    switch(res){
      case "1":
        loadpage("admin.php");
        $("#nav").load("nav.php");
        $("#sidebar").load("sidebar.php");
      break;
      case "2":
        loadpage("member.php");
        $("#nav").load("nav.php");
        $("#sidebar").load("sidebar.php");
      break;
      case "3":
        alert("帳號密碼錯誤,請重新輸入");
      break;
      case "4":
        alert("欄位不可空白");
      break;
    }
  })

}

</script>
  
