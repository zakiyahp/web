<?php
include('koneksi.php');
session_start();
unset($_SESSION['login']);
if(session_destroy()){
    header('location:login_admin_form.php');
}
?>