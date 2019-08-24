<?php 

$id = "";
$tableid="";
//include_once("php_includes/db_conx.php");
include_once("php_includes/check_login_status.php");
$batch = $_GET['acadyear'];
$fid = $_GET['fid'];
$branch=$_GET['branch'];

//$fid="111";
//$acadyear="2015";
$season = $_GET['season'];
//$season='Autumn';
$conn=mysqli_connect("localhost","root","","cms");;
   
//$db=mysqli_select_db("cms",$conn);
if ($batch=='2016-20'||$batch=='2017-21') {
    $query = "Select subject_id from r16 where sem_id='".$season."'";
    # code...
}
else
switch ($branch) {
    case 'cse':$query = "Select subject_id from r18_cse where sem_id='".$season."'";
        # code...
        break;
    case 'ece':$query = "Select subject_id from r18_ece where sem_id='".$season."'";
        # code...
        break;
    case 'eee':$query = "Select subject_id from r18_eee where sem_id='".$season."'";
        # code...
        break;
    case 'it':$query = "Select subject_id from r18_it where sem_id='".$season."'";
        # code...
        break;
    case 'mech':$query = "Select subject_id from r18_mech where sem_id='".$season."'";
        # code...
        break;
    
    default:
        # code...
        break;
}

//$query = "Select course_id from semester natural join (SELECT * from course_faculty natural join semester_courses) as some WHERE fid='123' and acadyear='2015' and season='Autumn'";
$rs = mysqli_query($conn,$query);
?><select><option disabled selected>Subject</option>
<?php 
while($row = mysqli_fetch_array($rs)) {
  $subject_id = $row['subject_id'];
if($batch=="2016-20"||$batch=="2017-21"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Engineering Chemistry";
                                break;
                        case 113:
                                $sbid="Engineering Physics-I";
                                break;
                        case 114:
                                $sbid="Professional Communication in English";
                            break;
                        case 115:
                                $sbid="Engineering Mechanics";
                                break;
                        case 116:
                                $sbid="Basic Electrical and Electronics Engineering ";
                                break;
                        case 117:
                                $sbid="English Language Communications Skills Lab";
                                break;
                        case 118:
                                $sbid="Engineering Workshop";
                                break;

                            }
                            break;
        case "ece":
                    switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Engineering Chemistry";
                                break;
                        case 113:
                                $sbid="Engineering Physics-I";
                                break;
                        case 114:
                                $sbid="Professional Communication in English";
                            break;
                        case 115:
                                $sbid="Engineering Mechanics";
                                break;
                        case 116:
                                $sbid="Basic Electrical and Electronics Engineering ";
                                break;
                        case 117:
                                $sbid="English Language Communications Skills Lab";
                                break;
                        case 118:
                                $sbid="Engineering Workshop";
                                break;
                            }
                            break;
        case "eee":
                     switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Engineering Chemistry";
                                break;
                        case 113:
                                $sbid="Engineering Physics-I";
                                break;
                        case 114:
                                $sbid="Professional Communication in English";
                            break;
                        case 115:
                                $sbid="Engineering Mechanics";
                                break;
                        case 116:
                                $sbid="Basic Electrical and Electronics Engineering ";
                                break;
                        case 117:
                                $sbid="English Language Communications Skills Lab";
                                break;
                        case 118:
                                $sbid="Engineering Workshop";
                                break;
                            }
                            break;
        case "it":
                     switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Engineering Chemistry";
                                break;
                        case 113:
                                $sbid="Engineering Physics-I";
                                break;
                        case 114:
                                $sbid="Professional Communication in English";
                            break;
                        case 115:
                                $sbid="Engineering Mechanics";
                                break;
                        case 116:
                                $sbid="Basic Electrical and Electronics Engineering ";
                                break;
                        case 117:
                                $sbid="English Language Communications Skills Lab";
                                break;
                        case 118:
                                $sbid="Engineering Workshop";
                                break;
                            }
                            break;
        case "mech":
                     switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Mathematics-II";
                                break;
                        case 113:
                                $sbid="Engineering Physics";
                                break;
                        case 114:
                                $sbid="Computer Programming in C";
                            break;
                        case 115:
                                $sbid="Engineering Mechanics";
                                break;
                        case 116:
                                $sbid="Engineering Graphics";
                                break;
                        case 117:
                                $sbid="Engineering Physics Lab";
                                break;
                        case 118:
                                $sbid="Computer Programming in C Lab";
                                break;
                            }
                            break;                                                                                
                          }
                        }

