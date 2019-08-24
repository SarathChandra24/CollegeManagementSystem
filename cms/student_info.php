<?php

include_once("php_includes/check_login_status.php");
if($log_userType=="admin")
{
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_admin_column.php");

include_once("php_includes/include_student_admission.php");
}
else 
{$message = "Invalid User:No entry for faculty and students";
echo "<script type='text/javascript'>alert('$message');</script>";
header ('location: index.php');
}




//echo $_SESSION['userid'];

 