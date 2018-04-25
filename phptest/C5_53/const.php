<?php
class Member{
    
// constをキーを使って[const 定数名 = 値;]
// インスタンスを表す[$this]はしようせず
// クラス自身を表す[self]を使用します。
    const AdultAge = 20;
    
    function printAdultAge(){
        print self::AdultAge;
    }
}
?>