else if($batch=="2018-22"||$batch=="2019-23"){
  
    switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Chemistry";
                                break;
                        case 113:
                                $sbid="Basic Electrical Engineering";
                                break;
                        case 114:
                                $sbid="Engineering Workshop";
                            break;
                        case 115:
                                $sbid="English";
                                break;
                        case 116:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 117:
                                $sbid="Engineering Language and Communication Skills Lab";
                                break;
                        case 118:
                                $sbid="Basic Electrical Engineering lab";
                                break;
                            }
                            break;
        case "ece":
                    switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Applied Physics";
                                break;
                        case 113:
                                $sbid="Programming for problem solving";
                                break;
                        case 114:
                                $sbid="Engineering Graphics";
                            break;
                        case 115:
                                $sbid="Applied Physics Lab";
                                break;
                        case 116:
                                $sbid="Programming for problem solving Lab";
                                break;
                            }
                            break;                    
        case "eee":
                    switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Chemistry";
                                break;
                        case 113:
                                $sbid="Basic Electrical Engineering";
                                break;
                        case 114:
                                $sbid="Engineering Workshop";
                            break;
                        case 115:
                                $sbid="English";
                                break;
                        case 116:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 117:
                                $sbid="Engineering Language and Communication Skills Lab";
                                break;
                        case 118:
                                $sbid="Basic Electrical Engineering lab";
                                break;
                            }
                            break;    
        case "it":
                    switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Chemistry";
                                break;
                        case 113:
                                $sbid="Basic Electrical Engineering";
                                break;
                        case 114:
                                $sbid="Engineering Workshop";
                            break;
                        case 115:
                                $sbid="English";
                                break;
                        case 116:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 117:
                                $sbid="Engineering Language and Communication Skills Lab";
                                break;
                        case 118:
                                $sbid="Basic Electrical Engineering lab";
                                break;
                            }
                            break;
        case "mech":
                    switch($subject_id){
                        case 111:
                                  $sbid="Mathematics-I";
                                  break;
                        case 112:
                                $sbid="Engineering Physics";
                                break;
                        case 113:
                                $sbid="Programming for problem solving";
                                break;
                        case 114:
                                $sbid="Engineering Graphics";
                            break;
                        case 115:
                                $sbid="Engineering Physics Lab";
                                break;
                        case 116:
                                $sbid="Programming for problem solving Lab";
                                break;
                            }
                            break;                             
                          }
                        }                         
   if($batch=="2016-20"||$batch=="2017-21"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 121:
                                  $sbid="Engineering Physics-II";
                                  break;
                        case 122:
                                $sbid="Mathematics-II";
                                break;
                        case 123:
                                $sbid="Mathematics-III";
                                break;
                        case 124:
                                $sbid="Computer Programming in C";
                                break;
                        case 125:
                                $sbid="Engineering Graphics";
                                break;
                        case 126:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 127:
                                $sbid="Engineering Physics Lab";
                                break;
                        case 128:
                                $sbid="Computer Programming in C Lab";
                                break;
                            }break;
        case "ece":
                    switch($subject_id){
                        case 121:
                                  $sbid="Engineering Physics-II";
                                  break;
                        case 122:
                                $sbid="Mathematics-II";
                                break;
                        case 123:
                                $sbid="Mathematics-III";
                                break;
                        case 124:
                                $sbid="Computer Programming in C";
                            break;
                        case 125:
                                $sbid="Engineering Graphics";
                                break;
                        case 126:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 127:
                                $sbid="Engineering Physics Lab";
                                break;
                        case 128:
                                $sbid="Computer Programming in C Lab";
                                break;
                            }break;
        case "eee":
                     switch($subject_id){
                        case 121:
                                  $sbid="Engineering Physics-II";
                                  break;
                        case 122:
                                $sbid="Mathematics-II";
                                break;
                        case 123:
                                $sbid="Mathematics-III";
                                break;
                        case 124:
                                $sbid="Computer Programming in C";
                            break;
                        case 125:
                                $sbid="Engineering Graphics";
                                break;
                        case 126:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 127:
                                $sbid="Engineering Physics Lab";
                                break;
                        case 128:
                                $sbid="Computer Programming in C Lab";
                                break;
                            }break;
        case "it":
                     switch($subject_id){
                        case 121:
                                  $sbid="Engineering Physics-II";
                                  break;
                        case 122:
                                $sbid="Mathematics-II";
                                break;
                        case 123:
                                $sbid="Mathematics-III";
                                break;
                        case 124:
                                $sbid="Computer Programming in C";
                            break;
                        case 125:
                                $sbid="Engineering Graphics";
                                break;
                        case 126:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 127:
                                $sbid="Engineering Physics Lab";
                                break;
                        case 128:
                                $sbid="Computer Programming in C Lab";
                                break;
                            }break;
        case "mech":
                     switch($subject_id){
                        case 121:
                                  $sbid="Applied Physics";
                                  break;
                        case 122:
                                $sbid="Engineering Chemistry";
                                break;
                        case 123:
                                $sbid="Mathematics-III";
                                break;
                        case 124:
                                $sbid="Professional Communication in English";
                            break;
                        case 125:
                                $sbid="Basic Electrical & Electronics Engineering";
                                break;
                        case 126:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 127:
                                $sbid="English Language Communication Skills Lab";
                                break;
                        case 128:
                                $sbid="Engineering Workshop";
                                break;
                            }break;                                                                                
                          }
                        }

