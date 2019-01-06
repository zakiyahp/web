<?php
    include("koneksi.php");

    $id=$_GET['id'];
    $sql="SELECT * FROM berita WHERE id=$id";
    $query= mysqli_query($conn,$sql);
    while($data= mysqli_fetch_array($query)){
        

    }








?>