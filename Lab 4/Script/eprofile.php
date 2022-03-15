<?php include 'uhead.php';?>

	

<!DOCTYPE html>
<html>
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
	<h3>Account </a> </h3><hr>
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


<?php 
     $nameErr = $emailErr = $genderErr = $dayErr =  "";
     $name = $email = $gender = $dob =   $username =   "";

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
                            //  if($user["username"] === $_SESSION['Username'])
                              {
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
 <!DOCTYPE html>  
 <html>  
      <head>   
      </head>  
      <body>  

           <div class="container" style="width:459px;">                  
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  


                     <fieldset>
                     <legend><h3>EDIT PROFILE</h3></legend>

                     <label>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>  
                     <input type="text" name="name" class="form-control" /> <br> <hr> 
                     <label>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</label>
                     <input type="text" name = "email" class="form-control" /><br> <hr>
                     


                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label> <br>
                    </fieldset> <hr>

                     <fieldset>
                     <legend>Date of Birth:</legend> <br>

                     <input type="date" name="dob"> <br>

                     </fieldset> <hr>
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /> <input type="reset" value="Reset"> <br> <br>

                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>

                     </fieldset>   <br>
                </form>  
           </div>  
      </body>  
 </html>  
   	</div>

   


    </section> <br>



</body>
</html>
</fieldset>
</div>



<?php include 'foot.php';?>