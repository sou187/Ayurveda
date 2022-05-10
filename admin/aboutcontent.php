<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="killedarpackers"){
//     echo "<script>location='index.php'</script>";
// }
?>
<?php
include "connect.php";

$id='';
$about_content='';
$about_img='';
if(isset($_GET['about_id'])){          
    $id=$_GET['about_id'];
    $res=mysqli_query($conn,"SELECT * FROM `about` WHERE `about_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $about_content=$row['about_content'];
    $about_img=$row['about_img'];
}
if(isset($_POST['about_submit'])){
    $about_content=$_POST['about_content'];
    $pro_img_name = $_FILES["about_img"]["name"];
    $pro_temp_name = $_FILES["about_img"]["tmp_name"];
    $about_img ="images1/upload/".$pro_img_name;
    move_uploaded_file($pro_temp_name,$about_img);
    if($pro_img_name==''){
        $about_img=$row['about_img'];
    }
    if($id>0){
        $query="UPDATE `about` SET `about_img`='$about_img',`about_content`='$about_content' WHERE `about_id`='$id'";
    }
    else{
        $query="INSERT INTO `about`(`about_id`, `about_img`, `about_content`) VALUES ('','$about_img','$about_content')";
    }
    mysqli_query($conn,$query);
	echo "<script>location='viewaboutcontent.php'</script>";
}
?>




<?php include "header.php"?>
<div class="main-content">
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
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
    <div class="main-content-inner pt-5">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <label>About Image</label>
            <input type="file" name="about_img" class="form-control"/><br/>
            <label>Content</label>
            <textarea rows="6" class="form-control" name="about_content"><?php echo $about_content?></textarea><br/>
            <button type="submit" name="about_submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
<!-- page title area end -->

<?php include "footer.php"?>