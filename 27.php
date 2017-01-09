<?php
$row = rand(5, 40);
$cols = rand(5, 30);
$colors = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];
$count = count($colors);
//$randIndex = rand(0, $count - 1);

/*style="background-color: <?php echo $color ?>"*/
//create table


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <tbody >
    <?php
    for ($i = 1; $i <= $row; $i++) {
        $randIndex = rand(0, $count - 1);
        foreach ($colors as $key=>$value){
            if ($randIndex===$key){
                $color=$value;
            }
        }?>
        <tr style="background-color: <?php echo $color ?>">
            <td  >
                <?php echo rand(0, 400); ?>
            </td><?php
            for ($j = 1; $j <= $cols; $j++) {
                $randIndex = rand(0, $count - 1);
                foreach ($colors as $key=>$value){
                    if ($randIndex===$key){
                        $color=$value;
                    }
                }?>
                <td style="background-color: <?php echo $color ?>" >
                <?php echo rand(0, 400); ?>
                </td><?php }; ?></tr>
        <?php } ?>

    </tbody>
</table>

</body>
</html>
