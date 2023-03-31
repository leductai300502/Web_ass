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
        if(isset($_GET['loaisanpham_id'])|| $_GET['loaisanpham_id']!=NULL){
            $loaisanpham_id = $_GET['loaisanpham_id'];
            $get_cartegory = $product->get_cartegory_brand($loaisanpham_id);
            if($get_cartegory){
                $result = $get_cartegory -> fetch_assoc();
                $danhmuc_id = $result['danhmuc_id'];
            }
        }
    ?>
    <div class="main">
        <!-- header -->
        <?php session_start(); ?>
        <?php include "../header.php" ?>
        <!-- sale news -->
        <div class="bg-gray-300 w-full h-16 text-center p-4 text-xl"> save up to 30%</div>
        <!-- kind of shoe -->
        <div class=" w-full h-14  px-10 py-3 text-xl  border-b-2 ">
            <?php
                $get_cartegory = $product->get_cartegory($danhmuc_id);
                if($get_cartegory){$i=0; while($result = $get_cartegory -> fetch_assoc()){
            ?>
                <div class="w-36 text-center mx-auto"><p><?php echo $result['danhmuc_ten']?>'s shoes</p></div>
            <?php
                }}
            ?>
        </div>
        <!-- option bar -->
        <div class="flex w-full h-16 border-b-2 justify-center md:hidden">
            <ul>
                <?php
                    $get_brand = $product->get_brand($danhmuc_id);
                    if($get_brand){while($result = $get_brand -> fetch_assoc()){
                        
                ?>
                    <li class="inline-block p-4 text-center hover:text-gray-500 hover:text-xl">
                        <a href="BAN_GIA_BRAND.php?loaisanpham_id=<?php echo $result['loaisanpham_id']?>"><?php echo $result['loaisanpham_ten'] ?></a>
                    </li>
                <?php
                    }}
                ?>
            </ul>
        </div>
        <!-- content -->
        <div>  
            <!-- shoes and sub option bar -->
            <div class="table w-full h-screen">
                <!-- sub option bar -->
                <div class="hidden table-cell relative w-1/6 h-full border-r-2 md:table-cell">
                    <ul class="absolute mx-6">
                        <?php
                            $get_brand = $product->get_brand($danhmuc_id);
                            if($get_brand){while($result = $get_brand -> fetch_assoc()){              
                        ?>
                            <li class="my-6 hover:text-gray-500 hover:text-xl">
                                <a href="BAN_GIA_BRAND.php?loaisanpham_id=<?php echo $result['loaisanpham_id'] ?>"><?php echo $result['loaisanpham_ten'] ?></a>
                            </li>
                        <?php
                        }}
                        ?>
                    </ul>
                </div>
                <!-- shoes -->
                <div class="table-cell w-5/6 h-full">
                    <div class="grid grid-cols-2 auto-rows-max h-full md:grid-cols-3 ">
                        <!-- shoe -->
                        <?php
                            $show_product = $product->show_product();
                            if($show_product){while($result = $show_product -> fetch_assoc()){
                                if($result['loaisanpham_id'] == $loaisanpham_id){
                        ?>
                            <div class="shoe row-span-2 w-full p-5 md:row-span-1 hover:p-4">
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
                            }}}
                        ?>
                        <!-- end shoe -->                     
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include 'footer.php'?>  
    </div>
    <script src="script_home.js"></script>
</body>
</html>