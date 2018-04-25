<html>
    <head>
        <title>クラスのテスト</title>
        <meta http-equiv="Content-Type" content="text/html; cherset=utf-8">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <font size="4">クラスのテスト</font>
        <br><br>
<?php
class User {
    private $name = NULL;
    public function print_hello() {
        print $this->name;
        print "さん、こんにちは! <br>";
    }
}

class Guest extends User {
    private $name ="ゲスト";
    public function print_hello() {
        print "さん、初めまして! <br>";
    }
}

$newuser = new Guest();
$newuser -> print_hello();
?>
</body>
</html>