else if($batch=="2018-22"||$batch=="2019-23"){
  
    switch($branch)
        {case "cse":
                   switch($subject_id){
                        case 121:
                                  $sbid="Mathematics-II";
                                  break;
                        case 122:
                                $sbid="Applied Physics";
                                break;
                        case 123:
                                $sbid="Programming for problem solving";
                                break;
                        case 124:
                                $sbid="Engineering Graphics";
                            break;
                        case 125:
                                $sbid="Applied Physics Lab";
                                break;
                        case 126:
                                $sbid="Programming for problem solving Lab";
                                break;
                            }break;    
        case "ece":switch($subject_id){
                        case 121:
                                $sbid="Mathematics-II";
                                  break;
                        case 122:
                                $sbid="Chemistry";
                                break;
                        case 123:
                                $sbid="Basic Electrical Engineering";
                                break;
                        case 124:
                                $sbid="Engineering Workshop";
                            break;
                        case 125:
                                $sbid="English";
                                break;
                        case 126:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 127:
                                $sbid="Engineering Language and Communication Skills Lab";
                                break;
                        case 128:
                                $sbid="Basic Electrical Engineering Lab";
                                break;        
                            }break;                    
        case "eee":
                    switch($subject_id){
                        case 121:
                                  $sbid="Mathematics-II";
                                  break;
                        case 122:
                                $sbid="Applied Physics";
                                break;
                        case 123:
                                $sbid="Programming for problem solving";
                                break;
                        case 124:
                                $sbid="Engineering Graphics";
                                break;
                        case 125:
                                $sbid="Applied Physics Lab";
                                break;
                        case 126:
                                $sbid="Programming for problem solving Lab";
                                break;
                            }break;    
        case "it":
                    switch($subject_id){
                        case 121:
                                  $sbid="Mathematics-II";
                                  break;
                        case 122:
                                $sbid="Applied Physics";
                                break;
                        case 123:
                                $sbid="Programming for problem solving";
                                break;
                        case 124:
                                $sbid="Engineering Graphics";
                                break;
                        case 125:
                                $sbid="Applied Physics Lab";
                                break;
                        case 126:
                                $sbid="Programming for problem solving Lab";
                                break;
                            }break;
        case "mech":
                    switch($subject_id){
                        case 121:
                                  $sbid="Mathematics-II";
                                  break;
                        case 122:
                                $sbid="Chemistry";
                                break;
                        case 123:
                                $sbid="Engineering Mechanics";
                                break;
                        case 124:
                                $sbid="Engineering Workshop";
                            break;
                        case 125:
                                $sbid="English";
                                break;
                        case 126:
                                $sbid="Engineering Chemistry Lab";
                                break;
                        case 127:
                                $sbid="Engineering Language and Communication Skills Lab";
                                break;
                            }break;                             
                          }
                        }                         
                 
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

