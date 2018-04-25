<html>
    <head>
        <title>PHPのテスト</title>
    </head>
    <body>
        
        <?php
        if(isset($_POST["hoddy"])){
            $hoddy = implode('と',$_POST["hoddy"]);
            print "私の趣味は";
            print $hoddy;
            print "です。";
        }else{
            print "私の趣味はありません。";
        }
        ?>
        
    </body>
</html>