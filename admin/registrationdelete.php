<?php
session_start();
$a=$_SESSION['username'];
if($a!="ayurvedaeducationconsultancy"){
     echo "<script>location='registration.php'</script>";
}
    include('connect.php');
    if(isset($_GET['reg_id']))
      {
        $id=$_GET['reg_id'];
        $query1=mysqli_query($conn,"DELETE FROM `registration` WHERE `reg_id`='$id'");
        if($query1)
          {
            echo "<script>alert('Data deleted succesfully')</script>";
            header("Location:registration.php");
          }
      }
?>      