if($batch=="2016-20"||$batch=="2017-21"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 221:
                                  $sbid="Computer Organization";
                                  break;
                        case 222:
                                $sbid="Database Management Systems";
                                break;
                        case 223:
                                $sbid="Operating Systems";
                                break;
                        case 224:
                                $sbid="Formal Languages and Automata Theory";
                            break;
                        case 225:
                                $sbid="Business Economics and Financial Analysis";
                                break;
                        case 226:
                                $sbid="Computer Organization Lab";
                                break;
                        case 227:
                                $sbid="Database Management Systems Lab";
                                break;
                        case 228:
                                $sbid="Operating Systems Lab";
                                break;
                            }break;
        case "ece":
                    switch($subject_id){
                        case 221:
                                  $sbid="Switching Theory and Logic Design";
                                  break;
                        case 222:
                                $sbid="Pulse and Digital Circuits";
                                break;
                        case 223:
                                $sbid="Control Systems";
                                break;
                        case 224:
                                $sbid="Analog Communications";
                            break;
                        case 225:
                                $sbid="Business Economics and Financial Analysis";
                                break;
                        case 226:
                                $sbid="Analog Communications Lab";
                                break;
                        case 227:
                                $sbid="Pulse and Digital Circuits Lab";
                                break;
                        case 228:
                                $sbid="Analog Electronics Lab";
                                break;
                            }break;
        case "eee":
                    switch($subject_id){
                        case 221:
                                  $sbid="Switching Theory & Logic Design";
                                  break;
                        case 222:
                                $sbid="Power Systems-I";
                                break;
                        case 223:
                                $sbid="Electrical Machines-II";
                                break;
                        case 224:
                                $sbid="Control Systems";
                            break;
                        case 225:
                                $sbid="Business Economics and Financial Analysis";
                                break;
                        case 226:
                                $sbid="Control Systems Lab";
                                break;        
                        case 227:
                                $sbid="Electrical Machines Lab -II";
                                break;
                        case 228:
                                $sbid="Electronic Circuits Lab";
                                break;
                            }break;
        case "it":
                 switch($subject_id){
                        case 221:
                                  $sbid="Computer Organization";
                                  break;
                        case 222:
                                $sbid="Database Management Systems";
                                break;
                        case 223:
                                $sbid="Operating Systems";
                                break;
                        case 224:
                                $sbid="Formal Languages and Automata Theory";
                            break;
                        case 225:
                                $sbid="Business Economics and Financial Analysis";
                                break;
                        case 226:
                                $sbid="Computer Organization Lab";
                                break;
                        case 227:
                                $sbid="Database Management Systems Lab";
                                break;
                        case 228:
                                $sbid="Operating Systems Lab";
                                break;
                            }break;
        case "mech":
                    switch($subject_id){
                        case 221:
                                $sbid="Production Technology";
                                  break;
                        case 222:
                                $sbid="Design of Machine Members-I";
                                break;
                        case 223:
                                $sbid="Fluid Mechanics and Hydraulic Machines";
                                break;
                        case 224:
                                $sbid="Dynamics of Machines";
                            break;
                        case 225:    
                                $sbid="Business Economics and Financial Analysis";
                                break;
                        case 226:
                                $sbid="Production Technology Lab";
                                break;
                        case 227:
                                $sbid="Fluid Mechanics and Hydraulic Machines Lab ";
                                break;
                        case 228:
                                $sbid="Dynamics of Machines Labs";
                                break;
                            }break;

                          }
                        }


else if($batch=="2018-22"||$batch=="2019-23"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 221:
                                $sbid="Discrete Mathematics";
                                  break;
                        case 222:
                                $sbid="Business Economics and Financial Analysis";
                                break;
                        case 223:
                                $sbid="Operating Systems";
                                break;
                        case 224:
                                $sbid="Database Management Systems";
                            break;
                        case 225:
                                $sbid="Java Programming";
                                break;
                        case 226:
                                $sbid="Operating Systems Lab";
                                break;
                        case 227:
                                $sbid="Database Management Systems Lab";
                                break;
                        case 228:
                                $sbid="Java Programming Lab";
                                break;                             
                            }break;
         case "ece":
                    switch($subject_id){
                        case 221:
                                $sbid="Laplace Transforms,Numerical Methods & Complex Variables";
                                  break;
                        case 222:
                                $sbid="Electromagnetic Fields and Waves";
                                break;
                        case 223:
                                $sbid="Analog and Digital Communications";
                                break;
                        case 224:
                                $sbid="Linear IC Applications";
                            break;
                        case 225:
                                $sbid="Electronic Circuit Analysis";
                                break;
                        case 226:
                                $sbid="Analog and Digital Communications Lab";
                                break;
                        case 227:
                                $sbid="IC Applications Lab";
                                break;
                        case 228:
                                $sbid="Electronic Circuit Analysis Lab";
                                break;       
                            }break;
         case "eee":
                    switch($subject_id){
                        case 221:
                                $sbid="Laplace Transforms,Numerical Methods & Complex Variables";
                                  break;
                        case 222:
                                $sbid="Electrical Machines-II";
                                break;
                        case 223:
                                $sbid="Digital Electronics";
                                break;
                        case 224:
                                $sbid="Control Systems";
                            break;
                        case 225:
                                $sbid="Power Systems-I";
                                break;
                        case 226:
                                $sbid="Digital Electronics Lab";
                                break;
                        case 227:
                                $sbid="Electrical Machines Lab-II";
                                break;
                        case 228:
                                $sbid="Control Systems Lab";
                                break;        
                            }break;
         case "it":
                  switch($subject_id){
                        case 221:
                                $sbid="Discrete Mathematics";
                                  break;
                        case 222:
                                $sbid="Business Economics and Financial Analysis";
                                break;
                        case 223:
                                $sbid="Operating Systems";
                                break;
                        case 224:
                                $sbid="Database Management Systems";
                            break;
                        case 225:
                                $sbid="Java Programming";
                                break;
                        case 226:
                                $sbid="Operating Systems Lab";
                                break;
                        case 227:
                                $sbid="Database Management Systems Lab";
                                break;
                        case 228:
                                $sbid="Java Programming Lab";
                                break;       
                            }break;
         case "mech":
                    switch($subject_id){
                        case 221:
                                $sbid="Basic Electrical and Electronics Engineering";
                                  break;
                        case 222:
                                $sbid="Kinematics of Machinery";
                                break;
                        case 223:
                                $sbid="Thermal Engineering-I";
                                break;
                        case 224:
                                $sbid="Fluid Mechanics and Hydraulic Machines";
                            break;
                        case 225:
                                $sbid="Instrumentation and Control Systems";
                                break;
                        case 226:
                                $sbid="Basic Electrical and Electronics Engineering Lab";
                                break;
                        case 227:
                                $sbid="Fluid Mechanics and Hydraulic Machines Lab";
                                break;
                        case 228:
                                $sbid="Instrumentation and Control Systems Lab";
                                break;        
                            }break;
                          }
                        }
                 


