<?php 
  $name= "";

include_once("php_includes/check_login_status.php");
$id=$_SESSION['userid'];
include_once("php_includes/common_frame_s.php");
include_once("php_includes/include_student_column.php");

?>
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="student.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Sem Module</li>
</ul>

    <section class="content">
        

<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-graduation-cap"></i> Semesters</h3>
	</div>
	<div class="box-body">

	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
		      <div class="edusec-link-box">
		        <span class="edusec-link-box-icon bg-teal"><i class="fa fa-users"></i></span>
		        <div class="edusec-link-box-content">
		          <span class="edusec-link-box-text"><a href="semonemarks.php">I-I SEM MARKS</a></span>
		         </div><!-- /.info-box-content -->
		      </div><!-- /.info-box -->
		</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-blue"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semtwomarks.php">I-II SEM MARKS</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-orange"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semthreemarks.php">II-I SEM MARKS</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semfourmarks.php">II-II SEM MARKS</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-white"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semfivemarks.php">III-I SEM MARKS</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-teal"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semsixmarks.php">III-II SEM MARKS</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-blue"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semsevenmarks.php">IV-I SEM MARKS</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="edusec-link-box">
                <span class="edusec-link-box-icon bg-orange"><i class="fa fa-users"></i></span>
                <div class="edusec-link-box-content">
                  <span class="edusec-link-box-text"><a href="semeightmarks.php">IV-II SEM MARKS</a></span>
                 </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
        </div>

<?php

include_once("php_includes/footer.php");

 ?>

    </body></html>