<?php
include('koneksi.php');

$id=$_GET['id'];

$sql="DELETE FROM download WHERE id='$id' ";
$query=mysqli_query($conn,$sql);
if($query){
    echo "berhasil di delete";
    header("location: kelola_download.php");
}else{
    echo"gagal";
}


?>