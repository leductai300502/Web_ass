<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="new.js">
    <link rel="stylesheet" href="new.css">
    <title>Document</title>
</head>

<body>
    <?php
    include "class/new_add-class.php";
    ?>
    <?php
    $New = new New_class;
    if (isset($_GET['ID']) || $_GET['ID'] != NULL) {
        $id = $_GET['ID'];
    }
    $get_New = $New->get_New_class($id);
    if ($get_New) {
        $result = $get_New->fetch_assoc();
    }
    ?>
    <?php session_start(); ?>
    <header class="w-full bg-black  px-8 py-4 text-white">
        <div class="flex flex-row gap-x-5">
            <div class="w-0 basis-1/4 flex-none">
            </div>
            <div class="w-0 basis-1/2 flex-none hidden md:block">
                <div class="h-full flex flex-row gap-x-8 justify-center items-center font-semibold">
                    <a href="#">Stories</a>
                    <a href="#">Impact</a>
                    <a href="#">Company</a>
                    <a href="#">Newsroom</a>
                    <a href="../lien_he/Contact.php">Contact us</a>
                    <a href="../trang_chu/home.php">Home</a>

                </div>
            </div>
            <div class="w-0 basis-1/4 flex-1">
                <div class="h-full flex flex-row gap-x-8 justify-end items-center">
                    <div class="flex-none block md:hidden menu_click">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=" flex flex-col gap-x-8 justify-center items-center sm:hidden hidden_menu ease-in-out md:hidden font-semibold">
            <a href="#" class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Stories</a>
            <a href="#" class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Impact</a>
            <a href="#" class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Company</a>
            <a href="#" class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Newsroom</a>
            <a href="../lien_he/Contact.php" class="w-full hover:bg-white h-10 hover:text-black text-center py-2">Contact us</a>
            <a href="../trang_chu/home.php" class="w-full hover:bg-white h-10 hover:text-black text-center py-2" class="w-full hover:bg-black h-10 hover:text-white text-center py-2">Home</a>
        </div>
        <div class="flex flex-row gap-x-5 h-20"></div>
        <div class="flex flex-row gap-x-5">
            <div class="flex w-full h-full justify-center">
                <div class="flex search rounded-full bg-white cursor-pointer overflow-hidden">
                    <div class="flex text-black items-center">
                        <i class="flex fa-solid fa-magnifying-glass text-2xl mr-5 ml-2"></i>
                    </div>
                    <div class="text-black">
                        <input type="text" class="flex w-6 h-10 outline-none rounded-full">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row gap-x-5 justify-center">
            <div class="flex justify-center">
                <h1 class="flex w-1/3 text-white text-7xl font-bold text-center items-center justify-center">
                    50 YEARS OF LISTENING TO ATHLETES*
                </h1>
            </div>
        </div>
        <div class="flex flex-row gap-x-5 bg-white mt-8">
            <img src="images1/img-5.jpg" alt="" class="flex w-full h-full">
        </div>
    </header>
    <main class="w-full bg-gray-100">
        <div class="grid grid-cols-2 gap-4 p-4 max-sm:grid-cols-1">
            <div class="<?php echo $result['The_Loai'] ?>">
                <img src="../ADMIN/image_upload/<?php echo $result['Hinh_Anh'] ?>" alt="">
            </div>
            <div class="text-bold text-2xl">
                <h1 class="text-4xl font-semibold"><?php echo $result['Mo_Ta'] ?></h1>
                <br>
                <h1 class="text-3xl font-semibold">Description:</h1>
                <h2 class="h2_hidden"><?php echo $result['Mo_Ta'] ?></h2>
            </div>
        </div>
        <div class="flex flex-col p-8">
            <div class="flex">
                <div class="font-bold text-4xl">Giving Back to the Community</div>
                <div></div>
            </div>
            <div class="flex flex-col p-8">
                <div class="flex flex-col text-2xl">
                    <div class="flex mt-8 mb-4 justify-between button_1">
                        <button>
                            <h3>The 2022 Black Community Commitment</h3>
                        </button>
                        <button>
                            <i class="fa-solid fa-magnifying-glass-minus remove_1 cover1"></i>
                            <i class="fa-solid fa-magnifying-glass-plus remove_1"></i>
                        </button>
                    </div>
                    <div class="flex cover1 remove_1">
                        <h3 class="text-1xl font-sans text-zinc-400">During the past 20 months, NIKE, Inc.'s Black Community Commitment has invested a total of $6 million to support 82 unique community-based organizations across 12 cities, and another $10 million to support 10 national organizations geared toward innovative local solutions across the three BCC pillars of economic empowerment, social justice and education innovation. That $16 million combined investment represents 92 unique organizations working to secure a better, stronger future by meeting communities where they work and play at the local level and by building the large-movement frameworks on the national level that set the stage for lasting change.</h3>
                    </div>
                </div>
                <div class="flex flex-col text-2xl">
                    <div class="flex mt-8 mb-4 justify-between button_2">
                        <button>
                            <h3>ShaPa Soweto Traning Center Expansion</h3>
                        </button>
                        <button>
                            <i class="fa-solid fa-magnifying-glass-minus remove_2 cover2"></i>
                            <i class="fa-solid fa-magnifying-glass-plus remove_2"></i>
                        </button>
                    </div>
                    <div class="flex cover2 remove_2">
                        <h3 class="text-1xl font-sans text-zinc-400">Relaunched in November 2021, the updated SHAPA Soweto is still a hub for football, and now also includes dedicated spaces for basketball, running, training, dance, judo and skateboarding.
                            The original vision to facilitate local partnerships has also expanded with the reopening. As part of Nike's Made to Play commitment to get kids moving, SHAPA delivers the Active Afterschools program to more than 300 kids across a range of sports, like football and running. Masai AC, an athletics club founded by middle-distance runner Caster Semenya, also has a dedicated training space at SHAPA Soweto, building on Semenya's vision to make running and education more accessible to disenfranchised youth. Other partners include Tarryn “TNT” Alberts for dance, Banesa Tseki for yoga, and Girls Skate South Africa.</h3>
                    </div>
                </div>
                <div class="flex flex-col text-2xl">
                    <div class="flex mt-8 mb-4 justify-between button_3">
                        <button>
                            <h3>Jordan Brand Wings Scholars Program</h3>
                        </button>
                        <button>
                            <i class="fa-solid fa-magnifying-glass-minus remove_3 cover3"></i>
                            <i class="fa-solid fa-magnifying-glass-plus remove_3"></i>
                        </button>
                    </div>
                    <div class="flex cover3 remove_3">
                        <h3 class="text-1xl font-sans text-zinc-400">Launched in 2015, the Jordan Brand Wings Scholars Program grants scholarships and resources to committed high school students to help realize their true potential through education. The class of 2026 brings 34 students from across the United States to the Jordan Brand family. In addition, Jordan Brand currently collaborates with 23 partners to award exceptional high school students across the United States with scholarships to complete their educational goals debt-free.
                            To date, 2,886 total scholarships have been funded by the Wings program, and 120,000-plus hours have been volunteered by Jordan Brand employees.</h3>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
        <div class="flex flex-col p-8">
            <div class="p-4 text-3xl font-bold">
                <h3>Serving Every Body in Sport</h3>
            </div>
            <div class="grid grid-cols-3 gap-4 p-4 max-sm:grid-cols-1">
                <div class="relative">
                    <img src="images1/img-17.jpg" alt="">
                    <span href="" class="absolute bottom-0 w-full h-full hover_hidden">
                        <div class="flex flex-col p-2 absolute bottom-0 w-full h-1/2 bg-black text-white text-1xl hover_title">
                            <h3 class="absolute top-0 text-3xl">Inclusivity in Design</h3>
                            <div class="absolute bottom-0 display hidden">
                                <h3>From day one, Nike has worked hand-in-hand with athletes to design the future of sport.</h3>
                                <h3 class="max-sm:hidden"> We believe that delivering for all athletes requires an inclusive approach, from research to release.</h3>
                                <h3 class="max-sm:hidden">For women, this means continually expanding the diversity of our size range, ensuring that we craft the right fit for every body.</h3>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="relative">
                    <img src="images1/img-18.jpg" alt="">
                    <span href="" class="absolute bottom-0 w-full h-full hover_hidden">
                        <div class="flex flex-col p-2 absolute bottom-0 w-full h-1/2 bg-black text-white text-1xl hover_title">
                            <h3 class="absolute top-0 text-3xl">Crafting the Right Fit</h3>
                            <div class="absolute bottom-0 display hidden">
                                <h3>Nike has a long history of leading with the voice of the athlete and studying their movement and form.</h3>
                                <h3 class="max-sm:hidden">We invest in research, sport-science technology, and data visualization to continually innovate for every size and shape.</h3>
                                <h3 class="max-sm:hidden"> By analyzing thousands of 3D body scans and computationally mapping them to our apparel, we've unlocked a more realistic, representative and global model of women's sizing — from plus to standard.</h3>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="relative">
                    <img src="images1/img-19.jpg" alt="">
                    <span href="" class="absolute bottom-0 w-full h-full hover_hidden">
                        <div class="flex flex-col p-2 absolute bottom-0 w-full h-1/2 bg-black text-white text-1xl hover_title">
                            <h3 class="absolute top-0 text-3xl">Innovating With Bras & Leggings</h3>
                            <div class="absolute bottom-0 display hidden">
                                <h3>Nike has redesigned our bras and leggings to offer enhanced fit, comfort and support for movement throughout the day.</h3>
                                <h3 class="max-sm:hidden">The Nike Alate bra introduces our new Support-FIT innovation and plus-size expansion, while new Nike Zenvy, Universa and Go leggings further support nuances in shape.</h3>
                                <h3 class="max-sm:hidden">Nike has also improved the Women's shopping experience with clearer navigation and a broadened in-store assortment.</h3>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-2 p-8 max-sm:grid-cols-1">
            <div class="">
                <h2 class="font-bold text-2xl font-sans">Serving Athletes Since 1966</h2>
                <h3 class="font-sans click_1 toggle_1">
                    1966
                    In 1966, Jeff Johnson, who was Nike's first employee, opened the company's first brick-and-mortar store on Pico Boulevard in Santa Monica, California. Called Blue Ribbon Sports, it originally imported Onitsuka shoes from Japan. The success of the door would ultimately necessitate a name change. It was Johnson who suggested “Nike” in 1971, inspired by the winged Greek goddess of victory. Two years later, fellow Nike employee Geoff Hollister would embark on a cross-country tour in a bright orange van selling Nike shoes from the trunk and introducing runners across the United States to Nike.</h3>
                <h3 class="font-sans click_2 toggle_2 hidden2">
                    1984
                    Nike opened its first factory store in 1984 in Portland, Oregon, on what is now Martin Luther King Boulevard. Originally called “Nike Union Square,” the store was the brand's first community store concept. This preceded a multi-concept approach for doors.</h3>
                <h3 class="font-sans click_3 toggle_3 hidden3">
                    1996
                    Nike launches nike.com, a storytelling site focused on the Nike athletes who are competing on the world stage. Plenty of other options followed for online consumers.
                </h3>
                <h3 class="font-sans click_4 toggle_4 hidden4">
                    2009
                    Nike Harajuku opens in Tokyo.At the time, it was the second Nike store in the world to feature a special soccer trial space and the first to offer a Runner's Studio, which debuts a run-analysis service.
                </h3>
            </div>
            <div class="">
                <img src="images1/img-4.png" alt="" class="click_1 toggle_1">
                <img src="images1/img-13.jpg" alt="" class="click_2 toggle_2 hidden2">
                <img src="images1/img-14.jpg" alt="" class="click_3 toggle_3 hidden3">
                <img src="images1/img-15.jpg" alt="" class="click_4 toggle_4 hidden4">
                <div class="flex justify-center">
                    <i class="fa-solid fa-circle text-2xl p-4 cursor-pointer click_1 display1"></i>
                    <i class="fa-solid fa-circle text-2xl p-4 cursor-pointer click_2"></i>
                    <i class="fa-solid fa-circle text-2xl p-4 cursor-pointer click_3"></i>
                    <i class="fa-solid fa-circle text-2xl p-4 cursor-pointer click_4"></i>
                </div>
            </div>
        </div>
    </main>
    <footer class="w-full bg-zinc-900 text-zinc-400 text-1xl">
        <div class="container mx-auto p-8">
            <div class="flex flex-col">
                <div class="grid grid-cols-3 gap-4 max-sm:grid-cols-1">
                    <div class="list_item">
                        <div>
                            <a href="">Stories</a>
                        </div>
                        <div>
                            <a href="">Impact</a>
                        </div>
                        <div>
                            <a href="">Company</a>
                        </div>
                        <div>
                            <a href="">Newsroom</a>
                        </div>
                    </div>
                    <div class="list_item">
                        <div>
                        <a href="../trang_chu/home.php">Shop Nike.com</a>
                        </div>
                        <div>
                            <a href="https://www.converse.com/shop/mens-shoes">Shop Converse.com</a>
                        </div>
                        <div>
                            <a href="">Get Help</a>
                        </div>
                        <div>
                            <a href="">Investors</a>
                        </div>
                    </div>
                    <div class="flex list_item">
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
                <div class="flex flex-row justify-end">
                    <div class="grid grid-cols-4 gap-4 p-4 text-1xl max-sm:flex-row">
                        <div class="">
                            <a href="" class="text-white menu_hover">Terms of Use</a>
                        </div>
                        <div class="">
                            <a href="" class="text-white menu_hover">Nike Privacy Policy</a>
                        </div>
                        <div class="">
                            <a href="" class="text-white menu_hover">CA Supply Chains Act</a>
                        </div>
                        <div class="">
                            <a href="" class="text-white"> @2022 Nike, Inc</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $(".button_1").click(function() {
            $(".remove_1").toggleClass("cover1");
        });
        $(".button_2").click(function() {
            $(".remove_2").toggleClass("cover2");
        });
        $(".button_3").click(function() {
            $(".remove_3").toggleClass("cover3");
        });
        $(".click_1").click(function() {
            $(".toggle_1").removeClass("hidden1");
            $(".toggle_2").addClass("hidden2");
            $(".toggle_3").addClass("hidden3");
            $(".toggle_4").addClass("hidden4");
            $(".click_1").addClass("display1");
            $(".click_2").removeClass("display2");
            $(".click_3").removeClass("display3");
            $(".click_4").removeClass("display4");
        });
        $(".click_2").click(function() {
            $(".toggle_1").addClass("hidden1");
            $(".toggle_2").removeClass("hidden2");
            $(".toggle_3").addClass("hidden3");
            $(".toggle_4").addClass("hidden4");
            $(".click_1").removeClass("display1");
            $(".click_2").addClass("display2");
            $(".click_3").removeClass("display3");
            $(".click_4").removeClass("display4");
        });
        $(".click_3").click(function() {
            $(".toggle_1").addClass("hidden1");
            $(".toggle_2").addClass("hidden2");
            $(".toggle_3").removeClass("hidden3");
            $(".toggle_4").addClass("hidden4");
            $(".click_1").removeClass("display1");
            $(".click_2").removeClass("display2");
            $(".click_3").addClass("display3");
            $(".click_4").removeClass("display4");
        });
        $(".click_4").click(function() {
            $(".toggle_1").addClass("hidden1");
            $(".toggle_2").addClass("hidden2");
            $(".toggle_3").addClass("hidden3");
            $(".toggle_4").removeClass("hidden4");
            $(".click_1").removeClass("display1");
            $(".click_2").removeClass("display2");
            $(".click_3").removeClass("display3");
            $(".click_4").addClass("display4");
        });
        $(".stories").click(function() {
            $(".news").addClass("control");
            $(".news").removeClass("hidden");
            $(".stories").removeClass("control");
            $(".control").addClass("hidden");
        });
        $(".impact").click(function() {
            $(".news").addClass("control");
            $(".news").removeClass("hidden");
            $(".impact").removeClass("control");
            $(".control").addClass("hidden");
        });
        $(".company").click(function() {
            $(".news").addClass("control");
            $(".news").removeClass("hidden");
            $(".company").removeClass("control");
            $(".control").addClass("hidden");
        });
        $(".newsroom").click(function() {
            $(".news").addClass("control");
            $(".news").removeClass("hidden");
            $(".newsroom").removeClass("control");
            $(".control").addClass("hidden");
        });
        $(".all").click(function() {
            $(".news").addClass("control");
            $(".news").removeClass("hidden");
        });
    </script>
</body>

</html>