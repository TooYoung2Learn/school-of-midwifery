<?php 
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{
require_once "admin_fns.php";

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta  charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="../css/admin.css" rel="stylesheet" type="text/css">

	<style type="text/css">
	.top-bar
		{
			width: 100%;
			height: auto;
			text-align: center;
			background-color:#FFF;
			border-bottom: 1px solid #000;
			margin-bottom: 20px;
		}
				</style>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60962033-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body>
	<div class="container backgrondAll">
<div class="row">
<div class="col-xs-1"> </div>
<div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">

<?php left_side_bar();?>
<div class="col-xs-8 well well-lg welborda">

<div class="row bottonP">
<p class="h2 text-right"> <a  href="../index.php" > <span class=" btn buttonLeft">LogOut</span>  </a></p>
<p class="col-xs-12 text-center textheader"> 
Well Come to Administrative Pannel  

</p>
</div>

<div class="text-center row" >
			<img src="../Images/images_17.jpeg" width="149" height="99" alt="admin poster"> </div>

    <div style="border:1px dashed #333333; width:300px; margin:0 auto; padding:10px; color:#900;" class="text-center row h4">
    
	<form name="import" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
    <div class="form-group">
    	<div class="col-xs-12 text-left h4 text-warning">
        <input type="file" name="file"  /><br />
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg" />
     </div>
    </form>
<?php
require "connection.php";
$baseFolder ='';
if(isset($_FILES['file']['name']))$baseFolder= $_FILES['file']['name'];
$target_dir = "uploadFiles/";
$target_file = $target_dir.basename($baseFolder);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if(isset($_POST['submit']))
{
	
	
	if($_FILES['file']['size'] > 300000)
	{
		echo "Sorry! the file is too large"."<br>";
		
	}
	
	else if($_FILES['file']['tmp_name'] == '')
	{
		echo "Sorry! You have not select any File"."<br>";
		
	}
	
	else if($imageFileType != 'csv')
	{
		echo "Sorry! the file must be CSV Format/ type."."<br>";
		
	}
	
	else if(file_exists($target_file))
	{
		echo "Sorry! The file is already exists"."<br>";
		
	}else
	{
	  $file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			$name_canditate = $filesop[0];
			$admin_number = $filesop[1];
			$score1  =  $filesop[2];
			$score2  =  $filesop[3];
			$score3  =  $filesop[4];
			$score4  =  $filesop[5];
			$sql = $db_found->query("INSERT INTO users(user_name, admin_no, score1, score2, score3, score4) VALUES ('$name_canditate','$admin_number', '$score1', '$score2', '$score3', '$score4')");
			$c = $c + 1;
		}
		
			if($sql){
				echo "You database has imported successfully. You have inserted ". $c ." recoreds";
			}else{
				echo "Sorry! There is some problem.";
			}

	}
	
	
}
?>    
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
<div class="col-xs-2">

 </div>
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