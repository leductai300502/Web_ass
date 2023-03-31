
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $username = $_GET['username'];
    mysqli_query($new_connect, "DELETE FROM tbl_user where `username`= '$username'");
    header("Location:../admin_page.php");
    mysqli_close($new_connect);
    ?>