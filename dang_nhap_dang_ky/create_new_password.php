<?php
require 'connect.php';
if (isset($_POST['button_submit'])) {


    $username = $_POST['username'];
    $password = md5($_POST['password']);



    if (!empty($username) && !empty($password)) {
        //insert data here
        $sql = "UPDATE `tbl_user` SET `password` = '$password' where `username` = '$username'";
        if ($conn->query($sql) == true) {
            echo "Thay đổi mật khẩu thành công";
            header("Location:change_user_information.php");
        } else {
            echo "Lỗi {$sql}" . $conn->error;
        }
    } else {
        echo "Bạn cần nhập đầy đủ thông tin trước khi đổi mật khẩu";
    }
}
mysqli_close($conn);
?>
