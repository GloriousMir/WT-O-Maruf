<?php 
    require("product.php");
    if(isset($_GET["id"])){
        $row = get_a_product($_GET["id"]);
    }else{
        header("location: view.php");
    }

?>
<div class="container" style="width:400px;">
<form action="updatecontrol.php" method="post">
    <fieldset>
    <legend><h2>EDIT PRODUCT</h2></legend>


        <style type="text/css">

                h3 { text-align: center}

            </style>

            <h3> <a href="index.php">Home</a> </h3>
            
    <label for="fname">Name:</label><br>
    <input type="text" name="pd_name" value="<?php echo $row["Name"]; ?>"><br><br>
    <label for="fname">Buying Price</label><br>
    <input type="text" name="pd_buying_price" value="<?php echo $row["buying_price"]; ?>"><br><br>
    <label for="fname">Selling Price</label><br>
    <input type="text" name="pd_selling_price" value="<?php echo $row["selling_price"]; ?>"><br><br>
    <input type="hidden" name="sl" value="<?php echo $_GET["id"]; ?>">
    <hr>
    <input type="checkbox" name="display">
    <label for="fname">Display</label><br>
    <hr><br>
    <input type="submit" name="change" value="SAVE">

</fieldset>
</form>
</div>
