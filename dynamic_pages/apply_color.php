<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

</style>
</head>

<body>

<?php 
function provost_comment($value)
{
	$comment ='';
	if($value == 'Pass')
	{
	  $comment = "GOOD PERFORMANCE, PUT MORE EFFORT";	
	}else if ($value == 'Reff')
	{
		$comment = "POOR PERFORMANCE, YOU NEED TO WORK HARDER ";
	}else
	{
		$comment = "FAIR PERFORMANCE, YOU NEED TO WORK HARDER";
	}
	
	return $comment;
}

function scoreApply($value)
{
	$grade ='';
	if($value == 'Pass')
	{
	
	 $grade = $grade.' <p><strong>LETTER GRADE </strong>                  <strong>DESCRIPTION  GENERAL  </strong>                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<strong> REMARKS</strong> <br />
    A                                              Distinction  – 80% and above                     &nbsp;&nbsp;&nbsp;&nbsp; <span> <strong class="bold_text"> Passed </strong> </span><br />
    B                                             Upper  Credit 70%-79.9%                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Referred </span><br />
    C                                             Lower  Credit – 60%-69.9%                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span > Fail-Repeat </span><br />
    D                                             Pass                51%-59.9%                   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span> Fail –Withdrawal </span><br />
    E                                              Pass                      50%<br />
  F                                              Fail                      -49%and below </p>
<p>&nbsp;</p>';
	 
	 
	}else if($value == 'Reff')
	{
		
		$grade = $grade.' <p><strong>LETTER GRADE </strong>                  <strong>DESCRIPTION  GENERAL  </strong>                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<strong> REMARKS</strong> <br />
    A                                              Distinction  – 80% and above                     &nbsp;&nbsp;&nbsp;&nbsp; <span>  Passed  </span><br />
    B                                             Upper  Credit 70%-79.9%                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><span class="red_text"> Referred </span></strong><br />
    C                                             Lower  Credit – 60%-69.9%                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span > Fail-Repeat </span><br />
    D                                             Pass                51%-59.9%                   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span> Fail –Withdrawal </span><br />
    E                                              Pass                      50%<br />
  F                                              Fail                      -49%and below </p>
<p>&nbsp;</p>';
	
		
	}else if($value == 'Fail')
	{
	  
	  $grade = $grade.' <p><strong>LETTER GRADE </strong>                  <strong>DESCRIPTION  GENERAL  </strong>                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<strong> REMARKS</strong> <br />
    A                                              Distinction  – 80% and above                     &nbsp;&nbsp;&nbsp;&nbsp; <span> Passed </span><br />
    B                                             Upper  Credit 70%-79.9%                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Referred </span><br />
    C                                             Lower  Credit – 60%-69.9%                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> <span  class="red_text"> Fail-Repeat </span></strong><br />
    D                                             Pass                51%-59.9%                   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span> Fail –Withdrawal </span><br />
    E                                              Pass                      50%<br />
  F                                              Fail                      -49%and below </p>
<p>&nbsp;</p>';
	
	  
	  
	}else
	{
	    $grade = $grade.' <p><strong>LETTER GRADE </strong>                  <strong>DESCRIPTION  GENERAL  </strong>                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<strong> REMARKS</strong> <br />
    A                                              Distinction  – 80% and above                     &nbsp;&nbsp;&nbsp;&nbsp; <span> Passed </span><br />
    B                                             Upper  Credit 70%-79.9%                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> Referred </span><br />
    C                                             Lower  Credit – 60%-69.9%                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span > Fail-Repeat </span><br />
    D                                             Pass                51%-59.9%                   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span> Fail –Withdrawal </span><br />
    E                                              Pass                      50%<br />
  F                                              Fail                      -49%and below </p>
<p>&nbsp;</p>';
			
	}
	
	return $grade;

 	
}


function tableCellScore($value)
{
	$grade ='';
	if($value >= 50)
	{
	 
	 $grade = $grade.'<td width="49" valign="top"><p><strong class="bold_text">'." ". $value;
	}else 
	{
		
		$grade = $grade.'<td width="49" valign="top"><p><strong class="red_text">'." ".$value;
	} 
	 
	 return $grade;
}

function remark_font($value)
{
  $grade ='';
	if($value == 'Pass')
	{
	 
	 $grade = $grade.'<td width="70" valign="top"><p><strong class="bold_text" >'." ". $value;
	}
	else if($value == 'Reff') 
	{
		
		$grade = $grade.'<td width="70" valign="top"><p><strong class="red_text" >'." ".$value;
	}else if($value == 'Fail')
	{
	   $grade = $grade.'<td width="70" valign="top"><p><strong class="red_text" >'." ".$value;	
	}else
	{
	  $grade = '' ;
	}
	 
	 return $grade;
  
}
// this color the cell of remark in result sheet file
   function RemarkSheet($value)
   {
	  
	  $grade ='';
			  if($value == 'Pass')
			{
			 
			 $grade = $grade.' <td width="79" rowspan="6" valign="middle" align="center"><p>&nbsp;</p> <p><strong class="bold_text">'." ". $value;
			}
			else if($value == 'Reff') 
			{
				
				$grade = $grade.' <td width="79" rowspan="6" valign="middle" align="center"><p>&nbsp;</p> <p><strong class="red_text">'." ".$value;
			}else if($value == 'Fail')
			{
			   $grade = $grade.' <td width="79" rowspan="6" valign="middle" align="center"><p>&nbsp;</p> <p><strong class="red_text">'." ".$value;	
			}else
			{
			  $grade = '' ;
			}
			 
			 return $grade;
		  

   
   }
   
   function thirdCellScore($value)
   {
	   $grade ='';
	if($value >= 50)
	{
	 
	 $grade = $grade.'<td width="128" valign="top"><p align="center" class="bold_text">'." ". $value;
	}else 
	{
		
		$grade = $grade.'<td width="128" valign="top"><p align="center" class="red_text">'." ".$value;
	} 
	 
	 return $grade;
   }
   
     function FourthCellGrade($value)
   {
     $grade ='';
	if($value == 'F')
	{
	 
	  $grade = $grade.'<td width="113" valign="top"><p align="center" class="red_text">'." ". $value;
	}else if($value == 'E')
	{
		
		 $grade = $grade.'<td width="113" valign="top"><p align="center" class="red_text">'." ". $value;
	}else
	{
	 $grade = $grade.'<td width="113" valign="top"><p align="center" class="bold_text">'." ". $value;
	} 
	 
	 return $grade;

   }
 
?>


</body>
</html>