<?php
include('koneksi.php');

$id=$_GET['id'];

$sql="DELETE FROM video WHERE id='$id' ";
$query=mysqli_query($conn,$sql);
if($query){
    echo "berhasil di delete";
    header("location: kelola_video.php");
}else{
    echo"gagal";
}


?>