<?php
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{
 
include("connection.php");
include("smart_method.php");
include ("admin_fns.php");

$first_name ="";
$middle_name = "";
$sur_name = "";
$exam_no = "";
$errorMesage="";

if(isset($_POST['save'])){
	
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$sur_name = $_POST['sur_name'];
	$exam_no = $_POST['exam_no'];
	
	$first_name = data_input($first_name);
	$middle_name = data_input($middle_name);
	$sur_name = data_input($sur_name);
	$exam_no = data_input($exam_no);
	
	if(empty($first_name) && empty($sur_name) && empty($exam_no)){
		   $errorMesage = "Empty field is not allow 1";
		}else if(empty($first_name)&& empty($sur_name)){
		$errorMesage = "Empty field is not allow 2";
		}else if (empty($first_name) && empty($exam_no)){
			 $errorMesage = "Empty field is not allow 3";
		}else if(empty($sur_name)&& empty($exam_no)){
	      $errorMesage = "Empty field is not allow 4";
		}else if(empty($first_name)){
			$errorMesage = "Empty field is not allow 5";
	    }else if(empty($sur_name)){
			   $errorMesage = "Empty field is not allow 6";
	  }else if(empty($exam_no)){
								  $errorMesage = "Empty field is not allow 7";
	  }else{
		  if($db_found){
			   $first_name = htmlentities($first_name);
			   $middle_name = htmlentities($middle_name);
			   $sur_name = htmlentities($sur_name);
			   $exam_no = htmlentities($exam_no);
				
			   $sql= "SELECT * FROM student_infor 
					  WHERE admission_no ='$exam_no'";
			   $query = $db_handle->query($sql);
			   $row_num = ($query->num_row());
			   if($query){
				   if($row_num >0){
					   $errorMesage = "Sorry! the student name already exist";
					   mysqli_close($db_handle);
					   }else{
					   $sql = "INSERT INTO student_infor(first_name, middle_name, sur_name, admission_no)
								 VALUES('$first_name', '$middle_name', '$sur_name','$exam_no')";
					   $query= $db_handle->query($sql);
					   if($query){
					   $errorMesage = "The Student Details is added successfully";
					   ($db_handle->close());
					    }else {
						  $db_handle->close();
						  $errorMesage = "Error in Your typing...";
						           }
							   }
				   
					    }
			   			   
			     }
			 }

	}

  require "save_student_name_php.php";

?>

<?php head_data();?>
<div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<?php left_side_bar();?>
<div class="col-xs-8 well well-lg welborda"> 


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" role="form" class=" form-horizontal">

<div class="col-xs-12 text-center h3">
<label> Register the Student Details</label>
</div>

<!--first name group-->
<div class="form-group">
<label class="control-label col-xs-3" for="first"> First Name: </label>
<div class="col-xs-9">
<input type="text" name="first_name" id="first-" maxlength="30" class="form-control" />
</div>
</div>

<div class="form-group"> 
<label for="middle" class="control-label col-xs-3"> Other Name: </label>
<div class="col-xs-9">
<input type="tex" name="middle_name" maxlength="30" id="middle" class="form-control" />
</div>
</div>
<div class="form-group">
<label class="control-label col-xs-3" for="sur"> Last Name: </label>
<div class="col-xs-9">
<input type="tex" name="sur_name" maxlength="30"  id="sur" class="form-control"/>
</div>
</div>
<div class="form-group">
<label for="exam" class="control-label col-xs-3"> Examination Number: </label>
<div class="col-xs-9">
<input type="tex" name="exam_no" class="form-control" id="exam" maxlength="15" />
</div>
</div>
<div class="col-xs-offset-2 col-xs-10">
<input type="submit" name="save_name" value="Save" class="btn btn-primary btn-lg" />
<input type="reset" name="reset" value="Cancel" class="btn btn-danger btn-lg"/>
<a href="search_student_name.php"  class="btn btn-info btn-lg"> To Edit Stud. </a>
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

<?php
    foot_data();
}else
{
header("Location:../index.php");
}

?>