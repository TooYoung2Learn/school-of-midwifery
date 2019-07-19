<?php 
session_start();
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id']!='') )
{
include "admin_fns.php";

?>
<?php head_data();?>
    <div class="col-xs-10">
<!--inner container of items-->
<p class="text-capitalize h1 logoText">The School of Midwifery Niger State</p>
<div class="row content1">


<?php left_side_bar();?>
<div class="col-xs-8 well well-lg welborda"> 


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" role="form" class="form-horizontal">
<div class="col-xs-12 text-center h3">
<label> Set the Year of the Exam  and Set Category </label>
</div>
<div class="form-group">
<label class="control-label col-xs-4" for="year">YEAR OF EXAM </label>
<div class="col-xs-8">
<input type="text" name="year" id="year"  class="form-control" />
</div>
</div>
<div class="form-group">
<label class="control-label col-xs-4" for="set"> EXAM SET</label>
<div class="col-xs-8">
<input type="text" name="set"  id="set" class="form-control" />
</div>
</div>
<div class="form-group">
<div class="col-xs-offset-3 col-xs-9">
<input type="submit" name="save" value="Save"  class="btn btn-primary btn-lg" />
<input type="reset" name="reset" value="Cancel"  class="btn btn-danger btn-lg"/>
<a href="edit_exam_year.php"  class="btn btn-warning btn-lg"> To Edit Year </a>
</div>
</div>

</form>


</div>
<?php right_side_data();?>
 
</div>

</div>
<?php foot_data();?>
    <?php
    include("smart_method.php");
    include("connection.php");

    $year = "";
    $set = "";

    if(isset($_POST['save'])){
        $year = $_POST['year'];
        $set = $_POST['set'];

        if(empty($year) && empty($set)){
            echo " empty space can not be Register";

        }else if(empty($year)){
            echo " empty space can not be Register";
        }else if(empty($set)){
            echo " empty space can not be Register";
        }else{
            $year =data_input($year);
            $set = data_input($set);
            if($db_found){
                $year = quote_smart( $db_found, $year);
                $set = quote_smart( $db_found, $set);

                $sql = "insert into years_of_exam (years, set_of_exam)values('$set', '$year')";
                $query = $db_found->query($sql);
                if($query){
                    echo "Thank you setting exam year";
                    $db_found->close();
                }else{
                    echo " Please check your typing, there is error";
                    $db_found->close();
                }											 }
        }

    }
    ?>
<?php
}else
{
header("Location:../index.php");
}

?>