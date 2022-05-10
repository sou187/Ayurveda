<?php
include("connect.php");
 session_start();
if(isset($_POST['login']))
{ 
$username=$_POST['username'];
$password=$_POST['password'];
$q="SELECT * FROM `login` WHERE `username`='$username' and `password`='$password'";
$result=mysqli_query($conn,$q);
if(mysqli_num_rows($result)==1){
	echo "<script>location='dashboard.php'</script>";
	$_SESSION['username']=$username;
 }
else{
	echo "<script>alert('you have entered incorrect password')</script>";
 }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayurveda Education Consultancy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/styles.css"/>
</head>

<body class="body-class">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="form-div">
                    <div class="img-div">
                        <i class="fa fa-5x fa-user"></i>
                    </div>
                    <br/>
                    <h1 class="text-center">Log-In</h1><br/>
                    <form class="form-horizontal" method="post" action="">
                        <input type="text" placeholder="Username" name="username" class="form-control m-3"/>
                        <input type="password" placeholder="Password" name="password" class="form-control m-3"/>
                        <button type="submit" name="login" class="btn btn-info btn-block m-3">Login</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>
</html>