<?php
$arr=[];
for($i=0;$i<=10;$i++){
    $arr[$i]=rand(0,100);
}

echo'<pre>';
print_r($arr);
echo '</pre>';
echo 'максимальне значення = '.max($arr).'<br>';
echo 'мінімальне значення = '.min($arr).'<br>';
foreach ($arr as $key=>$value){
    if(max($arr)==$value){
        $max=$key;
        echo $max."<br>";
    }
    if (min($arr)==$value){
        $min=$key;
        echo $min."<br>";
    }
}
list($arr[$max],$arr[$min])=array($arr[$min],$arr[$max]);
echo'<pre>';
print_r($arr);
echo '</pre>';