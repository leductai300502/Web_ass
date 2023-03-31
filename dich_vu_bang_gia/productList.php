<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Contact_Backend</title>
</head>
<body>
    <?php
    include "class/product_class.php";
    $product = new product;
    ?>
        <?php session_start(); ?>
    <?php include "../header.php"?>
    <main class="w-full h-screen bg-white p-4">
    <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl" type="button"><a href="../ADMIN/admin_page.php"><i class="fas fa-backward p-2"></i>Return admin page</a></button>
    <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl" type="button"><a href="productAdd.php"><i class="fas fa-plus-circle p-2"></i>Add new product</a></button>
    <br>
    <br>
    <div>
            <table class="mx-auto w-full table-auto border-2 border-collapse border-slate-500 p-8">
                <tr>
                    <th class="border border-slate-700">Stt</th>
                    <th class="border border-slate-700">ID</th>
                    <th class="border border-slate-700">Product</th>
                    <th class="border border-slate-700">ID product</th>
                    <th class="border border-slate-700">Cartegory</th>
                    <th class="border border-slate-700">Brand</th>
                    <th class="border border-slate-700">Price</th>
                    <th class="border border-slate-700">Description</th>
                    <th class="border border-slate-700">Main img</th>
                    <th class="border border-slate-700">Edit</th>
                </tr>
                <?php
                $show_product = $product->show_product();
                if($show_product){$i=0; while($result = $show_product -> fetch_assoc()){
                    $i++;
                ?>
                    <tr>
                        <th class="border border-slate-700"><?php echo $i ?></th>
                        <th class="border border-slate-700"><?php echo $result['sanpham_id'] ?></th>
                        <th class="border border-slate-700 w-32"><?php echo $result['sanpham_tieude'] ?></th>
                        <th class="border border-slate-700"><?php echo $result['sanpham_ma'] ?></th>
                        <th class="border border-slate-700"><?php echo $result['danhmuc_id'] ?></th>
                        <th class="border border-slate-700"><?php echo $result['loaisanpham_id'] ?></th>
                        <th class="border border-slate-700"><?php echo $result['sanpham_gia'] ?></th>
                        <th class="border border-slate-700 w-72"><?php echo $result['sanpham_chitiet'] ?></th>
                        <th class="border border-slate-700"><img class="flex mx-auto w-32 content-center" src="./uploads/<?php echo $result['sanpham_anh'] ?>" alt="no image"></th>
                        <th class="border border-slate-700">
                            <div class="flex flex-col content-between">
                                <div class="flex p-2 justify-center bg-green-500 rounded-xl">
                                    <a href="productEdit.php?product_id=<?php echo $result['sanpham_id'] ?>"><i class="fas fa-edit p-2"></i>Edit</a>
                                </div>
                                <div class="flex p-2 justify-center bg-red-500 rounded-xl">
                                    <a href="productDelete.php?product_id=<?php echo $result['sanpham_id'] ?>"><i class="fas fa-minus-circle p-2"></i>Delete</a>
                                </div>
                            </div> 
                        </th>
                    </tr>
                <?php
                }}
                ?>
            </table>
        </div>
    </main>
    <!-- <footer class="w-full bg-zinc-900 text-zinc-400 text-1xl">
        <div>Footer</div>
    </footer> -->
</body>
</html>