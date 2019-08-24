<?php
$conn=mysqli_connect("localhost","root","","cms");;
            //$db=mysqli_select_db("cms",$conn);
            

$cid = $_GET['cid'];
$status = $_GET['status'];
$sql = "UPDATE student_certificate_requests1 SET status = '".$status."' WHERE  c_id = '".$cid."'";
               
	    //echo "UPDATE student_certificate_requests SET status = '".$status."' WHERE  c_id = '".$cid."'";

            //mysqli_select_db('test_db');
            
		$retval = mysqli_query( $conn,$sql );
            

		if($retval){
			
		header("location:admin_request_certificate.php");
		///	echo "updated";

		}else{

			//echo "error";

		}

?>
