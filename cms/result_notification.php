<?php
//echo "hello";
$conn=mysqli_connect("localhost","root","","cms");;
//$db=mysqli_select_db("cms",$conn);
$usr_typ="student";
$note="Results have been announced.";
$app="student_semresult.php";
	$strSQL1 = "INSERT INTO `cms`.`notification` ( `note`,`app`,`usr_typ`) VALUES ('".$note."','".$app."','".$usr_typ."') ";
	$rs1 = mysqli_query($strSQL1);	

?>