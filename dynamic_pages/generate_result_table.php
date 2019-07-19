<?php
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{


 include("connection.php");
    include "admin_fns.php";

?>


<!DOCTYPE html>
<html lang="en"> 
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<style>
.downbut{
	margin-top:40px;}
</style>

</head>

 
<body>
<div class="container backgrondAll">
<div class="row">
<div class="col-xs-1"> </div>
<div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<?php left_side_bar(); ?>
<div class="col-xs-8 well well-lg welborda"> 
<!--inner button for generate view-->

<div class="row">
<div class="col-xs-12 text-center">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" >
<?php
if($db_found){
	             $sql = "select * from student_score";
				 $result2 = $db_found->query($sql);
				 $colum_total = mysqli_num_fields($result2);
				 $user_colum= $colum_total -2;
				 $bool_total_column = mysqli_field_seek($result2,2);
	              $val=0;
				   while( $val< $user_colum){
					      $colum_names2 = mysqli_fetch_field($result2);
						  
						  if(!$colum_names2){
							echo "error 22";
							}
				
						
						echo "<input type='hidden' name='column_name".$val."' value='$colum_names2->name' >"."<br>";
					
				
			   $val++;
			   }
			   echo "<input type='hidden' name='column_count' value='$user_colum' >";
			
			   
}

?>

<input type="submit" name="result" value="Generate Result"  class="btn btn-info btn-lg" />
</form>


</div>

</div>
<!-- the two down button -->
<div class="row downbut">
<div class="col-xs-6"> 
<div class="row">
<form class="form-horizontal" method="post" action="result_sheet_one.php">
<div class="form-group">
<label for="exam" class="control-label col-xs-4"> Examination Number:</label>
<div class="col-xs-8">
<input type="text" id ='exam' class="form-control" name="exam_no2" value="" /><br>
</div>
</div> 

<div class="col-xs-offset-4 col-xs-8">
<input type="submit" name="one_result" value=" Generate One " class="btn btn-success btn-lg">  
</div>
</form>

</div>

</div>
<!-- generate all button-->
<div class="col-xs-6">
<a href="result_sheet.php" class="btn btn-warning btn-lg" > Generat All Result Sheet</a>
 </div>

</div>

</div>

<?php right_side_data();?>
 
</div>

</div>
<?php foot_data();?>
<?php 
 if(isset($_POST['result'])){
	 
			 $column_one = $_POST['column_name0'];
			$column_two = $_POST['column_name1'];
			$column_three = $_POST['column_name2'];
			$column_four = $_POST['column_name3'];
			$column_five = $_POST['column_name4'];
			$column_six = $_POST['column_name5'];
			$column_seven = $_POST['column_name6'];
			
			$column_count = $_POST['column_count'];
			
			if($db_found){
				
				switch($column_count)
				{
				 	case 6:
					 $sql ="create or replace view student_record as
					       SELECT si.sur_name, si.middle_name, si.first_name, si.admission_no, si.remark, si.comment, 
						   sg.$column_one AS grade1, sg.$column_two as grade2, sg.$column_three as grade3, sg.$column_four as grade4, sg.$column_five as grade5, sg.$column_six as grade6,
						   sc.$column_one as Score1, sc.$column_two as Score2, sc.$column_three as Score3, sc.$column_four as Score4, sc.$column_five as Score5, sc.$column_six as Score6
							FROM student_infor si
							JOIN student_grade sg
							ON sg.admission_no = si.admission_no
							JOIN student_score sc
							ON sc.admission_no = sg.admission_no
							";	
					break;
					
					case 7:
					   $sql ="create or replace view student_record as
							SELECT si.name_id, si.sur_name, si.middle_name, si.first_name, si.admission_no, si.remark, si.comment 
							       sg.$column_one AS grade1, sg.$column_two as grade2, sg.$column_three as grade3,
								   sg.$column_four AS grade4, sg.$column_five AS grade5, sg.$column_six AS grade6, sg.$column_seven AS grade7
								    sc.$column_one AS Score1, sc.$column_two AS Score2, sc.$column_three AS Score3,
									sc.$column_four AS Score4, sc.$column_five AS Score5, sc.$column_six AS Score6 sc.$column_seven AS Score7
							FROM student_infor si
							JOIN student_grade sg
							ON sg.admission_no = si.admission_no
							JOIN student_score sc
							ON sc.admission_no = sg.admission_no
							";
			
					break;
					default:
					echo "Sorry! the Result can not be generated at this level Pls reduce some courses";
					break;

				  }
				  
				   $result = $db_found->query($sql);
					
					if($result){
						echo "Congratulation the result are Ready for Printing";
					 mysqli_close($db_found);
					}else{
						echo "Sorry! no result was generated";
						 mysqli_close($db_found);
						}

								
				}
			

 }

?>

<?php
}else
{
header("Location:../index.php");
}

?>