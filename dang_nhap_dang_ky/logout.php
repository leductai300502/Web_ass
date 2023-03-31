<?php session_start(); 

if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
    unset($_SESSION['is_admin']); // xóa session login

}
header("Location:../trang_chu/home.php");
?>
