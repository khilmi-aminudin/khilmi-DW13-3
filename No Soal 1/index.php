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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">index Array</th>
      <th scope="col">Nilai Array</th>
    </tr>
  </thead>
     <tbody>
    <tr>
      <th scope="row"><?= $arr[0] ?></th>
      <td><?= $arr_1 ?></td>
    </tr>
    <tr>
      <th scope="row"><?= $arr[1] ?></th>
      <td><?= $arr_2 ?></td>
    </tr>
    <tr>
      <th scope="row"><?= $arr[2] ?></th>
      <td><?= $arr_3 ?></td>
    </tr>
    <tr>
      <th scope="row"><?= $arr[3] ?></th>
      <td><?= $arr_4 ?></td>
    </tr>
    <tr>
      <th scope="row"><?= $arr[4] ?></th>
      <td><?= $arr_5 ?></td>
    </tr>
    </tbody>
</table>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>