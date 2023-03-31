<?php
$connect1 = mysqli_connect("localhost", "root", "","nike");
if(isset($_POST["pass_word"]))
{
  $password = mysqli_real_escape_string($connect1, md5($_POST["pass_word"]));
  $query1 = " SELECT * FROM `tbl_user` WHERE `password` = '$password'";
  $result1 = mysqli_query($connect1, $query1);
  echo mysqli_num_rows($result1);
}
mysqli_close($connect1);
?>