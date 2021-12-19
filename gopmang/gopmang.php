<?php

$a1=array("red","green");
$a2=array("blue","yellow");
$a3 = array_merge($a1,$a2);
foreach($a3 as $key => $value)
{
  echo $value. ', ';
}
?>