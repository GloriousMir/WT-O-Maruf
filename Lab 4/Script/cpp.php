<?php include 'uhead.php';?>

  
<!DOCTYPE html>
<html>
<head>
  <title>Change Profile Picture</title>
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
  <h2>Account </a> </h2><hr>
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

      <fieldset>
<legend><h3>PROFILE PICTURE</h3></legend>

<img src="https://cdn.discordapp.com/attachments/936136967421325312/942792133734191184/unknown.png" width="120" height="115"> <br>


      <form action="upload.php" method="post" enctype="multipart/form-data">

  <input type="file" name="fileToUpload" id="fileToUpload"> <br> <hr>
  <input type="submit" value="Submit" name="submit"> <br>
</form>

</fieldset> <br>

    </div>




    </section> <br>



</body>
</html>
</fieldset>
</div>



<?php include 'foot.php';?>