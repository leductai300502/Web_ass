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
    $delete_brand = $brand->delete_brand($brand_id);
    ?>   
</body>