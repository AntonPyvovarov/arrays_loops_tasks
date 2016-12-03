<?php
$arr=['Понеділок','Вівторок','Середа','Четвер',"П'ятниця",'Субота','Неділя'];
$day='Субота';
foreach ($arr as $value){
    if($value==$day){
        echo '<i>'.' '.$value.'</i>';
    }
    else {
        echo " $value";
    }
}