<?php
 require 'connection.php';
	$q = $_GET['q'];
	//$q = 'p';
	if($db_found){
		}
	$sql="SELECT course_name FROM courses WHERE course_name LIKE '%$my_data%' ";
	$result = mysql_query($sql);
	
	if($result)
	{
		while($row=mysql_fetch_assoc($result))
		{
			echo $row['course_name']."\n";
		}
	}
?>