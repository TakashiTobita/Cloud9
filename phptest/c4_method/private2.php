<?php
class Test
{
    public function TestPublic() {
        print "公開 <br>";
    }
    function TestNotthing(){
        print "宣言無し <br>";
    }
    private function TestPrivate(){
        print "秘密 <br>";
    }
    
}

$test = new Test();
$test -> TestPublic();
$test -> TestNotthing();
// 此処でエラーになる↓
$test -> TestPrivate();
?>