 <?php

         if(isset($_GET['sid']) && $_GET['grade'] && $_GET['cid'])
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn=mysqli_connect("localhost","root","","cms");;
            //$db=mysqli_select_db("cms",$conn);
            
            if(! $conn )
            {
               die('Could not connect: ' . mysqli_error());
            }
            
             $sid = $_GET['sid'];

	     $grade = $_GET['grade'];

	     $cid = $_GET['cid'];

	   //  $fid = "007";

            $sql = "UPDATE student_course_faculty_grade SET gid = '".$grade ."' WHERE sid = '".$sid."' and course_id = '".$cid."'";
               
	    //echo "UPDATE student_course_faculty_grade SET gid=".$grade." WHERE sid = ".$sid." AND gid=".$grade." AND cid=".$cid;

            //mysqli_select_db('test_db');
            
		$retval = mysqli_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysqli_error());

		echo "0";
            }else{
            
            echo "1";
            
	}

           mysqli_close($conn);
         }
         
            ?>

            
           




            
            
           

