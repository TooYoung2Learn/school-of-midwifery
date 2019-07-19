<?php 
//======================================================
//function that get the suspicious quote from input
//==========================================================

function quote_smart( $db_found, $value){
	if (get_magic_quotes_gpc()){
		$value = stripslashes($value);
		}
//	if (!is_numeric($value)){
//		$value = mysqli_real_escape_string($db_found, $value);
//		}

		return $value;
	}
	
//==================================================
// function that strip back slash and htmlspecial chars
//================================================
	
function data_input($text){
	$text = trim($text);
	$text = stripslashes($text);
	$text = htmlspecialchars($text);
	return $text;
	}
	
//================================================
//function that produce student grade e.g A - E
//===============================================
		function student_grade($grade)
	    {
				$actual_grade ='';
				if($grade >= 80)
				{
					$actual_grade = 'A';
				}else if ($grade >= 70)
				{
					$actual_grade = 'B';
				}else if($grade >= 60)
				{
					$actual_grade = 'C';
				}else if($grade >= 51)
				{
				  $actual_grade = 'D';
				}else if($grade == 50)
				{
				   $actual_grade = 'E';
				}else{
					   $actual_grade ='F';
					 }
					 return $actual_grade;
	      }
		  
		 //================================================
		 //function that test the cell to count number of fail and conclude remark
		 //=======================================================================
		  
		function testing($cel_1)
						{
							$counter =0;
                            $remark = '';
							
							if($cel_1 <50)
							{
								//echo "fail"."<br>";
								$counter ++;
							}
									
							//testing the counter
							if($counter == 1)
							{
								$remark ="Fail";
							}else{
								$remark = "Pass";
							}
							return $remark;

                             // end of function testing2
						}
						
		function testing2($cel, $cel2)
		{
			$counter = 0;
			$remark = '';

			if($cel < 50)
			{
				//echo "fail"."<br>";
				$counter++;
			 }
			if ($cel2 < 50)
			{
				//echo "fail"."<br>";
				$counter++;

			}

			//echo $counter;
			if($counter >= 1)
			{
				$remark = "Fail";
			}else{
				$remark = "Pass";
			}
			return $remark;

			 // end of function testing2
		}

		function testing3($cel_1, $cel_2, $cel_3)
		{
			$counter =0;
			$remark = '';

		   if($cel_1 <50)
		   {
				//echo "fail"."<br>";
				$counter ++;
			}
			if ($cel_2 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;

			}
			if($cel_3 < 50)
			{
				$counter ++;
			}

			//echo $counter;
			if($counter  < 2)
			{
				$remark ="Pass";
			}else{
					$remark = "Fail";
			}

			return $remark;

			 // end of function testing2
		}

		function testing4($cel_1, $cel_2, $cel_3, $cel_4)
	{
		 $counter =0;
		 $remark = '';

		 if($cel_1 <50)
		 {
			//echo "fail"."<br>";
			$counter ++;
		  }
		  if ($cel_2 < 50)
		  {
			//echo "fail"."<br>";
			$counter ++;

			}
			if($cel_3 < 50)
			{
				//echo "fail"."<br>";
				 $counter ++;
			 }
			if($cel_4 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}


			//echo $counter;
			if($counter < 2)
			{
				$remark = "Pass";
			}else
			{
				$remark = "Fail";
			}

			return $remark;


		}


		function testing5($cel_1, $cel_2, $cel_3, $cel_4, $cel_5)
		{
			$counter =0;
			$remark = '';

			if($cel_1 <50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if ($cel_2 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if($cel_3 < 50)
			{
				//echo "fail"."<br>";
				 $counter ++;
			}
			if($cel_4 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if($cel_5 < 50)
			{
				$counter ++;
			}

			//echo $counter;
			if($counter < 3)
			{
				$remark ="Pass";
			}else
			{
				$remark = "Fail";
			}
			return $remark;


		}

	   	function testing6($cel_1, $cel_2, $cel_3, $cel_4, $cel_5, $cel_6){
			$counter =0;
			$remark = '';

			if($cel_1 <50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if ($cel_2 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if($cel_3 < 50)
			{
				//echo "fail"."<br>";
				 $counter ++;
			}
			if($cel_4 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if($cel_5 < 50)
			{
				$counter ++;
			}
			if($cel_6 < 50)
			{
				$counter ++;
			}


			//echo $counter;
			if($counter <=2)
			{
				$remark ="Reff";
			}else if($counter >2) {
				$remark = "Fail";
			}else{
				$remark = "Pass";
			}
			return $remark;

		}


		function testing7($cel_1, $cel_2, $cel_3, $cel_4, $cel_5, $cel_6, $cel_7)
		{
			$counter =0;
			$remark = '';

			if($cel_1 <50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if ($cel_2 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;

			}
			if($cel_3 < 50)
			{
				//echo "fail"."<br>";
				 $counter ++;
			}
			if($cel_4 < 50)
			{
				//echo "fail"."<br>";
				$counter ++;
			}
			if($cel_5 < 50)
			{
			  $counter ++;
			}
			if($cel_6 < 50)
			{
				$counter ++;
			}
			if($cel_7 < 50)
			{
				$counter ++;
			}

			//echo $counter;
			if($counter < 3)
			{
				$remark ="Pass";
			}else
			{
				$remark = "Fail";
			}
			return $remark;


		}

						
		//==============================================================
		// function that return provost comment
		//=============================================================
		 function comment($coment)
		 {
			 $remark = '';

			 if($coment == 'Pass'){
				 $remark = "GOOD  PERFORMANCE, PUT  MORE EFFORT.";

				 }else if($coment == 'Reff')
				 {
				   $remark ='FAIR PERFORMANCE, YOU NEED TO WORK HARDER.';
				 }
				 else
				 {
				 $remark = "POOR PERFORMANCE, YOU NEED TO WORK HARDER.";
				 }

				 return $remark;
		 }





	



?>

