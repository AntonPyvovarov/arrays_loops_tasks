<?php
$arr=['Понеділок','Вівторок','Середа','Четвер',"П'ятниця",'Субота','Неділя'];
foreach ($arr as $key=>$value){
    if($key<5){
        echo " $value";
    }
    else{
        echo '<b>'.' '.$value.'</b>';
    }
}