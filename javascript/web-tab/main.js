function showTab(tab) {
  //タブの内容を表示するDOMを指定する変数
　var selector = "#tabs-" + tab;
　
　//タブのメニューをアクティブ化するのに指定する変数
  var idname = "#tab-menu-" + tab;

  //.activeというクラスを外して、ボーダー（下線）を表示して背景を標準に戻す
  $(".tabs-menu > div").removeClass("active");
  
  //.activeというクラスをクラスを付与して、ボーダー（下線）を消して背景を白くする
  $(idname).addClass("active");
  
  //.tabs-contentのdivを全て非表示にする
  $(".tabs-content > div").hide();
  
  //id=tabs-a を表示
  $(selector).show();
}

$(document).ready(function() {
  showTab("a");
  
  $(".tabs-menu > div").click(function() {
    var tab = $(this).attr("id").slice(-1);
    showTab(tab);
    return false;
  });

})
