<?php
session_start();
// sessionに変数を格納
$_SESSION["onamae"] = $_POST["onamae"];
$_SESSION["honbun"] = $_POST["honbun"];

if(isset($_POST["user_id"])){
      $_SESSION["user_id"] = $_POST[user_id];
}
?>
<html>
<head>
<title>PHPのテスト</title>        
</head>
    <booy>
        確認画面
        <form name="form1" method="post" action="view.php">
            <?php
            print "名前:";
            print $_POST["onamae"];
            print "<br><br>";
            print "本文:";
            print nl2br($_POST["ho　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　nbun"]);
            ?>
            <br>
            <input type="submit" value="確　認" name="confirm">
            <input type="submit" value="戻　る" name="back">
        </form>
    </booy>
</html>