<?php
    $nilai = [85,92,78,64,90,75,88,79,70,96];
    $nilaibaru = sort($nilai);
    for ($i = 0; $i < count($nilai); $i++){
        if($i < count($nilai) - 1 ){
            echo "$nilai[$i], ";
        } else {
            echo "$nilai[$i]. ";
        }
    }
    
?>