if($batch=="2016-20"||$batch=="2017-21"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 311:
                                  $sbid="Design and Analysis of Algorithms";
                                  break;
                        case 312:
                                $sbid="Data Communication and Computer Networks";
                                break;
                        case 313:
                                $sbid="Software Engineering";
                                break;
                        case 314:
                                $sbid="Fundamentals of Management";
                            break;
                        case 315:
                                $sbid="Open Elective-I";
                                break;
                        case 316:
                                $sbid="Design and Analysis of Algorithms Lab";
                                break;
                        case 317:
                                $sbid="Computer Networks Lab";
                                break;
                        case 318:
                                $sbid="Software Engineering Lab";
                                break;
                        case 319:
                                $sbid="Professional Ethics";
                                break;
                            }break;
        case "ece":
                    switch($subject_id){
                        case 311:
                                  $sbid="Electromagnetic Theory and Transmission Lines";
                                  break;
                        case 312:
                                $sbid="Linear and Digital IC Applications";
                                break;
                        case 313:
                                $sbid="Digital Communications";
                                break;
                        case 314:
                                $sbid="Fundamentals of Management";
                            break;
                        case 315:
                                $sbid="Open Elective-I";
                                break;
                        case 316:
                                $sbid="Linear IC Applications Lab";
                                break;
                        case 317:
                                $sbid="Digital IC Applications Lab";
                                break;
                        case 318:
                                $sbid="Digital Communications Lab";
                                break;
                        case 319:
                                $sbid="Professional Ethics";
                                break;
                            }break;
        case "eee":
                     switch($subject_id){
                        case 311:
                                  $sbid="Electrical Measurements & Instrumentation";
                                  break;
                        case 312:
                                $sbid="Power Systems - II";
                                break;
                        case 313:
                                $sbid="Microprocessors and Microcontrollers";
                                break;
                        case 314:
                                $sbid="Fundamentals of Management";
                            break;
                        case 315:
                                $sbid="Open Elective-I";
                                break;
                        case 316:
                                $sbid="Electrical Measurements & Instrumentation Lab";
                                break;
                        case 317:
                                $sbid="Basic Electrical simulation Lab";
                                break;
                        case 318:
                                $sbid="Microprocessors and  Microcontrollers Lab";
                                break;
                        case 319:
                                $sbid="Professional Ethics";
                                break;
                            }break;
        case "it":
                     switch($subject_id){
                        case 311:
                                  $sbid="Design and Analysis of Algorithms";
                                  break;
                        case 312:
                                $sbid="Data Communication and Computer Networks";
                                break;
                        case 313:
                                $sbid="Software Engineering";
                                break;
                        case 314:
                                $sbid="Fundamentals of Management";
                            break;
                        case 315:
                                $sbid="Open Elective-I";
                                break;
                        case 316:
                                $sbid="Design and Analysis of Algorithms Lab";
                                break;
                        case 317:
                                $sbid="Computer Networks Lab";
                                break;
                        case 318:
                                $sbid="Software Engineering Lab";
                                break;
                        case 319:
                                $sbid="Professional Ethics";
                                break;
                            }break;
        case "mech":
                     switch($subject_id){
                        case 311:
                                  $sbid="Design of Machine Members - I";
                                  break;
                        case 312:
                                $sbid="Thermal Engineering-I";
                                break;
                        case 313:
                                $sbid="Metrology and Machine Tools";
                                break;
                        case 314:
                                $sbid="Fundamentals of Management";
                            break;
                        case 315:
                                $sbid="Open Elective-I";
                                break;
                        case 316:
                                $sbid="Thermal Engineering Lab";
                                break;
                        case 317:
                                $sbid="Machine Tools Lab";
                                break;
                        case 318:
                                $sbid="Engineering Metrology Lab";
                                break;
                        case 319:
                                $sbid="Professional Ethics";
                                break;
                            }break;                                                                                
                          }
                        }

