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
$state='';
$mobile_number='';
$parents_number='';
$subject='';
$sub_subject='';
if(isset($_GET['reg_id'])){          
    $id=$_GET['reg_id'];
    $res=mysqli_query($conn,"SELECT * FROM `registration` WHERE `reg_id`='$id'");
    $row=mysqli_fetch_assoc($res);
    $name=$row['name'];
    $email=$row['email'];
    $state=$row['state'];
    $mobile_number=$row['mobile_number'];
    $parents_number=$row['parents_number'];
    $subject=$row['subject'];
    $sub_subject=$row['sub_subject'];
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $state=$_POST['state'];
    $mobile_number=$_POST['mobile_number'];
    $parents_number=$_POST['parents_number'];
    $subject=$_POST['subject'];
    $sub_subject=$_POST['sub_subject'];
    $query="UPDATE `registration` SET `name`='$name',`email`='$email',`mobile_number`='$mobile_number',`parents_number`='$parents_number',`subject`='$subject',`sub_subject`='$sub_subject' WHERE `reg_id`='$id'";
    mysqli_query($conn,$query);
	echo "<script>location='registration.php'</script>";
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
                        <li><span>Registration</span></li>
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
                </div><br>

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
                </div><br/>


                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>State :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="state" value="<?php echo $state?>"
                            class="form-control" />
                    </div>
                    <div class="col-md-2"></div>
                </div><br/>

           

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Mobile number :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="mobile_number" value="<?php echo $mobile_number?>"
                            class="form-control" />
                    </div>
                    <div class="col-md-2"></div>
                </div><br/>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label>Parents number :</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="parents_number" value="<?php echo $parents_number?>"
                            class="form-control" />
                    </div>
                    <div class="col-md-2"></div>
                </div><br/>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                    <label>
                        Select Subject
                         </label>
                    </div>
                    <div class="col-md-6">
                    <select class="mul-select form-control" name="subject">
                        <option value="prasooti & sthri-roga">B.A.M.S</option>
                        <option value="koumarbhritya">B.H.M.S</option>
                        <option value="kayachikitsa">B.D.S</option>
                        <option value="panchakarma">M.D</option>
                        <option value="shalya">M.S</option>
                        <option value="shalakya">PHARMACY</option>
                    </select> 
                    </div>
                    <div class="col-md-2"></div>
                </div><br/>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                    <label>
                        Select Subject
                        
                    </label>
                    
                    </div>
                    <div class="col-md-6">
                    <select class="mul-select form-control" multiple="true" name="sub_subject[]">
                        <option value="prasooti & sthri-roga">PRASOOTI & STRI-ROGA</option>
                        <option value="koumarbhritya">KOUMARBHRITYA</option>
                        <option value="kayachikitsa">KAYACHIKITSA</option>
                        <option value="panchakarma">PANCHAKARMA</option>
                        <option value="shalya">SHALYA</option>
                        <option value="shalakya">SHALAKYA</option>
                        <option value="swasthavaritta">SWASTHAVARITTA</option>
                        <option value="agadtantra">AGADTANTRA</option>
                        <option value="kriya shareera">KRIYA SHAREERA</option>
                        <option value="sharira rachana">SHARIRA RACHANA</option>
                        <option value="agada tantra">AGADA TANTRA</option>
                        <option value="dravya guna">DRAVYA GUNA</option>
                        <option value="rasa shastra">RASA SHASTRA</option>
                        <option value="manasa roga">MANASA ROGA</option>
                    </select>
                        
                    </div>
                    <div class="col-md-2"></div>
                </div><br/>

                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-lg m-1" name="submit">Submit</button>
                    <button type="reset" class="btn btn-warning  btn-lg m-1" name="submit">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $(".mul-select").select2({
        placeholder: "select Subject", //placeholder
        tags: true,
        tokenSeparators: ['/', ',', ';', " "]
    });
})
</script>

<?php include "footer.php"?>