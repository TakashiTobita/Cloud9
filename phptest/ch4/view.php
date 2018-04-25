<?php
session_start();
?>
<html>
    <head>
        <title>PHPのテスト</title>
    </head>
        <body>
            <?php
            // isset関数で変数の値を検査。=isset TRUE or FALSE
            if (isset($_POST["confirm"])){
            ?>
            <?php 
            // 「確認」がクリックされたとき
            print $_SESSION["onamae"]."さんからのメッセージ";
            print "<br><br>";
            print "本文:<br>";
            print nl2br($_SESSION["honbun"]);
            ?>
            <br>
            <br>
            <a href="form.html">もう一度試すにはここをクリック。</a>
            
            <hr>
            <pre>
                <?php print_r($_SESSION);?>
            </pre>
            <hr>
            
            <?php
            } elseif (isset($_POST["back"])){
            //「戻る」がクリックされたとき
            ?>
            
            <font size="4">テキスト送信のテスト</font>
            
            <form name="form1" method="post" action="confirm.php">
                名前:<br>
                　　<!-- 送信データの設定　-->
                <input type="text" name="onamae" value="<?=$_SESSION["onamae"]?>">
                <br>
                本文:<br>
                <textarea name="honbun" cols="30" rows="5"><?=$_SESSION["honbun"]?></textarea>
                <!--　テキストエリアでの送信データの設定 < ?=$_POST["honbun"]?>　-->
                    <br>
                    <input type="submit" value="送　信">

            </form>
                    
            <?php
            } else {
         //　上記条件以外の時
            ?>
            
            エラーです。<br>
            <a href="form.html">form.html</a>からアクセスして下さい。
            
            <?php
            }
            ?>
            
        </body>
</html>