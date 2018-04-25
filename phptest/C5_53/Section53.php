<?php
class Member {
// constをキーを使って[const 定数名 = 値;]
// インスタンスを表す[$this]はしようせず
// クラス自身を表す[self]を使用します。
    const AdultAge = 20;
    
    function printAdultAge(){
        print self::AdultAge;
    }
    
//　ここはprivateにして外部アクセスを制限する 
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $password;
    
// 外部アクセスできるようにpublic

    // 会員情報の登録
    public function regist(){
    }
    // 登録完了メールの送信
    public function edit(){
    }
    // 会員情報の編集
    public function resendPassword(){
    }
    // 退会処理
    public function delete(){
    }
    // ゲッター　セッターの設置
//    public function setId(int $id){
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setLastname($lastname){
        $this->lastname = $lastname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function setFirstname($firstname){
        $this->firstname = $firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }

}

// Memberクラスのテスト
$member = new Member;
$member->setID('1');
$member->setLastname('あなたの姓');
$member->setFirstname('あなたの名');
$member->setEmail('あなたのメールアドレス');
$member->setPassword('パスワード');

print $member->getID()        ."<br>";
print $member->getLastname()  ."<br>";
print $member->getFirstname() ."<br>";
print $member->getEmail()     ."<br>";
print $member->getPassword()    ."<br>";


?>