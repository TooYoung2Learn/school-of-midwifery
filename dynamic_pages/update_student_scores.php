<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 



if(isset($_POST['update']))
{
	// user id variable
	$user_exam_no = $_POST['user_id'];
	$user_exam_no = data_input($user_exam_no);
	
	//variables for the scores
	$score0 =$_POST['score0'];
	$score1 =$_POST['score1'];
	$score2 =$_POST['score2'];
	$score3 =$_POST['score3'];
	$score4 =$_POST['score4'];
	$score5 =$_POST['score5'];
	$score6 =$_POST['score6'];
	
	//escaping htmlspecial characters
	$score0 =data_input($score0);
	$score1 =data_input($score1);
	$score2 =data_input($score2);
	$score3 =data_input($score3);
	$score4 =data_input($score4);
	$score5 =data_input($score5);
	$score6 =data_input($score6);
	
	//total column query by users
	$total_colum = $_POST['course_total'];
	
			//column name variables
			$column0 = $_POST['column_name0'];
			$column1 = $_POST['column_name1'];
			$column2 = $_POST['column_name2'];
			$column3 = $_POST['column_name3'];
			$column4 = $_POST['column_name4'];
			$column5 = $_POST['column_name5'];
			$column6 = $_POST['column_name6'];
			
			//escaping column name variables
			$column0 = data_input($column0);
			$column1 = data_input($column1);
			$column2 = data_input($column2);
			$column3 = data_input($column3);
			$column4 = data_input($column4);
			$column5 = data_input($column5);
			$column6 = data_input($column6);
			
			
			
	if($db_found)
	{
		  //testing  characters
			$score0 = quote_smart($score0, $db_handle);
			$score1 = quote_smart($score1, $db_handle);
			$score2 = quote_smart($score2, $db_handle);
			$score3 = quote_smart($score3, $db_handle);
			$score4 = quote_smart($score4, $db_handle);
			$score5 = quote_smart($score5, $db_handle);
			$score6 = quote_smart($score6, $db_handle);
			
			$user_exam_no = quote_smart($user_exam_no, $db_handle);
			$admission_no = 'admission_no';
			$score_column = "scores";
			 $course_id = 'course_id';
			
			 
			
			switch($total_colum)
			{    
			    case 1:
				       if(empty($_POST['score0']) && empty($_POST['user_id']) )
					    {
							$message_erro = "Error."."<br>";
							$message_erro = $message_erro . "The field can not be empty";
					    }else{
							  $sql="UPDATE courses_registered SET $score_column =$score0 WHERE  $admission_no =$user_exam_no AND $course_id ='$column0' "; 
							       $result = mysql_query($sql); 


							 if($result)
							 {
							   $message_erro = "Congratulation!!!"."<br>";
							   $message_erro = $message_erro . "Student marks have been added";
							  }else{
									$message_erro = "Error in adding student scores check the scores and save again";
							  }
						
						}
				break;
			    case 2:
				       if(empty($_POST['score0']) && empty($_POST['score1']) && empty($_POST['user_id']))
					{
						$message_erro = "Error."."<br>";
						$message_erro = $message_erro. "The field can not be empty";
					}else{
						           $sql="UPDATE courses_registered SET $score_column =$score0 WHERE  $admission_no =$user_exam_no AND $course_id ='$column0' "; 
							       $result = mysql_query($sql); 
								   
								   $sql="UPDATE courses_registered SET $score_column =$score1 WHERE  $admission_no =$user_exam_no AND $course_id ='$column1' "; 
								   $result = mysql_query($sql);  
				
							 if($result)
							 {
							   $message_erro = "Congratulation!!!"."<br>";
							   $message_erro = $message_erro. "Student marks have been added";
							  }else{
									$message_erro = "Error in adding student scores check the scores and save again";
								  }

						 
						 }
				
				break;
				case 3:
					if(empty($_POST['score0']) && empty($_POST['score1']) && empty($_POST['score2']) && empty($_POST['user_id']))
					{
						$message_erro = "Error."."<br>";
						$message_erro = $message_erro. "The field can not be empty";
					}else{
						           $sql="UPDATE courses_registered SET $score_column =$score0 WHERE  $admission_no =$user_exam_no AND $course_id ='$column0' "; 
							       $result = mysql_query($sql); 
								   
								   $sql="UPDATE courses_registered SET $score_column =$score1 WHERE  $admission_no =$user_exam_no AND $course_id ='$column1' "; 
								   $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score2 WHERE  $admission_no =$user_exam_no AND $course_id ='$column2' "; 
							       $result = mysql_query($sql);  

							 if($result)
							 {
							   echo "Congratulation!!!"."<br>";
							   echo "Student marks have been added";
							  }else{
									$message_erro = "Error in adding student scores check the scores and save again";
								  }
						}
				break;
				case 4:
				if(empty($_POST['score0']) && empty($_POST['score1']) && empty($_POST['score2']) && empty($_POST['score3']) && empty($_POST['user_id']))
					{
						$message_erro = "Error."."<br>";
						$message_erro = $message_erro. "The field can not be empty";
					}else{
							       $sql="UPDATE courses_registered SET $score_column =$score0 WHERE  $admission_no =$user_exam_no AND $course_id ='$column0' "; 
							       $result = mysql_query($sql); 
								   
								   $sql="UPDATE courses_registered SET $score_column =$score1 WHERE  $admission_no =$user_exam_no AND $course_id ='$column1' "; 
								   $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score2 WHERE  $admission_no =$user_exam_no AND $course_id ='$column2' "; 
							       $result = mysql_query($sql);  
								   
								  $sql="UPDATE courses_registered SET $score_column =$score3 WHERE  $admission_no =$user_exam_no AND $course_id ='$column3' "; 
							       $result = mysql_query($sql);  
								   
							 if($result)
							 {
							   $message_erro = "Congratulation!!!"."<br>";
							   $message_erro = $message_erro. "Student marks have been added";
							  }else{
									$message_erro = "Error in adding student scores check the scores and save again";
								  }
		

						
						}
				 
				break;
				case 5:
					if(empty($_POST['score0']) && empty($_POST['score1']) && empty($_POST['score2']) && empty($_POST['score3']) && empty($_POST['score4']) && empty($_POST['user_id']))
						{
							$message_erro = "Error."."<br>";
							$message_erro = $message_erro. "The field can not be empty";
						}else{
							       $sql="UPDATE courses_registered SET $score_column =$score0 WHERE  $admission_no =$user_exam_no AND $course_id ='$column0' "; 
							       $result = mysql_query($sql); 
								   
								   $sql="UPDATE courses_registered SET $score_column =$score1 WHERE  $admission_no =$user_exam_no AND $course_id ='$column1' "; 
								   $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score2 WHERE  $admission_no =$user_exam_no AND $course_id ='$column2' "; 
							       $result = mysql_query($sql);  
								   
								  $sql="UPDATE courses_registered SET $score_column =$score3 WHERE  $admission_no =$user_exam_no AND $course_id ='$column3' "; 
							       $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score4 WHERE  $admission_no =$user_exam_no AND $course_id ='$column4' "; 
							       $result = mysql_query($sql);  

		
								 if($result)
								 {
								   $message_erro = "Congratulation!!!"."<br>";
								   $message_erro =$message_erro . "Student marks have been added";
								  }else{
										echo "Error in adding student scores check the scores and save again";
									  }
							 }
				break;
				
				case 6:
				       if(empty($_POST['score0']) && empty($_POST['score1']) && empty($_POST['score2']) && empty($_POST['score3']) && empty($_POST['score4']) && empty($_POST['score5']) && empty($_POST['user_id']))
						{
							$message_erro = "Error."."<br>";
							$message_erro =$message_erro. "The field can not be empty";
						}else{
							  	   $sql="UPDATE courses_registered SET $score_column =$score0 WHERE  $admission_no =$user_exam_no AND $course_id ='$column0' "; 
							       $result = mysql_query($sql); 
								   
								   $sql="UPDATE courses_registered SET $score_column =$score1 WHERE  $admission_no =$user_exam_no AND $course_id ='$column1' "; 
								   $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score2 WHERE  $admission_no =$user_exam_no AND $course_id ='$column2' "; 
							       $result = mysql_query($sql);  
								   
								  $sql="UPDATE courses_registered SET $score_column =$score3 WHERE  $admission_no =$user_exam_no AND $course_id ='$column3' "; 
							       $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score4 WHERE  $admission_no =$user_exam_no AND $course_id ='$column4' "; 
							       $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score5 WHERE  $admission_no =$user_exam_no AND $course_id ='$column5' "; 
							       $result = mysql_query($sql); 

	
								 
								 if($result)
								 {
								   $message_erro = "Congratulation!!!"."<br>";
								   $message_erro =$message_erro. "Student marks have been added";
								  }else{
										echo "Error in adding student scores check the scores and save again";
									  }
							 }

				break;
				case 7:
				     if(empty($_POST['score0']) && empty($_POST['score1']) && empty($_POST['score2']) && empty($_POST['score3']) && empty($_POST['score4']) && empty($_POST['score5']) && empty($_POST['score6']) && empty($_POST['user_id']))
						{
							$message_erro = "Error."."<br>";
							$message_erro =$message_erro. "The field can not be empty";
						}else{
							       $sql="UPDATE courses_registered SET $score_column =$score0 WHERE  $admission_no =$user_exam_no AND $course_id ='$column0' "; 
							       $result = mysql_query($sql); 
								   
								   $sql="UPDATE courses_registered SET $score_column =$score1 WHERE  $admission_no =$user_exam_no AND $course_id ='$column1' "; 
								   $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score2 WHERE  $admission_no =$user_exam_no AND $course_id ='$column2' "; 
							       $result = mysql_query($sql);  
								   
								  $sql="UPDATE courses_registered SET $score_column =$score3 WHERE  $admission_no =$user_exam_no AND $course_id ='$column3' "; 
							       $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score4 WHERE  $admission_no =$user_exam_no AND $course_id ='$column4' "; 
							       $result = mysql_query($sql);  
								   
								   $sql="UPDATE courses_registered SET $score_column =$score5 WHERE  $admission_no =$user_exam_no AND $course_id ='$column5' "; 
							       $result = mysql_query($sql); 
								   
								   $sql="UPDATE courses_registered SET $score_column =$score6 WHERE  $admission_no =$user_exam_no AND $course_id ='$column6' "; 
							       $result = mysql_query($sql); 

	
								 if($result)
								 {
								   $message_erro = "Congratulation!!!"."<br>";
								   $message_erro = "Student marks have been added";
								  }else{
										$message_erro =$message_erro ."Error in adding student scores check the scores and save again";
									  }
							 }
				break;
				default:
				         $message_erro = "Error. The mark does not insert correctly. please check the number and Save again";
				break;
				
			
			
			}
	
	}
}

?>
</body>
</html>