else if($batch=="2018-22"||$batch=="2019-23"){
  
    switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 311:
                                  $sbid="To Be Determined";
                                  break;
                        case 312:
                                $sbid="To Be Determined";
                                break;
                        case 313:
                                $sbid="To Be Determined";
                                break;
                        case 314:
                                $sbid="To Be Determined";
                            break;
                        case 315:
                                $sbid="To Be Determined";
                                break;
                        case 316:
                                $sbid="To Be Determined";
                                break;
                        case 317:
                                $sbid="To Be Determined";
                                break;
                        case 318:
                                $sbid="To Be Determined";
                                break;
                            }break;
        case "ece":
                    switch($subject_id){
                        case 311:
                                  $sbid="To Be Determined";
                                  break;
                        case 312:
                                $sbid="To Be Determined";
                                break;
                        case 313:
                                $sbid="To Be Determined";
                                break;
                        case 314:
                                $sbid="To Be Determined";
                            break;
                        case 315:
                                $sbid="To Be Determined";
                                break;
                        case 316:
                                $sbid="To Be Determined";
                                break;
                        case 317:
                                $sbid="To Be Determined";
                                break;
                        case 318:
                                $sbid="To Be Determined";
                                break;
                            }break;                    
        case "eee":
                    switch($subject_id){
                        case 311:
                                  $sbid="To Be Determined";
                                  break;
                        case 312:
                                $sbid="To Be Determined";
                                break;
                        case 313:
                                $sbid="To Be Determined";
                                break;
                        case 314:
                                $sbid="To Be Determined";
                            break;
                        case 315:
                                $sbid="To Be Determined";
                                break;
                        case 316:
                                $sbid="To Be Determined";
                                break;
                        case 317:
                                $sbid="To Be Determined";
                                break;
                        case 318:
                                $sbid="To Be Determined";
                                break;
                            }break;    
        case "it":
                    switch($subject_id){
                        case 311:
                                  $sbid="To Be Determined";
                                  break;
                        case 312:
                                $sbid="To Be Determined";
                                break;
                        case 313:
                                $sbid="To Be Determined";
                                break;
                        case 314:
                                $sbid="To Be Determined";
                            break;
                        case 315:
                                $sbid="To Be Determined";
                                break;
                        case 316:
                                $sbid="To Be Determined";
                                break;
                        case 317:
                                $sbid="To Be Determined";
                                break;
                        case 318:
                                $sbid="To Be Determined";
                                break;
                            }break;
        case "mech":
                    switch($subject_id){
                       case 311:
                                  $sbid="To Be Determined";
                                  break;
                        case 312:
                                $sbid="To Be Determined";
                                break;
                        case 313:
                                $sbid="To Be Determined";
                                break;
                        case 314:
                                $sbid="To Be Determined";
                            break;
                        case 315:
                                $sbid="To Be Determined";
                                break;
                        case 316:
                                $sbid="To Be Determined";
                                break;
                        case 317:
                                $sbid="To Be Determined";
                                break;
                        case 318:
                                $sbid="To Be Determined";
                                break;
                            }break;                             
                          }
                        }                         

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
   if($batch=="2016-20"||$batch=="2017-21"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 411:
                                  $sbid="Data Mining";
                                  break;
                        case 412:
                                $sbid="Principles of Programming Languages";
                                break;
                        case 413:
                                $sbid="Professional Elective-II";
                                break;
                        case 414:
                                $sbid="Professional Elective-III";
                            break;
                        case 415:
                                $sbid="Professional Elective-IV";
                                break;
                        case 416:
                                $sbid="Data Mining Lab";
                                break;
                        case 417:
                                $sbid="PE-II Lab";
                                break;
                        case 418:
                                $sbid="Industry Oriented Mini Project";
                                break;
                        case 419:
                                $sbid="Seminar";
                                break;
                            }break;
        case "ece":
                    switch($subject_id){
                        case 411:
                                  $sbid="Microwave Engineering";
                                  break;
                        case 412:
                                $sbid="Professional Elective-II";
                                break;
                        case 413:
                                $sbid="Professional Elective-III";
                                break;
                        case 414:
                                $sbid="Professional Elective-IV";
                            break;
                        case 415:
                                $sbid="VLSI Design";
                                break;
                        case 416:
                                $sbid="VLSI and E-CAD Lab";
                                break;
                        case 417:
                                $sbid="Microwave Engineering Lab";
                                break;
                        case 418:
                                $sbid="Industry Oriented Mini Project";
                                break;
                        case 419:
                                $sbid="Seminar";
                                break;
                            }break;
        case "eee":
                     switch($subject_id){
                        case 411:
                                  $sbid="Power Semiconductor Drives";
                                  break;
                        case 412:
                                $sbid="Power System Operation and Control";
                                break;
                        case 413:
                                $sbid="Professional Elective-II";
                                break;
                        case 414:
                                $sbid="Professional Elective-III";
                            break;
                        case 415:
                                $sbid="Professional Elective-IV";
                                break;
                        case 416:
                                $sbid="Electrical System Simulation Lab";
                                break;
                        case 417:
                                $sbid="Electrical Workshop";
                                break;
                        case 418:
                                $sbid="Industry Oriented Mini Project";
                                break;
                        case 419:
                                $sbid="Seminar";
                                break;
                            }break;
        case "it":
                     switch($subject_id){
                        case 411:
                                  $sbid="Data Mining";
                                  break;
                        case 412:
                                $sbid="Android Application Development";
                                break;
                        case 413:
                                $sbid="Professional Elective-II";
                                break;
                        case 414:
                                $sbid="Professional Elective-III";
                            break;
                        case 415:
                                $sbid="Professional Elective-IV";
                                break;
                        case 416:
                                $sbid="Android Application Development Lab";
                                break;
                        case 417:
                                $sbid="PE-II Lab";
                                break;
                        case 418:
                                $sbid="Industry Oriented Mini Project";
                                break;
                        case 419:
                                $sbid="Seminar";
                                break;
                            }break;
        case "mech":
                     switch($subject_id){
                        case 411:
                                  $sbid="CAD/CAM";
                                  break;
                        case 412:
                                $sbid="Instrumentation and Control System";
                                break;
                        case 413:
                                $sbid="Professional Elective-II";
                                break;
                        case 414:
                                $sbid="Professional Elective-III";
                            break;
                        case 415:
                                $sbid="Professional Elective-IV";
                                break;
                        case 416:
                                $sbid="CAD/CAM Lab";
                                break;
                        case 417:
                                $sbid="Instrumentational and Control System Lab";
                                break;
                        case 418:
                                $sbid="Industry Oriented Mini Project";
                                break;
                        case 419:
                                $sbid="Seminar";
                                break;
                            }break;                                                                                
                          }
                        }

