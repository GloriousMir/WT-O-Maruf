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

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $degreeErr = $dobdErr = $dobmErr = $dobyErr = $bgErr = "";
$name = $email = $gender = $degree = $website = $dob1 = $dob2 = $dob3 = $bloodgroup = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Format";
    }
  }


  if (empty($_POST["dob1"])) {
    $dobdErr = "Cannot be empty";
  } else {
    $dob1 = $_POST["dob1"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^(^[1-9]$)|(^0[1-9]|1[0-9]|2[0-9]|3[0-1]$)$/",$dob1)) {
      $dobdErr = "Day Limit Extened (1-31)";
    }
  }

    if (empty($_POST["dob2"])) {
    $dobmErr = "Cannot be empty";
  } else {
    $dob2 = $_POST["dob2"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^(^[1-9]$)|(^0[1-9]|1[0-2]$)$/",$dob2)) {
      $dobmErr = "Day Limit Extened (1-12)";
    }
  }

    if (empty($_POST["dob3"])) {
    $dobyErr = "Cannot be empty";
  } else {
    $dob3 = $_POST["dob3"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^(195[3-9]|196[0-9]|197[0-9]|198[0-9]|199[0-8])$/",$dob3)) {
      $dobyErr = "Year Limit Extened (1953-1998)";
    } 
  }



  if (empty($_POST["gender"])) {
    $genderErr = "At least one of them must be selected";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["degree"])) {
    $degreeErr = "At least two of them must be selected";
  } else {
    $degree = $_POST["degree"];
  }

    if (empty($_POST["bloodgroup"])) {
    $bgErr = "Must be selected";
  } else {
    $bloodgroup = $_POST["bloodgroup"];
  }
}


?>

<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<fieldset>
<legend><h3>NAME</h3></legend>

<input type="text" name="name" value="<?php echo $name;?>"> <br> <hr>
<span class="red"> <?php echo $nameErr?></span> <br>

</fieldset> <br>


<fieldset>
<legend><h3>EMAIL</h3></legend>

<input type="text" name="email" value="<?php echo $email;?>"> <b>i</b> <br> <hr>
<span class="red"><?php echo $emailErr ?></span> <br>

</fieldset> <br>


<fieldset>
<legend><h3>DATE OF BIRTH</h3></legend>

&nbsp &nbsp dd &nbsp &nbsp &nbsp &nbsp &nbsp mm &nbsp &nbsp &nbsp &nbsp &nbsp yyyy &nbsp <br>

<input type="text" name="dob1" size=2 maxlength=2 value="<?php echo $dob1;?>"> /


<input type="text" name="dob2" size=2 maxlength=2 value="<?php echo $dob2;?>"> /


<input type="text" name="dob3" size=4 maxlength=4 value="<?php echo $dob3;?>"> <br> <hr>

<span class="red"><?php echo $dobdErr ?></span> <br>
<span class="red"><?php echo $dobmErr ?></span> <br>
<span class="red"><?php echo $dobyErr ?></span> <br>

</fieldset> <br>


<fieldset>
<legend><h3>GENDER</h3></legend>

    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="male") echo "checked";?>
    value="male">Male
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="female") echo "checked";?>
    value="female">Female
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender=="other") echo "checked";?>
    value="other">Other <br> <hr>
    <span class="red"><?php echo $genderErr ?></span>
    <br>

</fieldset> <br>




<fieldset>
<legend><h3>DEGREE</h3></legend>

    <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="SSC") echo "checked";?>
    value="SSC">SSC
    <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="HSC") echo "checked";?>
    value="HSC">HSC
    <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="BSc") echo "checked";?>
    value="BSc">BSc
    <input type="checkbox" name="degree"
    <?php if (isset($degree) && $degree=="MSc") echo "checked";?>
    value="MSc">MSc <br> <hr>
    <span class="red"><?php echo $degreeErr ?></span>
    <br>


</fieldset> <br>


<fieldset>
<legend><h3>BLOOD GROUP</h3></legend>

      <legend><b> Blood Group </b></legend>
      <select id="bloodgroup" name="bloodgroup">
      <option value="">
      <option value="A+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="A+") echo "checked";?>
        value="A+">A+
        <option value="A-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="A-") echo "checked";?>
        value="A-">A-
        <option value="B+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="B+") echo "checked";?>
        value="B+">B+
        <option value="B-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="B-") echo "checked";?>
        value="B-">B-
        <option value="O+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="O+") echo "checked";?>
        value="O+">O+
        <option value="O-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="O-") echo "checked";?>
        value="O-">O-
        <option value="Ab+" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="AB+") echo "checked";?>
        value="AB+">AB+
        <option value="AB-" name="name"
    <?php if (isset($bloodgroup) && $bloodgroup=="AB-") echo "checked";?>
        value="AB-">AB-
    </select><hr>

    <span class="red"><?php echo $bgErr ?> <br> <br>

    </option>


<input type="Submit" name="">
</fieldset> <br>










</fieldset>


  <h2>Input Data</h2>
  <?php 
  echo $name."<br>";
  echo $email."<br>";
  echo $dob1. "/";
  echo $dob2. "/";
  echo $dob3."<br>";
  echo $gender."<br>";
  echo $degree."<br>";
  echo $bloodgroup."<br>";
   ?>


</form>
</body>
</html>