<?php
include_once("php_includes/check_login_status.php");

if($log_userType=='faculty')
{
include_once("php_includes/common_frame_f.php");
include_once("php_includes/include_faculty_column.php");
}
else
 header ('location: index.php');
?>



<script src="js/app.js
"></script>
<script type="text/javascript">
	function getCourses(){	

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').value;

	var season = document.getElementById('season').value;
	var branch = document.getElementById('branch').value;
	var id = document.getElementById('id').innerHTML;

	var xml = new XMLHttpRequest();
	
	//alert("Hello2");

	//alert("getCourses.php?acadyear="+ acadyear +"&season="+season+"&fid=" +id);	

	xml.onreadystatechange = function getInfo(){

	//alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){

	//alert("Hello3");
		
	var response = xml.responseText;

	//alert("Response" + response);	

	document.getElementById("courseId").innerHTML=response;
	
	}
	
	};

	xml.open("GET","getCourses.php?acadyear="+ acadyear +"&season="+season+"&fid="+id+"&branch="+branch,true);
	
	xml.send();
	
}

function getStudents(){	

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').value;

	var course_id = document.getElementById('courseId').value;
	var branch=document.getElementById('branch').value;	
	//var mid=document.getElementById('mid').value;
	var section=document.getElementById('section').value;
	

	
	document.getElementById('abc').href="1.php?acadyear="+ acadyear +"&course_id="+course_id+"&branch="+branch+"&section="+section;
	
}





function changeGrade(str){

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').value;

	var course_id = document.getElementById('courseId').value;
	
	var grade = document.getElementById(str + "g").value;

	var sid = str;

	var courseId = document.getElementById("courseId").value;

	var xml = new XMLHttpRequest();
	
	//alert("Hello2");

	//alert("getStudents.php?acadyear="+ acadyear +"&course_id="+course_id);	

	xml.onreadystatechange = function getInfo(){

	//alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){

	var rrr = parseInt(xml.responseText);

        if(rrr==1){
	//alert(rrr);
	document.getElementById(sid).innerHTML="Grade changed";		
	
	document.getElementById(sid).style.color = "green";
	
	}else{

	document.getElementById(sid).innerHTML="You have already changed grade to this student";

	document.getElementById(sid).style.color = "red";	
	
	
	}
	}
	
	};

	xml.open("GET","change_grade.php?sid="+ sid +"&grade="+grade + "&cid=" + courseId,true);
	xml.send();
	
}









function submitGrade(str){

	//alert("Hello");

	var acadyear = document.getElementById('acadyear').value;

	var course_id = document.getElementById('courseId').value;
	
	var grade = document.getElementById(str + "g").value;

	var sid = str;

	var courseId = document.getElementById("courseId").value;

	var xml = new XMLHttpRequest();
	
	//alert("Hello2");

	//alert("getStudents.php?acadyear="+ acadyear +"&course_id="+course_id);	

	xml.onreadystatechange = function getInfo(){

	//alert("xml.readyState:"+xml.readyState+" xml.status:"+xml.status);

	if(xml.readyState == 4 && xml.status == 200){

	var rrr = parseInt(xml.responseText);

	if(rrr==1){
	
	document.getElementById(sid).innerHTML="Grade uploaded";		
	
	document.getElementById(sid).style.color = "green";
	
	}else{

	
	document.getElementById(sid).innerHTML="Already graded";

	document.getElementById(sid).style.color = "red";	
	
	
	}
	}
	
	};

	xml.open("GET","submit_grade.php?sid="+ sid +"&grade="+grade + "&cid=" + courseId,true);
	xml.send();
	
}



</script>


<script src="Manage%20Students_files/bootstrapx-clickover.js"></script>    </head>
    <body style="min-height: 1161px;" class="skin-black  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    	
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="faculty.php">Faculty</a></li>
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
Semester
</th>
<th>Branch</th>
<th>Section</th>
<th>Subject Name</th>
<th></th></tr>

<tr id="w1-filters" class="filters"><!--<td>&nbsp;</td>--><!--<td><input class="form-control" name="StuMasterSearch[stu_unique_id]" type="text"></td>--><!--<td><input class="form-control" name="StuMasterSearch[stu_first_name]" type="text"></td><td><input class="form-control" name="StuMasterSearch[stu_last_name]" type="text"></td>-->

<td>
<select class="form-control" id="acadyear" name="acadyear">
	<option value="" disabled selected>Choose Batch</option>
	<option value="2016-20">2016-20</option>
	<option value="2017-21">2017-21</option>
	<option value="2018-22">2018-22</option>
	<option value="2019-23">2019-23</option>
</select>
<!--<span id="acadyear"></span>-->
</td>

<td><select class="form-control" id="season" name="season" >
<option value="" disabled selected>Choose Semester</option>
<option value=1>I-I</option>
<option value=2>I-II</option>
<option value=3>II-I</option>
<option value=4>II-II</option>
<option value=5>III-I</option>
<option value=6>III-II</option>
<option value=7>IV-I</option>
<option value=8>IV-II</option>

</select></td>
<!--<td><select class="form-control" name="mid" id="mid">
	<option value="" disabled selected>choose mid </option>
	<option value="mid_1">mid-1</option>
</select>-->




 
<td><select class="form-control" name="branch" id=branch onchange="getCourses();">
	<option value="" disabled selected>Choose Branch</option>
	<option value="cse">CSE</option>
	<option value="ece">ECE</option>
	<option value="eee">EEE</option>
	<option value="mech">MECH</option>
	<option value="it">IT</option>
<td><select class="form-control" name="section" id="section">
	<option value="" disabled selected>Choose Section </option>
	<option value="A">A Section</option>
	<option value="B">B Section</option>
	<option value="">No Division</option>
</select></td>
	<td><select class="form-control" name="courseId" id="courseId" onchange="getStudents();">

<td><a href="#" id="abc"><button>SUBMIT</button></td>
</select></td>
</select></td>
</tr>
</thead>



<tbody id="student_list">


</tbody></table>
</div>	</div>   	</div>
      </div>
    </div>
</div>
    </section>

   <?php 
    include_once("php_includes/footer.php"); ?>

	
      
    <script src="Manage%20Students_files/yii.js"></script>
<script src="Manage%20Students_files/jquery_002.js"></script>
<script>
//var d = new Date();
//document.getElementById("acadyear").innerHTML = d.getFullYear();
</script>    
    
    </body></html>
