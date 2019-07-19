<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function student_grade($grade)
{
	$actual_grade ='';
	if($grade >= 80)
	{
		$actual_grade = 'A';
	}else if ($grade >= 70)
	{
		$actual_grade = 'B';
	}else if($grade >= 60)
	{
		$actual_grade = 'C';
	}else if($grade >= 51)
	{
	  $actual_grade = 'D';
	}else if($grade == 50)
	{
	   $actual_grade = 'E';
	}else{
		   $actual_grade ='F';
		 }
		 return $actual_grade;
}


echo student_grade(23); 

?>


</body>
</html>