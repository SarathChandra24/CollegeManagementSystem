<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
  
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="student.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Attendance Module</li>
</ul>

    <section class="content">
        

<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-graduation-cap"></i> ATTENDANCE</h3>
  </div>
  <div class="box-body">

  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="edusec-link-box">
            <span class="edusec-link-box-icon bg-red"><i class="fa fa-users"></i></span>
            <div class="edusec-link-box-content">
              <span class="edusec-link-box-text"><a href="semoneattendance.php">I-I ATTENDANCE</a></span>
             </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
    </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semtwoattendance.php">I-II ATTENDANCE</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-teal"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semthreeattendance.php">II-I ATTENDANCE</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-teal"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semfourattendance.php">II-II ATTENDANCE</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-orange"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semfiveattendance.php">III-I ATTENDANCE</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-orange"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semsixattendance.php">III-II ATTENDANCE</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-gold"><i class="fa fa-users"></i></span> 
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semsevenattendance.php">IV-I ATTENDANCE</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-gold"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semeightattendance.php">IV-II ATTENDANCE</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>

<?php

include_once("php_includes/footer.php");

 ?>

    </body></html>