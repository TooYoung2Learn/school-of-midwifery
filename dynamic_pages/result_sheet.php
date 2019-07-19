<?php
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../css/jquery.min.js">
</script>

<style>
.desc{
	color:#F00;
	}
	
.bold_text {
	font-weight:bold;
	color:#000;	
	      }
		  
.red_text{
	font-weight:bold;
	color:#F00;
	}

.divMargin{
}

</style>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

<body >
<div class="container">

<div class="row">
<div class="col-xs-2">
</div>
<div class="col-xs-8 divMargin"> 
<?php 


$divStart ="<div style='height:28.8cm; width:20cm; border:2px solid #000; margin-bottom:20px; padding-left:30px; margin-top:20px;'>";

$divEnd = "</div>";



include("connection.php");
include("table_practice.php");
include("sql_year.php");
include "sql_courses1.php";
include('apply_color.php');
include('sql_courses.php');
include('sql_courses2.php');
include('sql_courses3.php');
include('sql_courses4.php');
include('sql_courses5.php');
include('sql_courses6.php');



if($db_found){
	
	        $sql = "SELECT * FROM student_record";
				 // $serial_no =0;
			 $result = $db_found->query($sql);
			 $row_num = ($result->num_rows);
			 while($row1 = $result->fetch_array()){
				 // $serial_no++;
				 
				 //$serial_no = $row1['name_id'];
				 $name = $row1['sur_name']." ". $row1['middle_name']." ".$row1['first_name'];
				 $admission_no = $row1['admission_no'];
				 $remark_user = $row1['remark'];
				 
				 $userRemark_sheet = RemarkSheet($remark_user);
				 
				 
				 $gradeInformation = scoreApply($remark_user);
				 $pro_comment = $row1['comment'];
				 
				 $score1 = $row1['Score1'];
				 $score1 = thirdCellScore($score1);
				 $score2 = $row1['Score2'];
				 $score2 = thirdCellScore($score2);
				 $score3 = $row1['Score3'];
				 
				 $score3 = thirdCellScore($score3);
				 $score4 = $row1['Score4'];
				 $score4 = thirdCellScore($score4);
				 $score5 = $row1['Score5'];
				 $score5 = thirdCellScore($score5);
//				 $score6 = $row1['Score6'];
//				 $score6 = thirdCellScore($score6);
				 
				 $grade1 =  $row1['grade1'];
				 $grade1 = FourthCellGrade($grade1);
				 $grade2 = $row1['grade2'];
				 $grade2 = FourthCellGrade($grade2);
				 $grade3 = $row1['grade3'];
				 $grade3 = FourthCellGrade($grade3);
				 $grade4 =  $row1['grade4'];
				 $grade4 = FourthCellGrade($grade4);
				 $grade5 = $row1['grade5'];
				 $grade5 = FourthCellGrade($grade5);
//				 $grade6 = $row1['grade6'];
//				 $grade6 = FourthCellGrade($grade6);

				 // courses list
				 $course1 = strtoupper($course_title1);
				 $course2 = strtoupper($course_title2);
				 $course3 = strtoupper($course_title3);
				 $course4 = strtoupper($course_title4);
				 $course5 = strtoupper($course_title5);
//				 $course6 = strtoupper($course_title6);
				 
				 //page arrangement
				 //printing the first title
$firstParagraph ="
<p align='center'><strong>&nbsp;</strong></p>
<p align='center'><strong>&nbsp;</strong></p>
<p align='center'><strong>&nbsp;</strong></p>

<p align='center' > <strong> NIGER STATE COLLEGE OF NURSING SCIENCES</strong><br />
    <strong>SCHOOL OF MIDWIFERY MINNA</strong><br />
    <strong>SECOND YEAR SECOND SEMESTER EXAMINATION</strong><br />
    <strong>RESULT SLIP</strong></p>
  <p>STUDENT NAME: <span> ".$name ."</span> <br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YEAR: <span>". $year_of_result." </span><br />
    <u>EXAMINATION NUMBER:</u> &nbsp;<span> ".$admission_no."</span>  &nbsp; &nbsp&nbsp;&nbsp;                                SET: <span>  ".$set_of_result."</span></p>
";


$empty_graph="<p align='center'><strong>&nbsp;</strong></p>";

$provostComment='  <p>Provost  Comment:       <strong><u> <span> '.$pro_comment.'</span></u></strong><u> </u></p>
  <p>&nbsp;</p>
  <p>Examination  Officer Sign …………………….. Provost Sign ……………………..<br />
  </p>
';


$Row1 = $rowStart;
$Row1 = $Row1.$firstCellStart.$no1.$firstCellEnd;
$Row1 = $Row1.$secondCellStart.$course1 .$secondCellEnd;
$Row1 = $Row1.$score1. $thirdCellEnd;
$Row1 = $Row1.$grade1.  $fourtCellEnd;
$Row1 = $Row1. $userRemark_sheet. $fivetCellEnd;
$Row1 = $Row1.$rowEnd;


$Row2 = $rowStart;
$Row2 = $Row2.$firstCellStart.$no2.$firstCellEnd;
$Row2 = $Row2.$secondCellStart.$course2 .$secondCellEnd;
$Row2 = $Row2.$score2 .$thirdCellEnd;
$Row2 = $Row2.$grade2. $fourtCellEnd;
$Row2 = $Row2.$rowEnd;

$Row3 = $rowStart;
$Row3 = $Row3.$firstCellStart.$no3.$firstCellEnd;
$Row3 = $Row3.$secondCellStart.$course3 .$secondCellEnd;
$Row3 = $Row3. $score3.$thirdCellEnd;
$Row3 = $Row3. $grade3. $fourtCellEnd;
$Row3 = $Row3.$rowEnd;

$Row4 = $rowStart;
$Row4 = $Row4.$firstCellStart.$no4.$firstCellEnd;
$Row4 = $Row4.$secondCellStart.$course4 .$secondCellEnd;
$Row4 = $Row4.$score4. $thirdCellEnd;
$Row4 = $Row4. $grade4. $fourtCellEnd;
$Row4 = $Row4.$rowEnd;

$Row5 = $rowStart;
$Row5 = $Row5.$firstCellStart.$no5.$firstCellEnd;
$Row5 = $Row5.$secondCellStart.$course5 .$secondCellEnd;
$Row5 = $Row5.$score5. $thirdCellEnd;
$Row5 = $Row5. $grade5. $fourtCellEnd;
$Row5 = $Row5.$rowEnd;

//$Row6 = $rowStart;
//$Row6 = $Row6.$firstCellStart.$no6.$firstCellEnd;
//$Row6 = $Row6.$secondCellStart.$course6 .$secondCellEnd;
//$Row6 = $Row6. $score6.$thirdCellEnd;
//$Row6 = $Row6. $grade6. $fourtCellEnd;
//$Row6 = $Row6.$rowEnd;





				 
				  echo $divStart;
				  echo $firstParagraph;
				  echo $empty_graph;
				  echo $tableStart;
				  echo $tableHeader;
				   echo $Row1;
				   echo $Row2;
				   echo $Row3;
				   echo $Row4;
					echo $Row5;
					echo $Row6;

				
				  
				  echo $tableEnd;
				  echo $empty_graph;
				  
				  echo $gradeInformation;
				  echo $empty_graph;
				  echo $provostComment;
				  
				  echo $divEnd;	
				  
								 } 
				 mysqli_close($db_found);
	         }


?>
</div>
<div class="col-xs-2"> </div>
</div>
</div>
</body>
</html>
<?php
}else
{
header("Location:../index.php");
}

?>