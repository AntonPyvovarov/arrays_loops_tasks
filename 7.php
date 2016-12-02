<?php
$array=[2, 5, 9, 15, 0, 4];
foreach ($array as $key=>$value){
    if (($value<3)||($value>10)){
        unset ($array [$key]);
    }
}
print_r($array);
