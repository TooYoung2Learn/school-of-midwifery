<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include("connection.php");

if($db_found){
	$sql = "select * from student_infor 
	        where admission_no ='som1/2015' ";
	$result =mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$row_num = mysql_num_rows($result);
	if($result)
	{
	 
		$name1= $row['first_name'];
		$name2 = $row['middle_name'];
		$name3 = $row['sur_name'];
		$admission_no = $row['admission_no'];
		$name = $name3." ". $name2. " ".$name1;
		$name= strtoupper($name);
		$admission_no = strtoupper($admission_no);
	    mysql_close($db_handle);
 
		
	}
		
	}
?>
</body>
</html>