<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $hari=$_POST['hari'];
    $tanggal=$_POST['tanggal'];
    $waktu=$_POST['waktu'];
    $tempat=$_POST['tempat'];
    $kegiatan=$_POST['kegiatan'];

    $sql="UPDATE jadwal SET hari='$hari' , tanggal='$tanggal', waktu='$waktu' , tempat='$tempat',kegiatan='$kegiatan'  WHERE id='$id' ";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "berhasil";
        header('location:kelola_jadwal.php');
    }
    else{
        echo "gagal";
    }

?>