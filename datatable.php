<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halls | Datatable</title>
    <link rel="stylesheet" href="css/booking.css">
    <link rel="shortcut icon" href="images/hall.png" type="image/x-icon">


</head>
<body>

<?php 
error_reporting(0);
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["role"] ==0)
  {
?>
<?php
  include("nav.php");
  ?>
  <br><br><br><br><br><br>
<div style="background-color: white;">
<div class="container" >
<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hall Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Minimum Rent</th>
       <th scope="col">Images</th>
      
      <th>Delete</th>
    </tr>
  </thead>

<?php
require_once("connection.php");

$query = "select * from hall";
$sel = mysqli_query($con, $query);
$id = 0;
while($row = mysqli_fetch_assoc($sel))
{
    $id++;
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $row["h_name"]; ?></td>
      <td><?php echo $row["h_contact"]; ?></td>
      <td><?php echo $row["h_address"]; ?></td>
      <td><?php echo $row["h_category"]; ?></td>
      <td><?php echo $row["h_description"]; ?></td>
      <td><?php echo $row["minimum_rent"]; ?></td>
      <td><img src="images/<?php echo $row["h_image"]; ?>" width="100" /></td>
   <!--   <td><a href="edit.php?id=<?php echo $row["h_id"]; ?>">Edit</a></td> -->
   <td><a href="delete.php?id=<?php echo $row["h_id"]; ?>">Delete</a></td>
    </tr>
  </tbody>
<?php 
}
?>


</table>

</div>
</div>
<?php
 include("footer.php");

  }
  else {
     header('Location:Forms.php');
}
 ?>
</body>
</html>