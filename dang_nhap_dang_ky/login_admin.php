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
           
            

            $('#username_dangnhap').blur(function() {

                var username = $(this).val();

                $.ajax({

                    url: 'check_login_username.php',
                    method: "POST",
                    data: {
                        user_name: username
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability_dangnhap').html("Username does not exist");
                            $('#button_submit_dangnhap').prop('disabled', true);
                        } else {
                            $('#availability_dangnhap').html("");
                        }
                    }
                })
            });

            $('#password_dangnhap').blur(function() {

                var password = $(this).val();

                $.ajax({
                    url: 'check_login_password.php',
                    method: "POST",
                    data: {
                        pass_word: password
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability_dangnhap').html("Wrong password");
                            $('#button_submit_dangnhap').prop('disabled', true);
                        } else {
                            $('#availability_dangnhap').html("");
                            $('#button_submit_dangnhap').prop('disabled', false);
                        }
                    }
                })
            });
        });
    </script>
    <title>Document</title>
    <style>
        .tab-wrapper ul li.active {
            background: #Fff;
        }

        .tab-wrapper ul li.active a {
            color: blue;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-gray-200 to-black">
<?php session_start(); ?>
    <?php include "../header.php"?>
    </header>
    <div class="tab-wrapper w-auto mt-0 ">
        <ul class="tab overflow-hidden m-0 p-1 bg-zinc-800 ">
           
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_login"><i class="fas fa-user-circle p-2"></i>Sign in as admin</a>
            </li>
        </ul>
        <div class="tab-content p-5">
            <div class="tab-item hiden" id="tab_change_username" e>
                
            </div>

            <div class="tab-item hiden" id="tab_change_password">
                
            </div>

            <div class="tab-item hiden" id="tab_login">
                <div class="text-center">
                    <div class="inline-block bg-white w-auto h-auto p-8">
                        <h1 class="md:text-3xl font-bold">SIGN IN</h1>
                        <form action="login_for_admin.php" method="get">
                            <br>
                            <input type="email" id="username_dangnhap" name="username" required placeholder="Username" class=" border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11 ">
                            <br>
                            <br>
                            <input type="password" id="password_dangnhap" name="password" required placeholder="Password" class=" border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>
                            <input type="submit" value="SIGN IN" name="button_submit" id="button_submit_dangnhap" disabled="disabled" class="text-white md:w-80 h-11 font-bold border-solid border-2 border-black p-1 inline-block bg-black ">
                            <br>
                        </form>
                        <br>
                        <span id="availability_dangnhap" class="text-red-700"></span>
                    </div>
                </div>
            </div>


            <div class="tab-item hiden" id="tab_register">
               
            </div>

            <div class="tab-item hiden" id="tab_quenmatkhau">
                
            </div>

        </div>
    </div>
    <?php include "../footer.php"?>


</body>

</html>
