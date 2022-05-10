<?php
session_start();
$a=$_SESSION['username'];
if($a!="killedarpackers"){
    echo "<script>location='index.php'</script>";
}
    include('connect.php');
    if(isset($_GET['counting_id']))
      {
        $id=$_GET['counting_id'];
        $query1=mysqli_query($conn,"DELETE FROM `counting` WHERE `counting_id`='$id'");
        if($query1)
          {
            echo "<script>alert('data deleted succesfully')</script>";
            header("Location:viewcounting.php");
          }
      }
?>