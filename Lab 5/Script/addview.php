<div class="container" style="width:400px;">

<form action="addcontrol.php" method="post">

    <fieldset >
        <legend><h2>ADD PRODUCT</h2></legend>

            <style type="text/css">

                h3 { text-align: center}

            </style>

            <h3> <a href="index.php">Home</a> </h3>

    <label for="fname">Name:</label><br>
    <input type="text" name="pd_name"><br><br>
    <label for="fname">Buying Price:</label><br>
    <input type="text" name="pd_buying_price"><br><br>
    <label for="fname">Selling Price:</label><br>
    <input type="text" name="pd_selling_price"><br><br>
    <hr>
    <input type="checkbox" name="display">
    <label for="fname">Display</label><br>
    <hr>
    <input type="submit" name="add" value="SAVE">


<p>
<?php
    session_start();
    if(isset($_SESSION["pd_msg"])){
        echo $_SESSION["pd_msg"];
        $_SESSION["pd_msg"] = "";
    }
?>
</p>


</fieldset>
</form>


</div>
