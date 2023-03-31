<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".menu_click").click(function() {
                $(".hidden_menu").toggleClass("hidden");
            });
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

            $('#username').blur(function() {

                var username = $(this).val();

                $.ajax({

                    url: './users_management/check_new_created_username.php',
                    method: "POST",
                    data: {
                        user_name: username
                    },
                    success: function(data) {
                        if (data == 0) {
                            $('#availability').html("");
                            $('#button_submit').prop('disabled', false);
                        } else {
                            $('#availability').html("User name has already existed");
                            $('#button_submit').prop('disabled', true);
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
<body class="bg-white">
<?php session_start(); ?>
<?php include "../header.php"?>
    <div class=" tab-wrapper w-full mt-0 ">
        <ul class=" tab overflow-hidden m-0 p-1 bg-zinc-900 ">
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_users_management"><i class="fas fa-user-cog p-2"></i>Users  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_delivery_management"><i class="fas fa-money-check-alt p-2"></i>Orders  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_order_management"><i class="fas fa-shipping-fast p-2"></i>Oders detail  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_brand_management"><i class="fa fa-cubes p-2"></i>Brand  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_categories_management"><i class="fa fa-cube p-2"></i>Categories  </a>
            </li>

            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_products_management"><i class="fas fa-shopping-cart p-2"></i>Products  </a>
            </li>
            <li class="float-left list-none px-4 py-4 bg-gray-500 rounded-md mr-1 mt-1 text-white font-semibold">
                <a href="#tab_news_management"><i class="far fa-newspaper p-2"></i>News  </a>
            </li>
        </ul>
        <div class="tab-content p-5">
            <div class="tab-item hiden" id="tab_users_management">
                <div class="ml-14 inline-block mb-10">
                    <form action="./users_management/add.php" method="post">
                        <p class="text-2xl font-semibold">Fill in the information if you want to add new user:</p>
                        <br>
                        New username: <input type="email" name="username" id="username" required class="border-solid border-2 border-black p-1 inline-block w-40 h-11">
                        New password: <input type="password" name="password" required class="border-solid border-2 border-black p-1 inline-block w-40 h-11">
                        New first name: <input type="text" name="first_name" required class="border-solid border-2 border-black p-1 inline-block w-40 h-11">
                        New last name: <input type="text" name="last_name" required class="border-solid border-2 border-black p-1 inline-block w-40 h-11">
                        New Date of birth: <input type="date" name="date_of_birth" class="border-solid border-2 border-black p-1 inline-block w-40 h-11">
                        <br>
                        <br>
                        Set as admin: <input type="number" name="is_admin" class="ml-4 border-solid border-2 border-black p-1 inline-block w-40 h-11">
                        <br>
                        <br>
                        <span class="text-red-700" id="availability"></span>
                        <br>
                        <input type="submit" id="button_submit" disabled="disabled" value="Add new user" class=" ml-60 text-white w-40 h-11 p-1  font-bold border-solid border-2 border-black inline-block bg-blue-500">
                    </form>
                </div>
                <br>

                <?php
                $new_connect = mysqli_connect("localhost", 'root', '', "nike");
                $sql = "SELECT * FROM tbl_user";
                $user_table = mysqli_query($new_connect, $sql);
                ?>
                <div class="w-full">
                    <table class=" w-full table-auto border-collapse border-slate-500 p-8">
                        <tr class=" ">
                            <th class=" border border-slate-700 p-2 ">ID</th>
                            <th class=" border border-slate-700 p-2  ">Username</th>
                            <th class=" border border-slate-700 p-2  ">Password</th>
                            <th class=" border border-slate-700 p-2  ">First name</th>
                            <th class=" border border-slate-700 p-2  ">Last name</th>
                            <th class=" border border-slate-700 p-2  ">Date of birth</th>
                            <th class=" border border-slate-700 p-2  ">Is admin?</th>
                            <th class=" border border-slate-700 p-2  ">Customize user</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($user_table)) {
                        ?>
                            <tr class=" ">
                                <th class=" border border-slate-700 p-2"><?php echo $row["ID"]; ?></th>
                                <th class=" border border-slate-700 p-2"><?php echo $row["username"]; ?></th>
                                <th class=" border border-slate-700 p-2"><?php echo $row["password"]; ?></th>
                                <th class=" border border-slate-700 p-2"><?php echo $row["first_name"]; ?></th>
                                <th class=" border border-slate-700 p-2"><?php echo $row["last_name"]; ?></th>
                                <th class=" border border-slate-700 p-2"><?php echo $row["date_of_birth"]; ?></th>
                                <th class=" border border-slate-700 p-2"><?php echo $row["is_admin"]; ?></th>
                                <th class="border border-slate-700 p-2 ">
                                    <div class="p-2">
                                        <a href="./users_management/edit_form.php?username=<?php echo $row["username"]; ?>">
                                            <button class="rounded-xl justify-center  w-24 h-10 p-1   inline-block bg-green-500"><i class="fas fa-user-edit	 p-2"></i>Edit</button>
                                        </a>
                                        <a href="./users_management/delete.php?username=<?php echo $row["username"]; ?>">
                                            <button class="rounded-xl justify-center  w-24 h-10 p-1   inline-block bg-red-500"><i class="fas fa-user-minus p-2"></i>Delete</button>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>

                <?php
                mysqli_close($new_connect);
                ?>
            </div>

            <div class="tab-item hiden" id="tab_delivery_management">
                <?php
                $new_connect = mysqli_connect("localhost", 'root', '', "nike");
                $sql = "SELECT * FROM thong_tin_giao_hang";
                $user_table = mysqli_query($new_connect, $sql);
                ?>
                <div class="w-full">
                    <table class="w-full table-auto border-collapse border-slate-500 p-8">
                        <tr>
                            <th class="border border-slate-700 p-2">ID</th>
                            <th class="border border-slate-700 p-2">Name</th>
                            <th class="border border-slate-700  p-2">Email</th>
                            <th class="border border-slate-700  p-2">Address</th>
                            <th class="border border-slate-700  p-2">City</th>
                            <th class="border border-slate-700  p-2">Province</th>
                            <th class="border border-slate-700  p-2">Phone number</th>
                            <th class="border border-slate-700  p-2">Card owner</th>
                            <th class="border border-slate-700  p-2">Card number</th>
                            <th class="border border-slate-700  p-2">Expired day</th>
                            <th class="border border-slate-700  p-2">CVV</th>
                            <th class="border border-slate-700  p-2">Delivery method</th>
                            <th class="border border-slate-700  p-2">Notice</th>
                            <th class="border border-slate-700  p-2">Total bill</th>
                            <th class="border border-slate-700  p-2">Customize orders</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($user_table)) {
                        ?>
                            <tr>
                                <th class="border border-slate-700 p-2 "><?php echo $row["ID"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["name"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["email"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["address"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["city"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["district"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["phone_number"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["name_on_card"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["card_number"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["expired_date"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["cvv"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["ship_method"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["luu_y"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["total_price"]; ?></th>


                                <th class="border border-slate-700 p-2 ">
                                    <div class="p-2">
                                        <a href="./orders_management/edit_don_hang_form.php?ID=<?php echo $row["ID"]; ?>">
                                            <button class="rounded-xl justify-center  w-24 h-10 p-1   inline-block bg-green-500"><i class="fas fa-edit p-2"></i>Edit</button>
                                        </a>
                                        <br>
                                        <a href="./orders_management/delete_don_hang.php?ID=<?php echo $row["ID"]; ?>">
                                            <button class=" rounded-xl justify-center  w-24 h-10 p-1  inline-block bg-red-500"><i class="fas fa-minus-circle p-2"></i>Delete</button>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <?php
                mysqli_close($new_connect);
                ?>
            </div>


            <div class="tab-item hiden" id="tab_order_management">
            <?php
                $new_connect = mysqli_connect("localhost", 'root', '', "nike");
                $sql = "SELECT * FROM tbl_donhang";
                $user_table = mysqli_query($new_connect, $sql);
                ?>
                <div class="w-full">
                    <table class="w-full table-auto border-collapse border-slate-500 p-8">
                        <tr>
                            <th class="border border-slate-700 p-2">Orders ID</th>
                            <th class="border border-slate-700 p-2">Orders code</th>
                            <th class="border border-slate-700  p-2">Products name</th>
                            <th class="border border-slate-700  p-2">Products size</th>
                            <th class="border border-slate-700  p-2">Products quantity</th>
                            <th class="border border-slate-700  p-2">Customize bills</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($user_table)) {
                        ?>
                            <tr>
                                <th class="border border-slate-700 p-2 "><?php echo $row["donhang_id"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["donhang_ma"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["sanpham_tieude"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["sanpham_size"]; ?></th>
                                <th class="border border-slate-700  p-2"><?php echo $row["sanpham_sl"]; ?></th>

                                <th class="border border-slate-700 p-2 ">
                                    <div class="p-2">
                                        <a href="./order_detail_management/edit_order_detail_form.php?donhang_id=<?php echo $row["donhang_id"]; ?>">
                                            <button class="rounded-xl justify-center  w-24 h-10 p-1   inline-block bg-green-500"><i class="fas fa-edit p-2"></i>Edit</button>
                                        </a>
                                        <br>
                                        <a href="./order_detail_management/delete_order_detail.php?donhang_id=<?php echo $row["donhang_id"]; ?>">
                                            <button class=" rounded-xl justify-center  w-24 h-10 p-1  inline-block bg-red-500"><i class="fas fa-minus-circle p-2"></i>Delete</button>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <?php
                mysqli_close($new_connect);
                ?>
            </div>

            <div class="tab-item hiden" id="tab_products_management">
            <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl font-bold" type="button"><a href="../dich_vu_bang_gia/productList.php"><i class="fas fa-list p-2"></i>All the products</a></button>
            <br>
            <button class="w-auto p-4 mx-auto  border-2 border-black bg-green-700 mt-4 text-white  rounded-xl font-bold" type="button"><a href="../dich_vu_bang_gia/productAdd.php"><i class="fas fa-cart-plus	 p-2"></i>Add new products</a></button>
            
        </div>

            <div class="tab-item hiden" id="tab_brand_management">
                <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl font-bold" type="button"><a href="../dich_vu_bang_gia/brandAdd.php"><i class="fas fa-list p-2"></i>All the brands</a></button>
            </div>

            <div class="tab-item hiden" id="tab_categories_management">
            <button class="w-auto p-4 mx-auto  border-2 border-black bg-blue-700 mt-4 text-white  rounded-xl font-bold" type="button"><a href="../dich_vu_bang_gia/cartegoryAdd.php"><i class="fas fa-list p-2"></i>All the categories</a></button>
            </div>

            <div class="tab-item hiden" id="tab_news_management">
                <?php
                include "class/new_add-class.php";
                ?>
                <?php
                $New = new New_class;
                $show_New = $New->show_New_class();
                ?>
                <main class="w-screen h-screen flex flex-row items-strech">
                    <div id="category" class="basis-1/6 border-r p-5 group">
                        <div class="fixed flex flex-col gap-y-2 text-base">
                            <div class="flex flex-col rounded-full transition-colors hover:bg-zinc-100 pl-8">
                                <div>
                                    <i class="fa-solid fa-list"></i>
                                </div>
                                <div class="">
                                    <a href="admin_page.php">
                                        <span class="underline text-zinc-600"> All the News </span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-full transition-colors hover:bg-zinc-100 pl-8">
                                <div>
                                    <i class="fa-solid fa-folder-plus cursor-pointer list"></i>
                                </div>
                                <div class="add_news">
                                    <a href="./news_management/news_add.php">
                                        <span> Add news </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="items" class="flex-1 px-10 py-5">
                        <div class="w-full">
                            <table class="w-full table-auto border-collapse border-slate-500 p-8">
                                <thead>
                                    <tr>
                                        <th class="border border-slate-700 p-4">Order</th>
                                        <th class="border border-slate-700 p-4">ID</th>
                                        <th class="border border-slate-700 p-4">Title</th>
                                        <th class="border border-slate-700 p-4">Describe</th>
                                        <th class="border border-slate-700 p-4">Category</th>
                                        <th class="border border-slate-700 p-4">Images</th>
                                        <th class="border border-slate-700 p-4">Customize</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($show_New) {
                                        $i = 0;
                                        while ($result = $show_New->fetch_assoc()) {
                                            $i++;
                                    ?>
                                            <tr>
                                                <td class="border border-slate-700 p-4"><?php echo $i ?></td>
                                                <td class="border border-slate-700 p-4"><?php echo $result['ID'] ?></td>
                                                <td class="border border-slate-700 p-4 font-bold"><?php echo $result['Ten'] ?></td>
                                                <td class="border border-slate-700 p-4"><?php echo $result['Mo_Ta'] ?></td>
                                                <td class="border border-slate-700 p-4"><?php echo $result['The_Loai'] ?></td>
                                                <td class="border border-slate-700 p-4 justify-center"><img src="./image_upload/<?php echo $result['Hinh_Anh'] ?>" alt="" class="flex w-20 content-center "></td>
                                                <td class="border border-slate-700">
                                                    <div class="flex flex-col content-between">
                                                        <div class="flex p-2 justify-center bg-green-500 rounded-xl font-bold">
                                                            <a href="./news_management/news_edit.php?ID=<?php echo $result['ID'] ?>"><i class="fas fa-edit p-2"></i>Edit</a>
                                                        </div>
                                                        <div class="flex justify-center p-2 bg-red-500 rounded-xl font-bold">
                                                            <a href="./news_management/news_delete.php?ID=<?php echo $result['ID'] ?>"><i class="fas fa-minus-circle p-2"></i>Delete</a>
                                                </td>
                        </div>
                    </div>
                    </tr>
            <?php
                                        }
                                    }
            ?>
            </tbody>
            </table>
            </div>
        </div>
        </main>

        <script>
            $("#category-toggle").on("click", function() {
                $("#category").toggleClass("basis-1/6 basis-0");
            });

            $("#filter-toggle").on("click", function() {
                $("#filter").toggleClass("basis-1/6 basis-0");
            });

            $(".list").on("click", function() {
                $(".add_news").toggleClass("hidden");
            });
        </script>
    </div>

    </div>
    </div>
</body>

</html>