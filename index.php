
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halls | Management</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/hall.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap"rel="stylesheet'>
</head>
<body>
   <?php
   session_start();
include("nav.php");
   
   ?>
  
  <!--javascript work-->
  <script>
    const nav = document.querySelector('.navbar')
    window.addEventListener('scroll', fixNav)
    
                  function fixNav() {
                    if(window.scrollY > 90) {
      nav.classList.add('active')
    } else {
      nav.classList.remove('active')
    }
    }
    </script>
    <script>
      function openNav() {
       document.getElementById("sidebar").style.width = "250px";
       document.getElementById("sidebar").style.height = "550px";
       document.getElementById("sidebar").style.border= "2px solid #013f46";

}
      function closeNav() {
       document.getElementById("sidebar").style.width = "0";
       document.getElementById("sidebar").style.border = "0";
}
</script>
        <!-- for animations -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            offset: 200,
            duration: 1000,
        });
        </script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <!--end of animations-->
      <!--end of javascript work-->

      <!--Start of background-->
      <div class="containeer">
       <video autoplay loop muted plays-inline class="background-clip">
              <source src="images/g.mp4" type="video/mp4">
          </video>
          <div class="contentss" data-aos="fade-up">
              <h1>Halls  Management</h1>
              <br><br>
              <p>"Book Your Self AnyWhere Around The Globe."</p>
              <br>
              <br>
              <a href="booking.php">Book  Now</a>
          </div>
      </div>
      <!--end of background-->
      <br>
      <div class="book" data-aos="fade-in">
        <h1>We Are The Best Bookers</h1>
        <br>
        <div class="pr">
          <br>
        <p>Welcome to our Halls booking website! Whether you're planning a relaxing
          <p>marriage, a ceremony, or a spontaneous functions , we've got you covered
             </p>Our Halls booking platform is designed to make your day saemless and enjoyable.</p>
            </div>
       </div>
      <!--start of animated divs-->
<div class="travel" >
  <div class="trans" data-aos="fade-up">
    <br><br>
    <h1>Booking In Resorts :</h1>
    <br><br>
    <h2>
     Book yourSelf At The luxury resort.
    </h2>
    <br>
    <a href="booking.php">Book Now</a>
  </div>
  <div class="trans1" data-aos="fade-right">
    <img src="images/r1.jpg" alt="" class="igm">
  </div>
</div>

<div class="travel" >
  <div class="trans1"  data-aos="fade-up">
    <img src="images/c10.jpg" alt="" class="igm">
  </div>
  <div class="trans"  data-aos="fade-right">
    <br>
    <h1>Booking In  Halls :</h1>
    <br><br>
    <h2>
      Book yourSelf Best Halls In World.
    </h2><br>
    <a href="booking.php">Book Now</a>
  </div>
</div>
<div class="travel" >
  <div class="trans"  data-aos="fade-up">
    <br><br>
    <h1>Upload Your Halls To Us :</h1>
    <br><br>
    <h2>
     you can now Upload your hall to our website
    </h2><br>
    <a href="upload.php">Upload Now</a>
  </div>
  <div class="trans1"  data-aos="fade-right">
    <img src="images/c5.jpg" alt="" class="igm">
  </div>
</div>
  <!--end of animated divs-->
  <br><br>    
  <!--start of slider-->

  
<?php
include("slider.php");
?>

<!--end of slider-->
<br><br>
  <!--Advertisment-->
  <div class="ad" >
   <div class="ad1" data-aos="fade-right">
     <h1>Discount 25%</h1>
     <br><br>
     <p>Get the 25% discount on the all Hotels.</p>
   </div>
   <div class="ad2" data-aos="fade-right">
     <p>Now Book the Best Hotels At Any Time Where You Want
     With The Discount of 25% Off
     Offer Will End Soon.</p>
     <br>
     <a href="booking.php">Book Now</a>
   </div>
  </div>
  <!--end of advertisment-->
  <br><br>
  
  <br><br> 
   
  <br><br>
 <!--start of footer-->
 <?php
 include("footer.php");
 ?>
<!--end of footer-->
</body>
</html>