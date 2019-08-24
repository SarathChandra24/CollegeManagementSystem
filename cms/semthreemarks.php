<?php 

include_once("php_includes/common_frame_s.php");
include_once("php_includes/check_login_status.php");
include_once("php_includes/include_student_column.php");
$id = $_SESSION['userid'];

?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="student.php"><i class="fa fa-dashboard"></i>Home</a></li>
</ul>

    <section class="content">
        
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-th-list"></i>Select Semester</h3></div>
  <div class="col-xs-4"></div>
</div>

<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
    <form id="stu-master-form" action="/readyMadeCodestudent.php?r=student%2Fstu-master%2Fcreate" method="post">
<input type="hidden" name="_csrf" value="NHBnY0dyWktnPD8oLyEJHQxdBCkjNmonZ0hXAHEzKxplIg0GMUEbBQ==">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
     
<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
 <div class="col-xs-9 col-sm-4">
    <div class="form-group field-stuinfo-stu_unique_id">
<label class="control-label" for="stuinfo-stu_unique_id">Student ID</label><input type="text" id="id" class="form-control" name="id" value="<?php echo $id; ?>" readonly><div class="help-block"></div>
</div>    </div>
</div>
<div class="col-xs-12" style="padding-top: 10px;">
   <div class="box">
      <div class="box-body table-responsive">
    <div class="stu-master-index">
        <div id="w0">       <div id="w1" class="grid-view">
<table class="table table-striped table-bordered"><thead>
<tr><th>S.No</th><th>Subject</th><th>I Mid</th><th>II Mid</th><th>Average</th><th>End Sem Marks</th></tr>
</thead>

<tbody id="tbody">


<!--    save input here  -->

</tbody>

<?php
  
  $conn=mysqli_connect("localhost","root","","cms");;
  //$db=mysqli_select_db("cms",$conn);
  $url="";
  $sem_word="";
  $count=1;
  $sbid="";
?> 

<!-- SQL query goes here -->
<?php 

  //$rs = mysqli_query($conn,$strSQL)or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $rs");
 $counter=1;
 $branch="SELECT branch from student where sid='".$id."'";
$branch1=mysqli_query($conn,$branch)or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $branch");
while($row=mysqli_fetch_array($branch1))
$branch=$row['branch'];
switch ($branch) {
	case 'cse':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM cse_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
		break;
	case 'ece':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM ece_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
		
		break;
	case 'eee':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM eee_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
		
		break;
	case 'it':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM it_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
		
		break;
	case 'mech':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM mech_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
		
		break;
}

$rs = mysqli_query($conn,$strSQL)or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $rs");
$batch="SELECT batch from student where sid='".$id."'";
$batch1=mysqli_query($conn,$batch);
while($row=mysqli_fetch_array($batch1))
$batch=$row['batch'];

 while($row = mysqli_fetch_array($rs)) {
  $subject_id=$row['subject_id'];
  
  //$subject_id=$batch;

   
   if($batch=='2016-20'||$batch=='2017-21'){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 211:
                                  $sbid="Mathematics – IV";
                                  break;
                        case 212:
                                $sbid="Data Structures through C++ ";
                                break;
                        case 213:
                                $sbid="Mathematical Foundations of Computer Science ";
                                break;
                        case 214:
                                $sbid="Digital Logic Design ";
                            break;
                        case 215:
                                $sbid="Object Oriented Programming through Java ";
                                break;
                        case 216:
                                $sbid="Data Structures through C++ Lab ";
                                break;
                        case 217:
                                $sbid="IT Workshop";
                                break;
                        case 218:
                                $sbid="Object Oriented Programming through Java lab";
                                break;
                            }
                            break;
        case "ece":
                    switch($subject_id){
                        case 211:
                                  $sbid="Mathematics – IV";
                                  break;
                        case 212:
                                $sbid="Analog Electronics";
                                break;
                        case 213:
                                $sbid="Electrical Technology";
                                break;
                        case 214:
                                $sbid="Signals and Stochastic process";
                            break;
                        case 215:
                                $sbid="Network Analysis";
                                break;
                        case 216:
                                $sbid="Electronic Devices and Circuits Lab";
                                break;
                        case 217:
                                $sbid="Basic Stimulation Lab";
                                break;
                        case 218:
                                $sbid="Basic Electrical Engineering Lab";
                                break;
                            }
                            break;
        case "eee":
                    switch($subject_id){
                        case 211:
                                  $sbid="Mathematics-IV";
                                  break;
                        case 212:
                                $sbid="Electromagnetic Fields";
                                break;
                        case 213:
                                $sbid="Electrical Machines-I";
                                break;
                        case 214:
                                $sbid="Network Theory";
                            break;
                        case 215:
                                $sbid="Electrical Circuits";
                                break;
                        case 216:
                                $sbid="Electrical Machines Lab -I";
                                break;
                        case 217:
                                $sbid="Electronic Devices and Circuits Lab";
                                break;
                        case 218:
                                $sbid="Networks Lab";
                                break;
                            }
                            break;
        case "it":
                    switch($subject_id){
                        case 211:
                                  $sbid="Mathematics – IV";
                                  break;
                        case 212:
                                $sbid="Data Structures through C++ ";
                                break;
                        case 213:
                                $sbid="Mathematical Foundations of Computer Science ";
                                break;
                        case 214:
                                $sbid="Digital Logic Design ";
                            break;
                        case 215:
                                $sbid="Object Oriented Programming through Java ";
                                break;
                        case 216:
                                $sbid="Data Structures through C++ Lab ";
                                break;
                        case 217:
                                $sbid="IT Workshop";
                                break;
                        case 218:
                                $sbid="Object Oriented Programming through Java lab";
                                break;
                            }
                            break;
        case "mech":
                    switch($subject_id){
                        case 211:
                                  $sbid="Mathematics - IV ";
                                  break;
                        case 212:
                                $sbid="Thermodynamics";
                                break;
                        case 213:
                                $sbid="Kinematics of Machinery ";
                                break;
                        case 214:
                                $sbid="Metallurgy and Material Science ";
                            break;
                        case 215:    
                                $sbid="Mechanics of Solids ";
                                break;
                        case 216:
                                $sbid="Fuels and Lubricants Lab ";
                                break;
                        case 217:
                                $sbid="Mechanics of Solids Lab ";
                                break;
                        case 218:
                                $sbid="Metallurgy and Material Science Labs";
                                break;
                            }
                            break;

                          }
                        }


