<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall | Review</title>
<link rel="stylesheet" href="review.css">
    <link rel="shortcut icon" href="hall.png" type="image/x-icon">
</head>
<body>
    <center>
    <h1>Hall Management</h1>
    <h3>Review For Our Project</h3>
    <form action="#" method="POST">
        <h2>Review</h2>
        <br>
        <label for="">Name:</label>
        <br>
        <br>
        <input type="text" name="name" class="ip" placeholder="Name" required>
        <br>
        <br>
        <label for="">Review</label>
        <br>
        <br>
        <textarea name="reve" id="" cols="30" rows="5" class="ipp" placeholder="Review" required></textarea>
        <br>
        <br>
        <input type="submit" name="btn" class="button">
    </form>
</center>
    <?php 
require_once("cn.php");

if(isset($_POST["btn"]))
{
    $name=$_POST["name"];
    $email=$_POST["reve"];
   

    $query="INSERT INTO `review` ( `name`,  `review`) VALUES ( '".$name."','".$email."')";
$abc = mysqli_query($co,$query);


}

?>
</body>
</html>