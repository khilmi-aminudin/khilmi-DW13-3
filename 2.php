<?php

    function kembalian($bayar,$uang){
        $kembali=$uang-$bayar;

        return $kembali;
    }

    $kembalian = kembalian(12400,15000);
    echo $kembalian;

    if($kembalian >= 50000){

    }
    elseif($kembalian){

    }
?>



