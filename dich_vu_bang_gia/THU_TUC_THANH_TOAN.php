<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="script_pay.js"></script>
  <script>
    $(document).ready(function() {

      $(".menu_click").click(function() {
        $(".hidden_menu").toggleClass("hidden");
      });

      $("#trash1").click(function() {
        $("#value1").text("0");
        $("#trash11").remove();
      });
      $("#trash2").click(function() {
        $("#value2").text("0");
        $("#trash22").remove();
      });
      $("#trash3").click(function() {
        $("#value3").text("0");
        $("#trash33").remove();
      });
      $("#total_price").hide();
    });
  </script>
  <title>Check Out</title>
</head>
<body onload="loadCart()">
  <div class="md:grid md:grid-cols-2 gap-32">
    <div class=" text-center pt-4 pb-4 bg-white">
      <div class="pt-14 inline-block bg-white w-auto h-auto md:float-right">
        <div class="mb-8 p-2 -ml-6">
          <h1 class=" font-semibold text-3xl">Order Summary</h1>
          <br>
          <form action="" method="post" class="cart" id="cart">
            <table class=" ml-7 font-bold border-collapse border-spacing-4 border border-zinc-900 border-y-2 border-x-2 ">
              <thead>
              <tr>
                <td class="font-bold bg-gray-600 text-white w-40">Product</td>
                <td class="font-bold bg-gray-600 text-white w-20">Price</td>
                <td class="font-bold bg-gray-600 text-white w-20">Size</td>
                <td class="font-bold bg-gray-600 text-white w-30">Quantity</td>
                <td class="font-bold bg-gray-600 text-white w-20">Cancel</td>
              </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
            <br>
            <div>
              <!-- <button class="calc rounded-full text-white w-44 h-14  font-bold border-solid border-2 border-black p-1 inline-block bg-black">Calculate
                your bill</button><span id="total"></span> -->
              <p class="sum w-40 p-3 text-xl">Total: <span>0</span> <span>$</span></p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- ... -->
    <div class="bg-white text-center pt-4 pb-4">
      <div class="pt-14 inline-block bg-white w-auto h-auto md:float-left">
        <div class="mb-8 p-2">
        <h1 class="font-semibold text-2xl">How would you like to get your order?</h1>
        <br>
          <div class="inline-block rounded-2xl border-2 border-black w-80 h-20">
            <i class="fas fa-box -ml-64 mt-7"></i>
            <p class="-mt-7 -ml-32 text-xl font-light">Deliver It</p>
          </div>
          <br>
          <br>
          <h1 class=" font-semibold text-2xl">Enter your name and address:</h1>
          <br>
          <form action="gio_hang.php" id="form_validate" method="post">
            <input type="text" id="name" name="name" minlength="1" maxlength="255" required placeholder="Name" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input type="email" id="email" name="email" minlength="1" maxlength="255" required placeholder="Email" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input type="text" id="address" name="address" minlength="1" maxlength="255" required placeholder="Address" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input type="text" id="city" name="city" minlength="1" maxlength="255" required placeholder="City" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input type="text" id="district" name="district" minlength="1" maxlength="255" required placeholder="Province" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input type="text" id="phone_number" name="phone_number" minlength="1" maxlength="255" required placeholder="Phone number" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <p class="lg:text-2xl font-semibold text-center  text-xl">Have a promo code?</p>
            <br>
            <input type="text" id="promo" name="promo" minlength="0" maxlength="255" placeholder="Promo" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <p class="lg:text-2xl font-semibold text-center  text-xl">How would you like to pay?</p>
            <br>
            <div class="inline-block rounded-2xl border-2 border-black w-80 h-20">
            <i class="far fa-credit-card -ml-64 mt-7"></i>
            <p class="-mt-7 -ml-14 text-xl font-light"> Credit or debit card</p>
          </div>
          <br>
          <br>
          <p class="lg:text-2xl font-semibold text-center  text-xl">Enter your payment detail</p>
          <br>
          <input type="text" id="name_on_card" name="name_on_card" minlength="1" maxlength="255" required placeholder="Name on card" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input type="text" id="card_number" name="card_number" minlength="1" maxlength="255" required placeholder="Card number" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input placeholder="Expired date" type="text" onfocus="(this.type = 'date')"  id="expired_date" name="expired_date" required class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <input type="text" id="cvv" name="cvv" minlength="1" maxlength="255" required placeholder="CVV" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <br>
            <!-- <input type="text" id="shoe_name" name="shoe_name" minlength="1" maxlength="255" value="">
            <input type="text" id="shoe_size" name="shoe_size" minlength="1" maxlength="255" value="">
            <input type="text" id="shoe_amount" name="shoe_amount" minlength="1" maxlength="255" value=""> -->
            <div id="infoshoe">

            </div>
            <p class="lg:text-2xl font-semibold text-left  ml-24 text-xl">Delivery methods</p>
            <br>
            <div id="shipcod1" class="text-left ml-24">
              <input type="radio" required="required" id="ship_method_1" value="16h" name="ship_method">
              <label for="ship_method" class="font-medium">Delivery within 16 hours</label>
              <br>
              <input type="radio" required="required" id="ship_method_2" value="30h" name="ship_method">
              <label for="ship_method" class="font-medium">Delivery within 30 hours</label>
              <br>
              <br>
            </div>
            <label for="luu_y" class=" font-bold -ml-40 ">Notice:</label>
            <br>
            <div class="text-left ml-20">
              <textarea id="luu_y" name="luu_y" rows="4" cols="30" class="border-solid border-2 border-gray-500 p-1 inline-block bg-white"></textarea>
            </div>
            <input type="text" id="total_price" value="0" name="total_price" minlength="1" maxlength="255" class="rounded-md border-solid border-2 border-gray-500 p-1 inline-block w-80 h-12">
            <br>
            <button type="submit" name="button_submit" id="button_submit" value="Place order" class="rounded-full text-white  w-80 h-14  font-bold border-solid border-2 border-black p-1 inline-block bg-black">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>


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
                By clicking subscribe, you agree that CompanyName may process and use your email for newsletter
                purposes.
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
              <a href="../dang_nhap_dang_ky/change_user_information.php" class="text-zinc-100 font-bold">BECOME A
                MEMBER</a>
              <a href="../dang_nhap_dang_ky/change_user_information.php" class="text-zinc-100 font-bold">SIGN UP FOR
                EMAIL</a>
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
                <a href="about.php">About Us</a>
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
</body>
</html>