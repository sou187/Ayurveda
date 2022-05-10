<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="killedarpackers"){
//     echo "<script>location='index.php'</script>";
// }
?>
<?php include "connect.php"?>
<?php 
$id='';
$portfolio_img='';
if(isset($_GET['portfolio_id'])){          
    $id=$_GET['portfolio_id'];
    $res=mysqli_query($conn,"SELECT * FROM `portfolio` WHERE `portfolio_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $portfolio_img=$row['portfolio_img'];
}
if(isset($_POST['add_image'])){
    $pro_img_name = $_FILES["portfolio_img"]["name"];
    $pro_temp_name = $_FILES["portfolio_img"]["tmp_name"];
    $portfolio_img ="images1/upload/".$pro_img_name;
    move_uploaded_file($pro_temp_name,$portfolio_img);
    if($pro_img_name==''){
        $portfolio_img=$row['portfolio_img'];
    }
    if($id>0){
        $query="UPDATE `portfolio` SET `portfolio_img`='$portfolio_img' WHERE `portfolio_id`='$id'";
    }
    else{
        $query="INSERT INTO `portfolio`(`portfolio_id`, `portfolio_img`) VALUES ('','$portfolio_img')";
    }
    mysqli_query($conn,$query);
	echo "<script>location='portfolio.php'</script>";
}
?>

<?php include "header.php"?>
<!-- main content area start -->
<div class="main-content">

    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>About-Us Content</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i>
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
        <div class="row">

            <!-- Dark table start -->
            <div class="col-12 mt-5">

                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?php echo $portfolio_img?>" class="img-fluid"/>
                                </div>
                                <div class="col-md-6">
                                    <label>Upload Image</label>
                                    <input type="file" name="portfolio_img" class="form-control" />
                                </div>
                                <div class="col-md-2 pt-4">
                                    <button type="submit" name="add_image" class="btn btn-success">Add Image</button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </form>
                        <br/><br/>

                        <div class="data-tables datatable-dark">
                            <table class="table table-bordered table-striped" id="aboutcontent" class="text-center">
                                <thead class="text-capitalize">
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            include ("connect.php");
                                            $q="SELECT * FROM `portfolio`";
                                            $confirm=mysqli_query($conn,$q);
                                            $i=1;
                                            while($out=mysqli_fetch_array($confirm)){ 
                                            ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><img src="<?php echo $out['portfolio_img'];?>" class="img-fluid service-img">
                                        </td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a
                                                        href="portfolio.php?portfolio_id=<?php echo $out['portfolio_id']?>"><i
                                                            class="fa fa-2x fa-edit"></i></a></li>
                                                <li><a onClick="javascript: return confirm('Please confirm deletion');"
                                                        href="portfoliodelete.php?portfolio_id=<?php echo $out['portfolio_id']?>"><i
                                                            class="fa-2x ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php
                                            $i++;
                                            }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dark table end -->
        </div>
    </div>
</div>
<!-- main content area end -->


<!-- page container area end -->
<!-- offset area start -->
<div class="offset-area">
    <div class="offset-close"><i class="ti-close"></i></div>
    <ul class="nav offset-menu-tab">
        <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
        <li><a data-toggle="tab" href="#settings">Settings</a></li>
    </ul>
    <div class="offset-content tab-content">
        <div id="activity" class="tab-pane fade in show active">
            <div class="recent-activity">
                <div class="timeline-task">
                    <div class="icon bg1">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Rashed sent you an email</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg2">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Added</h4>
                        <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg2">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="tm-title">
                        <h4>You missed you Password!</h4>
                        <span class="time"><i class="ti-time"></i>09:20 Am</span>
                    </div>
                </div>
                <div class="timeline-task">
                    <div class="icon bg3">
                        <i class="fa fa-bomb"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Member waiting for you Attention</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg3">
                        <i class="ti-signal"></i>
                    </div>
                    <div class="tm-title">
                        <h4>You Added Kaji Patha few minutes ago</h4>
                        <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg1">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Ratul Hamba sent you an email</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Hello sir , where are you, i am egerly waiting for you.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg2">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Rashed sent you an email</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg2">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Rashed sent you an email</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                </div>
                <div class="timeline-task">
                    <div class="icon bg3">
                        <i class="fa fa-bomb"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Rashed sent you an email</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
                <div class="timeline-task">
                    <div class="icon bg3">
                        <i class="ti-signal"></i>
                    </div>
                    <div class="tm-title">
                        <h4>Rashed sent you an email</h4>
                        <span class="time"><i class="ti-time"></i>09:35</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                    </p>
                </div>
            </div>
        </div>
        <div id="settings" class="tab-pane fade">
            <div class="offset-settings">
                <h4>General Settings</h4>
                <div class="settings-list">
                    <div class="s-settings">
                        <div class="s-sw-title">
                            <h5>Notifications</h5>
                            <div class="s-swtich">
                                <input type="checkbox" id="switch1" />
                                <label for="switch1">Toggle</label>
                            </div>
                        </div>
                        <p>Keep it 'On' When you want to get all the notification.</p>
                    </div>
                    <div class="s-settings">
                        <div class="s-sw-title">
                            <h5>Show recent activity</h5>
                            <div class="s-swtich">
                                <input type="checkbox" id="switch2" />
                                <label for="switch2">Toggle</label>
                            </div>
                        </div>
                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </div>
                    <div class="s-settings">
                        <div class="s-sw-title">
                            <h5>Show your emails</h5>
                            <div class="s-swtich">
                                <input type="checkbox" id="switch3" />
                                <label for="switch3">Toggle</label>
                            </div>
                        </div>
                        <p>Show email so that easily find you.</p>
                    </div>
                    <div class="s-settings">
                        <div class="s-sw-title">
                            <h5>Show Task statistics</h5>
                            <div class="s-swtich">
                                <input type="checkbox" id="switch4" />
                                <label for="switch4">Toggle</label>
                            </div>
                        </div>
                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </div>
                    <div class="s-settings">
                        <div class="s-sw-title">
                            <h5>Notifications</h5>
                            <div class="s-swtich">
                                <input type="checkbox" id="switch5" />
                                <label for="switch5">Toggle</label>
                            </div>
                        </div>
                        <p>Use checkboxes when looking for yes or no answers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offset area end -->

<?php include "footer.php"?>