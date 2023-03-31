<?php
require 'connect.php';
if (isset($_POST['button_submit'])) {


    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $password = md5($_POST['password']);
    $is_admin = 0;



    if (!empty($username) && !empty($password)) {
        //insert data here
        $sql = "INSERT INTO `tbl_user` ( `is_admin` , `username` , `password`, `first_name` , `last_name` , `date_of_birth`) VALUE('$is_admin', '$username', '$password','$first_name','$last_name','$date_of_birth')";

        if ($conn->query($sql) == true) {
            header("Location:change_user_information.php");
        } else {
            echo "Lỗi {$sql}" . $conn->error;
        }
    } else {
        echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký";
    }
}
?>
