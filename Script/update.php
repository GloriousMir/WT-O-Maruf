<?php

//user can update his information




include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE users set username='" . $_POST['username'] . "', email='" . $_POST['email'] . "' WHERE email='" . $_POST['email'] . "'");
$message = "Data Successfully Update.";
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<head>
<title>Update Data</title>
<link rel="icon" type="image/x-icon" href="images/log.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body> <br>
<form name="frmUser" method="post" action="">
	<div class="container" style="width:500px;position: center">              
                <div class="table-responsive"> 
                     <table class="table table-bordered"> 
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<tr><td><b><center>User Name</center></b>
<center><input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"></center>

</td></tr>
<br>

<tr><td><b><center>Email:</center></b>
<center><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></center>
</td></tr>
<br> <br>

<tr><td>
<center><input type="submit" name="submit" value="Submit" class="buttom">

<a href="#" onclick="window.opener.location.reload();window.close();">Close</a>
</center>
</td></tr>

  </table>  
                   </div>
                 </div>

</form>
</body>
