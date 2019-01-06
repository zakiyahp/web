<?php
 $server="localhost";
 $username="root";
 $password="";
 $namadatabase="kampung_sholawat";
$conn=mysqli_connect($server,$username,$password,$namadatabase);

if(!$conn){
    echo "gagal konek !!";
    die();
}
?>