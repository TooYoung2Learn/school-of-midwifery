<?php
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{
require_once "admin_fns.php";
?>

<?php head_data();?>
<div class="col-xs-10">
    <!--inner container of items-->
    <p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
    <div class="row content1">


    <?php left_side_bar();?>
    <div class="col-xs-8 well well-lg welborda">


    <form>
    <div class="row bottonP">
    <p class="h2 text-right"> <a  href="../index.php" > <span class=" btn buttonLeft">LogOut</span>  </a></p>
    <p class="col-xs-12 text-center textheader">
    Well Come to Administrative Pannel

    </p>
    </div>
    <div class="row">
    <div class="col-xs-4 divBorda">
    <figure>
    <a href="register_student_name.php">
    <img src="../Images/images_29.jpeg" width="145" height="89" alt="student" />
    <figcaption> <input type="button" value="Register New Stud." class="btn btn-default" /></figcaption>

     </a>
     </figure>
     </div>
     <div class="col-xs-4"> </div>

     <div class="col-xs-4">
     <figure>
     <a href="course_form.php">
     <img src="../Images/images_112.jpeg" width="145" height="89" alt="caurses" />
     <figcaption><input type="button" value="Register Courses" class="btn btn-default"></figcaption>
      </a>
     </figure>
     </div>
     </div>

    <div class="row">
    <div class="col-xs-4 divBorda">
    <figure>
    <a href = "set_year_form.php" >
    <img src="../Images/calendar1.png" width="145" height="89" alt="calenda" />
    <figcaption>  <input type="button"  value="Set Exams Year" class="btn btn-default" /></figcaption></a>
    </figure>
     </div>

     <div class="col-xs-4"> </div>

    <div class="col-xs-4">
    <figure>
    <a href="result_sheet.php">
     <img src="../Images/images_24.jpeg" width="145" height="89" alt="result sheet" />
     <figcaption>  <input type="button" value="Stud. Result Sheet" class="btn btn-default" /></a></figcaption>
     </figure>
    </div>
    </div>

    <div class="row">
    <div class="col-xs-4 divBorda">
    <figure>
     <a href="view_grade.php">
    <img src="../Images/images_122.png" width="145" height="89" alt="record" />
    <figcaption> <input type="button"  value="Student Result Rec."  class="btn btn-default"/> </figcaption> </a>
     </figure>
     </div>

     <div class="col-xs-4"> </div>

    <div class="col-xs-4">
    <figure>
    <a href = "register_student_scores.php" >
    <img src="../Images/register.jpeg" width="145" height="89" alt="inserting studnet record" />
    <figcaption><input type="button" value="Insert Stud. Scores."  class="btn btn-default"/></figcaption>
    </a>
    </figure>
    </div>

    </div>


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

