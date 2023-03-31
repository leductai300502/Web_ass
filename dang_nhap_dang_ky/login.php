<?php
require 'connect.php';
session_start();

if (isset($_GET['button_submit'])) {
    $username = $_GET['username'];
    $password = md5($_GET['password']);
    $is_admin = '';
    $first_name ='';
    $last_name ='';
    // Lấy dữ liệu từ database với
    $sql = "SELECT * FROM `tbl_user` WHERE `password`= '$password' AND `username` = '$username'";
    $result = $conn->query($sql);
    if ($username != "" || $password != "") {
        if ($result->num_rows > 0) {
            // Load dữ liệu lên website
            while ($row = $result->fetch_assoc()) {
                if ($row["is_admin"] == "0") {
                    $_SESSION['username'] = $username;
                    $_SESSION['first_name'] = $row["first_name"];
                    $_SESSION['last_name'] = $row["last_name"];
                    $_SESSION['is_admin'] = $row["is_admin"];
                    header("Location:../trang_chu/home.php");
                }
                if ($row["is_admin"] == "1") {
                    $_SESSION['username'] = $username;
                    $_SESSION['first_name'] = $row["first_name"];
                    $_SESSION['last_name'] = $row["last_name"];
                    $_SESSION['is_admin'] = $row["is_admin"];
                    header("Location:../trang_chu/home.php");
                }
            }
        }
    }
}
mysqli_close($conn);
?>

