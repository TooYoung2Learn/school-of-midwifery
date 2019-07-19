<?php 

if(isset($_POST['del'])){
	 $first_name2 =$_POST['first_name'];
	 $middle_name2 =$_POST['middle_name'];
	 $sur_name2 =$_POST['sur_name'];
	 $exam_no2 =$_POST['exam_no'];
	 $user_ident2 = $_POST['user_id'];
	 $errMassage ="";
	 
	 if(empty($first_name2) && empty($sur_name2) && empty($exam_no2) && empty($user_ident2))
	 {
		 $errMassage = "Error! You cann't update empty Query";
	 }else if(empty($first_name2) && empty($sur_name2) && empty($exam_no2) )
	 {
		  $errMassage = "Error! You cann't update empty Query";
		 }else if(empty($first_name2) && empty($sur_name2) )
		 {
			 $errMassage = "Error! You cann't update empty Query";
			 } else if(empty($first_name2) )
			 {
			   $errMassage = "Error! You cann't update empty Query";
 
			  }else if(empty($sur_name2) )
			 {
			   $errMassage = "Error! You cann't update empty Query";
 
			  }else if(empty($user_ident2) )
			 {
			   $errMassage = "Error! You cann't update empty Query";
 
			  }
	 else{
		 if($db_found)
		 {
		   $first_name2 = data_input($first_name2);
		   $middle_name2 = data_input($middle_name2);
		   $sur_name2 = data_input($sur_name2);
		   $exam_no2 = data_input($exam_no2);
		   $user_ident2 = data_input($user_ident2);
		   
		   //magic quote for variables
		   // $tag = quote_smart($tag, $db_handle);
		   $first_name2 = quote_smart($first_name2, $db_handle);
		   $middle_name2 = quote_smart($middle_name2, $db_handle);
		   $sur_name2 = quote_smart($sur_name2, $db_handle);
		   $exam_no2 = quote_smart($exam_no2, $db_handle);
		   $user_ident2 = quote_smart($user_ident2, $db_handle);
		  
			
			
			 $sql= "DELETE FROM `student_infor`  WHERE name_id =$user_ident2";
			   $query = mysql_query($sql);
			  
			    if($query)
			   {
				  $errMassage = "Congratulation! You have successfully Delete STUDENT DETAILS"; 
				  mysql_close($db_handle);
			   }else{
				   $errMassage = "Error in Your typing...";
				   mysql_close($db_handle);
				   }
		 
			 }
		 
		 }
	 
	}
?>
