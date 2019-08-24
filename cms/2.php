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
<li><a href="faculty.php">Faculty</a></li>
<li class="active"><a href="UploadGrade.php">Upload Grade</a></li>
</ul>

    <section style="min-height: 573px;" class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><!--<i class="fa fa-th-list"></i>-->Upload Grade</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	
	<!--<div class="col-xs-4 left-padding">
		<a class="btn btn-block btn-primary" href="http://localhost/cms1/index.php?r=export-data%2Fexport-excel&amp;model=app%5Cmodules%5Cstudent%5Cmodels%5CStuMasterSearch" target="_blank">EXCEL</a>		</div> -->
  </div>
</div>

<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
	<div class="stu-master-index">
		<div id="w0">	    <div id="w1" class="grid-view">
<?php
$conn=mysqli_connect("localhost","root","","cms");;
 
$size = count($_POST['sid']);
 
$i = 0;
while ($i < $size) {
	$branch=$_POST['branch'][$i];
	$course_id=$_POST['course_id'][$i];
	$sid = $_POST['sid'][$i];
	$mid1= $_POST['mid1'][$i];
 	$mid2 = $_POST['mid2'][$i];
 	$avg = $_POST['avg'][$i];
 	$esm = $_POST['esm'][$i];
 	switch ($branch) {
 		case 'cse':$query = "UPDATE cse_ma SET mid_1 = '$mid1',mid_2 = '$mid2',avg = '$avg',end_sem_marks='$esm' WHERE subject_id='$course_id' AND sid = '$sid' LIMIT 1";
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
	
	mysqli_query($conn,$query) or die($query."<br/><br/>".mysqli_error($conn));
	echo "$sid <em>  Updated!</em><br>";
	++$i;
}
?>