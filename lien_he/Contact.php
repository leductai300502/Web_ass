<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="Contact.css">
    <title>Document</title>
</head>
<body>
<?php session_start(); ?>

    <header class="w-full relative bg-white px-8 py-4 text-black">
        <div class="flex flex-col bg-white gap-y-12">
            <div class="flex flex-row gap-4">
                <div class="flex-none justify-start block lg:hidden">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="grow"></div>
                <div class="flex justify-end gap-4 right-0">
                    <span><a href="">Find a Store</a></span>
                    <div class="w-px bg-zinc-900"></div>
                    <span><a href="">Help</a></span>
                    <div class="w-px bg-zinc-900"></div>
                    <span><a href="">Joins Us</a></span>
                    <div class="w-px bg-zinc-900"></div>
                    <?php
                    if (isset($_SESSION['username']) && $_SESSION['username']) {
                        echo  $_SESSION['first_name']. $_SESSION['last_name']   ;
                        echo "<br>";
                        echo '<a class="text-center" href="../dang_nhap_dang_ky/logout.php">Logout</a>';
                    } else {
                        echo '';
                    }
                    ?>
                    <div class="w-px bg-zinc-900"></div>
                    <span><a href="../trang_chu/home.php">Home</a></span>
                </div>
            </div>
            <div class="flex justify-center gap-x-16 text-1xl max-sm:hidden">
                <span><a href="">New & Featured</a></span>
                <span><a href="">Men</a></span>
                <span><a href="">Women</a></span>
                <span><a href="">Kids</a></span>
                <span><a href="">Sale</a></span>
                <span><a href="">Gifts</a></span>
            </div>
            <div class="fixed flex-none hover_menu w-11/12 h-screen hidden">
                <div class="fixed hover_menu_item flex w-full bg-white text-1xl justify-center gap-32 z-10 top-40">
                    <div class="flex flex-col">
                        <span class="mb-2 font-bold"><a href="#">New & Featured</a></span>
                        <span class="mb-2 font-light"><a href="#">Menbers Day : 20% Off Select</a></span>
                        <span class="mb-2 font-light"><a href="#">Styles</a></span>
                        <span class="mb-2 font-light"><a href="#">Stay Cozy</a></span>
                        <span class="mb-2 font-light"><a href="#">Shop All New Arrivals</a></span>
                        <span class="mb-2 font-light"><a href="#">New & Upcoming Drops</a></span>
                        <span class="mb-2 font-light"><a href="#">Menber Accsess</a></span>
                        <span class="mb-2 font-light"><a href="#">New To Sale</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="mb-2 font-bold"><a href="#">New For Men</a></span>
                        <span class="mb-2 font-light"><a href="#">Shoes</a></span>
                        <span class="mb-2 font-light"><a href="#">Clothing</a></span>
                        <span class="mb-2 font-light"><a href="#">Equipment</a></span>
                        <span class="mb-2 font-light"><a href="#">Shop All News</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="mb-2 font-bold"><a href="#">New For Women</a></span>
                        <span class="mb-2 font-light"><a href="#">Shoes</a></span>
                        <span class="mb-2 font-light"><a href="#">Clothing</a></span>
                        <span class="mb-2 font-light"><a href="#">Equipment</a></span>
                        <span class="mb-2 font-light"><a href="#">Shop All News</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="mb-2 font-bold"><a href="#">New For Kids</a></span>
                        <span class="mb-2 font-light"><a href="#">Boy Shoes</a></span>
                        <span class="mb-2 font-light"><a href="#">Boy Clothing</a></span>
                        <span class="mb-2 font-light"><a href="#">Girl Shoes</a></span>
                        <span class="mb-2 font-light"><a href="#">Girl Clothing</a></span>
                        <span class="mb-2 font-light"><a href="#">Shop All News</a></span>
                    </div>
                </div>
                <div class="fixed flex hover_menu_bg bg-zinc-900 w-full bottom-0">
                </div>
            </div>
            <div class="flex justify-center text-3xl font-bold gap-y-4">
                <h3>GET HELP</h3>
            </div>
            <div class="flex justify-center gap-4">
                <div class="h-14 w-80 rounded-lg border-2 border-black">
                    <input type="text" class="rounded-lg h-12 w-64 outline-none ml-2" placeholder="What can we help you?">
                    <i class="fa-solid fa-magnifying-glass ml-4"></i>
                </div>
            </div>
        </div>
    </header>
    <main class="w-full bg-gray-100 main">
        <div class="flex flex-col gap-8 p-16 pl-20 pr-20">
            <div class="flex flex-col gap-4">
                <div class="font-bold">
                    <h3 class="text-2xl">QUICK ASSISTS</h3>                   
                    <p class="font-light text-1xl">Answers to our most frequently asked questions are just one click away.</p>
                </div>
            </div>
            <div class="w-full h-px bg-zinc-900"></div>`
            <div class="grid grid-cols-3 gap-8 max-sm:grid-cols-2">
                <div>
                    <h3 class="p-4 text-2xl">SHIPPING & DELIVERY</h3>
                    <a href="#">What are Nike's shipping options?</a><br>
                    <a href="#">How do I get free shipping on Nike orders?</a>
                </div>
                <div>
                    <h3 class="p-4 text-2xl">RETURNS</h3>
                    <a href="#">How do I return my Nike order?</a><br>
                    <a href="#">Where is my refund?</a>
                </div>
                <div>
                    <h3 class="p-4 text-2xl">NIKE MEMBERSHIP</h3>
                    <a href="#">What is Nike Membership?</a><br>
                    <a href="#">How do I get Nike's newest sneaker releases?</a><br>
                    <a href="#">How do I reset my Nike password?</a>
                </div>
                <div>
                    <h3 class="p-4 text-2xl">ORDERS</h3>
                    <a href="#">Where is my Nike order?</a><br>
                    <a href="#">Can I cancel or change my Nike order?</a><br>
                    <a href="#">How do I find the right size and fit?</a>
                </div>
                <div>
                    <h3 class="p-4 text-2xl">COMPANY INFO</h3>
                    <a href="#">Do Nike shoes have a warranty?</a><br>
                    <a href="#">Can I recycle my Nike shoes?</a><br>
                    <a href="#">Does Nike offer grants or donations?</a>
                </div>
                <div>
                    <h3 class="p-4 text-2xl">NIKE OFFERS</h3>
                    <a href="#">Does Nike offer a student discount?</a><br>
                    <a href="#">Does Nike offer a military discount?</a><br>
                    <a href="#">Does Nike offer a first responder and medical professional discount?</a>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="font-bold">
                    <h3 class="text-2xl">CONTACT US</h3>                   
                </div>
            </div>
            <div class="w-full h-px bg-zinc-900"></div>
            <div class="grid grid-cols-3 gap-8 gap-x-20 bg-white max-sm:grid-cols-2">
                <div>
                    <img src="images/phone.png" alt="" class="p-8">
                    <h3 class="mt-4 mb-1">PRODUCTS & ORDERS</h3>
                    <h3>1-800-806-6453 <br>
                        4 am - 11 pm PT <br>
                        7 days a week</h3>
                </div>
                <div>
                    <img src="images/phone.png" alt="" class="p-8">
                    <h3 class="mt-4 mb-1">NRC & NTC</h3>
                    <h3>1-800-379-6453 <br>
                        8 am - 5 pm PT <br>
                        Mon - Fri</h3>
                </div>
                <div>
                    <img src="images/phone.png" alt="" class="p-8">
                    <h3 class="mt-4 mb-1">COMPANY INFO & INQUIRIES</h3>
                    <h3>1-800-344-6453 <br>
                        7 am - 4 pm PT <br>
                        Mon - Fri</h3>
                </div>
                <div>
                    <img src="images/chat.png" alt="" class="p-8">
                    <h3 class="mt-4 mb-1">PRODUCTS & ORDERS</h3>
                    <h3>Chat with us <br>
                        4 am - 11 pm PT <br>
                        7 days a week</h3>
                </div>
                <div>
                    <img src="images/store.png" alt="" class="p-8">
                    <h3 class="mt-4 mb-1">STORE LOCATOR</h3>
                    <h3>Find Nike retail stores near you</h3>
                </div>
                <div></div>
              </div>
        </div>
    </main>
    <footer class="w-full bg-zinc-900 text-zinc-400 text-1xl">
        <div class="flex flex-row p-16 gap-32 max-sm:flex-col max-sm:gap-8">
            <div class="flex flex-col">
                <span class="mb-2 text-1xl font-bold"><a href="#">GIFT CARDS</a></span>
                <span class="mb-2 text-1xl font-bold"><a href="#">PROMOTIONS</a></span>
                <span class="mb-2 text-1xl font-bold"><a href="#">FIND A STORE</a></span>
                <span class="mb-2 text-1xl font-bold"><a href="#">SIGN UP FOR EMAIL</a></span>
                <span class="mb-2 text-1xl font-bold"><a href="#">BECOME A MEMBER</a></span>
                <span class="mb-2 text-1xl font-bold"><a href="#">NIKE JOURNAL</a></span>
                <span class="mb-2 text-1xl font-bold"><a href="#">SEND US FEEDBACK</a></span>
            </div>
            <div class="flex flex-col">
                <span class="mb-2 text-1xl font-bold"><a href="#">GET HELP</a></span>
                <span class="mb-2 text-xs font-light"><a href="#">Order Status</a></span>
                <span class="mb-2 text-xs font-light"><a href="#">Shipping and Delivery</a></span>
                <span class="mb-2 text-xs font-light"><a href="#">Returns</a></span>
                <span class="mb-2 text-xs font-light"><a href="#">Payment Options</a></span>
                <span class="mb-2 text-xs font-light"><a href="#">Contact Us</a></span>
                <span class="mb-2 text-xs font-light"><a href="#">Gift Card Balance</a></span>
            </div>
            <div class="flex flex-col">
                <span class="mb-2 text-1xl font-bold"><a href="">ABOUT NIKE</a></span>
                <span class="mb-2 text-xs font-light"><a href="../Tin_tuc/news.php">News</a></span>
                <span class="mb-2 text-xs font-light"><a href="">Careers</a></span>
                <span class="mb-2 text-xs font-light"><a href="">Investors</a></span>
                <span class="mb-2 text-xs font-light"><a href="">Purpose</a></span>
                <span class="mb-2 text-xs font-light"><a href="">Sustainability</a></span>
            </div>
            <div class="flex flex-row grow justify-end p-4 gap-x-16">
            <div class="grow">
                            <a href="https://www.instagram.com/nike/" class="text-white"><i class="fa-brands fa-instagram text-3xl menu_hover"></i></a>
                        </div>
                        <div class="grow">
                            <a href="https://twitter.com/nike" class="text-white"><i class="fa-brands fa-square-twitter text-3xl menu_hover"></i></a>
                        </div>
                        <div class="grow">
                            <a href="https://www.youtube.com/user/nike/videos" class="text-white"><i class="fa-brands fa-youtube text-3xl menu_hover"></i></a>
                        </div>
                        <div class="grow">
                            <a href="https://www.facebook.com/nike/" class="text-white"><i class="fa-brands fa-facebook text-3xl menu_hover"></i></a>
                        </div>
            </div>
        </div>
        <div class="flex flex-row p-4 max-sm:flex-col max-sm:gap-y-16">
            <div class="flex text-center gap-2">
                <i class="fa-solid fa-location-dot text-white cursor-pointer"></i>
                <h3 class="text-white ml-2">United States</h3>
            </div>
            <div class="flex grow justify-end gap-8">                 
                <a href="">Guides</a>
                <a href="">Terms of sale</a>
                <a href="">Term of Use</a>
                <a href="">Nike Privacy Policy</a>
                <a href="">CA Supply Chains Act</a>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function(){
            var h1 = $(".hover_menu_item").height();
            var h2 = $(".hover_menu").height();
            $(".hover_menu_bg").height(h2-h1);
        });
        </script>
</body>
</html>