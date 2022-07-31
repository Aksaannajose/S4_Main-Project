
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Placement Portal</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          
<h1>Welcome Arya</h1>
<!--<p><?php echo $row['Company_name'];?><p>-->



          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
               
               
          <ul class="navbar-nav navbar-nav-right">
            <!-- <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Reports </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-word mr-2"></i>doc </a>
              </div>
            </li> -->
            <!-- <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Details </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-eye-outline mr-2"></i>View Details </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-pencil-outline mr-2"></i>Edit Details </a>
              </div>
            </li>
            <li class="nav-item nav-language dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-language-icon">
                  <i class="flag-icon flag-icon-us" title="us" id="us"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">English</p>
                </div> -->
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item" href="#">
                  <div class="nav-language-icon mr-2">
                    <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>
                  </div>
                  <div class="nav-language-text">
                    <p class="mb-1 text-black">English</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <div class="nav-language-icon mr-2">
                    <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
                  </div>
                  <div class="nav-language-text">
                    <p class="mb-1 text-black">French</p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <!-- <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face28.png" alt="image">
                </div>
                <div class="nav-profile-text">
                   <p class="mb-1 text-black">Admin</p>
                </div>
              </a> -->
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Inbox</span>
                    <span class="p-0">
                      <span class="badge badge-primary">4</span>
                      <i class="mdi mdi-email-open-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Profile</span>
                    <span class="p-0">
                      <span class="badge badge-success">1</span>
                      <i class="mdi mdi-account-outline ml-1"></i>
                    </span>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Settings</span>
                    <i class="mdi mdi-settings"></i>
                  </a>
                  <div role="separator" class="dropdown-divider"></div>
                  <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Lock Account</span>
                    <i class="mdi mdi-lock ml-1"></i>
                  </a>
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Log Out</span>
					  <h1> <center>  Welcome  </h1></center>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Mail</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Imperium solutions send you a mail</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">EY send you a mail</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Interview details updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new mail</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Vacancy </h6>
                    <p class="text-gray ellipsis mb-0"> hp TCS </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
                <a class="nav-link" href="">
              
				<div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href=""> user </a></li>
                  <li class="nav-item"> <a class="nav-link" href=""> admin </a></li>
                  
                  
                </ul>
              </div>
            </li>
				</a>
        



        <li class="nav-item">
              <a class="nav-link" href="profile.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title"> Profile  </span>
          </li>
</a>
<li class="nav-item">
              <a class="nav-link" href="adding job.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title"> Vacancy   </span>
          </li>
</a>
<!--<li class="nav-item">
              <a class="nav-link" href="vacancy 1.php">
              <span class="menu-title"> Vacancy   </span>
          </li>-->

<li class="nav-item">
              <a class="nav-link" href="apply.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title"> Job Apply  </span>
          </li>
</a>


		  
            <li class="nav-item">
             <a class="nav-link" href="course_stud.php">
			  <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">	Course </span>
			  </li>
			  </a>
			  
			  
		<!--	<div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href=""> user </a></li>
                  <li class="nav-item"> <a class="nav-link" href=""> admin </a></li>
			</li>
			</ul>
			</div>
			</a>-->
               <li class="nav-item">
              <a class="nav-link" href="tfiledowload.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Materials </span>

</li>
</a>





              
		<!--	  <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href=""> user </a></li>
                  <li class="nav-item"> <a class="nav-link" href=""> admin </a></li>
			  
			  
			  
			  
			  </a>
            </li>
			</ul>
			</div>
            <li class="nav-item">
              <a class="nav-link" href="">
               
                <span class="menu-title"></span>
              </a>
            </li>-->
           <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">form</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  
                </ul>
              </div>
            </li>
            
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-img">
                        <img src="assets/images/faces/face28.png" alt="image">
                      </div>
                      <div class="sidebar-profile-text">
                        <p class="mb-1">Admin</p>
                      </div>
                    </div>
                  </div>
                  <div class="badge badge-danger">4</div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>-->
            
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a class="nav-link" href="logout.php">
				 <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                  <span class="menu-title">Log Out</span>
				  </a>
              </div>
            </li>
          </ul>
        </nav>
        
		
	
   
     <!--       <div class="d-xl-flex justify-content-between align-items-start">
			
           
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
				
				<html>
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder 
    <title></title>  
</head>  -->
		
        
<!--
<?php
//include"connection.php";
//if(isset($_POST['submit']))

