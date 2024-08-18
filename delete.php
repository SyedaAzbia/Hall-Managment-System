<?php
require_once("connection.php");
if(isset($_GET["id"]))
{
$id = $_GET["id"];
$query = "delete from hall where h_id='".$id."'";
$sel = mysqli_query($con, $query);
if($sel)
{
       header("Location:datatable.php");
      //  echo "Delete Data Successfully";
}
else {
        echo "Error";
}
}

?>