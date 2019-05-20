//寫一個function可以在content中載入頁面內容，取代iframe的功能
getmenu();

function getmenu(){
  $.get("api_nav.php",function(res){
  console.log(res)
  let menu=JSON.parse(res)
  console.log(menu)
  let list=`<ul class="nav">`;
  menu.forEach(function(val){
    list=list+`<li><a href="${val.url}">${val.title}</a></li>`;
  })

  list=list+"</ul>";
  $("#nav").html(list)
})
}


function loadpage(url){
  $("#content").load(url);
}
