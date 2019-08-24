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
<br>
<table class="table table-striped table-bordered"><thead>
<tr><th>S.No</th><th>Subject</th><th>F1</th><th>F2</th><th>F3</th><th>F4</th><th>F5</th><th>F6</th><th>F7</th><th>F8</th>
<th>F9</th>
</tr>
</thead>

<tbody id="tbody">


<!--    save input here  -->

</tbody>

<?php
  
  $conn=mysqli_connect("localhost","root","","cms");;
  //$db=mysqli_select_db("cms",$conn);
  $url="";
  $sem_word="";
  $fn1=0;
  $fn2=0;
  $fn3=0;
  $fn4=0;
  $fn5=0;
  $fn6=0;
  $fn7=0;
  $fn8=0;
  $fn9=0;
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
    case 'cse':$strSQL = "SELECT a.subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM cse_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        break;
    case 'ece':$strSQL = "SELECT a.subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM ece_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        
        break;
    case 'eee':$strSQL = "SELECT a.subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM eee_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        
        break;
    case 'it':$strSQL = "SELECT a.subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM it_ma where sid='".$id."') b
ON a.subject_id =b.subject_id";
        
        break;
    case 'mech':$strSQL = "SELECT a.subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM 
(SELECT subject_id FROM semester_courses where sem_id=3) a
INNER JOIN (SELECT subject_id, f1,f2,f3,f4,f5,f6,f7,f8,f9 FROM mech_ma where sid='".$id."') b
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
                            }break;
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
                            }break;
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
                                $sbid="Electronic Circuits";
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
                            }break;
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
                            }break;
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
                            }break;

                          }
                        }


else if($batch=="2018-22"||$batch=="2019-23"){
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
                            }break;
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
                            }break;
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
                            }break;
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
                            }break;
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
                            }break;
                          }
                        }






  $f1= $row['f1'];
  $fn1=$fn1+$f1;
  $f2= $row['f2'];
  $fn2=$fn2+$f2;
  $f3= $row['f3'];
  $fn3=$fn3+$f3;
  $f4= $row['f4'];
  $fn4=$fn4+$f4;
  $f5= $row['f5'];
  $fn5=$fn5+$f5;
  $f6= $row['f6'];
  $fn6=$fn6+$f6;
  $f7= $row['f7'];
  $fn7=$fn7+$f7;
  $f8= $row['f8'];
  $fn8=$fn2+$f8;
  $f9= $row['f9'];
  $fn9=$fn9+$f9;?>
  <tr id="w1-filters" class="filters">
    <td> <?php  echo $count++   ?></td>
    <td> <?php  echo $sbid   ?></td>
    <td><?php  echo $f1  ?><a/></td>

    <td><?php  echo $f2 ?></td>
      <td><?php  echo $f3 ?></td>
        <td><?php  echo $f4 ?></td>
      <td><?php  echo $f5 ?></td>
        <td><?php  echo $f6 ?></td>
          <td><?php  echo $f7 ?></td>
    <td><?php  echo $f8   ?></td>
    <td><?php  echo $f9   ?></td>
</tr>
<?php }
?>
<tr>
    
    <th colspan="2"><h3>Average</h3></th>
    <td><?php $tsub=$count-1;
     echo $fn1/($tsub) ?></td>

<td><?php echo $fn2/($tsub)?></td>
<td><?php echo $fn3/($tsub)?></td>
<td><?php echo $fn4/($tsub)?></td>
<td><?php echo $fn5/($tsub)?></td>
<td><?php echo $fn6/($tsub)?></td>
<td><?php echo $fn7/($tsub)?></td>
<td><?php echo $fn8/($tsub)?></td>
<td><?php echo $fn9/($tsub)?></td>
</tr>
<!--    save input here  -->

</tbody>
</table>