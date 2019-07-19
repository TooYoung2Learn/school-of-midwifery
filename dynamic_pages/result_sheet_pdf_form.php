<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 10/10/2017
 * Time: 10:08 PM
 */

require_once "../pdf_file/fpdf.php";
$pdf = new FPDF();

include("courseTrial.php");
//include("apply_color.php");
//include("table_color.php");
include 'sql_year.php';


foreach($student_name as $exam_no => $names)
{
    if($names ==null)
    {
        continue;
    }
    $pdf->AddPage();
    /*************************
    // title of sheet
     */
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->SetTextColor(0,0,0);
    $pdf->Ln(20);
    $pdf->Cell(170,6,"NIGER STATE COLLEGE OF NURSING SCIENCES",0,1,'C');
    $pdf->Cell(170,6,"SCHOOL OF MIDWIFERY MINNA",0,1,'C');
    $pdf->Cell(170,6,"SECOND YEAR SECOND SEMESTER EXAMINATION",0,1,'C');
    $pdf->Cell(170,6,"RESULT SLIP",0,1,'C');
    $pdf->Ln(10);

    //++++++++++++++++++++++++++++++
    // student infor
    //+++++++++++++++++++++++++++++++
    $nameTitl = "STUDENT NAME: ".strtoupper($names);
    $admisTitle = "EXAMINATION NUMBER: ".$exam_no;
    $yearTitle = "YEAR: ".$year_of_result;
    $setTitle = "SET: ".$set_of_result;
    $pdf->SetFont("Times", 'B', 8);
    $pdf->Cell(170, 6, $nameTitl, 0, 1, 'L');
    $pdf->Cell(130,6, $yearTitle, 0, 1, 'R');
    $pdf->Cell(100, 6, $admisTitle, 0,0,'L');
    $pdf->Cell(100, 6, $setTitle, 0,1);
    $pdf->Ln(10);

    /**********************************
     * table header
     */
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(15,6,"S/N", 1, 0);
    $pdf->Cell(55,6,"COURSES", 1, 0);
    $pdf->Cell(40,6,"MARK OBTAINED", 1, 0);
    $pdf->Cell(40,6,"LETTER GRADE", 1, 0);
    $pdf->Cell(30,6,"REMARK", 1, 1);

    //check if matric is empty
    if($exam_no ==0){
        continue;
    }


    //list of course name in upper case
    $course1 = $course_reg[$exam_no];
    $course2 = $course_reg2[$exam_no];
    $course3 = $course_reg3[$exam_no];
    $course4 = $course_reg4[$exam_no];
    $course5 = $course_reg5[$exam_no];

    $course1 = strtoupper($course1);
    $course2 = strtoupper($course2);
    $course3 = strtoupper($course3);
    $course4 = strtoupper($course4);
    $course5 = strtoupper($course5);

    // scores get by student in exam courses
    $score1 = $user_scores1[$exam_no];
    $score2 = $user_scores2[$exam_no];
    $score3 = $user_scores3[$exam_no];
    $score4 = $user_scores4[$exam_no];
    $score5 = $user_scores5[$exam_no];

     //Remark to return either pass or fail
    $remark = testing4($score1, $score2, $score3, $score4);

    //user grades
    $grade1 =student_grade($user_scores1[$exam_no]);
    $grade2 =student_grade($user_scores2[$exam_no]);
    $grade3 =student_grade($user_scores3[$exam_no]);
    $grade4 =student_grade($user_scores4[$exam_no]);
    $grade5 =student_grade($user_scores4[$exam_no]);

    //serial number in the table
    $serial_no =array(1, 2, 3, 4, 5, 6, 7, 8, 9,10);



    /************************************
    * content first row
     */
    $pdf->SetFont("Times", '', 9);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(15,6,$serial_no[0], 1, 0);
    $pdf->Cell(55,6,$course1, 1, 0);
//        $pdf->Cell(40,6,$score1, 1, 0,'C');
    if($score1 >= 50){
        require "../pdf_file/number_color1.php";
    }else{
        require "../pdf_file/number_color_red.php";
    }
    $pdf->Cell(40,6,$grade1, 1, 0,'C');
    $pdf->Cell(30,6,"", "LR", 1);

    /***************************************
    * second row
     */
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(15,6,$serial_no[1], 1, 0);
    $pdf->Cell(55,6,$course2, 1, 0);

    if($score2 >= 50){
        require "../pdf_file/number_color2.php";
    }else{
        require "../pdf_file/number_color_red2.php";
    }
    $pdf->Cell(40,6,$grade2, 1, 0,'C');
    $pdf->Cell(30,6,"", "LR", 1);

    /*************************************
    *    third row
     */
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(15,6,$serial_no[2], 1, 0);
    $pdf->Cell(55,6, $course3, 1, 0);

    if($score3 >= 50){
        require "../pdf_file/number_color3.php";
    }else{
        require "../pdf_file/number_color_red3.php";
    }
    $pdf->Cell(40,6, $grade3, 1, 0,'C');
    $pdf->Cell(30,6,$remark, "LR", 1, 'C');

    //fourt row
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(15,6,$serial_no[3], 1, 0);
    $pdf->Cell(55,6, $course4, 1, 0);

    if($score4 >= 50){
        require "../pdf_file/number_color4.php";
    }else{
        require "../pdf_file/number_color_red4.php";
    }
    $pdf->Cell(40,6, $grade4, 1, 0,'C');
    $pdf->Cell(30,6,"", "LR", 1);

    //row five
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(15,6,"5", 1, 0);
    $pdf->Cell(55,6, $course5, 1, 0);
//        $pdf->Cell(40,6, $score5, 1, 0,'C');
    if($score5 >= 50){
        require "../pdf_file/number_color5.php";
    }else{
        require "../pdf_file/number_color_red5.php";
    }
    $pdf->Cell(40,6, $grade5, 1, 0,'C');
    $pdf->Cell(30,6,"", "LBR", 1);
    $pdf->Ln(15);
    require "grade_discription.php";
}

$pdf->Output();