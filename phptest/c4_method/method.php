<html>
    <head>
        <title>クラスのテスト</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
        <font size="4">クラスのテスト</font>
        <br><br>
<?php
$newuser = new User();
$newuser -> print_hello();

class User {
    public $name   = '永田';
    public function print_hello() {
        print $this -> name;
        print "　さん、こんにちは! <br>";
    }
}
?>
</html>