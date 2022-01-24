<?php
class db{
    public function connect()
    {
        $host_name = "localhost";
        $db_name = "vegetable";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=$host_name;dbname=$db_name";
        
        try {
            $connect = new PDO($dsn,$username,$password);
            $connect->setAttribute(attribute:PDO::ATTR_ERRMODE, value:PDO::ERRMODE_EXCEPTION);
           // echo "ket noi thanh cong";
            return $connect;
    
        } catch (PDOException $e) {
            echo "ket noi that bai: " . $e->getMessage();
        }           
    }
}
?>