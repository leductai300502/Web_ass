
<?php
        $new_connect = mysqli_connect("localhost", 'root', '', "nike");
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $date_of_birth = $_POST['date_of_birth'];
        $is_admin = $_POST['is_admin'];

            mysqli_query($new_connect, "INSERT INTO tbl_user (`is_admin`, `username`, `password`,`first_name`,`last_name`,`date_of_birth`) VALUES('$is_admin','$username','$password','$first_name','$last_name','$date_of_birth')");
            header("Location:../admin_page.php");
            mysqli_close($new_connect);
?>