<!DOCTYPE html>
<html>
<head>
  <title>Forget Password</title>

  <style type="text/css">
    .red{
      color: red;
    }
  </style>
</head>
<body>



<div class="container" style="width:700px;"> 

<?php include 'head.php';?>

<fieldset>

<?php 
  $nameErr = $emailErr = $genderErr = $dayErr =  "";
     $name = $email = $gender = $dob =   "";

     if(isset($_POST["submit"]))  
{  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "* Name is required";
  } 
  else {
    $name = $_POST["name"];
    $pattern = "/^[a-z]+([a-z]|[0-9]|\.|-)*/i";
    // check if name only contains letters and whitespace
    if (!preg_match($pattern,$name)) {
      $nameErr = "* Only letters and white space allowed";
    }
    else if(str_word_count($name)<2){

     $nameErr= "* Name field at least two words";
     $name = " ";
    }

  }
}
if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } 
  else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $emailErr = "* Invalid email format";
    }else{
     $email = $_POST["email"];
    }

  

  if (empty($_POST["dob"])) {
    $dayErr = "* Date of birth is required";
  } else {
    $dob = $_POST["dob"];
    $d = explode("-",$dob);
    $dd = (int)$d[2];
    $mm = (int)$d[1];
    $yy = (int)$d[0];
    //yyyy-mm-dd

    if(!($dd<=31 && $dd>=1 && $mm<=12 && $mm>=1 && $yy<=2001 && $yy>=1900)){
     $dayErr = "* Invalid date of birth<br>";
     $dob = "";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

        $idx = 0;
        $userData = json_decode(file_get_contents("data.json"), true);
        if($userData != NULL){
          foreach ($userData as $user){
            if($user["username"] === $_SESSION['username']){
              $idx++;
              global $tmp_user;
              $tmp_user = $user;
              
              $tmp_user["name"] = $name;
              $tmp_user["e-mail"] = $email;
              $tmp_user["dob"] = $dob;
              $tmp_user["gender"] = $gender;


            }
          }
          if($idx > 0){
            $userData[$idx-1] = $tmp_user;
          }
          file_put_contents("data.json", json_encode($userData));
        }


}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<center>
  <div class="container" style="width:400px;"> 
<fieldset>

<legend><h3>FORGOT PASSWORD</h3></legend>

<label for="email"> <b> Enter Email &nbsp : </b> <input type="text" id="email" name="email" value="<?php echo $email;?>">
<span class="red"><?php echo $emailErr ?></span> <br> <hr>


<input type="Submit" name=""></br> </br>

</fieldset> <br>

</div></center>


</fieldset>

                      </fieldset>

                      <?php include 'foot.php';?>


</form>
</div>
</body>
</html>