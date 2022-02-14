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
$cpErr = $npErr = $rnpErr = "";
$cp = $np = $rnp = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cp"])) {
    $cpErr = "Current Password is required";
  } else {
    $cp = $_POST["cp"];
    // check if name only contains letters and whitespace
    //if (!preg_match("/(?=^.{2,}$)[a-zA-Z0-9._]*$/",$name)) {
      //$nameErr = "Must contain at least two characters";
    }
  }

  if (empty($_POST["cp"] != $_POST["np"])) {
    $npErr = "Same as Current Password";
  } else {
    $np = $_POST["np"];
    // check if e-mail address is well-formed
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$np)) {
      $npErr = "Must not be less than eight characters & contain at least one of the special characters (@, #, $, %)";
    }
  }

    if (empty($_POST["np"] === $_POST["rnp"])) {
    $rnpErr = "New Password didn't match";
  } else {
    $rnp = $_POST["rnp"];
    // check if e-mail address is well-formed
    if (!preg_match("/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/",$rnp)) {
      $rnpErr = "Must not be less than eight characters & contain at least one of the special characters (@, #, $, %)";
    }
  }



?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h3>CHANGE PASSWORD</h3></legend>

<label for="cp"> Current Password &nbsp &nbsp &nbsp &nbsp : <input type="text" id="cp" name="cp" value="<?php echo $cp;?>">
<span class="red"> <?php echo $cpErr?></span> </label>

<label for="np"> <p style="color:green;"> New Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : <input type="text" id="np" name="np" value="<?php echo $np;?>">
<span class="red"> <?php echo $npErr?></span> </label> </p>


<label for="rnp"> <p style="color:red;"> Retype New Password : <input type="text" id="rnp" name="rnp" value="<?php echo $rnp;?>">
<span class="red"><?php echo $rnpErr ?></span> </p> <hr>



<input type="Submit" name=""> </br> </br>

</fieldset> <br>


</fieldset>

</form>
</div>
</body>
</html>