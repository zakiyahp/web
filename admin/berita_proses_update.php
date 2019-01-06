<?php
    include('koneksi.php');
    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $nama=$_POST['nama'];
    $tanggal=$_POST['tanggal'];
    $kategori=$_POST['kategori'];
    $isi=$_POST['isi'];
    $link=$_POST['link'];

    $sql="UPDATE berita SET judul='$judul',nama='$nama',tanggal='$tanggal',kategori='$kategori',isi='$isi',link='$link' WHERE id='$id'";
    
    $query= mysqli_query($conn,$sql);

    if($query){
        echo "berhasil";
        header('location:kelola_berita.php');
    }
    else{
        echo "gagal";
    }

?>