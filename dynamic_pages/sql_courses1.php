<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 10/9/2017
 * Time: 12:30 PM
 */
include("connection.php");
if($db_found)
{

    $sql = "SELECT * FROM courses ";
    $query= $db_found->query($sql);
    $booleanSecond = $query->data_seek(0);
    $result = ($query->fetch_row());
    if($query)
    {
        $course_title1 = $result[1];

    }

}