<?php 
include("connection.php");
if($db_found)
{
	
	$sql = "SELECT * FROM courses ";
	$query= $db_found->query($sql);
	$booleanSecond = $query->data_seek(1);
	$result = ($query->fetch_row());
	if($query)
	{
	 $course_title2 = $result[2];
	 
	}
}
?>