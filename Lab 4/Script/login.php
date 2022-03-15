<?php include 'head.php';?>

<!DOCTYPE html>
<html>
<head>

    <title>Login</title>

    <style type="text/css">

        .red
        {
            color: red;
        }

</style>
</head>

<body>

<div class="container" style="width:700px;"> 


<fieldset>

    <center>

    <?php

    $name = $pass = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 

    {

       $remember = false;

       if(isset($_POST["remember"])){
        $remember = true;
       }


           $f = 0;
    $userData = json_decode(file_get_contents("data.json"), true);
    if($userData != NULL){
        foreach ($userData as $user){
        if($user["username"] === $_POST["username"] && $user["pass"] === $_POST["pass"]){
            $_SESSION['username'] = $user["username"];

            $_SESSION['password'] = $user["pass"];



            $f = 1;

           if($remember){
            setcookie("username", $_POST["username"], time()+3600);
           }
            header("location: dash.php");
        }
    }
    if($f==0){
        echo '<b style="color:red;font-size:30px;font-family:calibri ;">
      Login Failed! </b> '; 
    }
}
      
}     
    
?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <?php include 'cookie.php';?>



<div class="container" style="width:400px;">

<fieldset>
<legend><h3>LOGIN</h3></legend>

<br>

<label for = "username"> <b> User Name : </b> <input type = "text" id = "username" name = "username" value = "<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username']; } ?>">
<span class="red"> </span> </label> </br> </br>


<label for = "pass"> <b> Password &nbsp : </b> <input type="Password" id = "pass" name = "pass" value = "<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>" >
<span class = "red"></span> </label> <br> <hr>




<input type = "checkbox" name = "remember" id = "remember" />
<label for = "remember"> <b> Remember Me </b> </label> </br> </br>

<input type = "Submit"  name = "login" value = "Submit"> &nbsp <b> <a href= "forgot.php"> Forgot Password? </a> </b> </br> </br>




</center>   <br>
</div>
</fieldset>
</form>
</div>
</body>
</html>


<?php include 'foot.php';?>


