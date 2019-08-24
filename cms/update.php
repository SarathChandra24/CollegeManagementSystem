
<?php
	  $conn=mysqli_connect("localhost","root","","cms");;
$count=$_POST['count'];
$i=0;
while($i<$count){
	$id=$_POST['sid'][$i];
	$mid1=$_POST['mid1'][$i];
	$mid2=$_POST['mid2'][$i];
	$avg=$_POST['avg'][$i];
	$esm=$_POST['esm'][$i];
	echo $id,$mid1,$mid2;
$sql1="UPDATE cse_ma SET mid_1='$mid1', mid_2='$mid2', avg='$avg',end_sem_marks='$esm' WHERE ma_id='$id[$i]'";
$result1=mysqli_query($conn,$sql1)or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $rs");;

}
 
?>
