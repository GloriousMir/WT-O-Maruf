<!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>

  <div class="container" style="width:700px;">
    <form method="post"> <br>

      <fieldset>

        <a href="homee.php"> <img src="https://cdn.discordapp.com/attachments/841047852192235562/951902271149600788/unknown.png" width="180" height="80"> </a>

        <div align="right">

          <b> Logged in as <a href="user.php">

            <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {   
                              echo '<tr>

                               <td>'.$row["username"].'</td>

                               </tr>'; 
                                
                          }

                          ?> </a> </b>



          <b> <a href="logout.php"> | Logout </a> </b>

        </div>
      </fieldset>
    </form>
  </div>
</body>
</html>