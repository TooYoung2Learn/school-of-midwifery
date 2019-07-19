<?php
include("sql_student_name.php");
include("sql_year.php");
include("result_table2.php");
include("sql_grade_obtained.php");
include("sql_mark_obtained.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../css/jquery.min.js">
</script>

<script>
$(document).ready(function(){
	$('#myRow1').append('<td width="79" rowspan="6" align="center" valign="middle" > <p>&nbsp;</p> <p><strong ><span id="remark">Fail</span></strong></p> </td>');
	//var n = $('#scores').html();
	/*if(n ==2){
		$('#scores').css("color","red");
		
		}*/
//alert("html" + $('#scores').html());

$('#scores1').append($('#fscores1').val());
$('#scores2').append($('#fscores2').val());

//values for grades obtained
$('#grade1').append($('#fgrade1').val());
$('#grade2').append($('#fgrade2').val());

var text_comment = $('#remark').text();
if(text_comment == 'Pass')
{
  $('#comment').append('GOOD  PERFORMANCE, PUT  MORE EFFORT.');
}else if(text_comment=='REF')
        { 
		$('#comment').append('POOR PERFORMANCE, YOU NEED TO WORK HARDER.');
		$('#status2').css('color','red');
		}else
		{
		  $('#comment').append('POOR PERFORMANCE, YOU NEED TO WORK HARDER.'); 
		  $('#status3').css('color','red');
		}
		
		$('.desc').find('span').css('color', 'green');

	});

</script>


<style>
.borda{
	height: 28.8cm;
	width: 20cm;
	border: 2px solid #000;
	padding-left:20px;
	
}

.desc{
	display:block;
	border:2px solid lightgrey;
	padding:5px;
	margin:15px;
	color:lightgrey;
	width:500px;}

</style>
</head>

<body>
<div  class="desc"> div 
<p> p (child)
   <span> span (grandChild) </span>
   
</p>

<p> p (child)
   <span> span (grandChild) </span>
   
</p>
</div>

<div class="borda">
  <p align="center"><strong>NIGER STATE COLLEGE OF NURSING SCIENCES</strong><br />
    <strong>SCHOOL OF MIDWIFERY MINNA</strong><br />
    <strong>SECOND YEAR SECOND SEMESTER EXAMINATION</strong><br />
    <strong>RESULT SLIP</strong></p>
  <p>STUDENT NAME: <span> <?php echo $name ?></span> <br />
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YEAR: <span><?php echo $year_of_result?> </span><br />
    <u>EXAMINATION NUMBER:</u> &nbsp;<span><?php echo $admission_no;?></span>  &nbsp; &nbsp&nbsp;&nbsp;;                                SET: <span> <?php echo $set_of_result?></span></p>
 <?php 
  echo $tableStart;

	  echo $tableHead;
	   $serial_no =0;
	   include("sql_courses.php");
	   //include("sql_grade_obtained.php");
	  while($row=mysql_fetch_assoc($result))
	  {
	    $serial_no++;
		$course_name = $row['course_name'];
			//change the name to upper case
		$course_name = strtoupper($course_name);
		
				//printing names
			
			//echo $grade_apply_ano."<br>";
			//echo $grade_comp_mid."<br>";
			//echo $score_apply_ano."<br>";
			//echo $score_comp_mid."<br>";
		
		 echo $rowStart .$rowIdStart.$serial_no.$rowIdEnd;
		  echo $numCellStart. $serial_no.$numCellEnd;
		 //printing the course name
		 echo $cell_1_Start.$course_name.$cell_1_End ;
		//
		 echo $cell_2_Start.$serial_no.$arttributScore.$cell_2_End;
		 echo $cell_3_Start.$serial_no.$arttributGrade.$cell_3_End;
		
		 echo $rowEnd; 
		  }
		// echo $remarkContentCellStart."pass".$remarkContentCellEnd;
		 
		  echo $tableEnd;
		  mysql_close($db_handle);
 ?>
  <p>LETTER GRADE                   DESCRIPTION  GENERAL                    &nbsp;&nbsp;&nbsp;&nbsp; REMARKS <br />
    A                                              Distinction  – 80% and above                     &nbsp;&nbsp;<strong>&nbsp;&nbsp;<span id="status1">Passed</span></strong><br />
    B                                             Upper  Credit 70%-79.9%                         &nbsp;&nbsp;&nbsp;&nbsp;<span id="status2">Referred</span><strong></strong><br />
    C                                             Lower  Credit – 60%-69.9%                       &nbsp;&nbsp;<span id="status3">Fail-Repeat</span><br />
    D                                             Pass                51%-59.9%                         &nbsp;&nbsp;<span id="status4"> Fail –Withdrawal</span><br />
    E                                              Pass                      50%<br />
  F                                              Fail                      -49%and below </p>
<p>&nbsp;</p>
  <p>Provost  Comment:       <strong><u> <span id="comment"></span></u></strong><u> </u></p>
  <p>&nbsp;</p>
  <p>Examination  Officer Sign …………………….. Provost Sign ……………………..<br />
  </p>
</div>
<form name="score_form">
<input type="hidden" id="fscores1" value="<?php echo $apply_score;?>" />
<input type="hidden" id="fscores2" value="<?php echo $comp_midwife_score;?>" />
<input type="hidden" id="fscores3" value="" />
<input type="hidden" id="fscores4" value="" />
<input type="hidden" id="fscores5" value="" />
</form>

<form name="grade_form">
<input type="hidden" id="fgrade1" value="<?php echo $apply_ano_grade;?>" />
<input type="hidden" id="fgrade2" value="<?php echo $comp_midwife_grade;?>" />
<input type="hidden" id="fgrade3" value="" />
<input type="hidden" id="fgrade4" value="" />
<input type="hidden" id="fgrade5" value="" />
</form>
</body>

</html>
