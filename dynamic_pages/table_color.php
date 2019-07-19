
<?php 
function tableScoreColor($value)
{
	$grade ='';
	if($value >= 50)
	{
	 
	 $grade = $grade.'<p><strong class="bold_text">'. $value.'</strong></p>';
	}else 
	{
		
		$grade = $grade.'<p><strong class="red_text">'.$value.'</strong></p>';
	} 
	 
	 return $grade;
}


// this color the cell of remark in result sheet file
   function remark_style($value)
   {
	  
	  $grade ='';
			  if($value == 'Pass')
			{
			 
			 $grade = $grade.'  <p><strong class="bold_text">'." ". $value.'</strong></p>';
			}
			else if($value == 'Reff') 
			{
				
				$grade = $grade.'  <p align="center" ><strong class="red_text">'." ".$value.'</strong></p>';
			}else if($value == 'Fail')
			{
			   $grade = $grade.'  <p><strong class="red_text">'." ".$value.'</strong></p>';	
			}else
			{
			  $grade = '' ;
			}
			 
			 return $grade;
		  

   
   }
   
   
   
   //this is style color for grade cells
     function cellGradeColor($value)
   {
     $grade ='';
	if($value == 'F')
	{
	 
	  $grade = $grade.'<p  class="red_text"><strong>'. $value.'</strong></p>';
	}else if($value == 'E')
	{
		
		 $grade = $grade.'<p  class="red_text"><strong>'. $value.'</strong></p>';
	}else
	{
	 $grade = $grade.'<p class="bold_text"><strong>'. $value.'</strong></p>';
	} 
	 
	 return $grade;

   }

?>
