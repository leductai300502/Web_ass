
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $username = $_POST['username'];
    $new_password = md5($_POST['new_password']);

        $sql = "UPDATE `tbl_user` SET `password` = '$new_password' where `username` = '$username'";
        mysqli_query($new_connect, $sql);
        header("Location:change_user_information.php");
        mysqli_close($new_connect);
    ?>