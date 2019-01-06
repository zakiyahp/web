<?php
 $server="sql12.freemysqlhosting.net";
 $username="sql12272891";
 $password="nY9v1a32eN";
 $namadatabase="sql12272891";
$conn=mysqli_connect($server,$username,$password,$namadatabase);

if(!$conn){
    echo "gagal konek !!";
    die();
}
?>