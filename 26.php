<?php
$arr=[];
for ($i=0;$i<=6;$i++){
    $arr[$i]=rand(0,100);
}
echo'<pre>';
print_r($arr);
echo '</pre>';
$num=1;
foreach($arr as $key=>$value){
    if (($value!=0)&&($key%2===1)){
        $num*=$value;
    }
    elseif (($value!=0)&&($key%2==0)){
        echo "Парные ключи в масие  "." $key "."=> ".$value.'<br>';
    }
}
 echo "Произведение из непарных ключей в масиве = ".$num;
