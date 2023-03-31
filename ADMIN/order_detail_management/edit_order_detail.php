
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $id = $_POST['id'];
    $donhang_ma = $_POST['donhang_ma'];
    $sanpham_tieude = $_POST['sanpham_tieude'];
    $sanpham_size = $_POST['sanpham_size'];
    $sanpham_sl = $_POST['sanpham_sl'];

        $sql = "UPDATE `tbl_donhang` SET `sanpham_tieude` = '$sanpham_tieude', `sanpham_size` = '$sanpham_size', `sanpham_sl` = '$sanpham_sl' where `donhang_id` = '$id'";
        mysqli_query($new_connect, $sql);
        header("Location:../admin_page.php");
        mysqli_close($new_connect);
    ?>