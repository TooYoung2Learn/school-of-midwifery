<?php

if(isset($_POST['update_course']))
  {
	       $course_name3 ='';
			$acronym3 = '';
			$errMassage2 = '';


		   
       	  $course_name3 = $_POST['course_name'];
 		  $acronym3 = $_POST['acronym'];
  		  $course_id = $_POST["course_id"];
   
      if(empty($course_name3) && empty($acronym3) && empty($course_id))
	  {
	    $errMassage2 = "The field con not be empty";
	   }
      else if(empty($course_name3))
	  {
	    $errMassage2 = "The field con not be empty";
	  }
	  else if(empty($acronym3))
	  {
		 $errMassage2 =  "The field con not be empty";  
	  } 
	  else if(empty($course_id))
	  {
		 $errMassage2 =  "The field con not be empty";  
	  }
	  else
	  {
			 $course_name3 = data_input($course_name3 );
			 $acronym3 = data_input($acronym3);
			 $course_id = data_input($course_id);
					   
			 $course_name3 = strtolower($course_name3);
			 $acronym3  = strtolower($acronym3);
			 
			 if($db_found)
			 {
			   
			    $course_name3 = quote_smart($course_name3, $db_handle);
				$acronym3 = quote_smart($acronym3, $db_handle);
		     	$course_id = quote_smart($course_id, $db_handle);
			    				
				 $sql = "UPDATE courses SET course_name= $course_name3, course_id =$acronym3
					          where `courses`.`s/n` = $course_id";
				 $query= mysql_query($sql);
				
				 
				 if($query)
				 {
					 $errMassage2 =  'Congratulation! You have successful Update the Course Details';
					 mysql_close($db_handle);
				 }
				 else
				 {
				   $errMassage2 =  "Sorry! The updating is not successful";
				   mysql_close($db_handle);
				 }
						 
			 }
			 
	  }

  
  }

?>