<?php
include('koneksi.php');

$id=$_GET['id'];

$sql="DELETE FROM berita WHERE id='$id' ";
$query=mysqli_query($conn,$sql);
if($query){
    echo "berhasil di delete";
    header("location:kelola_berita.php");
}else{
    echo"gagal";
}


?>