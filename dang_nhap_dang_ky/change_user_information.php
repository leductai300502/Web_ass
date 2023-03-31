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
            // Hàm active tab nào đó
            function activeTab(obj) {
                // Xóa class active tất cả các tab
                $('.tab-wrapper ul li').removeClass('active');

                // Thêm class active vòa tab đang click
                $(obj).addClass('active');

                // Lấy href của tab để show content tương ứng
                var id = $(obj).find('a').attr('href');

                // Ẩn hết nội dung các tab đang hiển thị
                $('.tab-item').hide();

                // Hiển thị nội dung của tab hiện tại
                $(id).show();
            }

            // Sự kiện click đổi tab
            $('.tab li').click(function() {
                activeTab(this);
                return false;
            });

            // Active tab đầu tiên khi trang web được chạy
            activeTab($('.tab li:first-child'));


            $('#toggle').click(function() {
                $('nav').slideToggle();
            });
            

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


            $('#old_password').blur(function() {
                var password = $(this).val();
                $.ajax({
                    url: 'check_old_password.php',
                    method: "POST",
                    data: {
                        pass_word: password
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability').html("Wrong old password");
                            $('#button_submit_2').prop('disabled', true);
                        } else {
                            $('#availability').html("");
                            $('#button_submit_2').prop('disabled', false);
                        }
                    }
                })
            });
            $('#old_username_1').blur(function() {

                var username = $(this).val();
                $.ajax({
                    url: 'check_username.php',
                    method: "POST",
                    data: {
                        user_name: username
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability_2').html("Username does not exist");
                            $('#button_submit_1').prop('disabled', true);
                        } else {
                            $('#availability_2').html("");
                            $('#button_submit_1').prop('disabled', false);
                        }
                    }
                })
            });

            $('#old_username_2').blur(function() {

                var username = $(this).val();

                $.ajax({

                    url: 'check_username.php',
                    method: "POST",
                    data: {
                        user_name: username
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability').html("Username does not exist");
                            $('#button_submit_2').prop('disabled', true);
                        } else {
                            $('#availability').html("");
                        }
                    }
                })
            });

            $('#new_username').blur(function() {

                var username = $(this).val();

                $.ajax({

                    url: 'check_new_username.php',
                    method: "POST",
                    data: {
                        user_name: username
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability_2').html("");
                            $('#button_submit').prop('disabled', false);
                        } else {
                            $('#availability_2').html("Username has already existed");
                            $('#button_submit').prop('disabled', true);
                        }
                    }
                })
            });

            $('#username_dangky').blur(function() {

                var username = $(this).val();

                $.ajax({

                    url: 'check_register.php',
                    method: "POST",
                    data: {
                        user_name: username
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability_dangky').html("");
                            $('#button_submit_dangky').prop('disabled', false);
                        } else {
                            $('#availability_dangky').html("Username has already existed");
                            $('#button_submit_dangky').prop('disabled', true);
                        }
                    }
                })
            });
            $(".menu_click").click(function() {
                $(".hidden_menu").toggleClass("hidden");
            });
            $('#username_quenmatkhau').blur(function() {

                var username = $(this).val();

                $.ajax({

                    url: 'check_login_username.php',
                    method: "POST",
                    data: {
                        user_name: username
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability_quenmatkhau').html("Username does not exist");
                            $('#button_submit_quenmatkhau').prop('disabled', true);
                        } else {
                            $('#availability_quenmatkhau').html("");
                            $('#button_submit_quenmatkhau').prop('disabled', false);
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

<body class="bg-gradient-to-r from-white to-black">
<?php include "../header.php"?>

    <div class="tab-wrapper w-auto mt-0 ">
    <ul class=" tab overflow-hidden m-0 p-1 bg-zinc-900 ">
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_change_username"><i class="fas fa-user-edit p-2"></i>Change username  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_change_password"><i class="fas fa-keyboard p-2"></i>Change password  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_login"><i class="fas fa-user-circle p-2"></i>Sign in  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_register"><i class="fas fa-user-plus p-2"></i>Sign up  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_quenmatkhau"><i class="fas fa-key p-2"></i>Forget password  </a>
            </li>
        </ul>
        <div class="tab-content p-5">
            <div class="tab-item hiden" id="tab_change_username" e>
                <div class="text-center">
                    <div class="inline-block bg-white w-auto h-auto p-8 rounded-xl">
                        <h1 class="md:text-3xl font-bold">CHANGE USERNAME</h1>
                        <br>
                        <div class="inline-block">
                            <form action="edit_username.php" method="POST">
                                <input type="email" maxlength="255" required id="old_username_1" name="old_username" placeholder="Old email" class=" border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11 rounded-xl">
                                <br>
                                <br>
                                <input type="email" maxlength="255" required id="new_username" name="new_username" placeholder="New email" class="border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11 rounded-xl">
                                <br>
                                <br>
                                <input type="submit" disabled="disabled" disabled="disabled" value="CHANGE" name="button_submit" id="button_submit" class=" text-white md:w-80 h-14 rounded-full  font-bold border-solid md:border-2 border-black p-1 inline-block bg-black">
                                <br>
                                <span id="availability_2" class="text-red-700"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-item hiden" id="tab_change_password">
                <div class="text-center">
                    <div class="inline-block bg-white w-auto h-auto p-8 rounded-xl">
                        <h1 class="md:text-3xl font-bold">CHANGE PASSWORD</h1>
                        <br>
                        <div class="inline-block">
                            <form action="edit_password.php" method="POST">
                                <input type="email" maxlength="255" required id="old_username_2" name="username" placeholder="Your username" class="border-solid border-2 rounded-xl border-gray-500 p-1 inline-block md:w-80 h-11">
                                <br>
                                <br>
                                <input type="password" maxlength="255" required id="old_password" name="old_password" placeholder="Old password" class="border-solid border-2 rounded-xl border-gray-500 p-1 inline-block md:w-80 h-11">
                                <br>
                                <br>
                                <input type="password" maxlength="255" required id="new_password" name="new_password" placeholder="New password" class="border-solid border-2 rounded-xl border-gray-500 p-1 inline-block md:w-80 h-11">
                                <br>
                                <br>
                                <input type="submit" value="CHANGE" name="button_submit" id="button_submit_2" disabled="disabled" class=" text-white md:w-80 h-14 rounded-full  font-bold border-solid border-2 border-black p-1 inline-block bg-black">
                                <br>
                                <span id="availability" class="text-red-700"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-item hiden" id="tab_login">
                <div class="text-center">
                    <div class="inline-block bg-white w-auto h-auto p-8 rounded-xl">
                        <h1 class="md:text-3xl font-bold">SIGN IN</h1>
                        <form action="login.php" method="get">
                            <br>
                            <input type="email" id="username_dangnhap" name="username" required placeholder="Username" class=" rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11 ">
                            <br>
                            <br>
                            <input type="password" id="password_dangnhap" name="password" required placeholder="Password" class=" rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>
                            <input type="submit" value="SIGN IN" name="button_submit" id="button_submit_dangnhap" disabled="disabled" class=" rounded-full text-white md:w-80 h-14 font-bold border-solid border-2 border-black p-1 inline-block bg-black ">
                            <br>
                        </form>
                        <br>
                        <span id="availability_dangnhap" class="text-red-700"></span>
                    </div>
                </div>
            </div>


            <div class="tab-item hiden" id="tab_register">
                <div class="text-center mt-1">
                    <div class=" inline-block bg-white w-auto h-auto relative p-8 rounded-xl">
                        <h1 class="text-3xl font-bold">SIGN UP</h1>
                        <form action="register.php" method="post" id="formuser_database">
                            <br>

                            <input type="email" maxlength="255" required id="username_dangky" name="username" placeholder="Email as username" class="rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>

                            <input type="password" minlength="4" maxlength="255" required id="password" name="password" placeholder="Password" class="rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>

                            <input type="text" id="first_name" maxlength="255" required name="first_name" placeholder="First name" class="rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>

                            <input type="text" id="last_name" maxlength="255" required name="last_name" placeholder="Last name" class="rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>

                            <input placeholder="Date of Birth" required type="text" onfocus="(this.type = 'date')" id="date_of_birth" name="date_of_birth" class="rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>
                            
                            <input type="submit" value="SIGN UP" name="button_submit" id="button_submit_dangky" disabled="disabled" class="rounded-full text-white md:w-80 h-14  font-bold border-solid border-2 border-black p-1 inline-block bg-black">
                        </form>
                        <span id="availability_dangky" class="text-red-700"></span>
                        <br>
                    </div>
                </div>
            </div>

            <div class="tab-item hiden" id="tab_quenmatkhau">
                <div class=" text-center">
                    <div class="inline-block bg-white w-auto h-auto p-8 rounded-xl">
                        <h1 class="md:text-3xl font-bold">FORGET PASSWORD</h1>
                        <form action="create_new_password.php" method="post">
                            <br>

                            <input type="email" id="username_quenmatkhau" name="username" placeholder="Username" class="rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11 ">
                            <br>
                            <br>
                            <input type="password" id="password" name="password" required placeholder="New password" class="rounded-xl border-solid border-2 border-gray-500 p-1 inline-block md:w-80 h-11">
                            <br>
                            <br>
                            <input type="submit" value="CHANGE PASSWORD" name="button_submit" id="button_submit_quenmatkhau" disabled="disabled" class="rounded-full text-white md:w-80 h-14 font-bold border-solid border-2 border-black p-1 inline-block bg-black ">
                            <br>
                        </form>
                        <span id="availability_quenmatkhau" class="text-red-700"></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include "../footer.php"?>
    

</body>

</html>
