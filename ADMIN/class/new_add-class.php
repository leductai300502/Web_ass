<?php
include "lib/database.php";
?>
 
<?php
class New_class
{ 
    private $db;
 
    public function __construct()
    {
        $this ->db = new Database();
    }
    public function insert_New_class($Ten,$Mo_Ta,$The_Loai,$Hinh_Anh){
        $query = "INSERT INTO tbl_tin_tuc (Ten,Mo_Ta,The_Loai,Hinh_Anh) VALUES ('$Ten','$Mo_Ta','$The_Loai','$Hinh_Anh')";
        $result = $this ->db ->insert($query);
        return $result;   
    }
    public function show_New_class(){
        $query = "SELECT * FROM tbl_tin_tuc ORDER BY ID DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_New_class($ID){
        $query = "SELECT * FROM tbl_tin_tuc WHERE ID = '$ID'";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_full_New_class(){
        $query = "SELECT * FROM `tbl_tin_tuc`";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function update_New_class($Ten,$Mo_Ta,$The_Loai,$Hinh_Anh,$ID){
        $query = "UPDATE tbl_tin_tuc SET Ten = '$Ten' , Mo_Ta = '$Mo_Ta' , The_Loai = '$The_Loai', Hinh_Anh = '$Hinh_Anh' WHERE ID = '$ID'";
        $result = $this ->db ->update($query);
        header("Location:../admin_page.php");
        return $result;
    }
    public function delete_New_class($ID){
        $query = "DELETE  FROM tbl_tin_tuc WHERE ID = '$ID'";
        $result = $this -> db ->delete($query);
        header("Location:../admin_page.php");
        return $result;
    }
}
 
?>
