<?php 
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{


include("connection.php");
include("smart_method.php");

$errMassage ='';

if(isset($_POST['search'])){
	 $tag =$_POST['tag'];
	 if(empty($tag))
	 {
		 $errMassage = "Error! You have to select/ Type Student exam no.";
	 }else{
		 if($db_found)
		 {
		   $tag = data_input($tag);
		    $tag = quote_smart($tag, $db_handle);
			
			 $sql= "SELECT * FROM student_infor 
					  WHERE admission_no =$tag";
			   $query = $db_found->query($sql);
			   $rows = ($query->fetch_assoc());
			   $row_num =($query->num_rows);
			   if($query)
			   {
				   if($row_num >0){
					   $first_name1 = $rows['first_name'];
					   $middle_name1 = $rows['middle_name'];
					   $sur_name1 =  $rows['sur_name'];
					   $exam_no1 =  $rows['admission_no'];
					   $user_id1 = $rows['name_id'];
					   mysqli_close($db_handle);
					   }else
					   {
						 $errMassage = "No such information available"; 
						 mysqli_close($db_handle);
						  }
				   
			   }else{
				   $errMassage = "Error in Your typing...";
				   mysqli_close($db_handle);
				   }
		 
			 }
		 
		 }
	 
	}
	
	require'update_student_name.php';
	
	include ( "delete_student_name.php");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../css/jquery.min.js"> </script>
<link href="../css/admin.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="../css/jquery.autocomplete.css" />
<script type="text/javascript" src="../css/jquery.js"></script>
<script type="text/javascript" src="../css/jquery.autocomplete.js"></script>


<script>
$(document).ready(function(){
 $("#tag").autocomplete("autocomplete.php", {
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


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" role="form" class=" form-horizontal">

<div class="col-xs-12 text-center h3">
<label> Edit Student Details</label>
</div>
<p class="col-xs-12 text-danger h4">
<?php echo $errMassage;?>
</p>
<div class="form-group">
<label for="tag" class="control-label col-xs-3"> Stud. Exam No:</label>
<div class="col-xs-6">
<input type="text" id="tag" placeholder="Exam No" name="tag" value="" class="form-control">
</div>
<div class="col-xs-3">
<input type="submit" name="search" value="Search" class=" btn-info form-control">
</div>
</div>
<!--first name group-->
<div class="form-group">
<label class="control-label col-xs-3" for="first"> First Name: </label>
<div class="col-xs-9">
<input type="text" name="first_name" id="first-" maxlength="30" class="form-control" value="<?php echo $first_name1;?>" />
</div>
</div>

<div class="form-group"> 
<label for="middle" class="control-label col-xs-3"> Middle Name: </label>
<div class="col-xs-9">
<input type="text" name="middle_name" maxlength="30" id="middle" class="form-control" value="<?php echo $middle_name1;?>" />
</div>
</div>
<div class="form-group">
<label class="control-label col-xs-3" for="sur"> Sur Name: </label>
<div class="col-xs-9">
<input type="text" name=" sur_name" maxlength="30"  id="sur" class=" form-control"  value= "<?php echo $sur_name1;?>"/>
</div>
</div>
<div class="form-group">
<label for="exam" class="control-label col-xs-3"> Examination Number: </label>
<div class="col-xs-9">
<input type="text" name="exam_no" class="form-control" id="exam" maxlength="15" value= "<?php echo $exam_no1;?>"/>
</div>
</div>
<div class="col-xs-offset-2 col-xs-10">
<input type="submit" name="update" value="UpDate" class="btn btn-primary btn-lg" />
<input type="reset" name="reset" value="Cancel" class="btn btn-danger btn-lg"/>
<input type="submit" name="del" value="Delete Student" class="btn btn-warning btn-lg"/>
</div>
<div>
<input type="hidden" name="user_id" value="<?php echo $user_id1;?>" />
</div>
</form>
<p class="text-center text-danger"> <?php echo $errorMesage;?> </p>
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