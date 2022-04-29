<?php 
    require("model.php");
    if(isset($_GET["id"])){ 
        $row = showProduct($_GET["id"]);
?>

<div class="container" style="width:400px;">

<fieldset>

    <style type="text/css">

                h3 { text-align: center}

            </style>

            <h3> <a href="index.php">Home</a> </h3>

    <legend><h2>DELETE PRODUCT</h2></legend>
<p><b>Name: </b><?php echo $row["Name"]; ?></p>
<p><b>Buying Price: </b><?php echo $row["buying_price"]; ?></p>
<p><b>Selling Price: </b><?php echo $row["selling_price"]; ?></p>


<form action="delete.php" method="post">
    <input type="hidden" name="serial" value="<?php echo $row["SL"]; ?>">
    <hr>
    <input type="submit" name="delete" value="Delete">
</form>
<?php }else{
    header("location: view.php");
} ?>


</fieldset>
</div>