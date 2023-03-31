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
    include "class/cartegory_class.php";
    ?>
    <?php 
    $cartegory = new cartegory;
    if(isset($_GET['danhmuc_id'])|| $_GET['danhmuc_id']!=NULL){
        $danhmuc_id = $_GET['danhmuc_id'];
    }
    $get_cartegory = $cartegory->get_cartegory($danhmuc_id);
    if($get_cartegory){
        $result = $get_cartegory->fetch_assoc();
    }
    //Them du lieu vao danh muc
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $danhmuc_ten = $_POST['options'];
        $update_category = $cartegory->update_cartegory($danhmuc_ten,$danhmuc_id);
    }
    $show_cartegory = $cartegory->show_cartegory(); 
    ?>

<?php session_start(); ?>
    <?php include "../header.php"?>
    <main class="w-full h-screen bg-white">
        <div class="mx-auto flex flex-row w-96 p-4">
            <div class="grow p-8 border-2 border-slate-500 rounded-xl">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Edit brand</label><br>
                    <input type="text" name="options" value="<?php echo $result['danhmuc_ten'] ?>" class="border-2 border-black"><br>
                    <button class="mx-auto w-20 border-2 border-black bg-blue-700 mt-4 text-white rounded-xl" type="submit">ADD</button>
                </form>
            </div>
        </div>
        <div>
            <table class="mx-auto w-2/3 table-auto border-2 border-collapse border-slate-500 p-8">
                <tr>
                    <th class="border border-slate-700 p-4">Stt</th>
                    <th class="border border-slate-700 p-4">ID</th>
                    <th class="border border-slate-700 p-4">Brand</th>
                    <th class="border border-slate-700 p-4">Edit</th>
                </tr>
                <?php
                if($show_cartegory){$i=0; while($result = $show_cartegory -> fetch_assoc()){
                    $i++;
                ?>
                    <tr>
                        <th class="border border-slate-700 p-4"><?php echo $i ?></th>
                        <th class="border border-slate-700 p-4"><?php echo $result['danhmuc_id'] ?></th>
                        <th class="border border-slate-700 p-4"><?php echo $result['danhmuc_ten'] ?></th>
                        <th  class="border border-slate-700 p-4">
                            <div class="flex flex-col content-between">
                                <div class="flex p-2 justify-center bg-green-500 rounded-xl">
                                    <a href="cartergoryedit.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>">Edit</a>
                                </div>
                                <div class="flex p-2 justify-center bg-red-500 rounded-xl">
                                    <a href="cartergorydelete.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>">Delete</a>
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