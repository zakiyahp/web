<?php
include('koneksi.php');

session_start();
if(isset($_POST['username']) and isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM login_admin WHERE nama ='$username' and password='$password'";
    $query=mysqli_query($conn,$sql) or die(mysqli_eror($conn));
    $count= mysqli_num_rows($query);
    if($count ==1){
        $_SESSION['login']=$username;
        header('location: index.php');
    }else{
        header("Location: login_admin_form.php");
    }
}
else{
    echo "gagal";
}

?>