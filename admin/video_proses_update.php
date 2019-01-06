<?php
    include('koneksi.php');

    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $link_youtube=$_POST['link_youtube'];
    $Iframe=$_POST['Iframe'];

    $sql="UPDATE video SET judul='$judul' ,link_youtube='$link_youtube', iframe='$Iframe' WHERE id='$id' ";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "berhasil";
        header('location:kelola_video.php');
    }
    else{
        echo "gagal";
    }

?>