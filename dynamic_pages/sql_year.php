<?php 
include("connection.php");
if($db_found)
{
   $sql = "select * from years_of_exam";
   $result = $db_found->query($sql);
   $row = ($result->fetch_array());
   $year_of_result = $row['years'];
   $set_of_result = $row['set_of_exam'];
//   echo $set_of_result;
   

}
?>

