<?php
    include('koneksi.php');
    ///belum
    $bacaan=$_POST['bacaan'];

    $sql="INSERT INTO download (bacaan) VALUES ('$bacaan')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "berhasil";
        header('location:kelola_download.php');
    }
    else{
        echo "gagal";
    }

?>