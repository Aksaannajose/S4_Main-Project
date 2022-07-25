<?php
include("connection.php");
if(isset($_POST[  'submit' ]))
	{
		$category=$_POST[  'category' ];
		$occupationtitle=$_POST[  'occupationtitle' ];
		$req_no_employees=$_POST[  'req_no_employees' ];
		$salaries=$_POST[  'salaries' ];
		$qualification_workexperience=$_POST[  'qualification_workexperience' ];
		$preferedsex=$_POST[  'preferedsex' ];
		$sector_vacancy=$_POST[  'sector_vacancy' ];

		$result=mysqli_query($conn,"INSERT  into  tbljob  (`CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`,`QUALIFICATION_WORKEXPERIENCE`,`PREFEREDSEX`, `SECTOR_VACANCY`)values('$category','$occupationtitle','$req_no_employees','$salaries','$qualification_workexperience','$preferedsex','$sector_vacancy')");
		
		if($result)
		{
			echo '<script> alert("Sucess")</script>';
		}
		else
		{
			echo "failed";
		}
	}
?>
