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
    ?>
    <?php 
    $product = new product;
    if(isset($_GET['product_id'])|| $_GET['product_id']!=NULL){
        $product_id = $_GET['product_id'];
    }
    $delete_product = $product->delete_product($product_id);
    ?>   
</body>