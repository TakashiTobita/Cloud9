<html>
    <head>
        <title>PHPのテスト</title>
    </head>
    <body>
        
        <?php
        if(isset($_POST["hoddy"])){
            // implode関数　文字列を足す
            $hoddy = implode('と',$_POST["hoddy"]);
            print "私の趣味は";
            print $hoddy;
            print "です。";
        }else{
            print "私の趣味はありません。";
        }
        ?>
        <br>
        <?php
        // 　★$_POST["gender"] ★  
        //  value= 男　　　value=　ゲイ　が格納されている。
        if(isset($_POST["gender"]) && ($_POST["gender"] == "男" || $_POST["gender"] == "ゲイ")){
            print "性別 : ";
            print$_POST["gender"];
        }else{
            print "性別を選んでください。<br>";
        }
        ?>
        <br>
        <?php
        if(isset($_POST["tensai"]) && ($_POST["tensai"] == "賢い" || $_POST["tensai"] == "小学生")){
            print "彼方は : ";
            print$_POST["tensai"];
        }else{
            print "己の賢さを選んでください。<br>";
        }
        ?>
        <br>
        <?php
        // 選択されなかった場合 value="NULL" ;
        if($_POST["ken"] != ""){
            print "都道府県 : <br>";
            print $_POST["ken"];
        }else{
            print "都道府県を選んでください。<br>";
        }
        ?>
        <br>
        <?php
        if(isset($_POST["hobby"])){
            print "私の趣味は以下の通りです。<br><br>";
            foreach($_POST["hobby"] as $hobby)
        {
            print $hobby;
            print "<br>";
            
        }
    }else{

        print "私の趣味はありません。";
    }
    ?>
    </body>
</html>