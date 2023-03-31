
    <?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $phone_number = $_POST['phone_number'];
    $luu_y = $_POST['luu_y'];
    $total_price = $_POST['total_price'];
    $name_on_card = $_POST['name_on_card'];
    $card_number = $_POST['card_number'];
    $expired_date = $_POST['expired_date'];
    $cvv = $_POST['cvv'];



        $sql = "UPDATE `thong_tin_giao_hang` SET `name` = '$name', `email` = '$email', `address` = '$address', `city` = '$city',`district` = '$district' ,`phone_number` = '$phone_number',`luu_y` = '$luu_y',`total_price` = '$total_price',`name_on_card` = '$name_on_card',`card_number` = '$card_number',`expired_date` = '$expired_date',`cvv` = '$cvv'   where `ID` = '$id'";
        mysqli_query($new_connect, $sql);
        header("Location:../admin_page.php");
        mysqli_close($new_connect);
    ?>