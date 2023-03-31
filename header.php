<header class="w-full bg-white text-black px-8 py-4 border-b-2">
        <div class="flex flex-row gap-x-5">
            <div class="w-0 basis-1/4 flex-none">
            </div>
            <div class="w-0 basis-1/2 flex-none hidden md:block">
                <div class="h-full flex flex-row gap-x-8 justify-center items-center font-semibold">
                    <a class="text-center" href="../trang_chu/home.php" >Home</a>
                    <a class="text-center" href="../trang_chu/about.php">About</a>
                    <a class="text-center" href="../lien_he/Contact.php">Contact</a>
                    <a class="text-center" href="../Tin_tuc/news.php">News</a>
                    <a class="text-center" href="../dang_nhap_dang_ky/change_user_information.php">Your account</a>
                    <?php
                    if (isset($_SESSION['username']) && $_SESSION['username']) {
                            echo '<a class="text-center" href="../dich_vu_bang_gia/DICH_VU_BAN_GIA.php">Our Products</a>';
                    } else {
                        echo '<a class="text-center" href="../dang_nhap_dang_ky/change_user_information.php">Sign in to shop</a>';
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['username']) && $_SESSION['username']) {
                        echo  $_SESSION['first_name']. $_SESSION['last_name']   ;
                        echo "<br>";
                        echo '<a class="text-center" href="../dang_nhap_dang_ky/logout.php">Logout</a>';
                    } else {
                        echo '';
                    }
                    ?>
                    <button id="show" onclick="show()"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
            <div class="w-0 basis-1/4 flex-1">
                <div class="h-full flex flex-row gap-x-8 justify-end items-center">
                    <div class="flex-none block md:hidden menu_click">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
            <script src="../script_home.js"></script>
        </div>
        <?php include "cart.php"?>
        <div class="flex flex-col gap-x-8 justify-center items-center sm:hidden hidden_menu ease-in-out md:hidden font-semibold">
            <a href="#"class="w-full hover:bg-black h-10 hover:text-white text-center py-2">Home</a>
            <a href="about.php"class="w-full hover:bg-black h-10 hover:text-white text-center py-2">About</a>
            <a href="../lien_he/Contact.php"class="w-full hover:bg-black h-10 hover:text-white text-center py-2">Contact</a>
            <a href="../Tin_tuc/news.php"class="w-full hover:bg-black h-10 hover:text-white text-center py-2">News</a>
            <a href="../dang_nhap_dang_ky/change_user_information.php"class="w-full hover:bg-black h-10 hover:text-white text-center py-2">Your account</a>
            <?php
                    if (isset($_SESSION['username']) && $_SESSION['username']) {
                            echo '<a class="w-full hover:bg-black h-10 hover:text-white text-center py-2" href="../dich_vu_bang_gia/DICH_VU_BAN_GIA.php">Our Products</a>';
                    } else {
                        echo '<a class="w-full hover:bg-black h-10 hover:text-white text-center py-2" href="../dang_nhap_dang_ky/change_user_information.php">Sign in to shop</a>';
                    }
                    ?>
        </div>
    </header>