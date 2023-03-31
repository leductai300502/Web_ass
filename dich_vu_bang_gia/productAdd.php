<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" 
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Contact_Backend</title>
</head>
<body>
    <?php
    include "class/product_class.php";
    ?>
    <?php 
    $product = new product;   
    //Them du lieu vao danh muc
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $insert_product = $product->insert_product($_POST, $_FILES);
    }   
    ?>
            <?php session_start(); ?>
    <?php include "../header.php"?>
    <main class="w-full bg-white">
    <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl" type="button"><a href="../ADMIN/admin_page.php"><i class="fas fa-backward p-2"></i>Return admin page</a></button>
    <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl" type="button"><a href="productList.php"><i class="fas fa-list p-2"></i>view all products</a></button>

    <div class="mx-auto flex flex-row w-96 p-4">
            <div class="grow p-8 border-2 border-slate-500 rounded-xl">   
                <form action="" method="POST" enctype="multipart/form-data" id="form2">
                    <label for="">Product name:</label><br>
                    <input type="text" name="sanpham_tieude" class="w-full border-2 border-black" required><br>
                    <label for="">Product id:</label><br>
                    <input type="text" name="sanpham_ma" class="w-full border-2 border-black" required><br>
                    <label for="">Cartegory:</label><br>
                    <select class="border-2 border-black" name="danhmuc_id" id="danhmuc_id" required>
                        <option value="" selected>-Cartegory-</option>
                        <?php
                            $show_cartegory = $product->show_cartegory();
                            if($show_cartegory){while($resultA = $show_cartegory -> fetch_assoc()){
                        ?>
                            <option value="<?php echo $resultA['danhmuc_id'] ?>"><?php echo $resultA['danhmuc_ten'] ?></option>
                        <?php
                            }}
                    ?>   
                    </select><br>
                    <label for="">Brand:</label><br>
                    <select class="border-2 border-black" name="loaisanpham_id" id="loaisanpham_id" required>                   

                    </select><br>
                    <label for="">Choose size:</label><br>
                    <div name="sanpham_size" id="sanpham_size">
                        <input type="checkbox" id="size6" name="size[]" value="6"> 
                        <label for="size6">6</label>
                        <input type="checkbox" id="size6.5" name="size[]" value="6.5"> 
                        <label for="size6.5">6.5</label><br>
                        <input type="checkbox" id="size7" name="size[]" value="7"> 
                        <label for="size7">7</label>
                        <input type="checkbox" id="size7.5" name="size[]" value="7.5"> 
                        <label for="size7.5">7.5</label><br>
                        <input type="checkbox" id="size8" name="size[]" value="8"> 
                        <label for="size8">8</label>
                        <input type="checkbox" id="size8.5" name="size[]" value="8.5"> 
                        <label for="size8.5">8.5</label><br>
                        <input type="checkbox" id="size9" name="size[]" value="9"> 
                        <label for="size9">9</label>
                        <input type="checkbox" id="size9.5" name="size[]" value="9.5"> 
                        <label for="size9.5">9.5</label><br>
                    </div>
                    
                    <label for="">Price:</label><br>
                    <input type="number" name="sanpham_gia" class="border-2 border-black" required>$<br>
                    <label for="">Description:</label><br>
                    <input type="text" name="sanpham_chitiet" class="border-2 border-black" required><br>
                    
                    <label for="">Main image:</label><br>
                    <input type="file" name="sanpham_anh" class="border-2 border-black" require><br>
                    
                    <label for="">Sub images:</label><br>
                    <input type="file" name="sanpham_anhs[]" class="border-2 border-black" require multiple><br>
                   
                    <button class=" border-2 border-black bg-zinc-900 mt-4 text-white" 
                            type="submit" form="form2" name="button2">ADD</button>
                </form>
            </div>
        </div>
        <!-- <div>
            <table>
                <tr>
                    <th>Stt</th>
                    <th>ID</th>
                    <th>Danh muc</th>
                    <th>Loai san pham</th>
                    <th>Tuy chinh</th>
                </tr>
                <?php
                // $show_brand = $brand->show_brand();
                // if($show_brand){$i=0; while($result = $show_brand -> fetch_assoc()){
                //     $i++;
                ?>
                    <tr>
                        <th><?php //echo $i ?></th>
                        <th><?php //echo $result['loaisanpham_id'] ?></th>
                        <th><?php //echo $result['danhmuc_ten'] ?></th>
                        <th><?php //echo $result['loaisanpham_ten'] ?></th>
                        <th>
                            <a href="brandedit.php?brand_id=<?php //echo $result['loaisanpham_id'] ?>">sua</a>
                            <a href="branddelete.php?brand_id=<?php //echo $result['loaisanpham_id'] ?>">xoa</a>
                        </th>
                    </tr>
                <?php
                //}}
                ?>
            </table>
        </div> -->
    </main>
    <!-- <footer class="w-full bg-zinc-900 text-zinc-400 text-1xl">
        <div>Footer</div>
    </footer> -->
    <script>
        $(document).ready(function(){
            $("#danhmuc_id").change(function(){   
                var x = $(this).val()
                $.get("ajax/productadd_ajax.php", {danhmuc_id:x}, function(data){
                    $("#loaisanpham_id").html(data);
                })
            })
        })
    </script>
</body>
</html>