<?php
class Member {
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $password;
    
    public function setId(int$id){
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
        
    }
}