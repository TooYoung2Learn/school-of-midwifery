<?php 
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{

include("connection.php");
include("smart_method.php");

$errMassage4 ='';

if(isset($_POST['search'])){
	 $tag =$_POST['tag'];
	 if(empty($tag))
	 {
		 $errMassage4 = "Error! You have to Type/ Select Course Name.";
	 }else{
		 if($db_found)
		 {
		   $tag = data_input($tag);
		    $tag = quote_smart($tag, $db_handle);
			
			 $sql= "SELECT * FROM courses 
					  WHERE course_name =$tag";
			   $query = mysql_query($sql);
			   $rows = mysql_fetch_assoc($query);
			   $row_num = mysql_num_rows($query);
			   if($query)
			   {
				   if($row_num >0){
					   $acronym_id = $rows['course_id'];
					   $course_name1 = $rows['course_name'];
					   $course_id1 =  $rows['s/n'];
					    mysql_close($db_handle);
					   }else
					   {
						 $errMassage = "No such information available"; 
						 mysql_close($db_handle);
						  }
				   
			   }else{
				   $errMassage4 = "Error in Your typing...";
				   mysql_close($db_handle);
				   }
		 
			 }
		 
		 }
	 
	}
	
	
		require "save_courses.php";
		require "update_course.php";
		require "delete_courses.php";
		
		
	
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
<div class="col-xs-2"> </div>
<div class="col-xs-8">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<div class="col-xs-2 sideLeft">
<div class="row leftMenu"> 
<button class="btn form-control buttonLeft btn-lg"> Activities </button>
</div>
<div class="row">
<div class=" buttonUnder">
 <p class=" paragraphLink"><a href="adminPannel.php">Home</a></p>
<p  class=" paragraphLink" > <a href="register_student_name.php">Reg. New Student</a></p>
<p  class=" paragraphLink"> <a href="course_form.php"> Reg. Courses offer</a></p>
<p class=" paragraphLink"> <a href="register_student_scores.php">Reg. Stud. Scores</a></p>
<p class=" paragraphLink"><a href="set_year_form.php"> Set. Exams Year</a></p>
<p class=" paragraphLink"> <a href="view_grade.php"> Display Student Rec</a></p>
<p class=" paragraphLink"> <a href="generate_result_table.php"> Stud. Result Sheet</a> </p>
<p class=" paragraphLink"> <a href="display_student_names.php"> Display Student Names</a> </p>
<p class=" paragraphLink"> <a href="display_courses_register.php"> Display Courses Reg.</a> </p>
<p class=" paragraphLink"> <a href="Upload_CSV.php"> Upload Results.</a> </p>
 
</div>
</div>
</div>
<div class="col-xs-8 well well-lg welborda"> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" role="form" class="form-horizontal">

<p class="text-center h4"> Types in the Couses to Registered</p>
<p class="text-center h4"> And the acronym that it will represent in table head</p>
<p class="text-center h4"> of the student result Record </p>
<p> <?php echo $errMassage;?> </p>

<div class="form-group">
<label for="tag" class="control-label col-xs-3"  onInput="myfunction()"> Stud. Exam No:</label>
<div class="col-xs-6">
<input type="text" id="tag" placeholder="Course Name" name="tag" class="form-control">
</div>
<div class="col-xs-3">
<input type="submit" name="search" value="Search" class=" btn-info form-control">
</div>
</div>

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

<input type="submit" name="update_course" value="UpDate Course" class="btn btn-info btn-lg" />
<input type="reset" name="reset" value="Cancel"  class="btn btn-warning btn-lg"/>
<input type="submit" name="del_course" value="Delete Caurse" class="btn btn-danger btn-lg" />
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
<div class="col-xs-2 rightMargin">

<div class="textheader">Welcome </div>

<div class="rightBackground">
when the activities are going on
in the pannel one need to examin
the content 
</div>
 </div>
 
</div>

</div>
<div class="col-xs-2">

 </div>
</div>

</div>



</body>
</html>
<?php
}else
{
header("Location:../index.php");
}

?>