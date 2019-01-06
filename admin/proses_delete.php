<?php
include('koneksi.php');

$id=$_GET['id'];

$sql="DELETE FROM zawiyah_1 WHERE id='$id' ";
$query=mysqli_query($conn,$sql);
if($query){
    echo "berhasil di delete";
    header("location: kelola_zawiyah.php");
}else{
    echo"gagal";
}


?>