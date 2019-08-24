<?php
include_once("php_includes/check_login_status.php");
include_once("php_includes/common_frame_f.php");

include_once("php_includes/include_faculty_column.php");
?>
<script src="js/app.js
"></script>
<script src="Manage%20Students_files/bootstrapx-clickover.js"></script>    </head>
    <body style="min-height: 1161px;" class="skin-black  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
      
  
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="http://localhost/cms1/index.php?r=student%2Fdefault%2Findex">Faculty</a></li>
<li class="active">Upload Grade</li>
</ul>

    <section style="min-height: 573px;" class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><!--<i class="fa fa-th-list"></i>-->Upload Grade</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
  
  <!--<div class="col-xs-4 left-padding">
    <a class="btn btn-block btn-primary" href="http://localhost/cms1/index.php?r=export-data%2Fexport-excel&amp;model=app%5Cmodules%5Cstudent%5Cmodels%5CStuMasterSearch" target="_blank">EXCEL</a>   </div> -->
  </div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
  <div class="stu-master-index">
    <div id="w0">     <div id="w1" class="grid-view">
<?php
$conn=mysqli_connect("localhost","root","","cms");;
 
$size = count($_POST['sid']);
 
$i = 0;
while ($i < $size) {
  $branch=$_POST['branch'][$i];
  $f1 = $_POST['f1'][$i];
  $f2 = $_POST['f2'][$i];
  $f3 = $_POST['f3'][$i];
  $f4 = $_POST['f4'][$i];
  $f5 = $_POST['f5'][$i];
  $f6 = $_POST['f6'][$i];
  $f7 = $_POST['f7'][$i];
  $f8 = $_POST['f8'][$i];
  $f9 = $_POST['f9'][$i];
  switch ($branch) {
    case 'cse':$query = "UPDATE cse_ma SET mid_1 = '$mid1',mid_2 = '$mid2',avg = '$avg',end_sem_marks='$esm' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'ece':$query = "UPDATE ece_ma SET mid_1 = '$mid1',mid_2 = '$mid2',avg = '$avg',end_sem_marks='$esm' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'eee':$query = "UPDATE eee_ma SET mid_1 = '$mid1',mid_2 = '$mid2',avg = '$avg',end_sem_marks='$esm' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'it':$query = "UPDATE it_ma SET mid_1 = '$mid1',mid_2 = '$mid2',avg = '$avg',end_sem_marks='$esm' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'mech':$query = "UPDATE mech_ma SET mid_1 = '$mid1',mid_2 = '$mid2',avg = '$avg',end_sem_marks='$esm' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    
    
  }
  
  mysqli_query($conn,$query);
  echo "$sid <em>  Updated!</em><br>";
  ++$i;
}
?>
<?php
$conn=mysqli_connect("localhost","root","","cms");;
$table_id='';
//mysql_select_db("students") or die("Unable to select database");
 $acadyear=$_GET['acadyear'];
 $course_id=$_GET['course_id'];
 $branch=$_GET['branch'];
 $section=$_GET['section'];
switch ($branch) {
       case 'cse':$query = "SELECT s.branch, c.sid,c.mid_1,c.mid_2,c.avg,c.end_sem_marks/*,c.f1,c.f2,c.f3,c.f4,c.f5,c.f6,c.f7,c.f8,c.f9*/ FROM student s,cse_ma c   WHERE s.batch='".$acadyear."'and c.sid=s.sid and c.subject_id='".$course_id."'";
        
           break;
       case 'ece':$query = "SELECT s.branch, c.sid,c.mid_1,c.mid_2,c.avg,c.end_sem_marks/*,c.f1,c.f2,c.f3,c.f4,c.f5,c.f6,c.f7,c.f8,c.f9*/ FROM student s,ece_ma c   WHERE s.batch='".$acadyear."'and c.sid=s.sid and c.subject_id='".$course_id."'";
           break;
        case 'eee':$query = "SELECT s.branch, c.sid,c.mid_1,c.mid_2,c.avg,c.end_sem_marks/*,c.f1,c.f2,c.f3,c.f4,c.f5,c.f6,c.f7,c.f8,c.f9*/ FROM student s,eee_ma c   WHERE s.batch='".$acadyear."'and c.sid=s.sid and c.subject_id='".$course_id."'";
        
           break;
        case 'mech':$query = "SELECT s.branch, c.sid,c.mid_1,c.mid_2,c.avg,c.end_sem_marks/*,c.f1,c.f2,c.f3,c.f4,c.f5,c.f6,c.f7,c.f8,c.f9*/ FROM student s,mech_ma c   WHERE s.batch='".$acadyear."'and c.sid=s.sid and c.subject_id='".$course_id."'";
           break;
        case 'it':$query = "SELECT s.branch, c.sid,c.mid_1,c.mid_2,c.avg,c.end_sem_marks/*,c.f1,c.f2,c.f3,c.f4,c.f5,c.f6,c.f7,c.f8,c.f9*/ FROM student s,it_ma c   WHERE s.batch='".$acadyear."'and c.sid=s.sid and c.subject_id='".$course_id."'";
        break;

        
           }


$result = mysqli_query($conn,$query) or die($query."<br/><br/>".mysqli_error($conn));
 
$i = 0;
 
echo '<table class="table table-striped table-bordered">';
echo '<thead>';
echo '<th>ROLL NO</th>';
echo '<th>MID-I</th>';
echo '<th>MID-II</th>';
echo '<th>AVG</th>';
echo '<th>END SEM GRADE</th>';
echo '</thead>';
 
echo "<form name='form_update' method='post' action='2.php'>\n";
while ($students = mysqli_fetch_array($result)) {
	echo '<tr id="w1-filters" class="filters">';
	echo "<td>{$students['sid']}<input type='hidden' name='sid[$i]' value='{$students['sid']}' /></td>";
  echo "<input type='hidden' name='branch[$i]' value='{$students['branch']}' />";
  
	echo "<td><CENTER><input type='text' size='5' name='mid1[$i]' value='{$students['mid_1']}' /></td>";
	echo "<td><CENTER><input type='text' size='5' name='mid2[$i]' value='{$students['mid_2']}' /></td>";
	echo "<td><CENTER><input type='text' size='5' name='avg[$i]' value='{$students['avg']}' /></td>";
	echo "<td><CENTER><input type='text' size='5' name='esm[$i]' value='{$students['end_sem_marks']}' /></td>";
	echo '</tr>';
	++$i;
}
echo '<tr>';
echo "<td><input type='submit' value='submit' /></td>";
echo '</tr>';
echo "</form>";
echo '</table>';
?>