<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$tableStart="<table border='1' cellspacing='0' cellpadding='0' width='637'>";
$tableEnd="</table>";   

$tableHead ="<tr>";
$tableHead = $tableHead."<td width='70' valign='top'><p>S/NO </p></td> ";
$tableHead = $tableHead." <td width='248' valign='top'><p>COURSES</p></td>";
$tableHead = $tableHead."<td width='128' valign='top'><p>MARK OBTAINED </p></td>";
$tableHead = $tableHead."<td width='113' valign='top'><p>LETTER GRADE </p></td>";
$tableHead = $tableHead. "<td width='79' valign='top'><p>REMARK </p></td>";
$tableHead = $tableHead. "</tr>";

$rowStart="<tr ";
$rowIdStart = "id='myRow";
$rowIdEnd ="'>";
$rowEnd = "</tr>";

$cell_1_Start ="<td width='248' valign='top'><p>";
$cell_1_End = "</p></td>";
$cell_1_lastStart ='<td width="79" rowspan="6" align="center" valign="middle" > 
<p>&nbsp;</p> <p ><strong id="remark';
$cell_1_lastAttre='">';
$cell_1_lastEnd ='</strong></p> </td>';
$cell_2_Start="<td width='128' valign='top' ><p align='center' id='scores";
$arttributScore = "'>";
$cell_2_End="</p></td>";

$cell_3_Start="<td width='113' valign='top' ><p align='center' id='grade";
$arttributGrade="'>";
$cell_3_End="</p></td>";

$remarkContentCellStart=" <td width='79' colspan='5' valign='middle' ><p>&nbsp;</p>
                         <p><strong>";
$remarkContentCellEnd="</strong></p></td>";


$numCellStart = "<td width='70' valign='top'>";
$numCellEnd = " </td>";

?>
</body>
</html>