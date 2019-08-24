<?php

$conn=mysqli_connect("localhost","root","",cms);
$branch="SELECT branch,batch from student where sid='".$id."'";
$rs2=mysqli_query($conn,$branch);
$batch = $row['branch'];
  $rs2= $row['batch'];
if($rs2=="2016-20"||$rs2="2017-21"){
	switch($batch)
	{case cse:{
		switch($subject_id)
		case 111:
				$sbid="Mathematics-I";
				break;
		case 112:
				$sbid="Ec";
				break;
		case 113:
				$sbid="ep-1";
				break;
		case 114:
				$sbid="pce";
				break;
		case 115:
				$sbid="em";
				break;
		case 116:
				$sbid="beee";
				break;
		case 117:
				$sbid="ews";
				break;
		case 118:
				$sbid="elcs";
				break;}
				break;
	}

}
else
{

}
