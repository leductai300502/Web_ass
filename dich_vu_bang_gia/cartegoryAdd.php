<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>Contact_Backend</title>
</head>
<body>
    <?php
    include "class/cartegory_class.php";
    ?>
    <?php 
    $cartegory = new cartegory;
   
    //Them du lieu vao danh muc
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $danhmuc_ten = $_POST['options'];
        $insert_category = $cartegory->insert_cartegory($danhmuc_ten);
    }
    $show_cartegory = $cartegory->show_cartegory();
    ?>
   <?php session_start(); ?>
    <?php include "../header.php"?>
    <main class="w-full h-screen bg-white">
    <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl" type="button"><a href="../ADMIN/admin_page.php"><i class="fas fa-backward p-2"></i>Return admin page</a></button>
        <div class="mx-auto flex flex-row w-96 p-4">
            <div class="grow p-8 border-2 border-slate-500 rounded-xl">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Options:</label><br>
                    <input type="text" name="options" class="border-2 border-black"><br>
                    <button class="mx-auto w-20 border-2 border-black bg-blue-700 mt-4 text-white rounded-xl" type="submit"><i class="fas fa-plus-circle p-2"></i>ADD</button>
                </form>
            </div>
        </div>
        <div>
            <table class="mx-auto w-1/3 table-auto border-2 border-collapse border-slate-500 p-8">
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
                        <th class="border border-slate-700 p-2"><?php echo $i ?></th>
                        <th class="border border-slate-700 p-2"><?php echo $result['danhmuc_id'] ?></th>
                        <th class="border border-slate-700 p-2"><?php echo $result['danhmuc_ten'] ?></th>
                        <th  class="border border-slate-700 p-2">
                            <div class="flex flex-col content-between">
                                <div class="flex p-2 justify-center bg-green-500 rounded-xl">
                                    <a href="cartergoryedit.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>"><i class="fas fa-edit p-2"></i>Edit</a>
                                </div>
                                <div class="flex p-2 justify-center bg-red-500 rounded-xl">
                                    <a href="cartergorydelete.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>"><i class="fas fa-minus-circle p-2"></i>Delete</a>
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