else if($batch=="2018-22"||$batch="2019-23"){
  
    switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 411:
                                  $sbid="To Be Determined";
                                  break;
                        case 412:
                                $sbid="To Be Determined";
                                break;
                        case 413:
                                $sbid="To Be Determined";
                                break;
                        case 414:
                                $sbid="To Be Determined";
                            break;
                        case 415:
                                $sbid="To Be Determined";
                                break;
                        case 416:
                                $sbid="To Be Determined";
                                break;
                        case 417:
                                $sbid="To Be Determined";
                                break;
                        case 418:
                                $sbid="To Be Determined";
                                break;
                            }break;
        case "ece":
                    switch($subject_id){
                        case 411:
                                  $sbid="To Be Determined";
                                  break;
                        case 412:
                                $sbid="To Be Determined";
                                break;
                        case 413:
                                $sbid="To Be Determined";
                                break;
                        case 414:
                                $sbid="To Be Determined";
                            break;
                        case 415:
                                $sbid="To Be Determined";
                                break;
                        case 416:
                                $sbid="To Be Determined";
                                break;
                        case 417:
                                $sbid="To Be Determined";
                                break;
                        case 418:
                                $sbid="To Be Determined";
                                break;
                            }break;                    
        case "eee":
                    switch($subject_id){
                        case 411:
                                  $sbid="To Be Determined";
                                  break;
                        case 412:
                                $sbid="To Be Determined";
                                break;
                        case 413:
                                $sbid="To Be Determined";
                                break;
                        case 414:
                                $sbid="To Be Determined";
                            break;
                        case 415:
                                $sbid="To Be Determined";
                                break;
                        case 416:
                                $sbid="To Be Determined";
                                break;
                        case 417:
                                $sbid="To Be Determined";
                                break;
                        case 418:
                                $sbid="To Be Determined";
                                break;
                            }break;    
        case "it":
                    switch($subject_id){
                        case 411:
                                  $sbid="To Be Determined";
                                  break;
                        case 412:
                                $sbid="To Be Determined";
                                break;
                        case 413:
                                $sbid="To Be Determined";
                                break;
                        case 414:
                                $sbid="To Be Determined";
                            break;
                        case 415:
                                $sbid="To Be Determined";
                                break;
                        case 416:
                                $sbid="To Be Determined";
                                break;
                        case 417:
                                $sbid="To Be Determined";
                                break;
                        case 418:
                                $sbid="To Be Determined";
                                break;
                            }break;
        case "mech":
                    switch($subject_id){
                       case 411:
                                  $sbid="To Be Determined";
                                  break;
                        case 412:
                                $sbid="To Be Determined";
                                break;
                        case 413:
                                $sbid="To Be Determined";
                                break;
                        case 414:
                                $sbid="To Be Determined";
                            break;
                        case 415:
                                $sbid="To Be Determined";
                                break;
                        case 416:
                                $sbid="To Be Determined";
                                break;
                        case 417:
                                $sbid="To Be Determined";
                                break;
                        case 418:
                                $sbid="To Be Determined";
                                break;
                            }break;                             
                          }
                        }                         


