<?php
class database{
 
 var $host = "localhost";
 var $uname = "root";
 var $pass = "";
 var $db = "pbl";

 function __construct(){
     $koneksi = mysqli_connect($this->host, $this->uname, $this->pass,$this->db);

     if($koneksi){
         echo "Koneksi database mysql dan php berhasil.";
     }else{
         echo "Koneksi database mysql dan php GAGAL !";
     }
 }
} 

$kitamulai = new database();

?>