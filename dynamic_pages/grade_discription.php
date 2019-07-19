<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 10/11/2017
 * Time: 8:07 AM
 */
//Grade Description
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(60, 6, "LETTER GRADE", 0, 0);
$pdf->Cell(60, 6, "DESCRIPTION GENERAL", 0, 0);
$pdf->Cell(60, 6, "REMARKS", 0, 1);
$pdf->SetFont('Times', '', 10);
$pdf->Cell(60, 6, "A", 0, 0);
$pdf->Cell(60, 6, "Distinction -  80% and Above", 0, 0);
$pdf->Cell(60, 6, "Passed", 0, 1);
$pdf->Cell(60, 6, "B", 0, 0);
$pdf->Cell(60, 6, "Upper Credit   70% - 79.9%", 0, 0);
$pdf->Cell(60, 6, " Referred", 0, 1);
$pdf->Cell(60, 6, "C", 0, 0);
$pdf->Cell(60, 6, "Lower Credit   60% - 69.9%", 0, 0);
$pdf->Cell(60, 6, "Fail-Repeat ", 0, 1);
$pdf->Cell(60, 6, "D", 0, 0);
$pdf->Cell(60, 6, "Pass     51%  -  59.9%", 0, 0);
$pdf->Cell(60, 6, "Fail  Withdrawal", 0, 1);
$pdf->Cell(60, 6, "E", 0, 0);
$pdf->Cell(60, 6, "Pass                      50%", 0, 0);
$pdf->Cell(60, 6, "", 0, 1);
$pdf->Cell(60, 6, "F", 0, 0);
$pdf->Cell(60, 6, "Fail                     -49%and below", 0, 0);
$pdf->Cell(60, 6, "", 0, 1);
$pdf->Ln();
//provost sign
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(170, 6, "Provost Comment: ........................................................................................................................" ,0,1, 'L');
$pdf->Ln();
$pdf->Cell(170, 6, "Examination Officer Sign ....................................... Provost Sign.................................. ................" ,0,1, 'L');
