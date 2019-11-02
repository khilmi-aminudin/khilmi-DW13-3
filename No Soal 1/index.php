<?php
    // membuat array
    $arr    = [1,2,3,4,5];

    $hasil  = array_sum($arr);

    $arr_1 = $hasil-$arr[0];
    $arr_2 = $hasil-$arr[1];
    $arr_3 = $hasil-$arr[2];
    $arr_4 = $hasil-$arr[3];
    $arr_5 = $hasil-$arr[4];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ol>
        <li>index Array <? $arr[0] ?>:<? $arr_1 ?></li>
        <li>index Array <? $arr[1] ?>:<? $arr_2 ?></li>
        <li>index Array <? $arr[2] ?>:<? $arr_3 ?></li>
        <li>index Array <? $arr[3] ?>:<? $arr_4 ?></li>
        <li>index Array <? $arr[4] ?>:<? $arr_5 ?></li>
    </ol>
    
</body>
</html>