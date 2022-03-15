<?php include 'uhead.php';?>

	

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
</head>
<body>

<div class="container" style="width:700px;"> 

  <fieldset>
	<style>
		*{
			box-sizing: border-box;
		}

		.child{
			border: 1px solid black;
		}

		.parent{
			display: flex;
		}
	</style>

<section class="parent">
<section class="child">

<ul>
	<h2> <b> Account </b> </h2> <hr>
  <li><a href="dash.php">Dashboard</a></li>
  <li><a href="profile.php">View Profile</a></li>
  <li><a href="eprofile.php">Edit Profile</a></li>
  <li><a href="cpp.php">Change Profile Picture </a> &nbsp  &nbsp </li>
  <li><a href="cpass.php">Change Password</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

   </section>

   <section class="child"> 

   	<div class="container" style="width:460px;">




  <style type="text/css">
    .red{
      color: red;
    }
    .green{
      color: green;
    }
  </style>


<div class="container" style="width:459px;">  

 </style>

      <?php

    $currErr= $reErr = $pass = "";
    $currPass = $Newpass = $Repass = $passErr = "";

    if(isset($_POST['sub'])){
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {

        $Newpass = $_POST['new'];
        $Repass = $_POST['re'];

        if(empty($_POST["pass"])){
        $passErr = "* Password is required";

     }
        else if(strlen($_POST['pass']) < 8)
        {
        $passErr = "* Password must be at least 8 characters ";
        }
        else if(!(str_contains($_POST['pass'], '@') === true or str_contains($_POST['pass'], '$') === true or str_contains($_POST['pass'], '%') === true or str_contains($_POST['pass'], '#') === true))
        {
            $passErr = "* Password must be contain at least one of the special characters ";
            
        }

        if ($Newpass != $Repass) {
          $reErr = 'New Password must match with the Retyped Password';
        }else{
            $idx = 0;
          $userData = json_decode(file_get_contents("data.json"), true);
          if($userData != NULL){
            foreach ($userData as $user){
{
                $idx++;
                global $tmp_user;
                $tmp_user = $user;
                $tmp_user["pass"] = $Newpass;
              }
            }
            if($idx > 0){
              $userData[$idx-1] = $tmp_user;

            }

            file_put_contents("data.json", json_encode($userData));

          }

        }
      }
    }
          
    ?>

    <center>   <br> <br>


    <div class="container custom-form" style="width:425px;">  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend> <b> CHANGE PASSWORD <b> </legend>

        <br>

      <label><span class="black">Current Password  &nbsp &nbsp &nbsp &nbsp:</span> </label>
      <input type="text" name="new"><span class="red">&nbsp;<?php echo $currErr ?></span>
      <br> <br>

      <label><span class="green">New Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:</span> </label>
      <input type="text" name="new"><span class="red">&nbsp;<?php echo $currErr ?></span>
      <br> <br>

      <label><span class="red">Retype New Password : </span></label>
      <input type="text" name="re"><span class="red">&nbsp;<?php echo $reErr ?></span>
      <hr>
      
      <input type ="submit" name="sub">
      <br>

 
</form>
</fieldset>
</div> <br>
</fieldset>
</center>
</body>
</html>

<?php require("foot.php"); ?>


