<?PHP
class Member {
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $password;
    
    
}
$member = new Member;
$member->setID('1');
$member->setLastname ('あなたの姓');
$member->setFirstname('あなたの名');
$member->setEmail    ('あなたのメールアドレス');
$member->setPassword ('パスワード');

print $member->getID()        ."<br>";
print $member->getLastname()  ."<br>";
print $member->getFirstname() ."<br>";
print $member->getEmail()     ."<br>";
print $member->getPassword()  ."<br>";
?>