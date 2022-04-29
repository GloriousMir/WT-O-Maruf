<?php require("model.php"); ?>
<?php 
function get_data(){
    return showAllProduct();
}
function get_data_by_name($name){
    return searchProduct($name);
}

?>