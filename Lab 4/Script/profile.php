<?php include 'uhead.php';?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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

			<section class="child"><br>
				<fieldset>
					<legend> <b> PROFILE </b> </legend> <br>

				<div class="container" style="width:430px;">
					<center>

					<a href="cpp.php"><img src="https://cdn.discordapp.com/attachments/936136967421325312/942792133734191184/unknown.png" width="120" height="115"> </a><br>

					<b> <a href="cpp.php">Change</a> </b>
					</center>

<div class="table-responsive"> 
<table class="table table-bordered">  

																										<?php   
																										$data = file_get_contents("data.json");  
																										$data = json_decode($data, true);  
																										foreach($data as $row)  
																										{   
																														echo '<tr>
																															<th> Name &nbsp  &nbsp &nbsp  &nbsp   &nbsp &nbsp  &nbsp: </th> <td>'.$row["name"].'</td> </th> <br>


																															</tr>';

																															echo '<tr>
																															<th> Email &nbsp  &nbsp &nbsp  &nbsp   &nbsp &nbsp  &nbsp: <td>'.$row["e-mail"].'</td> </th> <br>


																															</tr>'; 

																															echo '<tr>
																															<th> Gender &nbsp  &nbsp  &nbsp   &nbsp &nbsp  &nbsp: <td>'.$row["gender"].'</td> </th> <br>


																															</tr>';

																															echo '<tr>
																															<th> Date of Birth &nbsp: <td>'.$row["dob"].'</td> </th> <br>


																															</tr>';
						
																										}  
																										?>
																								
</table> <hr>
<b> <a href="eprofile.php">Edit Profile</a>  </b> <br>


</fieldset> <br>

</div>
																			
</div>
</section>



</body>
</html>
</fieldset>
</div>



<?php include 'foot.php';?>