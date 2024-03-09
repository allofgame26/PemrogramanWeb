<?php
    $nilai = [85,92,78,64,90,75,88,79,70,96];
    sort($nilai);

    for ($i = 0; $i < count($nilai); $i++){
        if($i < count($nilai) - 1 ){
            echo "$nilai[$i], ";
        } else {
            echo "$nilai[$i]. ";
        }
    }
    $tinggi = array_slice($nilai, -2);
    $rendah = array_slice($nilai,0, 2);

    $tanpa = array_slice($nilai,2, -2);

    $rata = array_sum($tanpa)/ (count($nilai)-(count($tinggi)+count($rendah)));

    echo "<br>";
    echo "Nilai Dirata - rata : ". $rata;
    
?>