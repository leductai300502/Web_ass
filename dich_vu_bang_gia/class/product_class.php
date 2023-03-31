<?php
include "library/database.php";
?>
 
<?php
class product
{
    private $db;
 
    public function __construct()
    {
        $this ->db = new Database();
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_danhmuc ORDER BY danhmuc_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function show_brand(){
        $query = "SELECT tbl_loaisanpham.*, tbl_danhmuc.danhmuc_ten
        FROM tbl_loaisanpham INNER JOIN tbl_danhmuc ON tbl_loaisanpham.danhmuc_id = tbl_danhmuc.danhmuc_id
        ORDER BY tbl_loaisanpham.loaisanpham_id DESC";
        $result = $this -> db ->select($query);
       return $result;
    }
    public function show_brand1($danhmuc_id){
        $query = "SELECT * FROM tbl_loaisanpham
        WHERE danhmuc_id = $danhmuc_id
        ORDER BY loaisanpham_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function insert_product($post,$files){
        $sanpham_tieude = $post['sanpham_tieude'];
        $sanpham_ma = $post['sanpham_ma'];
        $danhmuc_id = $post['danhmuc_id'];
        $loaisanpham_id = $post['loaisanpham_id'];
        $sanpham_gia = $post['sanpham_gia'];
        $sanpham_chitiet = $post['sanpham_chitiet'];

        $file_name = $files['sanpham_anh']['name'];
        $file_temp = $files['sanpham_anh']['tmp_name'];
        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $sanpham_anh = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image = "uploads/".$sanpham_anh;
        move_uploaded_file($file_temp, $upload_image);

        $file_names = $files['sanpham_anhs']['name'];
        $file_temps = $files['sanpham_anhs']['tmp_name'];

        $query = "INSERT INTO tbl_sanpham (sanpham_tieude, sanpham_ma, danhmuc_id, 
                                loaisanpham_id, sanpham_gia, sanpham_chitiet, sanpham_anh) 
                    VALUES ('$sanpham_tieude', '$sanpham_ma', '$danhmuc_id',
                    '$loaisanpham_id', '$sanpham_gia', '$sanpham_chitiet', '$sanpham_anh')";
        $result = $this ->db ->insert($query);
        if($result){
            $query = "SELECT * FROM tbl_sanpham
            ORDER BY sanpham_id DESC LIMIT 1";
            $result = $this -> db ->select($query)->fetch_assoc();
            $sanpham_id = $result['sanpham_id'];
            foreach($file_names as $key => $element){
                // $div = explode('.',$element);
                // $file_ext = strtolower(end($div));
                // $sanpham_anh = substr(md5(time()),0,10).'.'.$file_ext;
                // $upload_image = "uploads/".$sanpham_anh;
                
                // move_uploaded_file($file_temps[$key], $upload_image);
                move_uploaded_file($file_temps[$key], "uploads/".$element); 
                $query = "INSERT INTO tbl_sanpham_anh_test (sanpham_id, sanpham_anh)
                VALUES ('$sanpham_id', '$element')";
                $result = $this -> db ->insert($query);           
            }
            $sanpham_size = $post['size'];
            foreach($sanpham_size as $key => $element){
                $query = "INSERT INTO tbl_sanpham_size_test (sanpham_id, sanpham_size)
                VALUES ('$sanpham_id', '$element')";
                $result = $this -> db ->insert($query);          
            }
        }
        return $result;   
    }
    public function show_product(){
        $query = "SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC" ;
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_cartegory_brand($loaisanpham_id){
        $query = "SELECT * FROM tbl_loaisanpham WHERE loaisanpham_id = $loaisanpham_id 
                    ORDER BY loaisanpham_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_brand($danhmuc_id){
        $query = "SELECT * FROM tbl_loaisanpham WHERE danhmuc_id = $danhmuc_id 
                    ORDER BY danhmuc_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_cartegory($danhmuc_id){
        $query = "SELECT * FROM tbl_danhmuc WHERE danhmuc_id = $danhmuc_id 
                    ORDER BY danhmuc_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_product($sanpham_id){
        $query = "SELECT * FROM tbl_sanpham WHERE sanpham_id = $sanpham_id 
                    ORDER BY sanpham_id DESC" ;
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_img($sanpham_id){
        $query = "SELECT * FROM tbl_sanpham_anh_test WHERE sanpham_id = $sanpham_id 
                    ORDER BY sanpham_id DESC" ;
        $result = $this -> db ->select($query);
        return $result;
    }
    public function get_size($sanpham_id){
        $query = "SELECT * FROM tbl_sanpham_size_test WHERE sanpham_id = $sanpham_id 
                    ORDER BY sanpham_id DESC" ;
        $result = $this -> db ->select($query);
        return $result;
    }
    public function update_product($post, $files, $sanpham_id) {
        // $query = "UPDATE tbl_sanpham SET sanpham_ten = '$sanpham_ten' WHERE sanpham_id = '$sanpham_id'";
        // $result = $this ->db ->update($query);
        $sanpham_tieude = $post['sanpham_tieude'];
        $sanpham_ma = $post['sanpham_ma'];
        $danhmuc_id = $post['danhmuc_id'];
        $loaisanpham_id = $post['loaisanpham_id'];
        $sanpham_gia = $post['sanpham_gia'];
        $sanpham_chitiet = $post['sanpham_chitiet'];

        $file_name = $files['sanpham_anh']['name'];
        $file_temp = $files['sanpham_anh']['tmp_name'];
        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $sanpham_anh = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image = "uploads/".$sanpham_anh;
        move_uploaded_file($file_temp, $upload_image);

        $file_names = $files['sanpham_anhs']['name'];
        $file_temps = $files['sanpham_anhs']['tmp_name'];

        $query = "UPDATE tbl_sanpham 
                SET sanpham_tieude = '$sanpham_tieude',
                    sanpham_ma = '$sanpham_ma',
                    danhmuc_id = '$danhmuc_id', 
                    loaisanpham_id = '$loaisanpham_id', 
                    sanpham_gia = '$sanpham_gia',
                    sanpham_chitiet = '$sanpham_chitiet', 
                    sanpham_anh = '$sanpham_anh'
                WHERE sanpham_id = '$sanpham_id'";

        $result = $this ->db ->update($query);
        if($result){
            $query = "SELECT * FROM tbl_sanpham
            ORDER BY sanpham_id DESC LIMIT 1";
            $result = $this -> db ->select($query)->fetch_assoc();
            $sanpham_id = $result['sanpham_id'];
            $query = "DELETE  FROM tbl_sanpham_size_test WHERE sanpham_id = '$sanpham_id'";
            $result = $this -> db ->delete($query);
            $query = "DELETE  FROM tbl_sanpham_anh_test WHERE sanpham_id = '$sanpham_id'";
            $result = $this -> db ->delete($query);
            foreach($file_names as $key => $element){
                move_uploaded_file($file_temps[$key], "uploads/".$element);
                $query = "INSERT INTO tbl_sanpham_anh_test (sanpham_id, sanpham_anh)
                VALUES ('$sanpham_id', '$element')";
                $result = $this -> db ->insert($query);
            }
            $sanpham_size = $post['size'];
            foreach($sanpham_size as $key => $element){
                $query = "INSERT INTO tbl_sanpham_size_test (sanpham_id, sanpham_size)
                VALUES ('$sanpham_id', '$element')";
                $result = $this -> db ->insert($query);
            }
        }
        header('Location:productList.php');
        return $result;
    }
    public function delete_product($sanpham_id){
        $query = "DELETE  FROM tbl_sanpham WHERE sanpham_id = '$sanpham_id'";
        $result = $this -> db ->delete($query);
        $query = "DELETE  FROM tbl_sanpham_anh_test WHERE sanpham_id = '$sanpham_id'";
        $result = $this -> db ->delete($query);
        $query = "DELETE  FROM tbl_sanpham_size_test WHERE sanpham_id = '$sanpham_id'";
        $result = $this -> db ->delete($query);
        header('Location:productList.php');
        if($result) {$alert = "<span class = 'alert-style'> Delete Thành công</span> "; return $alert;}
        else {$alert = "<span class = 'alert-style'> Delete Thất bại</span>"; return $alert;}
    } 
} 
?>
