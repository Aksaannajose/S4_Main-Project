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
          
<h1>WIPRO</h1>
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
              <a class="nav-link" href="form add.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title"> Add Job </span>
</li>
</a>

<li class="nav-item">
              <a class="nav-link" href="addCourse.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title"> Add Course </span>
</li>
</a>




        <li class="nav-item">
              <a class="nav-link" href="adding job 1.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Vacancy  </span>
            </li>
			</a>
        <!--    <li class="nav-item">
             <a class="nav-link" href="courses.php">
              <span class="menu-title">	Course </span>-->
	<!--		<div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href=""> user </a></li>
                  <li class="nav-item"> <a class="nav-link" href=""> admin </a></li>
			</li>
			</ul>
			</div>
			</a>-->
            <li class="nav-item">
              <a class="nav-link" href="apply 1.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title"> Job Details </span>
</li>
</a>


<li class="nav-item">
              <a class="nav-link" href="student details.php">
			  <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
			  <span class="menu-title"> Student Details </span>
</li>
</a>
        <!--       <li class="nav-item">
              <a class="nav-link" href="uploadfile.php">
			   <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Materials </span>
</li>
</a>-->
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
                <a class="nav-link" href="../logout.php">
				 <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                  <span class="menu-title">Log Out</span>
				  </a>
              </div>
            </li>
          </ul>
        </nav>
        
		
		
       
		<br>
		<br>
       <!--     <div class="d-xl-flex justify-content-between align-items-start">
			<br>
		<br>
		<br>
		<br>
	
           
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
				<br><br>
				<br><br>
				<html>
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder
    <title></title>  
</head>  -->
		
         
<?php
include("connection.php");

?>
		 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"  />
<meta http-equiv="X-UA-Compatible"content="width=device">
<meta name="viewport"  content="width=device">
<title>Add Job</title>
<link rel="stylesheet"  href="stylejob.css"  />
</head>
<body>

<div class="container">
<div class="apply_box">
<h1><font color=Black>Add Job<span class="title_small"></span></h1>
<br>
<form action="function.php" method="POST">
<div class="form_container">
<div class="form_control">
<label for="category">CATEGORY</label>
<input
id="category"
type="text"
name="category"
placeholder="Enter category" onchange="Validatecard();">
</div>
<span id="msg5" style="color:red;"></span>

<script>
function Validatecard()
{
    var val = document.getElementById('category').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg5').innerHTML="Enter   category";


           document.getElementById('category').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}

</script>

<div class="form_control">
<label for="occupationtitle">OCCUPATIONTITLE</label>
<input
id="occupationtitle"
type="text"
name="occupationtitle"
placeholder="Enter occupationtitle"onchange="Validate();" >

</div>
<span id="msg6" style="color:red;"></span>
<script>
function Validate()
{
    var val = document.getElementById('occupationtitle').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg6').innerHTML="Enter occupation first letter must capital";
           document.getElementById('occupationtitle').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}
</script>




<div class="form_control">
<label for="req_no_employees">REQ_NO_EMPLOYEES</label>
<input
type="text"
id="req_no_employees"
name="req_no_employees"
placeholder="Enter required no of employees" onchange="Validaterno();">

</div>
<span id="msg8" style="color:red;"></span>

<script>
function Validaterno()
{
    var val = document.getElementById('req_no_employees').value;

    if (!val.match(/^[0-9]{10}$/))
    {
        document.getElementById('msg8').innerHTML=" without using negative numbers";


           document.getElementById('msg8').value = "";
        return false;
    }
document.getElementById('msg8').innerHTML=" ";
    return true;
}

</script>


<div class="form_control">
<label for="salaries">SALARIES</label>
<input
type="text"
id="salaries"
name="salaries"
placeholder="Enter  salaries" onchange="Validaterno();">
</div>
<span id="msg9" style="color:red;"></span>

<script>
function Validaterno()
{
    var val = document.getElementById('salaries').value;

    if (!val.match(/^[0-9]{10}$/))
    {
        document.getElementById('ms9').innerHTML="Only Numbers are allowed ";


           document.getElementById('msg9').value = "";
        return false;
    }
document.getElementById('msg9').innerHTML=" ";
    return true;
}

</script>

<div class="form_control">
<label for="qualification_workexperience">QUALIFICATION_WORKEXPERIENCE</label>
<input
id="qualification_workexperience"
type="text"
name="qualification_workexperience"
placeholder="Enter  qualification workexperience" onchange="Validate();" >
</div
<span id="msg10" style="color:red;"></span>

<script>
function Validate()
{
    var val = document.getElementById('qualification_workexperience').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/))
    {
        document.getElementById('msg10').innerHTML="Start with a Capital letter & Only alphabets  are allowed";
           document.getElementById('nme').value = "";
        return false;
    }
document.getElementById('msg10').innerHTML=" ";
    return true;
}
</script>

<br><br>
<div class="form_control">
<label for="prefered sex">PREFEREDSEX</label>
<select id="preferedsex"  type="text" name="preferedsex"  required/>
<option value="">Select Job Role</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Other">Other</option>
</select>
</div>


<div class="form_control">
<label for="sector_vacancy">SECTOR_VACANCY</label>
<input
type="text"
id="sector_vacancy"
name="sector_vacancy"
 placeholder="Enter  vacancy" onchange="Validateno();">
</div>
<span id="msg11" style="color:red;"></span>

<script>
function Validaterwno()
{
    var val = document.getElementById('sector_vacancy').value;

    if (!val.match(/^[0-9]{2}$/))
    {
        document.getElementById('msg11').innerHTML="Only Numbers are allowed ";


           document.getElementById('msg11').value = "";
        return false;
    }
document.getElementById('msg11').innerHTML=" ";
    return true;
}

</script>
</div>
<br><br>
<div class="button_container">
<button type="submit" name="submit">Add</button>
</div>
</form>

</body>
</html>
