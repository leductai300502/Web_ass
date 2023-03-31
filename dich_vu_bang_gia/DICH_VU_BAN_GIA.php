<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Dịch vụ - Bản giá</title>
</head>
<body onload="loadCart()">
    <?php
        include "class/product_class.php";
        $product = new product;
    ?>
    <div id="main" class="main">
        <!-- header -->
        <?php session_start(); ?>
        <?php include "../header.php" ?>
        <!-- sale news -->
        <div id="sale" class="bg-gray-300 w-full h-16 text-center p-4 text-xl"> save up to 30%</div>
        <!-- option bar -->
        <div class="flex bg-white border-b-2 justify-center sticky top-0 md:hidden">
            <ul>
                <?php
                    $show_cartegory = $product->show_cartegory();
                    if($show_cartegory){$i=0; while($result = $show_cartegory -> fetch_assoc()){
                    $i++;
                ?>
                    <li class="inline-block p-3 text-center hover:text-gray-500 hover:text-xl">
                        <a href="BAN_GIA_Cartegory.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_ten'] ?></a>
                    </li>
                <?php
                    }}
                ?>              
            </ul>
        </div>
        <!-- content -->
        <div>
            <!-- to top -->
            <button class="fixed right-0 bottom-0 w-10 h-10 bg-white text-4xl border-2 animate-bounce">
                <a href="#sale">^</a>
            </button>      
            <!-- shoes and sub option bar -->
            <div id="content" class="table w-full h-screen">
                <!-- sub option bar -->
                <div class="hidden table-cell relative w-1/6 h-full border-r-2 md:table-cell">
                    <ul class="absolute mx-6">
                    <?php
                        $show_cartegory = $product->show_cartegory();
                        if($show_cartegory){$i=0; while($result = $show_cartegory -> fetch_assoc()){
                        $i++;
                    ?>
                        <li class="my-6 hover:text-gray-500 hover:text-xl">
                            <a href="BAN_GIA_Cartegory.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_ten'] ?></a>
                        </li>
                    <?php
                        }}
                    ?>
                    </ul>
                </div>
                <!-- shoes -->
                <div class="table-cell w-5/6 ">
                    <div class="grid grid-cols-2 auto-rows-max md:grid-cols-3">
                        <!-- shoe -->
                        <?php
                            $show_product = $product->show_product();
                            if($show_product){$i=0; while($result = $show_product -> fetch_assoc()){
                            $i++;
                        ?>
                        <div class="shoe row-span-2 w-full p-5 snap-center md:row-span-1 hover:p-4">
                            <div class="justify-center h-full shadow-lg shadow-gray-500">
                                <a href="GIAY_GIA.php?product_id=<?php echo $result['sanpham_id'] ?>"><img src="./uploads/<?php echo $result['sanpham_anh'] ?>" alt="no image" class="w-fits"></a>
                                <!-- info -->
                                <div class="bg-white w-full h-auto p-4">
                                    <a href="GIAY_GIA.php?product_id=<?php echo $result['sanpham_id'] ?>">
                                        <div class="text-xl break-words"><?php echo $result['sanpham_tieude']?></div>
                                        <div class="text-gray-400"><?php echo $result['sanpham_ma']?></div>
                                        <div class="text-xl">$<?php echo $result['sanpham_gia']?></div>
                                    </a>       
                                </div>
                            </div>                       
                        </div>
                        <?php
                            }}
                        ?>
                        <!-- end shoe -->                     
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include '../footer.php'?>
    </div>
    <script src="script_home.js"></script>
</body>
</html>