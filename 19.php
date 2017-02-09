<?php
$arr=['Понеділок','Вівторок','Середа','Четвер',"П'ятниця",'Субота','Неділя'];
date_default_timezone_set('UTC');

$day=date("N ");//показує день неділі де понеділок це 1
//echo $day;
foreach ($arr as $key=>$value){
    if($key==$day-1){
        echo '<i>'.' '.$value.'</i>';
    }
    else {
        echo " $value";
    }
}