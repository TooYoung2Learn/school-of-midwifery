<?php 

ob_start();
session_start();
session_destroy();


?>

<?php 
include('connection.php');
include('smart_method.php');
$error_mess = '';


if(isset($_POST['submit']))
{
	$user_id = $_POST['user_id'];
	$pass = $_POST['pass'];
	
	//count user input
	$user_len = strlen($user_id);
	$pass_len = strlen($pass);
	
	 if(empty($user_id) && empty($pass))
	 {
		 $error_mess = "the field cannot be empty";
	 }else if(empty($user_id))
	 {
		 $error_mess = "the field cannot be empty"; 
	 }else if(empty($pass))
	 {
		  $error_mess = "the field cannot be empty";
	 }else if ($user_len >10 )
	 {
	   $error_mess = "the length is too much";
	 }else if ($pass_len > 10)
	 {
	   $error_mess = "the length is too much";
	 }else if (($pass_len >10) && ($user_len >10))
	 {
	  $error_mess = "the length is too much";
	  }
	 else 
	 {
		 $user_id = data_input($user_id);
		 $pass = data_input($pass);
		 
		 
		   if($db_found)
		   {
//		        $user_id = quote_smart($db_handle, $user_id);
//				$pass  = quote_smart($db_handle, $pass);

				$user_id = htmlentities($user_id);
				$pass = htmlentities($pass);


				$sql = "SELECT user_name, user_id FROM admin WHERE user_name = '$user_id ' AND user_id = '$pass' ";
				$query = $db_found->query($sql);
				$row_num = ($query->num_rows);
				$field = ($query->fetch_array());
				
				if($query)
				{
				  if($row_num ==1)
				  {
					  session_start();
					  $_SESSION['user_id'] = $field['user_id'];
				    mysqli_close($db_handle);
					header('Location:dynamic_pages/adminPannel.php');
				  }else
				  {
					   session_start();
					  $_SESSION['user_id'] = '';
					  header('Location:index.php');

				    mysqli_close($db_handle);
				  }
				}
		   }
	 }

}
?>

<?php
ob_flush();
?>
