<?php
$html='<table border="1">';
$html.='<thead><th>- </th>';
for ($i=1;$i<=10;$i++){
    $html.='<th>'.$i.'</th>';
}
$html.='<thead><tbody>';
for ($i=1;$i<=10;$i++){
    $html.="<tr><td>$i</td>";
    for ($j=1;$j<=10;$j++){
        $html.='<td>'.$i*$j.'</td>';
    }
    $html.='</tr>';
}
$html.='</tbody></table>';
echo $html;