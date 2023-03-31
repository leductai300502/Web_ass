<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/5rjuvbgybh2u3kvns4gbbb7plx6l67yatybayqm6sts8efx0/tinymce/6/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">
  tinymce.init({
    selector: '.myTextarea',
    width: 800,
    height: 300,
    plugins: [
      'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
      'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
      'media', 'table', 'emoticons', 'template', 'help'
    ],
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>
    <title>Tin_Tuc_Backend</title>
</head>
<body>
    <?php
    include "../class/new_add-class.php";
    ?>
    <?php 
    $New = new New_class;
    //Them du lieu vao danh muc
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $tieude = $_POST['tieu_de'];
        $mota = $_POST['mo_ta'];
        $theloai = $_POST['the_loai'];
        //----image
        $file_name = $_FILES['hinh_anh']['name'];
        $file_temp = $_FILES['hinh_anh']['tmp_name'];
        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $image = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image = "../image_upload/".$image;
        move_uploaded_file($file_temp,$upload_image);
        $insert_New = $New ->insert_New_class($tieude,$mota,$theloai,$image); 
    }
    ?>
<main class="w-screen h-screen flex flex-row items-strech">
    <div id="category" class="basis-1/6 border-r p-5 group">
        <div class="fixed flex flex-col gap-y-2 text-base">
            <div class="flex flex-row items-center mb-10">
                <div id="category-toggle" class="rounded-full hover:bg-zinc-100">
                    <div>
                        <a href="">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-center rounded-full transition-colors hover:bg-zinc-100">
                <div>
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div class="group-[.basis-0]:hidden p-4">
                    <span>News</span>
                </div>
            </div>
            <div class="flex flex-col rounded-full transition-colors hover:bg-zinc-100 pl-8">
                <div>
                <i class="fa-solid fa-list"></i>
                </div>
                <div class="">
                    <a href="../admin_page.php">
                        <span class=""> All the news </span>
                    </a>
                </div>
            </div>
            <div class="flex flex-col rounded-full transition-colors hover:bg-zinc-100 pl-8">
                <div>
                    <i class="fa-solid fa-folder-plus cursor-pointer list"></i>
                </div>
                <div class="add_news">
                    <a href="news_add.php">
                        <span class="text-zinc-500 underline"> Add news </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="filter" class="basis-1/6 border-r p-5 group">
        <div class="flex flex-col gap-y-2 text-base">
            <div class="mb-10 flex flex-row items-center">
                <div id="filter-toggle" class="rounded-full hover:bg-zinc-100">
                    <div>
                        <i class="fa-solid fa-filter-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="items" class="flex-1 px-10 py-5">
    <div class="grow p-8 text-zinc-900 font-bold">
                <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col">
                    <div>
                        <label for="chude">category: </label>
                        <select id="chude" name="the_loai" class="ml-4 text-black"> 
                            <option value="stories">Stories</option>
                            <option value="impact">Impact</option>
                            <option value="company">Company</option>
                            <option value="newsroom">Newrooms</option>
                        </select><br>
                    </div>
                    <div>
                        <label>Title:</label><br>
                        <div class="flex flex-row">
                            <div class="border-2 border-black">
                            <textarea type="text" name="tieu_de" class="myTextarea" id=""></textarea>
                            </div>
                            <div class="grow"></div>
                        </div>
                    </div>
                    <div>
                        <label>Describe:</label><br>
                        <div class="flex flex-row">
                            <div class="border-2 border-black">
                                <textarea type="text" name="mo_ta" class="myTextarea" id=""></textarea>
                            </div>
                            <div class="grow"></div>
                        </div>
                    </div>
                    <div>
                        <label>Images:</label><br>
                        <input type="file" name="hinh_anh" class="block w-full text-sm text-slate-500"><br>
                    </div>
                    <div class="flex flex-row">
                        <div class="grow"></div>
                        <div>
                            <button class=" border-2 border-black bg-zinc-400 mt-4 rounded-xl p-4" type="submit">Add now</button>
                        </div>
                        <div class="grow"></div>
                    </div>
                </form>
            </div>   
    </div>
</main>
    <script>
    $('textarea#tiny').tinymce({
        height: 500,
        plugins: "powerpaste emoticons hr image link lists charmap table",
    /* other settings... */ });
    </script>
</body>
</html>