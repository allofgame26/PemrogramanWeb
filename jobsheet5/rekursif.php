<?php
   /*function tampilhaslodunia(){
        echo ("Halo Dunia! ");

        tampilhaslodunia();
    }
    tampilhaslodunia();*/

    function tampilangka(int $jumlah, int $indeks = 1){
        echo "Perulangan ke - {$indeks} <br>";

        if($indeks < $jumlah){
            tampilangka($jumlah, $indeks + 1);
    } 
}
    tampilangka(20);
?>