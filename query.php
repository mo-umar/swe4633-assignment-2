<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_grade']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_grade']);

    $query = "DELETE FROM grade_average WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Grade Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Grade Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}


if(isset($_POST['save_grade']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $assignments = mysqli_real_escape_string($con, $_POST['assignments']);
    $quizzes = mysqli_real_escape_string($con, $_POST['quizzes']);
    $tests = mysqli_real_escape_string($con, $_POST['tests']);
    $final_exam = mysqli_real_escape_string($con, $_POST['final_exam']);
    $project = mysqli_real_escape_string($con, $_POST['project']);

    $query = "INSERT INTO grade_average (student_id,assignments,quizzes,tests,final_exam,project) VALUES ('$student_id','$assignments','$quizzes','$tests','$final_exam','$project')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Grade Created Successfully";
        header("Location: enter_grade.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Grade Not Created";
        header("Location: enter_grade.php");
        exit(0);
    }
}

?>