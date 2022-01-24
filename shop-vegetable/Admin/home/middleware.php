<?php
session_start();
class Middleware {
    public function check(){
        $user = $_SESSION["user"];
        if (!$user){
            header("location: ../../index.php");
            die();
        }else{
            if ($user->username == "admin"){
                header("location: Admin/home/index.php");
                die();
            }else {
                header("location: ../../index.php");
                die();
            }
        }
    }
}

?>