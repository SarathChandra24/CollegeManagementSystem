<table class="table table-striped table-bordered"><thead>
<tr><th><a href="#">StudentID</a></th><!--<th><a href="#">Grade</a></th>--><th><a href="#">Mid-I</a></th><th><a href="#">Mid-II</a></th><th><a href="#">Average</a></th><th><a href="#">End Sem Grade</a></th></tr></thead>
<?php 

$id = "";
include_once("php_includes/db_conx.php");
$acadyear = $_GET['acadyear'];
$course_id = $_GET['course_id'];

//$mid=$_GET['mid'];
$section=$_GET['section'];
$branch=$_GET['branch'];
echo $branch;
$conn=mysqli_connect("localhost","root","","cms");;
//$db=mysqli_select_db("cms",$conn);
/*switch ($branch) {case 'cse':$query = "SELECT sid  FROM student_enrolls_course WHERE acadyear='".$acadyear."' and course_id='".$course_id."'";
		# code...
		break;
	case 'ece':
		break;
	case 'eee':


		break;
	case 'mech':
		# code...
		break;
	case 'it':
		break;

}*/
switch ($branch) {
       case 'cse':$tableid='cse_ma';
        
           break;
       case 'ece':$tableid='ece_ma';
        
           break;
        case 'eee':$tableid='eee_ma';
        
           break;
        case 'mech':$tableid='mech_ma';
        
           break;
        case 'it':$tableid='it';
        
           }

$query = "SELECT c.sid,c.mid_1,c.mid_2,c.avg,c.end_sem_marks/*,c.f1,c.f2,c.f3,c.f4,c.f5,c.f6,c.f7,c.f8,c.f9*/ FROM student s,".$table_id." c WHERE s.batch='".$acadyear."'and c.sid=s.sid and c.subject_id='".$course_id."'";
$rs = mysqli_query($conn,$query)or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $rs");
$count=mysqli_num_rows($rs);
$id=array();
$i=0;
while($row = mysqli_fetch_ASSOC($rs)) {
  
//  $sid=$row['sid'];
  /*$mid1[]=$row['mid_1'];
  $mid2[]=$row['mid_2'];
  $avg[]=$row['avg'];
  $esm[]=$row['end_sem_marks'];
  /*$f1=$row['f1'];
 $f2=$row['f2'];
$f3=$row['f3'];
$f4=$row['f4'];
$f5=$row['f5'];
$f6=$row['f6'];
$f7=$row['f7'];
$f8=$row['f8'];
$f9=$row['f9'];
*/?>






<div id="w1" class="grid-view">




   
<?php 
?>
<tbody>

<tr>

<form name="form1" method="post" action="">
<td><input type="hidden" name="sid[$i]" value="<?php $row['sid'] ?>"><?php echo $row['sid'] ?></td>
<td><input name="mid1[$i]" type="text" id="mid1" value="<?php echo $row['mid_1']; ?>"></td>
<td><input name="mid2[$i]" type="text" id="mid2" value="<?php echo $row['mid_2']; ?>"></td>
<td><input name="avg[$i]" type="text" id="avg" value="<?php echo $row['avg']; ?>"></td>
<td><input name="esm[$i]" type="text" id="esm" value="<?php echo $row['end_sem_marks']; ?>"></td>
<input type="hidden" name="count" id="count" value="<?php echo $count?>" >
<!--<td><input name="f1[]" type="text" id="name" value="<?php echo $f1; ?>"></td>
<td><input name="f2[]" type="text" id="name" value="<?php echo $f2; ?>"></td>
<td><input name="f3[]" type="text" id="name" value="<?php echo $f3; ?>"></td>	
<td><input name="f4[]" type="text" id="name" value="<?php echo $f4; ?>"></td>
<td><input name="f5[]" type="text" id="name" value="<?php echo $f5; ?>"></td>
<td><input name="f6[]" type="text" id="name" value="<?php echo $f6; ?>"></td>
<td><input name="f7[]" type="text" id="name" value="<?php echo $f7; ?>"></td>
<td><input name="f8[]" type="text" id="name" value="<?php echo $f8; ?>"></td>
<td><input name="f9[]" type="text" id="name" value="<?php echo $f9; ?>"></td>
-->
<!--<td><span style="word-wrap:break-word;" id="<?php echo $id ?>"></span></td>-->
</div>
</tbody></table></div></div>



<?php ++$i;}?><input type="submit" name="Submit" value="Submit" ></form>
<?php
	  $conn=mysqli_connect("localhost","root","","cms");;
$i=0;
if(isset($_POST['Submit']))
{
while($i<$count){
	$id=$_POST['sid'][$i];
	$mid1=$_POST['mid1'][$i];
	$mid2=$_POST['mid2'][$i];
	$avg=$_POST['avg'][$i];
	$esm=$_POST['esm'][$i];
	echo $id,$mid1,$mid2;
$sql1="UPDATE cse_ma SET mid_1='".$mid1."', mid_2='".$mid2."', avg='".$avg."',end_sem_marks='".$esm."' WHERE ma_id='".$id[$i]."'";
$result1=mysqli_query($conn,$sql1)or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $rs");;

}}?>




<!--<input type="button" value="Submit" onclick="submitGrade();">-->

