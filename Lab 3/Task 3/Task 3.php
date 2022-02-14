<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>
</head>
<body>

<div class="container" style="width:500px;">  

<?php
// define variables and set to empty values
$ppErr = "";
$pp = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["pp"])) {
    $ppErr = "Required";
  } else {
    $pp = $_POST["pp"];
    // check if name only contains letters and whitespace
    if (!preg_match("/(?=^.{2,}$)[a-zA-Z0-9._]*$/",$pp)) {
      $ppErr = "Must contain at least two characters";
    }
  }

}


?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h3>PROFILE PICTURE</h3></legend>

<img src="https://cdn.discordapp.com/attachments/936136967421325312/942792133734191184/unknown.png" width="120" height="115"> <br>


<input type="file" name="images" id="images">

<span class="red"><?php echo $ppErr ?></span> <br> <hr>


<input type="Submit" name=""> <br> <br>

</fieldset>


</div>
</form>
</body>
</html>