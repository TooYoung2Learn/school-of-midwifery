<?php 
session_start();
 if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
  {
      $course_name ='';
      $acronym = '';
      $errMassage3 = '';
      $course_id1 ='';
      $course_name='';
      $acronym_id='';
      $errMassage3='';
      $errMassage2='';
      $errMassage4='';
      $errMassage='';
      $course_name1='';

include("connection.php");
include("smart_method.php");
include ("admin_fns.php");

	
		require "save_courses.php";
		
		
	
	?>
 

<!DOCTYPE html>
<html lang="en"> 
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../css/jquery.min.js"> </script>
<link href="../css/admin.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="../css/jquery.autocomplete.css" />
<script type="text/javascript" src="../css/jquery.js"></script>
<script type="text/javascript" src="../css/jquery.autocomplete.js"></script>


<script>
$(document).ready(function(){
 $("#tag").autocomplete("course_sql_search.php", {
		selectFirst: true
	});
});
</script>
</head>

<body>
<div class="container backgrondAll">
<div class="row">
<div class="col-xs-1"> </div>
<div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<?php left_side_bar();?>
<div class="col-xs-8 well well-lg welborda"> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" role="form" class="form-horizontal">

<p class="text-center h4"> Types in the Couses to Registered</p>
<p class="text-center h4"> And the acronym that it will represent in table head</p>
<p class="text-center h4"> of the student result Record </p>
<p> <?php echo $errMassage3;?> </p>


<div class="form-group">
<label class="control-label col-xs-2" for="course"> Caurse Name:</label>
<div class="col-xs-10">
<input type="text" name="course_name" value="<?php echo $course_name1;?>" id="course" class="form-control" />
</div>
</div>

<div class="form-group">
<label class="control-label col-xs-2" for="acro"> Caurse Acronym: </label>
<div class="col-xs-10">
<input type="text" name="acronym" id="acro" value="<?php echo $acronym_id?>" class="form-control" />
</div>
</div>

<div>
<input type= "hidden" name= "course_id" value= "<?php echo $course_id1; ?>" />
</div>

<div class=" col-xs-12">
<input type="submit" name="save" value="Add Courses" class="btn btn-primary btn-lg" />

<input type="reset" name="reset" value="Cancel"  class="btn btn-warning btn-lg"/>
<a href="edit_courses.php" class="btn btn-danger btn-lg"> To Edit Caurse </a>
</div>
<p class="col-xs-12 text-center text-danger">
<?php echo $errMassage2;?>
</p>
<p class="col-xs-12 text-center text-danger">
<?php echo $errMassage;?>
</p>
<p class="col-xs-12 text-center text-danger">
<?php echo $errMassage3;?>
</p>

<p class="col-xs-12 text-center text-danger">
<?php echo $errMassage4;?>
</p>

</form>




</div>
 <?php right_side_data();?>
 
</div>

</div>

<?php
      foot_data();
}else
  {
    header("Location:../index.php");
 }

?>