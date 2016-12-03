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

