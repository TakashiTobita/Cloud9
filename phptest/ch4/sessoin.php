<?php
// セッション開始
sessoin_start();

$count = 1;
// ここでデータが格納されているかチェック
if(isset($_SESSTION["count"])){
    // セッションの内容をcountに格納
    $count = $_SESSTION["count"];
    // 1を加算してセッションに戻す。
    $count++;
}
$_SESSION["count"] = $count;

?>

<html>
    <head>
        <title>セッション変数のテスト</title>
        <mata http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        セッションの変数テスト<br>
        <br>
        <?php
        if($cont == 1){
        ?>
        初めての訪問です。<br>
        <br>
        セッション変数にデータがありません。<br>
        このページをリロードしてください。<br>
        
        <?php
        }else{
        ?>
        
        あなたの訪問は<?=$count?>回目です。<br>
        
        <?php
        }
        ?>
    </body>
</html>