<footer class="w-full bg-zinc-900 text-zinc-400 text-xs">
        <div class="container mx-auto">
            <div class="max-w-screen-lg mx-auto p-5 sm:p-10">
                <div class="w-full flex flex-col gap-y-10 items-stretch">
                    <div class="">
                        <div class="md:max-w-screen-md mx-auto flex flex-col md:flex-row flex-wrap gap-x-20 gap-y-2">
                            <div class="flex-none">
                                <span class="text-zinc-100 text-lg font-bold">Subscribe to our newsletter</span>
                            </div>
                            <div class="flex-1">
                                <form action="/subscribe" method="get" class="w-full flex flex-row gap-x-4 items-stretch">
                                    <input type="email" name="" id="" placeholder="Type your email" required class="px-4 py-2 outline-none rounded-full border border-zinc-400 bg-zinc-900 text-zinc-100 placeholder:text-zinc-400 w-0 grow">
                                    <button type="submit" class="px-4 py-2 rounded-full bg-zinc-100 font-bold text-zinc-700">Subscribe</button>
                                </form>
                            </div>
                            <div class="text-justify">
                                <span class="text-red-400">*</span>
                                By clicking subscribe, you agree that CompanyName may process and use your email for newsletter purposes.
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-zinc-700 hidden sm:block">
                    </div>
                    <div class="flex flex-col sm:flex-row gap-x-24 gap-y-4 justify-start">
                        <div class="border-t border-zinc-700 sm:hidden">
                        </div>
                        <div class="flex flex-col gap-y-4">
                            <a href="#" class="text-zinc-100 font-bold">FIND A STORE</a>
                            <a href="../dang_nhap_dang_ky/change_user_information.php" class="text-zinc-100 font-bold">BECOME A MEMBER</a>
                            <a href="../dang_nhap_dang_ky/change_user_information.php" class="text-zinc-100 font-bold">SIGN UP FOR EMAIL</a>
                            <a href="#" class="text-zinc-100 font-bold">SEND US FEEDBACK</a>
                        </div>
                        <div class="border-t border-zinc-700 sm:hidden">
                        </div>
                        <div class="flex flex-col gap-y-4">
                            <input type="checkbox" name="" id="footer-customer" class="peer" hidden>
                            <label for="footer-customer" class="sm:hidden peer-checked:hidden">
                                <div class="text-zinc-100 font-bold">
                                    <span>CUSTOMER</span>
                                    <i class="fas fa-plus float-right"></i>
                                </div>
                            </label>
                            <label for="footer-customer" class="hidden peer-checked:inline">
                                <div class="text-zinc-100 font-bold">
                                    <span>CUSTOMER</span>
                                    <i class="fas fa-minus float-right"></i>
                                </div>
                            </label>
                            <div class="hidden sm:block text-zinc-100 font-bold">
                                <span>CUSTOMER</span>
                            </div>
                            <div class="hidden sm:flex peer-checked:flex flex-col gap-y-4">
                                <a href="#">Order Status</a>
                                <a href="#">Payment Options</a>
                                <a href="#">Get Help</a>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 sm:hidden">
                        </div>
                        <div class="flex flex-col gap-y-4">
                            <input type="checkbox" name="" id="footer-company" class="peer" hidden>
                            <label for="footer-company" class="peer-checked:hidden">
                                <div class="text-zinc-100 font-bold">
                                    <span>COMPANY</span>
                                    <i class="fas fa-plus sm:hidden float-right"></i>
                                </div>
                            </label>
                            <label for="footer-company" class="hidden peer-checked:inline">
                                <div class="text-zinc-100 font-bold">
                                    <span>COMPANY</span>
                                    <i class="fas fa-minus sm:hidden float-right"></i>
                                </div>
                            </label>
                            <div class="hidden sm:flex peer-checked:flex flex-col gap-y-4">
                                <a href="../trang_chu/about.php">About Us</a>
                                <a href="../lien_he/Contact.php">Contact Us</a>
                                <a href="../Tin_tuc/news.php">News</a>
                                <a href="#">Careers</a>
                                <a href="#">Investors</a>
                            </div>
                        </div>
                        <div class="border-t border-zinc-700 sm:hidden">
                        </div>
                    </div>
                    <div class="border-t border-zinc-700 hidden sm:block">
                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-20 gap-y-5 justify-center sm:items-center">
                        <div class="flex flex-col sm:flex-row gap-5">
                            <span class="text-zinc-100"><i class="fas fa-location-dot pr-2"></i>Vietnam</span>
                            <span>&copy; 2022 CompanyName, Inc. All Rights Reserved</span>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-x-10 gap-y-5">
                            <a href="#">Terms of Sale</a>
                            <a href="#">Terms of Use</a>
                            <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>