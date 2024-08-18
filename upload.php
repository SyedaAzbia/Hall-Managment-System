<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halls | Upload</title>
    <link rel="stylesheet" href="css/upload.css">
    <link rel="shortcut icon" href="images/hall.png" type="image/x-icon">
</head>
<body>
    <?php 
error_reporting(0);
  session_start();
  if(isset($_SESSION["user"]))
  {
?>

    <!--Start of nav-->
    <?php
 include("nav.php");
 ?>
<!--end of javascript-->
<br><br><br><br><br><br>
<div class="u">
<h1>
    Upload your Halls:
</h1>
<br>
<p> You can upload your own halls to our website </p>
<br>
<h2>Enter the details</h2>
</div>
<br><br>
<div class="pl">
    <form class="frm" method="POST">

<br>
<!--<br>
<label for=""> Name:</label>
<input type="text" name="name" id="" required placeholder="Enter your name">
<br>-->
<label for="">Hall Name:</label>
<br>
<input type="text" name="name" id="" required placeholder="Enter hall name" class="inp">
<br>

<label for="">Contact:</label>
<br>
<input type="tel" name="contact" id="" required placeholder="Enter contact no" class="inp">
<br>
<label for="">Address:</label>
<br>
<input type="text" name="address" id="" required placeholder="enter hall Address" class="inp">
<br>
<label for="">Category:</label>
<select class="form-control" name="category">
    <option>Hall</option>
    <option>Banquet</option>
    <option>Resort</option>
</select>
 <br><br>
<label for="">Upload Images:</label>
<br>
<input type="file" name="images" id="" required value="Pictures" placeholder="Pictures" class="inp"> 

<br>
<label for="">Description:</label>
<br>
<textarea name="textarea" rows="8" cols="30" required="" placeholder="Description" class="inpp">          </textarea>
<br>
<label for="">Minimum Rent:</label>
<br>
<input type="text" name="range" id="" required placeholder="Minimum_Rent" class="inp">
<br>
<div  class="form-submit-btn">
              <input type="submit" value="submit" name="btn_up" class="bkn "/>
              </div>
<br><br>
</form>


<?php
require_once("connection.php");

        
if(isset($_POST["btn_up"]))
{
    $name=$_POST["name"];
    $contact=$_POST["contact"];
    $address=$_POST["address"];
    $category=$_POST["category"];
    $message=$_POST["textarea"];
    $range=$_POST["range"];
    $image=$_POST["images"];
    
    $query="insert into hall values
    ('','".$name."','".$contact."','".$address."','".$category."','".$message."','".$range."','".$image."','1')";
   
  $abc = mysqli_query($con,$query);
if($abc)
{
    header("location:index.php");

}
else{
    echo "error";
}
}
    ?>




</div>
<br><br>
 <!--start of footer-->
 <?php
 include("footer.php");
  }
  else {
     header('Location:Forms.php');
}
 ?>
  <!--end of footer-->
</body>
</html>