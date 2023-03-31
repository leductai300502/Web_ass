
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $id = $_GET['ID'];
    mysqli_query($new_connect, "DELETE FROM thong_tin_giao_hang where `ID`= '$id'");
    header("Location:../admin_page.php");
    mysqli_close($new_connect);
    ?>