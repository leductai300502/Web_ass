<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script_pay.js"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
require 'connect_gio_hang.php';
if (isset($_POST['button_submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $phone_number = $_POST['phone_number'];
    $ship_method = $_POST['ship_method'];
    $luu_y = $_POST['luu_y'];
    $total_price = $_POST['total_price'];

    $name_on_card = $_POST['name_on_card'];
    $card_number = $_POST['card_number'];
    $expired_date = $_POST['expired_date'];
    $cvv = $_POST['cvv'];
    $promo = $_POST['promo'];

    if (!empty($name) && !empty($email) && !empty($city) && !empty($district) && !empty($phone_number)) {
        //insert data here
        $sql = "INSERT INTO `thong_tin_giao_hang` (`name` , `email`, `address` , `city` , `district`,`phone_number`,`ship_method`,`luu_y`,`total_price`,`name_on_card`,`card_number`,`cvv`,`promo`,`expired_date`) VALUE('$name' , '$email', '$address' , '$city' , '$district','$phone_number','$ship_method','$luu_y', '$total_price', '$name_on_card', '$card_number', '$cvv', '$promo', '$expired_date')";
        $conn->query($sql);
        // if ($conn->query($sql) == true) {
        //     header("Location:HOAN_TAT_THANH_TOAN.php");
        // } else {
        //     echo "Lỗi {$sql}" . $conn->error;
        // }
    } else {
        echo "Bạn cần điền đầy đủ thông tin trước khi xác nhận";
    }

    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $sql = "SELECT * FROM thong_tin_giao_hang";
    $user_table = mysqli_query($new_connect, $sql);
    while ($row = mysqli_fetch_assoc($user_table)){
        $id = $row['ID'];
    } 

    $name_shoes = $_POST['name_shoes'];
    $size_shoes = $_POST['size_shoes'];
    $amount_shoes = $_POST['amount_shoes'];

    foreach($name_shoes as $key => $element){
        echo $element;
        echo $size_shoes[$key];
        echo $amount_shoes[$key];
        $query = "INSERT INTO `tbl_donhang` (`donhang_ma`, `sanpham_tieude`, `sanpham_size`, `sanpham_sl`)
        VALUES ('$id', '$element', '$size_shoes[$key]', '$amount_shoes[$key]')";
        // $result = $this -> db ->insert($query);    
        $conn->query($query);
    }
    header("Location:HOAN_TAT_THANH_TOAN.php");
}
?>
