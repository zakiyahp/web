<?php
include('koneksi.php');
//var_dump($_POST);
    $judul=$_POST['judul'];
    $nama=$_POST['nama'];
    $tanggal=$_POST['tanggal'];
    $kategori=$_POST['kategori'];
    $isi=$_POST['isi'];
    $link=$_POST['link'];


$sql="INSERT INTO berita (judul,nama,tanggal,kategori,isi,link) VALUES ('$judul','$nama','$tanggal','$kategori','$isi','$link')";
$query= mysqli_query($conn,$sql); 

if($query){
echo"Berhasil disimpan";
header('location:kelola_berita.php');

}
else{
    echo"gagal";
}


?>