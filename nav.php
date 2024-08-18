<!--Start of nav-->
<nav class="navbar">
      <!-- Sidebar -->
      <div class="sidebar" id="sidebar">
    <h2>Halls | Management</h2>
    <br><br>
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a>
   
    <a href="booking.php">Booking</a>
    <a href="about.php" >About</a>
    <a href="contact.php" >Contact</a>
  
                  <?php
                  if(isset($_SESSION["role"]))
                  {
                  $role = $_SESSION["role"];
                  if($role == 0)
                  {
                     
                    echo '<a href="upload.php" >Upload your hall</a>';
                    echo '<a href="datatable.php" >Your Halls</a>';
                    echo '<a class="nav-link" href="logout.php">Logout</a>';
                  }
                  else if($role == 2)
                  {
                     
                    echo '<a href="upload.php" >Upload your hall</a>';
                   
                  }
                }
                  ?>
                
    
    </div>
        <a class="openbtn" onclick="openNav()"><img src="images/menu.png" alt=""></a>
      <div class="jj"><a href="index.php"><img src="images/build.png" alt="Hotel" > </a></div>
      <div class="nav-img">
        <button class="nav-bnt" >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
          <?php

                  
if(isset($_SESSION["user"]))

{

echo '<span><a class="nav-link" href="logout.php">Logout</a></span>';
}
else {
  ?>
 <span><a href="Forms.php">Signup</a></span>
<?php }
?>
        </button>
      </div>
    </nav>
    <!--end of nav-->
    <!--javascript-->
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
  