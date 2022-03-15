<?php include("head.php"); ?>

<style type="text/css">
     .red
     {
          color: red;
     }

          .green
     {
          color: green;
     }

</style>


<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'> Enter a Name! </label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'> Enter an Email! </label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'> Enter a User Name! </label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'> Enter a Password! </label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'> Confirm Password field cannot be empty. </label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'> Gender cannot be empty. </label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"],
                     'pass' =>     $_POST["pass"]  
                    
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                //echo $final_data;
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'> Registration Successfull </p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  







 <div class = "container" style = "width:700px;">
     <!DOCTYPE html>
     <html>
     <head>
          <title> Registration </title>
     </head>
      <body>

          <fieldset>

          <center>

               <span class = "red"> <h3>
          
          <?php

          if(isset($error))
          {
               echo $error;
          }
     ?> </h3>
          
     </span>


     <div class="container" style="width:400px;">             
                <form method="post">

                    <fieldset>
                         <legend> <h3> REGISTRATION </h3> </legend>

                         <label> Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
                         <input type = "text" name="name" class = "form-control" /> <br> <hr>

                         <label> &nbsp Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
                         <input type = "text" name = "email" class = "form-control" /> <b>i</b> <br> <hr>

                         <label> User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
                         <input type = "text" name = "username" class = "form-control" /> <br> <hr>


                         <label> Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
                         <input type="password" name = "pass" class="form-control" /> <br> <hr>

                         <label> Confirm Password &nbsp : </label>
                         <input type = "password" name = "Cpass" class = "form-control" /> <br> <hr>


                    <fieldset>
                    <legend> Gender </legend>

                    <input type = "radio" id = "male" name = "gender" value = "male">
                     <label for="male"> Male </label>  

                     <input type = "radio" id = "female" name = "gender" value = "female">
                     <label for = "female"> Female </label>

                     <input type = "radio" id = "other" name = "gender" value = "other">
                     <label for = "other"> Other </label> <br>

                    </fieldset> <hr>

                     <fieldset>
                     <legend>Date of Birth:</legend>

                     <input type = "date" name = "dob"> <br>
 
                     </fieldset> <hr> <br>
                     
                    <input type = "submit" name = "submit" value = "Submit" class = "btn btn-info" />

                    &nbsp

                    <input type = "reset" value = "Reset"> <br> <br>

               </form>  

           </div>

           <span class = "green"> <h3>

           <?php  

           if(isset($message))

           {
               echo $message;
          }

          ?> </h3>

     </span>

</center>
</fieldset>
</body>
</html>


<?php include 'foot.php';?> 