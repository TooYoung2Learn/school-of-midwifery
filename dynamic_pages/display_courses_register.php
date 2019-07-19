<?php
require_once('connection.php');
require_once "admin_fns.php";
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_rsCourse = 10;
$pageNum_rsCourse = 0;
if (isset($_GET['pageNum_rsCourse'])) {
  $pageNum_rsCourse = $_GET['pageNum_rsCourse'];
}
$startRow_rsCourse = $pageNum_rsCourse * $maxRows_rsCourse;

//mysql_select_db($database_con_student, $con_student);
$query_rsCourse = "SELECT * FROM courses ORDER BY course_id ASC";
$query_limit_rsCourse = sprintf("%s LIMIT %d, %d", $query_rsCourse, $startRow_rsCourse, $maxRows_rsCourse);
$rsCourse = $db_found->query($query_limit_rsCourse) ;
$row_rsCourse = ($rsCourse->fetch_array());

if (isset($_GET['totalRows_rsCourse'])) {
  $totalRows_rsCourse = $_GET['totalRows_rsCourse'];
} else {
  $all_rsCourse =$db_found->query ($query_rsCourse);
  $totalRows_rsCourse = ($all_rsCourse->num_rows);
}
$totalPages_rsCourse = ceil($totalRows_rsCourse/$maxRows_rsCourse)-1;
?>
<?php head_data();?>
<div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<?php left_side_bar();?>
<div class="col-xs-8 well well-lg welborda">

<table width="500" class="table table-bordered">
  <tr>
     <td> S/N</td>
    <td>COURSE ACRONYMS</td>
    <td>COURSE NAMES</td>
  </tr>
  <?php  $x=1;
  do { ?>
    <tr>
      <td> <?php echo $x;?> </td>
      <td><?php echo $row_rsCourse['course_id']; ?></td>
      <td><?php echo $row_rsCourse['course_name']; ?></td>
    </tr>
    <?php $x++; } while ($row_rsCourse = ($rsCourse->fetch_array())); ?>
</table>
</div>
<div class="col-xs-2 rightMargin">

<div class="textheader">Welcome </div>

<div class="rightBackground">
when the activities are going on
in the pannel one need to examin
the content
</div>
 </div>

</div>

</div>
<?php foot_data();?>
<?php
mysqli_free_result($rsCourse);
?>
