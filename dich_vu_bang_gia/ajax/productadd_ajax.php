<?php
    include "../class/product_class.php";
    include "../library/database.php";
?>
<?php
    $product = new product;   
    $danhmuc_id = $_GET['danhmuc_id'];
?>
    <option value="">-brand-</option>
<?php
    $show_brand_ajax = $product->show_brand1($danhmuc_id);
    if($show_brand_ajax){while($result = $show_brand_ajax -> fetch_assoc()){
    ?>
        <option value="<?php echo $result['loaisanpham_id'] ?>"><?php echo $result['loaisanpham_ten'] ?></option>
<?php
    }}
?>