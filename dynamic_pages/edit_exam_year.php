<?php
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/admin.css" rel="stylesheet" type="text/css">
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
<p class=" paragraphLink"> <a href="view_grade.php"> Insert Student Rec</a></p>
<p class=" paragraphLink"> <a href="generate_result_table.php"> Stud. Result Sheet</a> </p>
<p class=" paragraphLink"> <a href="display_student_names.php"> Display Student Names</a> </p>
<p class=" paragraphLink"> <a href="display_courses_register.php"> Display Courses Reg.</a> </p>
<p class=" paragraphLink"> <a href="Upload_CSV.php"> Upload Results.</a> </p>
 
</div>
</div>
</div>
<div class="col-xs-8 well well-lg welborda"> 


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" role="form" class="form-horizontal">
<div class="col-xs-12 text-center h3">
<label> Set the Year of the Exam  and Set Category </label>
</div>
<div class="form-group">
<label for="tag" class="control-label col-xs-3"> Stud. Exam No:</label>
<div class="col-xs-6">
<input type="text" id="tag" placeholder="Exam No" name="tag" value="" class="form-control">
</div>
<div class="col-xs-3">
<input type="submit" name="search" value="Search" class=" btn-info form-control">
</div>
</div>

<div class="form-group">
<label class="control-label col-xs-2" for="year">YEAR OF EXAM </label>
<div class="col-xs-10">
<input type="text" name="year" id="year"  class="form-control" />
</div>
</div>
<div class="form-group">
<label class="control-label col-xs-2" for="set"> EXAM SET</label>
<div class="col-xs-10">
<input type="text" name="set"  id="set" class="form-control" />
</div>
</div>
<div class="form-group">
<div class="col-xs-offset-3 col-xs-9">
<input type="submit" name="save" value="UpDate"  class="btn btn-success btn-lg" />
<input type="reset" name="reset" value="Cancel"  class="btn btn-danger btn-lg"/>
<input type="submit" name= "del_year" value="Delete" class="btn btn-warning btn-lg" />
</div>
</div>

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

<?php 
include("smart_method.php");
include("connection.php");

$year = "";
$set = "";

if(isset($_POST['save'])){
	 $year = $_POST['year'];
	 $set = $_POST['set'];
	 
	 if(empty($year) && empty($set)){
		 echo " empty space can not be Register";
		
		}else if(empty($year)){
			           echo " empty space can not be Register";
			           }else if(empty($set)){
						           echo " empty space can not be Register";
								  }else{
									     $year =data_input($year);
										 $set = data_input($set);
										 if($db_found){
											 $year = quote_smart($year, $db_handle);
											 $set = quote_smart($set, $db_handle);
											 
											 $sql = "";
											 $query = mysql_query($sql);
											 if($query){
												  echo "Thank you setting exam year";
												  mysql_close($db_handle);
												 }else{
													    echo " Please check your typing, there is error";
													    mysql_close($db_handle);
													  }											 }
									    }
	
	}





?>

</body>
</html>
<?php
}else
{
header("Location:../index.php");
}

?>