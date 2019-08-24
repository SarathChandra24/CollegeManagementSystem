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
(SELECT subject_id FROM semester_courses where sem_id=6) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM cse_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        break;
    case 'ece':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=6) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM ece_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        
        break;
    case 'eee':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=6) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM eee_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        
        break;
    case 'it':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=6) a
INNER JOIN (SELECT subject_id, mid_1,mid_2,avg,end_sem_marks FROM it_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        
        break;
    case 'mech':$strSQL = "SELECT a.subject_id, mid_1,mid_2,avg,end_sem_marks FROM 
(SELECT subject_id FROM semester_courses where sem_id=6) a
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

   
   
   if($batch=="2016-20"||$batch=="2017-21"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 321:
                                  $sbid="Compiler Design";
                                  break;
                        case 322:
                                $sbid="Web Technologies";
                                break;
                        case 323:
                                $sbid="Cryptography and Network Security";
                                break;
                        case 324:
                                $sbid="Open Elective-II";
                            break;
                        case 325:
                                $sbid="Professional Elective-I";
                                break;
                        case 326:
                                $sbid="Cryptography and Network Security Lab";
                                break;
                        case 327:
                                $sbid="Web Technologies Lab";
                                break;
                        case 328:
                                $sbid="Advanced English Communication Skills Lab";
                                break;
                            }break;
        case "ece":
                    switch($subject_id){
                        case 321:
                                  $sbid="Open Elective-II";
                                  break;
                        case 322:
                                $sbid="Professional Elective-I";
                                break;
                        case 323:
                                $sbid="Antennas and Wave Propagation";
                                break;
                        case 324:
                                $sbid="Microprocessors and Microcontrollers";
                            break;
                        case 325:
                                $sbid="Digital Signal Processing";
                                break;
                        case 326:
                                $sbid="Digital Signal Processing Lab";
                                break;
                        case 327:
                                $sbid="Microprocessors and Microcontrollers Lab";
                                break;
                        case 328:
                                $sbid="Advanced English Communication Skills Lab ";
                                break;
                            }break;
        case "eee":
                     switch($subject_id){
                        case 321:
                                  $sbid="Power Systems Analysis";
                                  break;
                        case 322:
                                $sbid="Power Electronics";
                                break;
                        case 323:
                                $sbid="Switch Gear and Protection";
                                break;
                        case 324:
                                $sbid="Open Elective-II";
                            break;
                        case 325:
                                $sbid="Professional Elective-I";
                                break;
                        case 326:
                                $sbid="Power Systems Lab";
                                break;
                        case 327:
                                $sbid="Power Electronics Lab";
                                break;
                        case 328:
                                $sbid="Advanced English Communication Skills Lab";
                                break;
                            }break;
        case "it":
                     switch($subject_id){
                        case 321:
                                  $sbid="Compiler Design";
                                  break;
                        case 322:
                                $sbid="Web Technologies";
                                break;
                        case 323:
                                $sbid="Cryptography and Network Security";
                                break;
                        case 324:
                                $sbid="Open Elective-II";
                            break;
                        case 325:
                                $sbid="Professional Elective-I";
                                break;
                        case 326:
                                $sbid="Cryptography and Network Security Lab";
                                break;
                        case 327:
                                $sbid="Web Technologies Lab";
                                break;
                        case 328:
                                $sbid="Advanced English Communication Skills Lab";
                                break;
                            }break;
        case "mech":
                     switch($subject_id){
                        case 321:
                                  $sbid="Thermal Engineering –II";
                                  break;
                        case 322:
                                $sbid="Design of Machine Members-II";
                                break;
                        case 323:
                                $sbid="Heat Transfer";
                                break;
                        case 324:
                                $sbid="Open Elective-II";
                            break;
                        case 325:
                                $sbid="Professional Elective-I";
                                break;
                        case 326:
                                $sbid="Heat Transfer Lab";
                                break;
                        case 327:
                                $sbid="CADD and MATLAB";
                                break;
                        case 328:
                                $sbid="Advanced English Communication Skills Lab";
                                break;
                            }break;                                                                                
                          }
                        }

else if($batch=="2018-22"||$batch=="2019-23"){
  
    switch($branch)
        {case "cse":
                   switch($subject_id){
                        case 321:
                                  $sbid="To Be Determined";
                                  break;
                        case 322:
                                $sbid="To Be Determined";
                                break;
                        case 323:
                                $sbid="To Be Determined";
                                break;
                        case 324:
                                $sbid="To Be Determined";
                            break;
                        case 325:
                                $sbid="To Be Determined";
                                break;
                        case 326:
                                $sbid="To Be Determined";
                                break;
                            }break;    
        case "ece":
                    switch($subject_id){
                        case 321:
                                  $sbid="To Be Determined";
                                  break;
                        case 322:
                                $sbid="To Be Determined";
                                break;
                        case 323:
                                $sbid="To Be Determined";
                                break;
                        case 324:
                                $sbid="To Be Determined";
                            break;
                        case 325:
                                $sbid="To Be Determined";
                                break;
                        case 326:
                                $sbid="To Be Determined";
                                break;
                        case 327:
                                $sbid="To Be Determined";
                                break;
                        case 328:
                                $sbid="To Be Determined";
                                break;        
                            }break;                    
        case "eee":
                    switch($subject_id){
                        case 321:
                                  $sbid="To Be Determined";
                                  break;
                        case 322:
                                $sbid="To Be Determined";
                                break;
                        case 323:
                                $sbid="To Be Determined";
                                break;
                        case 324:
                                $sbid="To Be Determined";
                            break;
                        case 325:
                                $sbid="To Be Determined";
                                break;
                        case 326:
                                $sbid="To Be Determined";
                                break;
                            }break;    
        case "it":
                    switch($subject_id){
                        case 321:
                                  $sbid="To Be Determined";
                                  break;
                        case 322:
                                $sbid="To Be Determined";
                                break;
                        case 323:
                                $sbid="To Be Determined";
                                break;
                        case 324:
                                $sbid="To Be Determined";
                            break;
                        case 325:
                                $sbid="To Be Determined";
                                break;
                        case 326:
                                $sbid="To Be Determined";
                                break;
                            }break;
        case "mech":
                    switch($subject_id){
                        case 321:
                                  $sbid="To Be Determined";
                                  break;
                        case 322:
                                $sbid="To Be Determined";
                                break;
                        case 323:
                                $sbid="To Be Determined";
                                break;
                        case 324:
                                $sbid="To Be Determined";
                            break;
                        case 325:
                                $sbid="To Be Determined";
                                break;
                        case 326:
                                $sbid="To Be Determined";
                                break;
                        case 327:
                                $sbid="To Be Determined";
                                break;      
                            }break;                             
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
