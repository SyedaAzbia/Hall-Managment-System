




<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halls | Details</title>
    <link rel="stylesheet" href="css/halls.css">
    <link rel="shortcut icon" href="images/hall.png" type="image/x-icon">
  
</head>
<body>
      <!--Start of nav-->
      <?php
 include("nav.php");
 ?>
    <!--end of javascript-->
<br><br><br><br><br><br><br>
<div class="hall_details">
   <?php
require_once("connection.php");
?>





  <div class="hall_description2">
  <?php 

if(isset($_GET["id"]))
{
  $id= $_GET["id"];
$query = "SELECT * from hall where h_id='".$id."'";
$sel = mysqli_query($con, $query);
$id = 0;
while($row = mysqli_fetch_assoc($sel))
{
?>
    <h1> <?php echo $row["h_name"]; ?>:</h1>
    <br>
    <div class="iii"><img src="images/location.png" alt="location:" width="30px" height="30px"><p><?php echo $row["h_address"]; ?></p></div>
    <br>
    <div class="iii"><img src="images/call.png" alt="location:" width="30px" height="30px"><p><?php echo $row["h_contact"]; ?>,</p></div>
    <br>
    <div class="iii"> <h3>Catagery:</h3><p><?php echo $row['h_category'];  ?></p></div>
    
    <br>
    <h2>About the venue</h2>
    <br>
    <p class="parahall"><?php echo $row["h_description"]; ?></p>
         <br>
         <a href="proceed.php?id=<?php echo $row['h_id']; ?>" class="bkn">Book now</a>
         


  </div>
  <div class="set">
  <div class="hall_description1">

    <img class="img2" src="images/<?php echo $row['h_image'];  ?>" width="100%" height="300px"/>
  </div><br>

   <h2> Min-Rent : <?php echo $row["minimum_rent"]; ?>/-</h2><br>
  <h2>Max-Capacity : <?php echo $row["Accommodation"]; $_SESSION["Accommodation"] = $row["Accommodation"]; ?>/-</h2>
  
 
  
  </div>

  
</div>
<div class="fcs">
<div class="facilities">
  <h1>
    facilities of the venue
  </h1>
  <br>
  <ol class="list">
    <li>A spacious and well-decorated event hall or ballroom is the primary facility for hosting wedding ceremonies and receptions. </li><br>
    <li>The hall should provide a variety of seating options, including chairs and tables that can be arranged in different configurations to suit the needs of the event.</li><br>
    <li>Many marriage halls offer in-house catering services or have partnerships with catering companies.  </li><br>
    <li>Facilities should be wheelchair accessible and have ramps or elevators if multiple levels are involved. </li><br>
    <li>In addition to parking, valet service can be provided for added convenience. </li><br>
  </ol>
</div>

</div>


<div class="pic">
    <img src="images/camera.png" width="20px" height="20px"><p>&nbsp;photos</p>
</div>

<center><img src="images/<?php echo $row['h_image'];  ?>" alt="" width="70%" height="500px" class="img3"></center>
<?php   }

}
?>
<br><br>
<div class="popup" id="popup">
  <br>
  <form action="" class="ferm">
    <label for=""> Guests:</label>
    <p>Tells us about the numbers of Guests</p>
    <br>
    <input type="text" name="" id="" class="is">
    <br>
    <label for="">Themes</label>
    <p>Decides the Themes according to you</p>
    <br>
    <select name="" id="" title="Themes">
      <option value="red">red</option>
      <option value="black">black</option>
      <option value="blue">blue</option>
      <option value="yellow">yellow</option>
      <option value="pink">pink</option>
    </select>
      <br>
      <label for="">Caterer name</label>
      <p>You Event Your Advice</p>
      <br>
      <input type="text" name="" id="" class="is" >
      <br>
      <input type="submit" name="" id="" value="Let's Go">
    </form>
 <input type="submit" name="" id="" onclick="closePopup()">
</div>
  </div>
</div>

<script>

  // let popup = document.getElementById("popup");
  // function openPopup(){
  //   popup.classList.add("open-popup");
  // }
  // function closePopup(){
  //   popup.classList.remove("open-popup");
  // }
</script>
 <!--start of footer-->
 <?php
 include("footer.php");
 ?>
  <!--end of footer-->
</body>

</html>