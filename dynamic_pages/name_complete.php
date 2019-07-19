
<?php
 require 'connection.php';
	$q = $_GET['q'];
	//$q = 'p';
	if($db_found){
		}
	$sql="SELECT admission_no FROM student_infor WHERE admission_no LIKE '%$my_data%' ";
	$result = mysql_query($sql);
	
	if($result)
	{
		while($row=mysql_fetch_assoc($result))
		{
			echo $row['admission_no']."\n";
		}
	}
?>
