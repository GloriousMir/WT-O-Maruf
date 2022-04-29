<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <title>Download files</title>
      <link rel="icon" type="image/x-icon" href="images/logo.png">


</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="cart.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>



</tbody>
</table>

</body>
</html>