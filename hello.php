<?php
//khai báo 1 lớp trừu tượng
// abstract class AbstractClass
// {
    
// 	//các phương thức trừu tượng
// 	abstract public function bay();

//     //các phương thức bình thường
//     public function dau(){

//     }
// }

// class Animal extends AbstractClass {
// 	public function bay(){

// 	}
// }

// $objAnimal = new Animal(); -->
?>





<?php
//khai báo 1 lớp trừu tượng
abstract class AbstractClass
{
    
	//các phương thức trừu tượng
	abstract public function bay();

    //các phương thức bình thường
    public function dau(){

    }
}
class Animal extends AbstractClass {
	public function bay(){

	}
}
$objAnimal = new Animal();
//public function luôn mặc định.
//một interface có thể kế thừa từ interface khác, 













// <?php
// // $favcolor = "red";
// // switch ($favcolor) {
// //     case "red":
// //         echo "your favorite color is red";
// //         break;
// //     case "blue":
// //         echo "your favorite color is blue";
// //         break;
// //     case "green":
// //         echo "your favorite color is green";
// //         break;
// //         default:
// //         echo "your favorite color is neit";
// // }




