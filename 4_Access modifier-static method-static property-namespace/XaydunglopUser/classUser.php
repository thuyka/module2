<?php
class User {
    protected $name;
    protected $email;
    public $role;

    protected function setName ($name) {
        $this->name = $name;
    }
    protected function getName () { 
        return $this->name; 
    }
    protected function setEmail ($email) {
        $this->email = $email;
    }
    protected function getEmail (){
        return $this->email;
    }
    public function setRole ($role) {
        $this->role = $role;
    }
    public function getRole () {
        return $this->role;
    }
    public function getInfo() {
        return $this->name;
        // echo "Name: $this->name" . "Email: $this->email";
    }
    public function isAdmin() {
        if ($this->role == 1) {
            echo "admin";
        }else if ($this->role == 2){
            echo "nguoi dung binh thuong";
        }
    }
}

//khởi tạo 1 obj
$objUser = new User ();

// public function __construct($name,$email,$role)
// {
//     $this->name = $name;
//     $this->emali = $email;
//     $this->role = $role;
$objUser->setRole(2);
$objUser->isAdmin();
// public function isAdmin(){
//     if ($this->role==1){
//         echo "là Admin";
//     }else{
//         echo "bạn là người thường";
//     


?>

