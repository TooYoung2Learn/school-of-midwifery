<?php 
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{
include("connection.php");
include("apply_color.php");

$courses_title = array();


if($db_found){
	 $sql = "select * from student_score";
	 $result = $db_found->query($sql);
	 $colum_total = mysqli_num_fields($result);
	$user_colum= $colum_total -2;
	 $bool_total_column = mysqli_field_seek($result,2);
      
	  $i =0;
	 while($i < $user_colum){
					      $colum_names = mysqli_fetch_field($result);
						  
						  if(!$colum_names)
						  {
							echo "error 22";
                          }
                             $courses_title[$i] = $colum_names->name;
			                 $i++;
			   }
	}
	

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>

<script src="../css/bootstrap.min.js" > </script>
<style>
.bold_text {
	font-weight:bold;
	color:#000;	
	      }
		  
.red_text{
	font-weight:bold;
	color:#F00;
	}

</style>

	


<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="submitform()">

<div class="container"> 
<div class="row">
<p class="text-capitalize text-center h1 "> Hospital final  year qualifying Exams <br>
Basic set 2011 midwives, December, 2015
 </p>
 
 </div>
 <div class="row">
 <div class="col-xs-12">
<?php 
$tableStart='<table border="1" cellspacing="0" cellpadding="0" align="left" width="774" class="table table-hover">';
$tableEnd = "</table>";
$tableHeadStart = "<tr>";
$headCellStart ="<td>";
$headCellEnd="</td>";

$tableUserColumStart='<td width="60" valign="top"><p><strong id="column_name';
$headCellAttribut= '">';
$tableUserColumEnd='</strong></p></td>';

$tableHeadEnd ="</tr>";

$tableRowStart="<tr>";
$tableRowEnd = "</tr>";
$tableCellSta = '<td width="49" valign="top"><p><strong>';
$tableCellEnd = '</strong><strong> </strong></p></td>';
//cell for the remark with id attach to it
$tableCellRamark = '<td width="49" valign="top"><p><strong id="remark">';

$tableCellScores = '<td width="49" valign="top"><p><strong id="scores">';

$tableHeadSerialStart ='<th width="49" valign="top"><p><strong>';
$tableHeadSerialEnd='</strong><strong> </strong></p></th>';
$tableHeadNameStart='<th width="225" valign="top"><p><strong>';
$tableHeadNameEnd='</strong></p></th>';
$tableHeadExamStart='<th width="130" valign="top"><p><strong>';
$tableHeadExamEnd='</strong></p></th>';

$tableHeadRemarkStart='<th width="70" valign="top"><p><strong>';
$tableHeadRemarkEnd='</strong></p></th>';


echo $tableStart;
	   echo $tableHeadStart;

	   echo $tableHeadSerialStart."S/N".$tableHeadSerialEnd;
	   echo $tableHeadNameStart."Names".$tableHeadNameEnd;
	   echo $tableHeadExamStart."Exams No.".$tableHeadExamEnd;

        if($db_found){
	  $sql = "select * from student_score";
	 $result = $db_found->query($sql);
	 $colum_total = mysqli_num_fields($result);
	$user_colum= $colum_total -2;
	 $bool_total_column = mysqli_field_seek($result,2);
	 
	   $i = 0;
	   $seria=1;
	   	    while($i < $user_colum){
					      $colum_names = mysqli_fetch_field($result);
						  
						  if(!$colum_names){
							echo "error 22";
							}
					echo $tableUserColumStart.$i.$headCellAttribut .$colum_names->name.$tableUserColumEnd ;
					$i++;
					
		}
		echo $tableHeadRemarkStart."Remark".$tableHeadRemarkEnd;
		echo $tableHeadEnd;
		
		    $column0 = $courses_title[0];
			$column1 = $courses_title[1];
			$column2 = $courses_title[2];
			$column3 =  $courses_title[3];
			$column4 = $courses_title[4];
//			$column5 =  $courses_title[5];
//			$column6 =  $courses_title[6];
		
		if($db_found){
	
	switch($user_colum)
	{
	   case 2:
	          $sql = "SELECT si.name_id, si.first_name, si.middle_name, si.sur_name, si.admission_no,
			  sc.$column0, sc.$column1
			 from student_infor  si
			 join student_score sc
			 on sc.admission_no = si.admission_no
					 
					 ";
	   break;
	   case 3:
	   	   
			$sql = "SELECT si.name_id, si.first_name, si.middle_name, si.sur_name, si.admission_no,
			  sc.$column0, sc.$column1, sc.$column2
			 from student_infor  si
			 join student_score sc
			 on sc.admission_no = si.admission_no
					 
					 ";
						 
	   break;
	   case 4:
	          $sql = "SELECT si.name_id, si.first_name, si.middle_name, si.sur_name, si.admission_no,
			  sc.$column0, sc.$column1, sc.$column2, sc.$column3
			 from student_infor  si
			 join student_score sc
			 on sc.admission_no = si.admission_no
					 
					 ";
	   break;
	   case 5:
	         $sql = "SELECT si.name_id, si.first_name, si.middle_name, si.sur_name, si.admission_no,
			  sc.$column0, sc.$column1, sc.$column2, sc.$column3, sc.$column4, si.remark
			 from student_infor  si
			 join student_score sc
			 on sc.admission_no = si.admission_no
					 
					 ";
	   break;
	   case 6:
	   
	        $sql = "SELECT si.name_id, si.first_name, si.middle_name, si.sur_name, si.admission_no,
			  sc.$column0, sc.$column1, sc.$column2, sc.$column3, sc.$column4, sc.$column5, si.remark
			 from student_infor  si
			 join student_score sc
			 on sc.admission_no = si.admission_no
			 order by si.sur_name
			 					 
					 ";
	   break;
	   case 7:
	         $sql = "SELECT si.name_id, si.first_name, si.middle_name, si.sur_name, si.admission_no,
			  sc.$column0, sc.$column1, sc.$column2, sc.$column3, sc.$column4, sc.$column5, si.remark
			 from student_infor  si
			 join student_score sc
			 on sc.admission_no = si.admission_no
					 
					 ";

	   break;
	   default:
	        echo "No information available for this student";
	   break;
	 }
	  
	                $result = $db_found->query($sql);
					$numb= 0;
					if($result){
					 while($row = ($result->fetch_row())){
						 $numb++;
						  echo $tableRowStart;
						  echo  $tableCellSta. $numb.$tableCellEnd;
						   echo $tableCellSta. $row[3]." ";
						    echo  $row[2]." ";
							 echo $row[1].$tableCellEnd;
							  echo $tableCellSta. $row[4].$tableCellEnd;
							  
							  //applying the colors to the scores below 49
							  $score1 = tableCellScore($row[5]) ;
							  
							  $score2 = tableCellScore($row[6]) ;
							  $score3 = tableCellScore($row[7]);
							  $score4 = tableCellScore($row[8]) ;
							  $score5 = tableCellScore($row[9]) ;
//							  $score6 = tableCellScore($row[10]) ;

                                $remark = ucwords($row[10]);

							  $remark = remark_font($remark);


							   echo  $score1.$tableCellEnd;
							    echo  $score2.$tableCellEnd;
								 echo  $score3.$tableCellEnd;
								 echo  $score4.$tableCellEnd;
								 echo  $score5.$tableCellEnd;
//								 echo   $score6.$tableCellEnd;
								  echo $remark.$tableCellEnd;
								 echo $tableRowEnd;
						  
						 }
					
					}else{
							echo "error in coding"; 
							 }
			

								
	}
echo $tableEnd;

}
mysqli_close($db_found);
?>


<?php 

?>

</div>
</div>
<p class="col-xs-12">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </p>
   <div class=" col-xs-12 text-center"> 
      <a href="adminPannel.php" class="btn btn-primary btn-lg"> Home</a> &nbsp; &nbsp;&nbsp;
      <a href="#" class="btn  btn-info btn-lg">Print </a>
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