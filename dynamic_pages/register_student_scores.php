<?php 
session_start();
 if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
  {

include("connection.php");

include("smart_method.php");
include "admin_fns.php";

?>
<?php 

$message_erro ='';
$userId ='';
if(isset($_POST['search'])){
	
	 $tag =$_POST['tag'];
	 
	 if(empty($tag))
	 {
		 $message_erro = "Error! You have to select/ Type Student exam no.";
	 }else{
		 
		    $tag = data_input($tag);

				  $tag = htmlentities($tag);
				  
				  $sql ="SELECT * FROM student_infor WHERE admission_no ='$tag' ";
				  
				  $query = $db_found->query($sql);
				  $row_num =($query->num_rows);
				  $field = ($query->fetch_array());
				  
				     if($query){
						    if($row_num > 0)
							{
							 
							 $message_erro = $field['sur_name']."  "." "." ";
							 $message_erro = $message_erro. "have been Selected" ;
							 $userId =  $field['admission_no'];
							 
							  //mysql_close($db_handle);
							}else
							{
							    $message_erro = "No such information available"; 
						        // mysql_close($db_handle);

							}
						 
						 }else
						 {
						    $message_erro = "Error in Your typing...2";
				           //  mysql_close($db_handle);
						 }
				  

		
		 }
		 
		 
	 
	}
   require "register_student_scores2.php";
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../css/jquery.min.js"> </script>
<link href="../css/admin.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="../css/jquery.autocomplete.css" />
<script type="text/javascript" src="../css/jquery.js"></script>
<script type="text/javascript" src="../css/jquery.autocomplete.js"></script>


<script>
$(document).ready(function(){
 $("#tag").autocomplete("autocomplete.php", {
		selectFirst: true
	});
});
</script>

</head>

<body>
  
  <!--pesting start-->
  <div class="container backgrondAll">
<div class="row">
<div class="col-xs-1"> </div>
<div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<?php left_side_bar();?>
<div class="col-xs-8 well well-lg welborda"> 

 <p class="col-xs-12 text-info text-center h4">Insetting the student scores:</p>

<p class="col-xs-12 text-info h4">Please Type in Student Exam Number before inputing their Scores </p>

<p class=" text-danger h4"> <?php echo $message_erro;?> </p>


 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" role="form" class=" form-horizontal">

<label> Student Exam No:</label>
<input type="text" id="tag" placeholder="Exam No" name="tag" value="">
<input type="submit" name="search" value="Search" class=" btn-info">






<?php 
require "sql_courses.php";

echo "<br> <br>";

if($db_found){
	 
	 
	 
	   $i = 0;
	  		   while($i < $colum_total){
					     
				           echo '<div class=" form-group">';
						 echo '<label class="control-label col-xs-3">'. $courses_name_query[$i].":". " </label>";
			 
                       echo '<div class=" col-xs-3">';
						echo "<input type='text' name='score".$i."' value='' >"."<br>";
					    echo '</div>';
						echo '<div class="col-xs-6">';
						echo '</div>';
						 echo '</div>';
				
			   $i++;
			   }
//mysql_close($db_handle);
                    echo '<div class="col-xs-9">';
   		           echo "<input type='submit' name='courses' value=' Save ' class='btn btn-primary btn-lg'>"."&nbsp;";
		           echo "<input type='reset' value='Cancel' class='btn btn-danger btn-lg'>"."&nbsp;";
				    echo '<a href="edit_student_scores.php"  class="btn btn-warning btn-lg"> To Edit</a>';
                    echo '</div>';
		 		  echo  "<br>"."<input type='hidden' name='course_total' value='$colum_total'> ";
		 
		          
				  $val=0;
				   while( $val< $colum_total){
					   
					   echo "<input type='hidden' name='column_name".$val."' value='".$courses_name_query[$val]."' >"."<br>";
					
				
			   $val++;
			   }


			  
				mysqli_close($db_found);

		  echo '<input type="hidden" name="exam_no" value="'.$userId.'">';
		  
	 
	}



?>
<!--<input type="hidden" name="user_id" value="--><?php //echo $userId;?><!--" />-->
</form>

</div>
<?php right_side_data();?>
 
</div>

</div>

<?php
      foot_data();
}else
 {
   header("Location:../index.php");
 }

?>