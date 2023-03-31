
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $old_username = $_POST['old_username'];
   
    $new_username = $_POST['new_username'];

        $sql = "UPDATE `tbl_user` SET `username` = '$new_username' where `username` = '$old_username'";
        mysqli_query($new_connect, $sql);
        header("Location:change_user_information.php");
        mysqli_close($new_connect);
    ?>