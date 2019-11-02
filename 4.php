<?php

    function barang($barang,$qty){
     
        
        switch ($barang) {
            case 'A':
                $h = 5000;
            break;
            case 'B':
                $h = 3500;
            break;
            case 'C':
                $h = 2500;
            break;
            default:
                echo "Barang yang anda masukkan salah";    
            break;
        }


        if ($h == 5000 && $qty > 10) {
            $disc = $qty * $h - 500;
        }elseif ($h == 3500 && $qty > 5 ) {
            $disc = $qty * $h * 0.5;
        }else {
            echo 'barang ini belum ada diskon';
        }

        echo "Kualitas barang ".$barang." jumlah Barang ".$qty." maka anda mendapatkan diskon sebesar ".$disc;
    }

    barang("A",11);