if($batch=="2016-20"||$batch=="2017-21"){
      switch($branch)
        {case "cse":
                    switch($subject_id){
                        case 421:
                                  $sbid="Open Elective-III";
                                  break;
                        case 422:
                                $sbid="Professional Elective-V";
                                break;
                        case 423:
                                $sbid="Professional Elective-VI";
                                break;
                        case 424:
                                $sbid="Major Project";
                            break;
                        }break;
        case "ece":
                    switch($subject_id){
                        case 421:
                                  $sbid="Open Elective-III";
                                  break;
                        case 422:
                                $sbid="Professional Elective-V";
                                break;
                        case 423:
                                $sbid="Professional Elective-VI";
                                break;
                        case 424:
                                $sbid="Major Project";
                            break;
                       }break;
        case "eee":
                     switch($subject_id){
                        case 421:
                                  $sbid="Open Elective-III";
                                  break;
                        case 422:
                                $sbid="Professional Elective-V";
                                break;
                        case 423:
                                $sbid="Professional Elective-VI";
                                break;
                        case 424:
                                $sbid="Major Project";
                            break;
                        }break;
        case "it":
                     switch($subject_id){
                        case 421:
                                  $sbid="Open Elective-III";
                                  break;
                        case 422:
                                $sbid="Professional Elective-V";
                                break;
                        case 423:
                                $sbid="Professional Elective-VI";
                                break;
                        case 424:
                                $sbid="Major Project";
                            break;
                        }break;
        case "mech":
                     switch($subject_id){
                        case 421:
                                  $sbid="Open Elective-III";
                                  break;
                        case 422:
                                $sbid="Professional Elective-V";
                                break;
                        case 423:
                                $sbid="Professional Elective-VI";
                                break;
                        case 424:
                                $sbid="Major Project";
                            break;
                        }break;                                                                                
                          }
                        }

else if($batch=="2018-22"||$batch=="2019-23"){
  
    switch($branch)
        {case "cse":
                   switch($subject_id){
                        case 421:
                                  $sbid="To Be Determined";
                                  break;
                        case 422:
                                $sbid="To Be Determined";
                                break;
                        case 423:
                                $sbid="To Be Determined";
                                break;
                        case 424:
                                $sbid="To Be Determined";
                            break;
                        case 425:
                                $sbid="To Be Determined";
                                break;
                        case 426:
                                $sbid="To Be Determined";
                                break;
                            }break;    
        case "ece":
                    switch($subject_id){
                        case 421:
                                  $sbid="To Be Determined";
                                  break;
                        case 422:
                                $sbid="To Be Determined";
                                break;
                        case 423:
                                $sbid="To Be Determined";
                                break;
                        case 424:
                                $sbid="To Be Determined";
                            break;
                        case 425:
                                $sbid="To Be Determined";
                                break;
                        case 426:
                                $sbid="To Be Determined";
                                break;
                        case 427:
                                $sbid="To Be Determined";
                                break;
                        case 428:
                                $sbid="To Be Determined";
                                break;        
                            }break;                    
        case "eee":
                    switch($subject_id){
                        case 421:
                                  $sbid="To Be Determined";
                                  break;
                        case 422:
                                $sbid="To Be Determined";
                                break;
                        case 423:
                                $sbid="To Be Determined";
                                break;
                        case 424:
                                $sbid="To Be Determined";
                            break;
                        case 425:
                                $sbid="To Be Determined";
                                break;
                        case 426:
                                $sbid="To Be Determined";
                                break;
                            }break;    
        case "it":
                    switch($subject_id){
                        case 421:
                                  $sbid="To Be Determined";
                                  break;
                        case 422:
                                $sbid="To Be Determined";
                                break;
                        case 423:
                                $sbid="To Be Determined";
                                break;
                        case 424:
                                $sbid="To Be Determined";
                            break;
                        case 425:
                                $sbid="To Be Determined";
                                break;
                        case 426:
                                $sbid="To Be Determined";
                                break;
                            }break;
        case "mech":
                    switch($subject_id){
                        case 421:
                                  $sbid="To Be Determined";
                                  break;
                        case 422:
                                $sbid="To Be Determined";
                                break;
                        case 423:
                                $sbid="To Be Determined";
                                break;
                        case 424:
                                $sbid="To Be Determined";
                            break;
                        case 425:
                                $sbid="To Be Determined";
                                break;
                        case 426:
                                $sbid="To Be Determined";
                                break;
                        case 427:
                                $sbid="To Be Determined";
                                break;      
                            }break;                             
                          }
                        }                         





                 



                         

  echo "<option value='". $subject_id . "'>".$sbid."</option>";
 }
?></select>

<?php ?>
