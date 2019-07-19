<?php 
include("connection.php");
if($db_found)
{
	
	$sql = "SELECT * FROM courses ";
	$query= $db_found->query($sql);
	$booleanSecond = ($query->data_seek(4));
	$result = ($query->fetch_row());
	if($query)
	{
	 $course_title5 =  $result[2];
	 
	}
}
?>