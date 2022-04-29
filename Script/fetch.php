<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "file-management");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM files
  WHERE id LIKE '%".$search."%'
  OR name LIKE '%".$search."%' 
  OR size LIKE '%".$search."%' 
  OR downloads LIKE '%".$search."%'

 ";
}
else
{
 $query = "
  SELECT * FROM files ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ID</th>
     <th>File Name</th>
     <th>Size</th>
     <th>Downloads</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["size"].'</td>
    <td>'.$row["downloads"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>