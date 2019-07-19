
<?php



if(isset($_POST['save']))
  {

	  
   $course_name2 = $_POST['course_name'];
   $acronym2 = $_POST['acronym'];
   
      if(empty($course_name2))
	  {
	   $errMassage3 = "The field con not be empty";
	  }else if(empty($acronym2))
	          {
				 $errMassage3 = "The field con not be empty";  
			   }	  else{
		           $course_name2 = data_input($course_name2 );
				   $acronym2 = data_input($acronym2);
				   $course_name2 = strtolower($course_name2);
				   $acronym2  = strtolower($acronym2);
				   
				    if($db_found)
				     {
					  $course_name2 = htmlentities($course_name2);
				      $acronym2 = htmlentities($acronym2);
					  $course_name2 = trim($course_name2, "'");
					  $acronym2 = trim($acronym2, "'");
					 					  
					  $sql = "SELECT  course_name from courses
					          where course_name= '$course_name2'";
						  $query= $db_found->query($sql);
						  $result = ($query->fetch_array());
						  $row_num = ($query->num_rows);
						  
						  if($query)
						    {
							 if($row_num>0)
							   {
							    $errMassage3 = "The course name have been registered";
								$db_handle->close();
							   }else{
								  $sql = "INSERT INTO courses (course_id, course_name) 
								           VALUES ('$acronym2', '$course_name2' )";
								  
						           $query =$db_found->query($sql);
								   
				                    							   
								   				
								   if($query)
								      {
									   $errMassage3 = "Thank You for Course Registration.";
                                          $db_found->close();

									  }else{
										    $errMassage3 = "There is erro in your typing please check again";
                                       $db_found->close();
										   
										   }
								   
								   }
							 }
						  
					 }
				  
				
						 
				  
		     
		   }
  }
 ?>
