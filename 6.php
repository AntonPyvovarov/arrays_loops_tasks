<?php

$arr=['green'=>'Зелений','red'=>'Червоний','blue'=>'Синій'];
foreach ($arr as $key=>$value){
  $en[]=$key;
    $ru[]=$value;
}
print_r($en);
print_r($ru);
