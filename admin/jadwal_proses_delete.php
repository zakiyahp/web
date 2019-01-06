<?php
include('koneksi.php');

$id=$_GET['id'];

$sql="DELETE FROM jadwal WHERE id='$id' ";
$query=mysqli_query($conn,$sql);
if($query){
    echo "berhasil di delete";
    header("location: kelola_jadwal.php");
}else{
    echo"gagal";
}


?>