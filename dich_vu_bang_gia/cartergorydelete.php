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
    $delete_cartegory = $cartegory->delete_cartegory($danhmuc_id);
    ?>

    <header class="w-full bg-black text-black px-8 py-4 text-white">
        <div class="flex flex-row">Header</div>
    </header>