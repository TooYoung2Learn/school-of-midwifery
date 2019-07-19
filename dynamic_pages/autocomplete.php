<?php
 require 'connection.php';
	$q = $_GET['q'];
	//$q = 'p';
	if($db_found){
		}
	$sql="SELECT admission_no FROM student_infor WHERE admission_no LIKE '%$q%' ";
	$result = $db_found->query($sql);
	
	if($result)
	{
		while($row=($result->fetch_array()))
		{
			echo $row['admission_no']."\n";
		}
	}
?>