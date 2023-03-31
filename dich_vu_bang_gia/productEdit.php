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
    if(isset($_GET['product_id'])|| $_GET['product_id']!=NULL){
        $product_id = $_GET['product_id'];
    }
    $get_product = $product->get_product($product_id);
    if($get_product){
        $resultA = $get_product->fetch_assoc();
    }
    //Them du lieu vao danh muc
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $insert_product = $product->update_product($_POST, $_FILES, $product_id);
    }   
    ?>
    <header class="w-full bg-black text-black px-8 py-4 text-white">
        <div class="flex flex-row">Header</div>
    </header>
    <main class="w-full h-screen bg-white">
        <div class="mx-auto flex flex-row w-96 p-4">
            <div class="grow p-8 border-2 border-slate-500 rounded-xl">   
                <form action="" method="POST" enctype="multipart/form-data" id="form2">
                    <label for="">Product name:</label><br>
                    <input type="text" name="sanpham_tieude" class="border-2 border-black w-full" 
                            value="<?php echo $resultA['sanpham_tieude'] ?>" required><br>
                    <label for="">Product id:</label><br>
                    <input type="text" name="sanpham_ma" class="border-2 border-black w-full"
                            value="<?php echo $resultA['sanpham_ma'] ?>" required><br>
                    <label for="">Cartegories:</label><br>
                    <select class="border-2 border-black" name="danhmuc_id" id="danhmuc_id" required>
                        <option value="" selected>-Cartegory-</option>
                        <?php
                            $show_cartegory = $product->show_cartegory();
                            if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){
                        ?>
                            <option value="<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_ten'] ?></option>
                        <?php
                            }}
                    ?>   
                    </select><br>
                    <label for="">Brand:</label><br>
                    <select class="border-2 border-black" name="loaisanpham_id" id="loaisanpham_id" required>                   

                    </select><br>
                    <label for="">Size:</label><br>
                    <div name="sanpham_size" id="sanpham_size">
                        <input type="checkbox" id="size7" name="size[]" value="7"> 
                        <label for="size6">6</label>
                        <input type="checkbox" id="size6" name="size[]" value="6"> 
                        <label for="size6.5">6.5</label><br>
                        <input type="checkbox" id="size6.5" name="size[]" value="6.5"> 
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

                    <input type="number" name="sanpham_gia" class="border-2 border-black"
                            value="<?php echo $resultA['sanpham_gia'] ?>" required>$<br>
                    <label for="">Description:</label><br>
                    <input type="text" name="sanpham_chitiet" class="border-2 border-black"
                            value="<?php echo $resultA['sanpham_chitiet'] ?>" required><br>
                    
                    <label for="">Old main img:</label><br>
                    <img class="w-16 h-16" src="./uploads/<?php echo $resultA['sanpham_anh'] ?>" alt="no image">
                    <label for="">New main img:</label><br>
                    <input type="file" name="sanpham_anh" class="border-2 border-black" require><br>
                    
                    <label for="">New sub imgs:</label><br>
                    <input type="file" name="sanpham_anhs[]" class="border-2 border-black" require multiple><br>
                   
                    <button class=" border-2 border-black bg-zinc-900 mt-4 text-white" 
                            type="submit" form="form2" name="button2">ADD</button>
                </form>
            </div>
        </div>

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