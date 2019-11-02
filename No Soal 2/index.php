<?php

    function kembalian($bayar,$uang){
        $kembali=$uang-$bayar;

        return $kembali;
    }

    kembalian(12400,15000);