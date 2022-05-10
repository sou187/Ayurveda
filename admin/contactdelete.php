<?php
session_start();
$a=$_SESSION['username'];
if($a!="killedarpackers"){
    echo "<script>location='index.php'</script>";
}

    include('connect.php');
    if(isset($_GET['contact_id']))
      {
        $id=$_GET['contact_id'];
        $query1=mysqli_query($conn,"DELETE FROM `contactus` WHERE `contact_id`='$id'");
        if($query1)
          {
            echo "<script>alert('Data deleted succesfully')</script>";
            header("Location:contactus.php");
          }
      }
?>