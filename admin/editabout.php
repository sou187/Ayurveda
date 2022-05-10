<?php
session_start();
$a=$_SESSION['username'];
if($a!="killedarpackers"){
    echo "<script>location='index.php'</script>";
}

include "connect.php";

if(isset($_GET['about_id'])){          
    $id=$_GET['about_id'];
    $res=mysqli_query($conn,"SELECT * FROM `about` WHERE `about_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $content=$row['content'];
    $about_image=$row['about_image'];
}


if(isset($_POST['about_submit'])){
    $content=$_POST['content'];
    $pro_img_name = $_FILES["about_image"]["name"];
    $pro_temp_name = $_FILES["about_image"]["tmp_name"];
    $about_image ="images1/upload/".$pro_img_name;
    move_uploaded_file($pro_temp_name,$about_image);

    if($pro_img_name==''){
        $about_image=$row['about_image'];
    }
    $query="UPDATE `about` SET `about_image`='$about_image',`content`='$content' WHERE `about_id`=$id";
    // if($pro_img_name==''){
    //     $aboutimage=$row['aboutimage'];
    // }
    // if($id>0){
    //     $query="UPDATE `aboutcontent` SET `aboutdescription`='$aboutdescription',`aboutimage`='$aboutimage' WHERE `id`='$id'";
    // }
    // else{
    //     $query="INSERT INTO `aboutcontent`(`id`, `aboutdescription`, `aboutimage`) VALUES (' ','$aboutdescription','$aboutimage')";
    // }
    mysqli_query($conn,$query);
	echo "<script>alert('Data Updated successfully')</script>";
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
            <input type="file" name="about_image" class="form-control"/><br/>
            <label>Content</label>
            <textarea class="form-control" name="content"><?php echo $content?></textarea><br/>
            <button type="submit" name="about_submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
<!-- page title area end -->

<script>
$('.count').each(function() {

    $(this).prop('counter', 0).animate({

        counter: $(this).text()

    }, {

        duration: 4000,

        easing: 'swing',

        step: function(now) {

            $(this).text(Math.ceil(now));
        }
    });
});
</script>
<?php include "footer.php"?>