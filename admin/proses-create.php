<?php
include('koneksi.php');
var_dump($_POST);
$zawiyah=$_POST['zawiyah'];
$alamat=$_POST['alamat'];
$kontak=$_POST['kontak'];
$telp=$_POST['telp'];
$link_maps=$_POST['link_maps'];

$sql="INSERT INTO zawiyah_1 (zawiyah,alamat,kontak,telp,link_maps) VALUES ('$zawiyah','$alamat', '$kontak','$telp','$link_maps')";
$query= mysqli_query($conn,$sql); 

if($query){
echo"Berhasil disimpan";
header('location:kelola_zawiyah.php');

}
else{
    echo"gagal";
}


?>