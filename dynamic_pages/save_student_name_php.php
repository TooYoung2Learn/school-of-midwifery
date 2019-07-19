<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

$first_name ="";
$middle_name = "";
$sur_name = "";
$exam_no = "";
$errorMesage="";

if(isset($_POST['save_name'])){
	
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
			   $query = $db_found->query($sql);
			   $row_num = ($query->num_rows);
			   if($query){
				   if($row_num >0){
					   $errorMesage = "Sorry! the student name already exist";
					   mysqli_close($db_found);
					   }else{
					   $sql = "INSERT INTO student_infor(first_name, middle_name, sur_name, admission_no)
								 VALUES('$first_name', '$middle_name', '$sur_name','$exam_no')";
					   $query= $db_found->query($sql);
					   if($query){
					   $errorMesage = "The Student Details is added successfully";
					   mysqli_close($db_found);
					    }else {
						  mysqli_close($db_found);
						  $errorMesage = "Error in Your typing...";
						           }
							   }
				   
					    }
			   			   
			     }
			 }

	}



?>

</body>
</html>