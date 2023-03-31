<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<?php
    $new_connect = mysqli_connect("localhost", 'root', '', "nike");
    $id = $_GET['ID'];
    $sql = "SELECT * FROM thong_tin_giao_hang where `ID` = '$id'";
    $user_table = mysqli_query($new_connect, $sql);
    while($row = mysqli_fetch_assoc($user_table)){
        $id = $row['ID'];
        $name = $row['name'];
        $email = $row['email'];
        $address = $row['address'];
        $city = $row['city'];
        $district = $row['district'];
        $phone_number = $row['phone_number'];
        $luu_y = $row['luu_y'];
        $total_price = $row['total_price'];
        $name_on_card = $row['name_on_card'];
        $card_number = $row['card_number'];
        $expired_date = $row['expired_date'];
        $cvv = $row['cvv'];

    }
?>
<header class="w-full bg-black text-white px-8 py-4">
        <div class="flex flex-row gap-x-5">
            <div class="w-0 basis-1/4 flex-none">
            </div>
            <div class="w-0 basis-1/2 flex-none hidden md:block">
                <div class="h-full flex flex-row gap-x-8 justify-center items-center font-semibold">
                    <a href="/../trang_chu/home.php" >Home</a>
                    <a href="/../trang_chu/about.php">About</a>
                    <a href="/../lien_he/Contact.php">Contact</a>
                    <a href="/../Tin_tuc/news.php">News</a>
                    <a href="/../dang_nhap_dang_ky/change_user_information.php">Your account</a>
                </div>
            </div>
            <div class="w-0 basis-1/4 flex-1">
                <div class="h-full flex flex-row gap-x-8 justify-end items-center">
                    <div class="flex-none block md:hidden menu_click">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-x-8 justify-center items-center sm:hidden hidden_menu ease-in-out md:hidden font-semibold">
            <a href="#"class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Home</a>
            <a href="about.php"class="w-full hover:bg-white h-10 hover:text-black text-center py-2">About</a>
            <a href="../lien_he/Contact.php"class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Contact</a>
            <a href="#"class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Our Product</a>
            <a href="../Tin_tuc/news.php"class="w-full hover:bg-white h-10 hover:text-black text-center py-2">News</a>
            <a href="../dang_nhap_dang_ky/change_user_information.php"class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Your account</a>
        </div>
    </header>
    <main class="w-full h-screen bg-white">
        <div class="mx-auto flex flex-row w-96 p-4">
            <div class="grow p-8 border-2 border-slate-500 rounded-xl">
    <form action="edit_don_hang.php" method="POST">
       Can not change ID: <input type="text" name="id" required value="<?php echo $id; ?>" class="border-2 border-black w-full">
       <br>
       Change name: <input type="text" name="name" required value="<?php echo $name; ?>" class="border-2 border-black w-full">
       Change email: <input type="email" name="email" required value="<?php echo $email; ?>" class="border-2 border-black w-full">
       <br>
       Change address: <input type="text" name="address" required value="<?php echo $address; ?>" class="border-2 border-black w-full">
       Change city: <input type="text" name="city" required value="<?php echo $city; ?>" class="border-2 border-black w-full">
       Change province: <input type="text" name="district" required value="<?php echo $district; ?>" class="border-2 border-black w-full">
       <br> 
       Change phone number: <input type="number" name="phone_number" required value="<?php echo $phone_number; ?>" class="border-2 border-black w-full">
       <br> 
       Change card owner: <input type="text" name="name_on_card" required value="<?php echo $name_on_card; ?>" class="border-2 border-black w-full">
       Change card number: <input type="text" name="card_number" required value="<?php echo $card_number; ?>" class="border-2 border-black w-full">

       Change expired date: <input type="date" name="expired_date" required value="<?php echo $expired_date; ?>" class="border-2 border-black w-full">

       Change CVV: <input type="text" name="cvv" required value="<?php echo $cvv; ?>" class="border-2 border-black w-full">
       <br> 
       Change total bill: <input type="text" name="total_price" required value="<?php echo $total_price; ?>" class="border-2 border-black w-full">
       <br> 
       Change notice: <input type="text" name="luu_y" value="<?php echo $luu_y; ?>" class="border-2 border-black w-full">
       <br> 
       <br>
       <input type="submit" value="Submit" class="text-white w-24 h-10 p-1 font-bold border-solid border-2 border-black inline-block bg-red-700">
    </form>
            </div>
        </div>
    </main>
</body>
</html>