<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
$admission_no = 'som1/2015';
if($db_found){
	/*$sql= "select * from student_grade where admission_no ='$admission_no' ";
	$result=mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$apply_ano_grade = $row['apply_ano'];
	$comp_midwife_grade = $row['comp_midwife'];
	mysql_close($db_handle);
	//echo $apply_ano."<br>";
	//echo $comp_midwife;*/
	
	$sql = "";
	$result = mysql_query($sql);
	
	}

?>
</body>
</html>