<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SignUp</title>
    <link rel="stylesheet" href="css/forms.css">
    <link rel="shortcut icon" href="images/hall.png" type="image/x-icon">
</head>
<body>
       <!--Start of nav-->
       <?php
       error_reporting(0);
       session_start();
       ob_start();
 include("nav.php");
 ?>
     <!--end of javascript-->
<br>
<br><br><br><br><br>
    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form"  method="POST">
                        <input class="flip-card__input" name="email" required placeholder="Email1" type="email">
                        <input class="flip-card__input" name="password" required  placeholder="Password1" type="password">
                         <input class="buttone" type="submit"  value="Let`s go!"  name="loginbtn" class="btn btn-warning"/> 

                       
                     </form>
                  </div>









                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form class="flip-card__form"  method="POST">
                        <input class="flip-card__input" required  placeholder="Name" type="name" name="name" >
                        <input class="flip-card__input" name="contact" required  placeholder="Contact" type="text">
                        <input class="flip-card__input" name="email" required placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" required placeholder="Password" type="password" >
                          <input class="buttone" type="submit"  value="submit"  name="btn" class="btn btn-warning"/> 
             

                          <?php 
require_once("connection.php");
if(isset($_POST["btn"]))
{
    $name=$_POST["name"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $password=$_POST["password"];

$query="insert into singup values
 ('','".$name."','".$contact."','".$email."','".$password."','1')";

$abc = mysqli_query($con,$query);
if($abc)
{
    $_SESSION["user"] = $email;
    header("Location:index.php"); 
}
else {
    echo "Error";
}

}

if(isset($_POST["loginbtn"]))
{

    $email=$_POST["email"];
    $password=$_POST["password"];

$query="select * from singup where email='".$email."' and password='".$password."'";

$abc = mysqli_query($con,$query);
$rows = mysqli_num_rows($abc);
while($row = mysqli_fetch_assoc($abc))
// {
//   if ($row['role'] === 0)
//   {
//     $_SESSION["user"] = $email;
//     header("Location:datatable.php"); 
//   }
//   else  if ($row['role'] === 1)
//   {
//     $_SESSION["user"] = $email;
//     header("Location:index.php"); 
//   }
//   else if ($row['role'] === 2)
//   {
//     $_SESSION["user"] = $email;
//     header("Location:booking.php"); 
//   }
//   else
//   {
//     echo "Error";
//   }
// }

{

   $_SESSION["user"] = $email;
   
            if ($row['role'] === '0') {

               $_SESSION["user"] = $email;
               $_SESSION["role"] = $row["role"];
               $_SESSION["id"] = $row["id"];
               
               header("Location:datatable.php"); 
            }
             else if ($row['role'] === '1') 
            {
               $_SESSION["id"] = $row["id"];
                 $_SESSION1["edit"] = $email;
                 $_SESSION["role"] = $row['role'];
               header("Location:index.php"); 
            }
             else if ($row['role'] === '2') {
                $_SESSION2["user2"] = $email;
                $_SESSION["id"] = $row["id"];
                $_SESSION["role"] = $row["role"];
               header("Location:upload.php");
            } 
         
    else {
        echo "User not found";
    }

}


?>

                     </form>










                          
                  </div>
               </div>
            </label>
        </div>   
   </div>

   <br><br><br><br><br><br><br><br><br><br><br><br><br>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   
<br><br><br>
  <!--start of footer-->
  <?php
 include("footer.php");
 ob_flush();
}
 ?>
  <!--end of footer-->
</body>
</html>