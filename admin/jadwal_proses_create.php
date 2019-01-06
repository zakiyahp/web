<?php
include('koneksi.php');
//var_dump($_POST);
$id=$_POST['id'];
$hari=$_POST['hari'];
$tanggal=$_POST['tanggal'];
$waktu=$_POST['waktu'];
$tempat=$_POST['tempat'];
$kegiatan=$_POST['kegiatan'];


$sql="INSERT INTO jadwal (hari,tanggal,waktu,tempat,kegiatan) VALUES ('$hari','$tanggal','$waktu','$tempat','$kegiatan')";
$query= mysqli_query($conn,$sql); 

if($query){
echo"Berhasil disimpan";
header('location:kelola_jadwal.php');

}
else{
    echo"gagal";
}


?>