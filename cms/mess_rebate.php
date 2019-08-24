<?php
$conn=mysqli_connect("localhost","root","","cms");;
//$db=mysqli_select_db("cms",$conn);
	
?>
<?php
$conn=mysqli_connect("localhost","root","","cms");;
//$db=mysqli_select_db("cms",$conn);
//session_start();	
	$date1=$_GET["startDate"];
		$Days=$_GET["days"];
		$Desc=$_GET["description"];
	$strSQL = "INSERT INTO `cms`.`rebate` ( `from_date`, `no_of_days`,`description`) VALUES ('".$date1."', '".$Days."','".$Desc."') ";
	$rs = mysqli_query($conn,$strSQL);
	
		if($rs)
	{
	
		
		
	
		header('Location: index.php?controller=student&action=mess_module');
	}
		else
		echo "failed" .mysqli_error();
	
?>
