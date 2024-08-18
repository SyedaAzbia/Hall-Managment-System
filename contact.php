<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall | Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="images/hall.png" type="image/x-icon">
</head>
<body>

      <!--Start of nav-->
      <?php
 include("nav.php");
 ?>
<br><br><br>
<h1 class="us">Contact Us:</h1>
<br>
<p class="v"> Don't hesitate to ask anything related to halls just send us message.
    <br> we will contact you as soon as possible.</p>
<br>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28928.00493446113!2d67.065437!3d25.000095000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb34119e8d20e11%3A0x3586f7b7c73d4baf!2sAptech%20Learning%20Surjani%20Center!5e0!3m2!1sen!2sus!4v1694592117829!5m2!1sen!2sus" width="89%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
<br><br><br>
<div class="cok">
    <div class="form-container">
        <form class="form" method="POST">
           <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="email" name="name" required="">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required="">
          </div>
          <div class="form-group">
            <label for="textarea">How Can We Help You?</label>
            <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
          </div>

              <input type="submit" value="send" name="c_btn"  class="form-submit-btn"/>
              
        
        </form>
    <?php
require_once("connection.php");

        
if(isset($_POST["c_btn"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["textarea"];
    
$query="INSERT INTO `contact` (`c_id`, `name`, `email`, `message`) VALUES ('', '".$name."','".$email."','".$message."')";
$abc=mysqli_query($con,$query);


}
    ?>


      </div>
      <div class="fh">
      <h2>Email:</h2><br><br>
      <p>Hallmanagement@gmail.com</p><br><br>
      <h2>Contact:</h2><br><br>
      <p>+92144217738</p><br><br>
      <h2>Address:</h2><br><br>
      <p>Aptech surjani center</p><br><br>

      </div>
</div>
<br><br>
 <!--start of footer-->
 <?php
 include("footer.php");
 ?>
<!--end of footer-->
</body>
</html>