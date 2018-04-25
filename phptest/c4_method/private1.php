<?php
class Test {
public  $str1　= '公開';
private $str2  = '秘密';
}

$test =new Test();
print $test->str1;
print "<br>";
// ここでエラーになる↓
print $test->str2;
print "<br>";
?>