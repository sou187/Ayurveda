<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="killedarpackers"){
//     echo "<script>location='index.php'</script>";
// }
?>
<?php include "header.php"?>
<?php include "connect.php"?>
<?php 
$id='';
$name='';
$email='';
$message='';
if(isset($_GET['contact_id'])){          
    $id=$_GET['contact_id'];
    $res=mysqli_query($conn,"SELECT * FROM `contactus` WHERE `contact_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $name=$row['name'];
    $email=$row['email'];
    $message=$row['message'];
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $query="UPDATE `contactus` SET `name`='$name',`email`='$email',`message`='$message' WHERE `contact_id`='$id'";
    mysqli_query($conn,$query);
	echo "<script>location='contactus.php'</script>";
}
?>
<div class="main-content">
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Service Content</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">

                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-angle-down"></i>
                    </h4>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="container py-5">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Name :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="name" value="<?php echo $name?>"
                            class="form-control" />
                    </div>
                    <div class="col-md-2"></div>
                </div><br />
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Email :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" value="<?php echo $email?>"
                            class="form-control" />
                    </div>
                    <div class="col-md-2"></div>
                </div><br />

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Message:</label>
                    </div>
                    <div class="col-md-6">
                        <textarea name="message" class="form-control"><?php echo $message?></textarea>
                    </div>
                    <div class="col-md-2"></div>
                </div><br />

                <!-- <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <input type="hidden" name="old_serviceimg" value="<?php echo $old_serviceimg?>" class="form-control"/>
                            </div>
                        </div> -->

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg m-1" name="submit">Submit</button>
                    <button type="reset" class="btn btn-warning  btn-lg m-1" name="submit">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"?>