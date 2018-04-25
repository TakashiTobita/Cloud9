<!-- このcookie.phpをApacheのDocumentRootに設置して
　　　Webブラウザかcookie.phpにアクセスするとメッセージがでる-->
<?php
$count = 1;
if(isset($_COOKIE["count"])){
    $count = $_COOKIE["count"];
    $count++;
}
// setcookie == ("キー","値","クッキーの有効期限")
setcookie("count", $count, time() + 10);
?>
<!-- printで表示するときは　headの後でないと不具合になる -->
<html>
    <head>
        <title>クッキーのテスト</title>
        <mata http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        クッキーのテスト<br>
        <br>
        <?php
        if($count == 1){
        ?>
        初めての訪問です。<br>
        <br>
        クッキー情報はありません。<br>
        このページをリロードしてください。<br>
        
        <?php
        }else{
        ?>
        
        彼方の訪問は<?=$count?>回目です。<br>
        <br>
        10秒以内にリロードするとカウントアップします。
        
        <?php
        }
        ?>
        
    </body>
</html>