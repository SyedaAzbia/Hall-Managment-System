<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halls | Booking</title>
<link rel="stylesheet" href="css/booking.css">
    <link rel="shortcut icon" href="images/hall.png" type="image/x-icon">
</head>
<body>
    
     <!--Start of nav-->
     <?php
      session_start();
 include("nav.php");
 ?>
  <!--end of javascript-->
<br><br><br><br><br>
<h2 class="near">Halls Around You</h2>

<br><br>
<p class="pra">The Halls and the ball room are the best option to deals with your range</p>
<p class="pra">and comfortable for your function</p>
<br><br>
<div class="loo">
<?php 
 include_once('connection.php');
 $sel_query= "SELECT * from hall ";
    $sel = mysqli_query($con, $sel_query);
    while($row = mysqli_fetch_assoc($sel))
   {
    ?>
    

 <div id="boxx">
  <img class="IG" src="images/<?php echo $row['h_image'];  ?>" width="100%" height="300px" />
  <br><br>

  <p class="pa"><?php echo $row['h_name'];  ?></p>
<br/><br/>
      <a href="hall1.php?id=<?php echo $row['h_id']; ?>" class="bkn">Book now</a>

</div>


<?php
}
?>
</div>



<div class="main22" >
<h2 class="near"></h2>
<br><br>

<!-- 
<p class="pra">The Halls and the ball room are the best option to deals with your range</p>
<p class="pra">and comfortable for your function</p>
<br><br>

<div class="cd">
    <div class="card6">
       
        <div class="card__content">
          <p class="card__title">Details</p>
          <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
            <br>
            <a href="hall1.php" class="bkn">Book now</a>
        </div>
      </div>



      <div class="card7">
  
        <div class="card__content">
          <p class="card__title">Details</p>
          <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <br>
          <a href="hall1.php" class="bkn">Book now</a>
        </div>
      </div>




      <div class="card8">
  
        <div class="card__content">
          <p class="card__title">Details</p>
          <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <br>
          <a href="hall1.php" class="bkn">Book now</a>
        </div>
      </div>
</div>





</div>



</div>

</div> -->




<br>
   
 <br><br>
 <!--start of footer-->
 <?php
 include("footer.php");
 ?>
<!--end of footer-->
</body>
</html>