<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Thông tin giày</title>
</head>
<body onload="loadCart()">
    <?php
        include "class/product_class.php";
        $product = new product;
        if(isset($_GET['product_id'])|| $_GET['product_id']!=NULL){
            $product_id = $_GET['product_id'];
        }
        $get_product = $product->get_product($product_id);
        if($get_product){
            $resultA = $get_product->fetch_assoc();
        }       
        $get_size = $product->get_size($product_id);
        if($get_size){
            $size = array();$i = 0;
            while($result = $get_product -> fetch_assoc()){
                $size[$i] = $result['sanpham_size'];
                $i++;
            }
        }

    ?>
    <div class="main h-full">
        <!-- header -->
        <?php session_start(); ?>
        <?php include "../header.php" ?>
        <!-- sale news -->
        <div class="bg-gray-400 w-full text-center p-4 text-xxl"> save up to 30%</div>
        <!-- kind of shoe -->
        <div class=" w-full h-14  p-3 text-xl  border-b-2 ">
            <?php
                $get_cartegory = $product->get_cartegory($resultA['danhmuc_id']);
                if($get_cartegory){
                    $result = $get_cartegory->fetch_assoc();
                }
            ?>
            <p><?php echo $result['danhmuc_ten'] ?>'s shoes</p>
        </div>
        <!-- option bar -->
        <div class="flex w-full h-18 border-b-2 justify-center">
            <ul>
            <?php
                $get_brand = $product->get_brand($resultA['danhmuc_id']);
                if($get_brand){while($result = $get_brand->fetch_assoc()){ 
            ?>
                <li class="inline-block p-4 py-6 text-center hover:text-gray-500 hover:text-xl">
                    <a href="BAN_GIA_BRAND.php?loaisanpham_id=<?php echo $result['loaisanpham_id']?>"><?php echo $result['loaisanpham_ten'] ?></a>
                </li>
            </ul>
            <?php
                }}          
            ?>
        </div>
        </div>
        <!-- content -->
        <div class="block">  
            <!-- shoes-->
            <!-- <div> -->
                <div class="md:flex w-full">
                <!-- image of shoe -->
                    <div class="bg-stone-300 w-full border-0 md:flex-none md:w-2/3">
                        <!-- grid image -->
                        <div class="">
                            <div class="grid grid-cols-1 auto-rows-max md:grid-cols-2">
                                <!-- image 1 -->
                                <div class="hidden w-full p-5 rounded-lg 
                                            md:row-span-1 md:hidden">
                                    <?php
                                        $get_product = $product->get_product($product_id);
                                        if($get_product){
                                            while($result = $get_product -> fetch_assoc()){                         
                                    ?>
                                        <img id="image1" src="./uploads/<?php echo $result['sanpham_anh'] ?>" alt="no image" class="max-w-full max-h-full mx-auto">           
                                    <?php
                                        }}
                                    ?>                                                    
                                </div>
                                <!-- image 2 -->
                                    <?php
                                        $get_img = $product->get_img($product_id);
                                        if($get_img){
                                            $img = array();$i = 0;
                                            while($result = $get_img -> fetch_assoc()){ 
                                               $img[$i] = $result['sanpham_anh'];
                                               $i++;                       
                                    ?>  
                                        <div class="hidden w-full p-5 rounded-lg 
                                                md:row-span-1 md:block">
                                            <img src="./uploads/<?php echo $result['sanpham_anh'] ?>" alt="no image" class="max-w-full max-h-full mx-auto">
                                        </div>
                                    <?php
                                        }}
                                    ?>
                            </div>
                        </div>
                        <!-- slider image -->
                        <div class="relative w-full h-96 md:hidden">
                            
                            <input type="radio" name="image" class="hidden peer/i1" id="i1" checked>
                            <input type="radio" name="image" class="hidden peer/i2" id="i2">
                            <input type="radio" name="image" class="hidden peer/i3" id="i3">
                            <input type="radio" name="image" class="hidden peer/i4" id="i4">
                            <!-- images -->
                            <!-- images 1 -->
                            <div class="absolute w-full z-0 peer-checked/i1:z-30 ">
                                <img src="./uploads/<?php echo $img[0] ?>" alt="" class="h-96 w-auto mx-auto">
                                <!-- left label -->
                                <label for="i4" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 left-0 cursor-pointer"></label>
                                <!-- right label -->
                                <label for="i2" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 right-0 cursor-pointer"></label>
                            </div>
                            <!-- images 2 -->
                            <div class="absolute w-full z-0 peer-checked/i2:z-30">
                                <img src="./uploads/<?php echo $img[1] ?>" alt="" class="h-96 w-auto mx-auto">
                                <!-- left label -->
                                <label for="i1" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 left-0 cursor-pointer"></label>
                                <!-- right label -->
                                <label for="i3" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 right-0 cursor-pointer"></label>    
                            </div>
                            <!-- images 3 -->
                            <div class="absolute w-full z-0 peer-checked/i3:z-30">
                                <img src="./uploads/<?php echo $img[2] ?>" alt="" class="h-96 w-auto mx-auto">
                                <!-- left label -->
                                <label for="i2" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 left-0 cursor-pointer"></label>
                                <!-- right label -->
                                <label for="i4" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 right-0 cursor-pointer"></label>
                            </div>
                            <!-- images 4 -->
                            <div class="absolute w-full z-0 peer-checked/i4:z-30">
                                <img src="./uploads/<?php echo $img[3] ?>" alt="" class="h-96 w-auto mx-auto">
                                <!-- left label -->
                                <label for="i3" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 left-0 cursor-pointer"></label>
                                <!-- right label -->
                                <label for="i1" class="absolute bg-gray-200/[0.4] w-1/6 h-full top-0 right-0 cursor-pointer"></label>
                            </div>
                            <!-- dots nav -->
                            <div class="absolute w-full h-4 bottom-5 text-center z-30">
                                <label for="i1" id="dot1" class="inline-block peer-checked/i1:bg-black relative w-5 h-5 rounded-xl bg-gray-300 hover:bg-black"></label>
                                <label for="i2" id="dot2" class="inline-block peer-checked/i2:bg-black relative w-5 h-5 rounded-xl bg-gray-300 hover:bg-black"></label>
                                <label for="i3" id="dot3" class="inline-block peer-checked/i3:bg-black relative w-5 h-5 rounded-xl bg-gray-300 hover:bg-black"></label>
                                <label for="i4" id="dot4" class="inline-block peer-checked/i4:bg-black relative w-5 h-5 rounded-xl bg-gray-300 hover:bg-black"></label>
                            </div>
                        </div>
                    </div>
                    <!-- infomations -->
                    <div class="w-full p-3 md:w-1/3 md:grow">
                        <!-- <div class="table-column"> -->
                        <?php
                            $get_product = $product->get_product($product_id);
                            if($get_product){
                                while($result = $get_product -> fetch_assoc()){                         
                        ?>
                            <div id="infoShoe" class="bg-white w-full h-40">
                                <p id="nameShoe" class="text-4xl"><?php echo $result['sanpham_tieude']?></p>
                                <span id="priceShoe" class="text-xl"><?php echo $result['sanpham_gia']?></span><span class="text-xl">$</span>
                                <p>Style:<?php echo $result['sanpham_ma']?></p>
                                <p id="id" class="hidden"><?php echo $result['sanpham_id']?></p>
                            </div>
                        <?php
                            }}
                        ?>
                            <!-- Size -->
                        <p class="bg-white p-3 text-2xl">Size:</p>
                            <div class="bg-white grid grid-cols-2 text-center pb-6 mb-6">
                                <?php                                
                                    $get_size = $product->get_size($product_id);
                                    if($get_size){
                                        $i = 0;
                                        while($result = $get_size -> fetch_assoc()){
                                ?>
                                        <input required type="radio" name="size" value="size <?php echo $result['sanpham_size']?>" class="hidden peer/s<?php echo $i?>" id="s<?php echo $i?>" >
                                            <label for="s<?php echo $i?>" class="sizeShoe m-1 border-2 rounded-lg hover:border-black peer-checked/s<?php echo $i?>:border-black ">
                                                <div class="py-4 h-full w-full align-middle "><?php echo $result['sanpham_size']?></div>
                                            </label>
                                <?php
                                    $i++;
                                    }}
                                ?>
                            </div>               
                            <button type="submit" id="buy" onclick="show()" class="w-full h-16 bg-black rounded-lg border-2 align-middle py-5 text-center text-gray-500 hover:text-white">
                                ADD TO BAG
                            </button>                           
                        <div class="mt-4 p-4">
                            <p class="text-xl">Description:</p>
                            <?php
                            $get_product = $product->get_product($product_id);
                            if($get_product){
                            while($result = $get_product -> fetch_assoc()){                         
                            ?>
                            <div>
                                <?php echo $result['sanpham_chitiet']?>    
                            </div>
                        <?php
                            }}
                        ?>
                        </div>
                    </div>
                </div>    
            <!-- </div> -->
        </div>
        <!-- footer -->
        <?php include '../footer.php'?>
    </div>
    <script src="script.js"></script>
</body>
</html>