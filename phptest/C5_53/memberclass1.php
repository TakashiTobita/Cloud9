<?php
class Member {
    
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
    public function getId(){
        return $this->id;
    }
}
?>