//{
//	include("connection.php");
  //$first_name = $_POST['first Name'];
  // $last_name = $_POST['last Name'];
   //$email=$_POST['email'];
 //  $job_role=$_POST['job Role'];
  //  $address=$_POST['address'];
  //  $city=$_POST['city'];
 // $pincode=$_POST['pincode'];
 // $date=$_POST['date'];
 // $upload=$_POST['upload'];


  // $res=mysqli_query($conn,"select * from job_table where id='$id'");
  //  $chk=mysqli_num_rows($res);
  //  if($chk==0)
    //{
  //   $query2="INSERT INTO `job_table`(`First Name`,`Last Name`,`Email`,`Job Role`,`Address`,`City`,`Pincode`,'D.O.B','Upload your CV')VALUES('$first_name','$last_name','$email','$job_role','$address','$city','$pincode','$date','$upload')";
//	$result=mysqli_query($conn,$query2) or die("ERROR".mysqli_error($conn))
	
	// echo "<script>alert('Application Saved Sucessfully');</script>";
	//}
	//else
	//{
	//	echo "<script>alert('Aplication Not Saved');</script>";
//}
//}
//?>

-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"  />
<meta http-equiv="X-UA-Compatible"content="width=device">
<meta name="viewport"  content="width=device">
<title>Job Application Form</title>
<link rel="stylesheet"  href="stylejob.css"  />
</head>
<body>

<div class="container">
<div class="apply_box">
<h1><font color=Black> Job Application<span class="title_small"></span>
</h1>
<form action="job app function.php" method="POST">
<div class="form_container">
<div class="form_control">
<label for="first_name">First Name</label>
<input
id="first_name"
type="first_name"
name="first_name"
placeholder="Enter First Name"required onchange="Validate();" >
</div>
<span id="msg1" style="color:red;"></span>
<script>
function Validate()
{
    var val = document.getElementById('first_name').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter";
           document.getElementById('first_name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>





<div class="form_control">
<label for="last_name">Last Name</label>
<input
id="last_name"
type="last_name"
name="last_name"
placeholder="Enter Last Name"required onchange="Validate();" >
</div>
<span id="msg2" style="color:red;"></span>
<script>
function Validate()
{
    var val = document.getElementById('last_name').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter";
           document.getElementById('last_name').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>


<div class="form_control">
<label for="email">Email</label>
<input
type="email"
id="email"
name="email"
placeholder="Enter Email"required onchange="Validate();" >
</div>
<span id="msg15" style="color:red;"></span>
<script>
function Validata()
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/))
    {
        document.getElementById('msg15').innerHTML="Enter a Valid Email";

    document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg15').innerHTML=" ";
    return true;
}

</script>



<div class="form_control">
<label for="job_role">Job Role</label>
<select id="job_role"  type="job_role" name="job_role"  required/>
<option value="">Select Job Role</option>
<option value="Fresher">Fresher</option>
<option value="Intern">Intern</option>
<option value="Student">Student</option>
<option value="React">React</option>
<option value="Node.js">Node.js</option>
<option value="Full Stack">Full Stack Developer</option>
<option value="Frontend">Frontend Developer</option>
</select>
</div>
<div  class="textarea_control">
<label for="address">Address</label>
<textarea
id="address"
type="address"
name="address"
row="4"
cols="50"
placeholder="Enter Address"required>
</textarea>

<div class="form_control">
<label for="city">City</label>
<input
id="city"
type="city"
name="city"
placeholder="Enter City"required/>
</div>

<div class="form_control">
<label for="pincode">Pincode</label>
<input
type="number"
id="pincode"
name="pincode"
placeholder="Enter Pincode"required/>
</div>

<div class="form_control">
<label for="date">D.O.B</label>
<input value="1999-05-24" type="date" id="date" name="date"/>
</div>

<div class="form_control">
<label for="upload">Upload your CV</label>
<input
type="file"
id="upload"
name="upload"required onchange="Validate();" >
</div>
<span id="msg19" style="color:red;"></span>

<script>
function Validate()
{
    var val = document.getElementById('upload').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg19').innerHTML="Only allowed .pdf";
           document.getElementById('upload').value = "";
        return false;
    }
document.getElementById('msg19').innerHTML=" ";
    return true;
}
</script>


</div>
<br><br>
<div class="button_container">
<button type="submit" name="submit">Apply Now</button>
</div>
</form>

</body>
</html>

	