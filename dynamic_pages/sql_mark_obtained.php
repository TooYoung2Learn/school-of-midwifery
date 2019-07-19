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
	$sql= "select * from student_score where admission_no ='$admission_no' ";
	$result=mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$apply_score = $row['apply_ano'];
	$comp_midwife_score = $row['comp_midwife'];
	mysql_close($db_handle);
	//echo $apply_ano."<br>";
	//echo $comp_midwife;
	
	$tableStart = '<table border="1" cellspacing="0" cellpadding="0" align="left" width="774">';
	$tableEnd ='</table>';
	
	$tableHeadStart='<tr>';
	$tableHeadEnd='</tr>';
	
	$tableHeadSerialStart ='<td width="48" valign="top"><p><strong>';
	$tableHeadSerialEnd='</strong><strong> </strong></p></td>';
	$tableHeadNameStart='<td width="193" valign="top"><p><strong>';
	$tableHeadNameEnd='</strong></p></td>';
	$tableHeadExamStart='<td width="149" valign="top"><p><strong>';
	$tableHeadExamEnd='</strong></p></td>';
	
	$tableUserColumStart='<td width="66" valign="top"><p><strong id="column_name';
	$headCellAttribut= '">';
	$tableUserColumEnd='</strong></p></td>';
	
	
	
	
	}

?>
</body>
</html>