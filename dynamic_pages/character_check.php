

<?php
include("connection.php");
include('smart_method.php');



$user_scores[] = array();
$course_reg[] = array();
$student_name[] =array();
$student_grade = array();
$admiss_no= array();

if($db_found)
{
	$query ="SELECT   cr.admission_no, cr.scores, si.sur_name, si.middle_name, si.first_name, c.course_id, c.course_name
	FROM courses_registered cr
	JOIN student_infor si
	ON si.admission_no = cr.admission_no
	JOIN courses c
	ON c.course_id = cr.course_id
	 ";
	$result =  mysql_query($query);
	//$rows = mysql_fetch_assoc($result);
	
	if($result)
	{
		$xi=0;
		echo "<table border='1'>";			  
		while($rows = mysql_fetch_assoc($result)){
			  $name = $rows['sur_name']." ".$rows['middle_name']." ".$rows['first_name'];
			  $exam_no = $rows['admission_no'];
			   
			  $course_id = $rows['course_id']; 
		      $couses = $rows['course_name'];
			  $course_reg[$xi] = $couses;
		      $scores = $rows['scores'];
			  $user_scores[$exam_no] = $scores;
			  $stud_grade = student_grade($scores);
			  $student_grade[$xi] = $stud_grade;
			  
			 
	        $xi = $xi + 1;
	 	}
	 mysql_close($db_handle);
	
	}
	//for total student registered
	$total_student = $xi;
	
	
	
}


$mark = array(


);







?>