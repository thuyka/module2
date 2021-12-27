<?php
//khai bao lop
class Animal{
    //khai bao thuoc tinh
    public $name = '';
    protected $age = '';
    private $gender = '';

    //khai bao phuong thuc
    //thiet lap gtri thuoc tinh name
    function setName($name) {
        $this->name = $name;
    }
    //tra ve gtri thuoc tinh name
    function getName() {
        return $this->name;
    }

    //thiet lap gtri thuoc tinh age
    function setAge($age) {
        $this->age = $age;
    }
    //tra ve gtri thuoc tinh age
    function getAge() {
        return $this->age;
    }

    //thiet lap gtri thuoc tinh gender
    function setGender($gender) {
        $this->gender = $gender;
    }
    //tra ve gtri thuoc tinh gender
    function getGender() {
        return $this->gender;
    }
}
//khoi tao doi tuong 
$cat = new Animal();

//dat gtri thuoc tinh name
$cat -> setName("mew");
//lay va in ra gtri thuoc tinh name
echo $cat->getName();
echo '<br>';
//dat gtri thuoc tinh age
$cat -> setAge(18);
//lay va in ra gtri thuoc tinh age
echo $cat -> getAge();
echo '<br>';
//dat gtri thuoc tinh gerder
$cat -> setGender('male');
//lay va in ra gtri thuoc tinh
echo $cat->getGender();

echo '<pre>';
print_r($cat);
echo '</pre>';

?>