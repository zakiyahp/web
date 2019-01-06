<?php
include('koneksi.php');

$id=$_POST['id'];
$judul=$_POST['judul'];
$link_youtube=$_POST['link_youtube'];
$Iframe=$_POST['Iframe'];


$sql="INSERT INTO video (judul,link_youtube,iframe) VALUES ('$judul','$link_youtube','$Iframe')";
$query= mysqli_query($conn,$sql); 

if($query){
echo"Berhasil disimpan";
header('location:kelola_video.php');

}
else{
    echo"gagal";
}


?>