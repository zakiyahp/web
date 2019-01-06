<?php
include('koneksi.php');
$id=$_POST['id'];
$zawiyah=$_POST['zawiyah'];
$alamat=$_POST['alamat'];
$kontak=$_POST['kontak'];
$telp=$_POST['telp'];
$link_maps=$_POST['link_maps'];

$sql="UPDATE zawiyah_1 SET zawiyah='$zawiyah',alamat='$alamat',kontak='$kontak',telp='$telp',link_maps='$link_maps' WHERE id='$id'";
$query= mysqli_query($conn,$sql); 

if($query)
{
    echo "berhasil";
    header('location:kelola_zawiyah.php');
}else
{
    echo "gagal";
}

?>