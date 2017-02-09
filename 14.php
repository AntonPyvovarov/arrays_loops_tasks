<?php
$arr=[4, 2, 5, 19, 13, 0, 10];
$e=9;
foreach ($arr as $key=>$value) {
    if ($value == $e) {
        echo 'Есть';
        break;
    } else {
       echo 'нет';
       break;
    }
}
