<?php


class Base extends Exception
{
}

class Derived extends Base
{
}

try {
   throw new Derived();
} catch (Base $b) {
   echo("Caught base class exception");
} catch (Derived $d) {
   echo("Caught derived class exception");
}


// class Calculator
// {
//    function division($a, $b): float|int
//    {
//       if ($b == 0) {
//        throw new Exception('Error');
//       }
//       return $a / $b;
//    }
// }

// try {
//   $x = 0;
//   $y = 10;
//   $calculator = new Calculator();
//   $calculator->division($y, $x);
// } catch (Exception $e) {
//   echo $e->getMessage();
// }














// try {
//     $firstNumber = 5;
//     $secondNumber = 0;
//     if ($secondNumber == 0) {
//         throw new Exception('secondNumber is zero');
//     }
//     $result = $firstNumber/$secondNumber;
//     echo 'Result is: ' . $result;
// } catch (Exception $e) {
//     echo $e->getMessage();
// }

// finally {
//     echo 'hu  ha ha';
// }