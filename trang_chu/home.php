<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".menu_click").click(function() {
                $(".hidden_menu").toggleClass("hidden");
            });
        });
    </script>
    <title>Document</title>
</head>

<body onload="loadCart()">
<?php session_start(); ?>
    <?php include "../header.php"?>

    <main class="w-full bg-gray-100">
        <div class="flex flex-col ">
            <img src="nike-just-do-it.jpg" alt="">
        </div>
    </main>
    
    <?php include "../footer.php"?>
</body>

</html>