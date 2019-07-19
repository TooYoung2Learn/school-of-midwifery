<?php 
include("connection.php");

$courses_name_query = array();
if($db_found)
{
	
	 $sql ="select  * from courses ";
	
		$crs_id =0;	
			
		$result =  $db_found->query($sql);
		while ($rows = $result->fetch_array())
		{
		  
		  $courses_name_query[$crs_id] = $rows['course_id'];
		  
		  $crs_id++;
		}
	  
	
}

// total number of courses to registered
	 $colum_total = count($courses_name_query);


?>