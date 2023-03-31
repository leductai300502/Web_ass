
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $id = $_POST['new_id'];
    $username = $_POST['new_username'];
    $password = md5($_POST['new_password']);
    $first_name = $_POST['new_first_name'];
    $last_name = $_POST['new_last_name'];
    $date_of_birth = $_POST['new_date_of_birth'];
    $is_admin = $_POST['new_is_admin'];


        $sql = "UPDATE `tbl_user` SET  `is_admin` = '$is_admin', `username` = '$username', `password` = '$password', `first_name` = '$first_name', `last_name` = '$last_name',`date_of_birth` = '$date_of_birth'  where `ID` = '$id'";
        mysqli_query($new_connect, $sql);
        header("Location:../admin_page.php");
        mysqli_close($new_connect);
    ?>