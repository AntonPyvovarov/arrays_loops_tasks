<?php
$num=05;
$arr=str_split($num);
print_r($arr);
$sum=1;
foreach ($arr as $value){
    if($value!=0){
        $sum*=$value;
    }

}
echo $sum;