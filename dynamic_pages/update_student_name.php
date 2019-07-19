<?php 

if(isset($_POST['update'])){
	 $first_name =$_POST['first_name'];
	 $middle_name =$_POST['middle_name'];
	 $sur_name =$_POST['sur_name'];
	 $exam_no =$_POST['exam_no'];
	 $user_ident = $_POST['user_id'];
	 $errMassage ="";
	 
	 if(empty($first_name) && empty($sur_name) && empty($exam_no) && empty($user_ident))
	 {
		 $errMassage = "Error! You cann't update empty Query";
	 }else if(empty($first_name) && empty($sur_name) && empty($exam_no) )
	 {
		  $errMassage = "Error! You cann't update empty Query";
		 }else if(empty($first_name) && empty($sur_name) )
		 {
			 $errMassage = "Error! You cann't update empty Query";
			 } else if(empty($first_name) )
			 {
			   $errMassage = "Error! You cann't update empty Query";
 
			  }else if(empty($user_ident) )
			 {
			   $errMassage = "Error! You cann't update empty Query";
 
			  }else if(empty($sur_name) )
			 {
			   $errMassage = "Error! You cann't update empty Query";
 
			  }
	 else{
		 if($db_found)
		 {
		   $first_name = data_input($first_name);
		   $middle_name = data_input($middle_name);
		   $sur_name = data_input($sur_name);
		   $exam_no = data_input($exam_no);
		   $user_ident = data_input($user_ident);
		   
		   //magic quote for variables
		   // $tag = quote_smart($tag, $db_handle);
		   $first_name = quote_smart($first_name, $db_handle);
		   $middle_name = quote_smart($middle_name, $db_handle);
		   $sur_name = quote_smart($sur_name, $db_handle);
		   $exam_no = quote_smart($exam_no, $db_handle);
		   $user_ident = quote_smart($user_ident, $db_handle);
		  
			
			
			 $sql= "UPDATE student_infor  SET first_name =$first_name, middle_name = $middle_name,
			        sur_name = $sur_name, admission_no= $exam_no
					  WHERE name_id =$user_ident";
			   $query = mysql_query($sql);
			   //$rows = mysql_fetch_assoc($query);
			   //$row_num = mysql_num_rows($query);
			   if($query)
			   {
				  $errMassage = "Congratulation! You have successfully update STUDENT DETAILS"; 
				  mysql_close($db_handle);
			   }else{
				   $errMassage = "Error in Your typing...";
				   mysql_close($db_handle);
				   }
		 
			 }
		 
		 }
	 
	}
?>
