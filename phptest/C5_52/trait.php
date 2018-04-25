<html>
    <head>
        <title>トレイトのテスト</title>
        <mata http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <font size="4">トレイトのテスト</font>
        <br><br>
<?php
class User {
    private $name = NULL;
    public function print_hello(){
        print $this->name;
        print "さん、こんにちは！ <br>";
    }
}
trait SayMorning {
    public function print_morning() {
        print $this->name;
        print "さん、おはようございます!<br>";
}

}

class Guset extends User {
    use SayMorning;
    private $name = "ゲスト";
    public function print_hello() {
        print $this->name;
        print "さん、はじめまして!<br>";
    }
}

$newuser = new Guset();
$newuser->print_hello();
$newuser->print_morning();
?>
    </body>
</html>