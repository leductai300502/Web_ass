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
    include "class/brand_class.php";
    ?>
    <?php 
    $brand = new brand;
    if(isset($_GET['brand_id'])|| $_GET['brand_id']!=NULL){
        $brand_id = $_GET['brand_id'];
    }
    $get_brand = $brand->get_brand($brand_id);
    if($get_brand){
        $resultA = $get_brand->fetch_assoc();
    }
    //Them du lieu vao danh muc
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $danhmuc_id = $_POST['danhmuc_id'];
        $loaisanpham_ten = $_POST['loaisanpham_ten'];
        $update_brand = $brand->update_brand($danhmuc_id, $loaisanpham_ten, $brand_id);
    }
    ?>

<?php session_start(); ?>
    <?php include "../header.php"?>
    <main class="w-full h-screen bg-white">
        <div class="mx-auto flex flex-row w-96 p-4">
            <div class="grow p-8 border-2 border-slate-500 rounded-xl">
            <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Cartegories:</label><br>
                    <select class="w-60 border-2 border-black" name="danhmuc_id" id="">
                        <?php
                        $show_cartegory = $brand->show_cartegory();
                        if($show_cartegory){while($result = $show_cartegory -> fetch_assoc()){          
                        ?>
                            <option value="<?php echo $result['danhmuc_id'] ?>" 
                                <?php if($result['danhmuc_id'] == $resultA['danhmuc_id']){echo "selected";} ?>
                                >
                                <?php echo $result['danhmuc_ten'] ?>
                            </option>
                        <?php
                        }}
                        ?>   
                    </select><br>
                    <label for="">Edit brand:</label><br>
                    <input class="w-60 border-2 border-black" type="text" value="<?php echo $resultA['loaisanpham_ten']?>" name="loaisanpham_ten" required><br>
                    <button class="mx-auto w-20 border-2 border-black bg-blue-700 mt-4 text-white rounded-xl" type="submit">EDIT</button>
                </form>
            </div>
        </div>
        <!-- <div>
            <table>
                <tr>
                    <th>Stt</th>
                    <th>ID</th>
                    <th>Danh muc</th>
                    <th>Tuy chinh</th>
                </tr>
                <?php
                // if($show_cartegory){$i=0; while($result = $show_cartegory -> fetch_assoc()){
                //     $i++;
                ?>
                    <tr>
                        <th><?php //echo $i ?></th>
                        <th><?php //echo $result['danhmuc_id'] ?></th>
                        <th><?php //echo $result['danhmuc_ten'] ?></th>
                        <th>
                            <a href="cartergoryedit.php?danhmuc_id=<?php //echo $result['danhmuc_id'] ?>">sua</a>
                            <a href="cartergorydelete.php?danhmuc_id=<?php //echo $result['danhmuc_id'] ?>">xoa</a>
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
</body>
</html>