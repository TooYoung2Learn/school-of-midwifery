<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 10/9/2017
 * Time: 1:24 PM
 */
function head_data(){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta  charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Untitled Document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="../css/admin.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container backgrondAll">
    <div class="row">
        <div class="col-xs-1"> </div>

        <?php
}
function left_side_bar(){
    ?>
    <div class="col-xs-2 sideLeft">
        <div class="row leftMenu">
            <button class="btn form-control buttonLeft btn-lg"> Activities </button>
        </div>
        <div class="row">
            <div class=" buttonUnder">
                <p class=" paragraphLink"><a href="adminPannel.php">Home</a></p>
                <p  class=" paragraphLink" > <a href="register_student_name.php">Reg. New Student</a></p>
                <p  class=" paragraphLink"> <a href="course_form.php"> Reg. Courses offer</a></p>
                <p class=" paragraphLink"> <a href="register_student_scores.php">Reg. Stud. Scores</a></p>
                <p class=" paragraphLink"><a href="set_year_form.php"> Set. Exams Year</a></p>
                <p class=" paragraphLink"> <a href="view_grade.php"> Disply Student Rec</a></p>
                <p class=" paragraphLink"> <a href="generate_result_table.php"> Stud. Result Sheet</a> </p>
                <p class=" paragraphLink"> <a href="display_student_names.php"> Display Student Names</a> </p>
                <p class=" paragraphLink"> <a href="display_courses_register.php"> Display Courses Reg.</a> </p>
                <p class=" paragraphLink"> <a href="Upload_CSV.php"> Upload Results.</a> </p>

            </div>
        </div>
    </div>
    <?php
}
function right_side_data(){
    ?>
    <div class="col-xs-2 rightMargin">

        <div class="textheader">Welcome </div>

        <div class="rightBackground">
            when the activities are going on
            in the pannel one need to examin
            the content
        </div>
    </div>
    <?php
}

function foot_data(){
    ?>

    <div class="col-xs-1">

    </div>
</div>

</div>
</body>
</html>

<?php

}