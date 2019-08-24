<?php

include_once("php_includes/common_frame_f.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_faculty_column.php");
?>

<script src="Manage%20Students_files/bootstrapx-clickover.js"></script>    </head>
    <body style="min-height: 1161px;" class="skin-black  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    	
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="http://localhost/cms1/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="http://localhost/cms1/index.php?r=student%2Fdefault%2Findex">Faculty</a></li>
<li class="active">Upload Grade</li>
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
<table class="table table-striped table-bordered"><thead>
	
<tr><th>Acadyear</th><th>
Season
</th>
<th>Course ID</th></tr>

<tr id="w1-filters" class="filters"><!--<td>&nbsp;</td>--><!--<td><input class="form-control" name="StuMasterSearch[stu_unique_id]" type="text"></td>--><!--<td><input class="form-control" name="StuMasterSearch[stu_first_name]" type="text"></td><td><input class="form-control" name="StuMasterSearch[stu_last_name]" type="text"></td>-->

<td>

<span id="acadyear"></span>
</td>

<td><select class="form-control" id="season" name="season" onchange="getCourses();">
<option value="" disabled selected>Choose Season</option>
<option value="Autumn">Autumn</option>
<option value="Winter">Winter</option>

</select></td>

 `

<td><select class="form-control" name="courseId" id="courseId" onchange="getStudents();">


</select></td></tr>
</thead>



<tbody id="student_list">

</tbody></table>
</div>	</div>   	</div>
      </div>
    </div>
</div>
    </section>

   <?php include_once("php_includes/footer.php"); ?>

	
      
    <script src="Manage%20Students_files/yii.js"></script>
<script src="Manage%20Students_files/jquery_002.js"></script>
<script>
var d = new Date();
document.getElementById("acadyear").innerHTML = d.getFullYear();
</script>    
    
    </body></html>
