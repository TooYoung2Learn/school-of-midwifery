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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rs_student_name = 10;
$pageNum_rs_student_name = 0;
if (isset($_GET['pageNum_rs_student_name'])) {
  $pageNum_rs_student_name = $_GET['pageNum_rs_student_name'];
}
$startRow_rs_student_name = $pageNum_rs_student_name * $maxRows_rs_student_name;


$query_rs_student_name = "SELECT name_id, first_name, middle_name, sur_name, admission_no FROM student_infor ORDER BY sur_name ASC";
$query_limit_rs_student_name = sprintf("%s LIMIT %d, %d", $query_rs_student_name, $startRow_rs_student_name, $maxRows_rs_student_name);
$rs_student_name = $db_found->query($query_limit_rs_student_name);
$row_rs_student_name = ($rs_student_name->fetch_array());

if (isset($_GET['totalRows_rs_student_name'])) {
  $totalRows_rs_student_name = $_GET['totalRows_rs_student_name'];
} else {
  $all_rs_student_name = $db_found->query($query_rs_student_name);
  $totalRows_rs_student_name =($all_rs_student_name->num_rows);
}
$totalPages_rs_student_name = ceil($totalRows_rs_student_name/$maxRows_rs_student_name)-1;

$queryString_rs_student_name = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_student_name") == false && 
        stristr($param, "totalRows_rs_student_name") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_student_name = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_student_name = sprintf("&totalRows_rs_student_name=%d%s", $totalRows_rs_student_name, $queryString_rs_student_name);
?>

<?php head_data();?>
<div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<?php left_side_bar();?>

<div class="col-xs-8 well well-lg welborda"> 

<table width="500" class=" table table-bordered">
  <tr>
    <td>S/N</td>
    <td>NAMES</td>
    <td>EXAMINATION NO.</td>
    
  </tr>
  <?php 
  $x =1;
  do { ?>
    <tr>
      <td><?php echo $x; ?></td>
      <td><p><?php echo $row_rs_student_name['sur_name']; ?>&nbsp;
        <?php echo $row_rs_student_name['middle_name']; ?> &nbsp;
       <?php echo $row_rs_student_name['first_name']; ?></p></td>
      <td><?php echo $row_rs_student_name['admission_no']; ?></td>
     
    </tr>
    <?php  $x++;} while ($row_rs_student_name = ($rs_student_name->fetch_array())); ?>
</table>

<div class="text-center">
<p>Student Names: <?php echo ($startRow_rs_student_name + 1) ?> to <?php echo min($startRow_rs_student_name + $maxRows_rs_student_name, $totalRows_rs_student_name) ?> of <?php echo $totalRows_rs_student_name ?> &nbsp;
<table border="0" class="table">
  <tr>
    <td><?php if ($pageNum_rs_student_name > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_rs_student_name=%d%s", $currentPage, 0, $queryString_rs_student_name); ?>">First</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_rs_student_name > 0) { // Show if not first page ?>
        <a href="<?php printf("%s?pageNum_rs_student_name=%d%s", $currentPage, max(0, $pageNum_rs_student_name - 1), $queryString_rs_student_name); ?>">Previous</a>
        <?php } // Show if not first page ?></td>
    <td><?php if ($pageNum_rs_student_name < $totalPages_rs_student_name) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_rs_student_name=%d%s", $currentPage, min($totalPages_rs_student_name, $pageNum_rs_student_name + 1), $queryString_rs_student_name); ?>">Next</a>
        <?php } // Show if not last page ?></td>
    <td><?php if ($pageNum_rs_student_name < $totalPages_rs_student_name) { // Show if not last page ?>
        <a href="<?php printf("%s?pageNum_rs_student_name=%d%s", $currentPage, $totalPages_rs_student_name, $queryString_rs_student_name); ?>">Last</a>
        <?php } // Show if not last page ?></td>
  </tr>
</table>
</p>
</div>


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
mysqli_free_result($rs_student_name);
?>
