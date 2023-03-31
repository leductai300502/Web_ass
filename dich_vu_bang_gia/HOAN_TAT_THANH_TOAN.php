<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
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
  <title>Complete payment</title>
</head>

<body class="bg-zinc-500 text-center">
  <?php session_start(); ?>
    <?php include "../header.php"?>
  <div class="mt-14 mb-14 inline-block bg-white w-auto h-auto rounded-lg p-11">
    <h1 class="text-3xl font-semibold">Complete payment, continue shopping?</h1>
    <br>
    <form action="../trang_chu/home.php">
      <button type="submit" value="Return home" class="text-white text-2xl font-semibold rounded-full w-60 h-12 border-solid border-2 border-black p-1 inline-block bg-black">Return home</button>
    </form>
  </div>
  <?php include "../footer.php"?>

</body>

</html>