else if($batch=='2018-22'||$batch==
	'2019-23'){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 211:
                                $sbid="Analog and Digital Electronics";
                                  break;
                        case 212:
                                $sbid="Data Structures";
                                break;
                        case 213:
                                $sbid="Computer Oriented Statistical Methods";
                                break;
                        case 214:
                                $sbid="Computer Organization and Architecture";
                            break;
                        case 215:
                                $sbid="Object Oriented Programming using C++";
                                break;
                        case 216:
                                $sbid="Analog and Digital Electronics Lab";
                                break;
                        case 217:
                                $sbid="Data Structures Lab";
                                break;
                        case 218:
                                $sbid="IT Workshop Lab";
                                break;
                        case 219:
                                $sbid="C++ Programming Lab";
                                break;                              
                            }
                            break;
         case "ece":
                    switch($subject_id){
                        case 211:
                                $sbid="Electronic Devices and Circuits";
                                  break;
                        case 212:
                                $sbid="Network Analysis and Transmission Lines";
                                break;
                        case 213:
                                $sbid="Digital System Design";
                                break;
                        case 214:
                                $sbid="Signals and Systems";
                            break;
                        case 215:
                                $sbid="Probability Theory and Stochastic Processes";
                                break;
                        case 216:
                                $sbid="Electronic Devices and Circuits Lab";
                                break;
                        case 217:
                                $sbid="Digital System Design Lab";
                                break;
                        case 218:
                                $sbid="Basic Stimulation Lab";
                                break;       
                            }
                            break;
         case "eee":
                    switch($subject_id){
                        case 211:
                                $sbid="Engineering Mechanics";
                                  break;
                        case 212:
                                $sbid="Electrical Circuit Analysis";
                                break;
                        case 213:
                                $sbid="Analog Electronics";
                                break;
                        case 214:
                                $sbid="Electrical Machines-I";
                            break;
                        case 215:
                                $sbid="Electromagnetic Fields";
                                break;
                        case 216:
                                $sbid="Electrical Machines Lab-I";
                                break;
                        case 217:
                                $sbid="Analog Electronics Lab";
                                break;
                        case 218:
                                $sbid="Electrical Circuits Lab";
                                break;        
                            }
                            break;
         case "it":
                      switch($subject_id){
                        case 211:
                                $sbid="Analog and Digital Electronics";
                                  break;
                        case 212:
                                $sbid="Data Structures";
                                break;
                        case 213:
                                $sbid="Computer Oriented Statistical Methods";
                                break;
                        case 214:
                                $sbid="Computer Organization and Microprocessor";
                            break;
                        case 215:
                                $sbid="Object Oriented Programming using C++";
                                break;
                        case 216:
                                $sbid="Analog and Digital Electronics Lab";
                                break;
                        case 217:
                                $sbid="Data Structures Lab";
                                break;
                        case 218:
                                $sbid="IT Workshop and Microprocessor Lab";
                                break;
                        case 219:
                                $sbid="C++ Programming Lab";
                                break;       
                            }
                            break;
         case "mech":
                    switch($subject_id){
                        case 211:
                                $sbid="Probability and Statistics & Complex Variables";
                                  break;
                        case 212:
                                $sbid="Mechanics of Solids";
                                break;
                        case 213:
                                $sbid="Material Science and Metallurgy";
                                break;
                        case 214:
                                $sbid="Production Technology";
                            break;
                        case 215:
                                $sbid="Thermodynamics";
                                break;
                        case 216:
                                $sbid="Production Technology Lab";
                                break;
                        case 217:
                                $sbid="Machine Drawing Practice";
                                break;
                        case 218:
                                $sbid="Material Science and Mechanics of Solids Lab";
                                break;        
                            }
                            break;
                          }
                        }
                    
                 






  $mid_1= $row['mid_1'];
  $mid_2= $row['mid_2'];
  $avg=$row['avg'];
  $end_sem_marks = $row['end_sem_marks'];?>
  <tr id="w1-filters" class="filters">
    <td> <?php  echo $count++   ?></td>
    <td> <?php  echo $sbid   ?></td>
    <td><?php  echo $mid_1   ?><a/></td>
    <td><?php  echo $mid_2 ?></td>
    <td><?php  echo $avg   ?></td>
    <td><?php  echo $end_sem_marks   ?></td>
</tr>
<?php }
?>

<!--    save input here  -->

</tbody>
</table>
</div>  </div>
</div>
</div>
      </div>
      </form>
      </div>
    </div>
</div>
    </section>

    
<?php

include_once("php_includes/footer.php");

 ?>
</aside>

  
      </div>
    <script src="js/yii_002.js"></script>
<script src="js/jquery_002.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#w1').yiiGridView({"filterUrl":"student.php?r=student%2Fstu-master%2Findex","filterSelector":"#w1-filters input, #w1-filters select"});
jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
});</script>    
    
    </body></html>
