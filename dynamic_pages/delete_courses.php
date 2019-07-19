<?php

$course_name4 ='';
$acronym4 = '';
$errMassage = '';

if(isset($_POST['del_course']))
  {
       	  $course_name4 = $_POST['course_name'];
 		  $acronym4 = $_POST['acronym'];
  		  $course_id2 = $_POST["course_id"];
   
      if(empty($course_name4) && empty($acronym4) && empty($course_id2))
	  {
	    $errMassage = "The field con not be empty";
	   }
      else if(empty($course_name4))
	  {
	    $errMassage = "The field con not be empty";
	  }
	  else if(empty($acronym4))
	  {
		 $errMassage = "The field con not be empty";  
	  } 
	  else if(empty($course_id2))
	  {
		 $errMassage = "The field con not be empty";  
	  }
	  else
	  {
			 $course_name4 = data_input($course_name4 );
			 $acronym4 = data_input($acronym4);
			 $course_id2 = data_input($course_id2);
					   
			 $course_name4 = strtolower($course_name4);
			 $acronym4  = strtolower($acronym4);
			 
			 if($db_found)
			 {
			   
			    $course_name4 = quote_smart($course_name4, $db_handle);
				$acronym4 = quote_smart($acronym4, $db_handle);
		     	$course_id2 = quote_smart($course_id2, $db_handle);
			    $course_name4 = trim($course_name4, "'");
				$acronym4 = trim($acronym4, "'");
				
								
				 $sql= "DELETE FROM `courses`  WHERE  `courses`.`s/n` = '$course_id2' ";
				 $query= mysql_query($sql);
				 
				 
				 if($query)
				 {
					 $errMassage = 'Congratulation! You have successful DELETE the Course Details';
					 mysql_close($db_handle);
				 }
				 else
				 {
				   $errMassage = "Sorry! The DELETING is not successful";
				   mysql_close($db_handle);
				 }

						 
			 }
			 
	  }

  
  }

?>