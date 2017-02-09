<?php
$num=rand(100000000000,1700000000000000000);
$arr = preg_split('//', $num, -1, PREG_SPLIT_NO_EMPTY);

$count=0;
foreach ($arr as $value){
    if($value==5){
       $count++;
    }
}
echo 'цифра 5 в числе '.$num.'встречается '.$count.' раз(a)';
