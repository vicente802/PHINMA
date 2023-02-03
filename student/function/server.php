<?php
$dashboard="";
$searching="";
$academic_question="";
$financial_question="";
$home="";
$personal_question="";
$student_num="Student";
$user_information="";
$username = $_SESSION['user_name'];
if(!isset($_SESSION['role'])){
header('location: ../index.php');
}
if(isset($_POST['logout'])){
    session_reset();
    session_destroy();
    header('location: ../index.php');
}

if(isset($_POST['dashboard'])){
    $dashboard ="";
}
$activity = mysqli_query($con, "SELECT assign.activity_id,assign.subject_code,user.subject_code,user.username,user.email,activity.activity_id, activity.title FROM user inner join assign inner join activity on assign.activity_id=activity.activity_id on user.subject_code=assign.subject_code WHERE user.email='$username' or user.username='$username'");
if(mysqli_num_rows($activity))
{

}

if(isset($_POST['personal'])){
    $personal_question="disabled";
    $financial_question="";
    $academic_question ="";
    $level_of_stress="";
}

if(isset($_POST['financial'])){
    $financial_question="activate";
    $personal_question="";
    $academic_question ="";
    $level_of_stress="";
}
if(isset($_POST['skip'])){
    $personal_question="disabled";
    $academic_question="activate";
    $financial_question="";
    $level_of_stress="";
}
if(isset($_POST['academic'])){
$academic_question ="";
$financial_question="";
$personal_question="";
$level_of_stress="";
}
if(isset($_POST['acad_skip'])){
    $academic_question="";
    $personal_question="";
    $financial_question="";
    $level_of_stress="";
}

?>