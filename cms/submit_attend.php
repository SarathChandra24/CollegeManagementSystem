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
<li class="active"><a href="uploadattendance.php">Upload Attendance</a></li>
</ul>

    <section style="min-height: 573px;" class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><!--<i class="fa fa-th-list"></i>-->Upload Attendance</h3></div>
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
  $sid=$_POST['sid'][$i];
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
    case 'cse':$query = "UPDATE cse_ma SET f1 = '$f1',f2 = '$f2',f3 = '$f3',f4 = '$f4',f5 = '$f5',f6 = '$f6',f7 = '$f7',f8 = '$f8',f9 = '$f9' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'ece':$query = "UPDATE ece_ma SSET f1 = '$f1',f2 = '$f2',f3 = '$f3',f4 = '$f4',f5 = '$f5',f6 = '$f6',f7 = '$f7',f8 = '$f8',f9 = '$f9' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'eee':$query = "UPDATE eee_ma SET f1 = '$f1',f2 = '$f2',f3 = '$f3',f4 = '$f4',f5 = '$f5',f6 = '$f6',f7 = '$f7',f8 = '$f8',f9 = '$f9' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'it':$query = "UPDATE it_ma SET f1 = '$f1',f2 = '$f2',f3 = '$f3',f4 = '$f4',f5 = '$f5',f6 = '$f6',f7 = '$f7',f8 = '$f8',f9 = '$f9' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    case 'mech':$query = "UPDATE mech_ma SET f1 = '$f1',f2 = '$f2',f3 = '$f3',f4 = '$f4',f5 = '$f5',f6 = '$f6',f7 = '$f7',f8 = '$f8',f9 = '$f9' WHERE sid = '$sid' LIMIT 1";
      # code...
      break;
    
    
  }
  
  mysqli_query($conn,$query);
  echo "$sid <em>  Updated!</em><br>";
  ++$i;
}
?>
