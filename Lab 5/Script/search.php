<?php 
session_start();
require("control.php");
?>

<div class="container" style="width:400px;">

<fieldset>

    <style type="text/css">

                h3 { text-align: center}

            </style>

            <h3> <a href="index.php">Home</a> </h3>

    <legend><h2>SEARCH</h2></legend>

<table border="1">
<thead>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Buying Price</th>
        <th>Selling Price</th>
        <th colspan="2">Action</th>
    </tr>
</thead>
<tbody>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="nm" placeholder="Search"> &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="submit" value="Search By Name" name="search"> <hr>
    </form>
    
    <?php 
    $name = "";
    if(isset($_POST["search"])){
        $name = $_POST["nm"];
    }
    $rows = get_data_by_name($name);
    foreach($rows as $i => $row){ 
    ?>
    <tr>
        <td><?php echo $row["SL"]; ?></td>
        <td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["buying_price"]; ?></td>
        <td><?php echo $row["selling_price"]; ?></td>
        <td><a href="update.php?id=<?php echo $row["SL"]; ?>">edit</a></td>
        <td><a href="deleteview.php?id=<?php echo $row["SL"]; ?>">delete</a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<p><?php 
    if(isset($_SESSION["pd_msg"])){
        echo $_SESSION["pd_msg"];
        $_SESSION["pd_msg"] = "";
    }
?></p>
</fieldset>