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
    $id = $_GET['donhang_id'];
    $sql = "SELECT * FROM tbl_donhang where `donhang_id` = '$id'";
    $user_table = mysqli_query($new_connect, $sql);
    while($row = mysqli_fetch_assoc($user_table)){
        $id = $row['donhang_id'];
        $donhang_ma = $row['donhang_ma'];
        $sanpham_tieude = $row['sanpham_tieude'];
        $sanpham_size = $row['sanpham_size'];
        $sanpham_sl = $row['sanpham_sl'];

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
    <form action="edit_order_detail.php" method="POST">
       Can not change ID: <input type="text" name="id" readonly value="<?php echo $id; ?>" class="border-2 border-black w-full">
       <br>
       Can not change orders code: <input type="text" name="donhang_ma" readonly value="<?php echo $donhang_ma; ?>" class="border-2 border-black w-full">
       <br>
       Change products name: <input type="text" name="sanpham_tieude" required value="<?php echo $sanpham_tieude; ?>" class="border-2 border-black w-full">
       <br>
       Change products size: <input type="text" name="sanpham_size" required value="<?php echo $sanpham_size; ?>" class="border-2 border-black w-full">
       <br>
       Change products quantity: <input type="number" name="sanpham_sl" required value="<?php echo $sanpham_sl; ?>" class="border-2 border-black w-full">
       <br>
       <br>
       <input type="submit" value="Submit" class="text-white w-24 h-10 p-1 font-bold border-solid border-2 border-black inline-block bg-red-700">
    </form>
            </div>
        </div>
    </main>
</body>
</html>