
    <?php
    include "../class/new_add-class.php";
    ?>
    <?php
    $New = new New_class;
    if(isset($_GET['ID'])|| $_GET['ID']!=NULL){
        $id = $_GET['ID'];
    }
    $get_New = $New ->delete_New_class($id);
    ?>
