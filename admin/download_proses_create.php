<?php
include('koneksi.php');
//var_dump($_POST); BELUM
    $bacaan=$_POST['bacaan'];
    


$sql="INSERT INTO download (bacaan) VALUES ('$bacaan')";
$query= mysqli_query($conn,$sql); 

if($query){
echo"Berhasil disimpan";
header('location:kelola_download.php');

}
else{
    echo"gagal";
}


?>