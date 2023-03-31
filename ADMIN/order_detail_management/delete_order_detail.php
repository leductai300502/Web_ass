
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $id = $_GET['donhang_id'];
    mysqli_query($new_connect, "DELETE FROM tbl_donhang where `donhang_id`= '$id'");
    header("Location:../admin_page.php");
    mysqli_close($new_connect);
    ?>