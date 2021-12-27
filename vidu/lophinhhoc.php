<?php
class MyClass
{
public $public = 'Public';
protected $protected = 'Protected';
private $private = 'Private';

function printHello()
    {
echo $this->public;
echo $this->protected;
echo $this->private;
    }
}
$obj = new MyClass();
echo $obj->protected;




// class MyClass
// {
//     public function __construct() { }

//     public function MyPublic() { 
//          echo 'MyPublic';
//     }

//     protected function MyProtected() { 
//          echo 'MyProtected';
//      }

//     private function MyPrivate() { 
//          echo 'MyPrivate';
//      }

//     function Foo()
//     {
//         $this->MyPublic();
//         $this->MyProtected();
//         $this->MyPrivate();
//     }
// }

// $myclass = new MyClass;
// $myclass->MyPublic();


// abstract class Hinh_Hoc {
//     abstract public function chu_vi();
//     abstract public function dien_tich();
// }
// $hinh_hoc = new Hinh_Hoc();


?>



