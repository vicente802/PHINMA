<?php

$user=$_SESSION['user_name'];
include '../admin/function/server.php';
$tch = mysqli_query($con, "SELECT * FROM admin WHERE username='$user' OR email ='$user'");
if(mysqli_num_rows($tch)>=1){
    while($row = mysqli_fetch_assoc($tch)){
        $user_tch = $row['username'];
        $user_email = $row['email'];

       
    }
}
$status="";
mysqli_query($con, "UPDATE `teacher` SET username='$user' WHERE teacher='$user_email'");
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="css/style.css">
    <style>
       
.card{
    margin-top: 10px;
    background: #6cbb5c;
    padding: 0px;
    color:white;
    
}
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>
</head>
<div class="container-fluid">   
   <div class="card mb-3">
  <div class="card-body" style="color:white;">
    <h4 class="card-title"><i class="fa fa-exclamation"> Take Note :</i></h4>
        <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;"><i class="fa fa-exclamation-circle"> Things to do When selection Assignment are not showing from the selection.</i></h1>
        <ul style="font-size: 15px; margin-top:-13px;">
            <li>You must check you internet connection if working properly.</li>
            <li>Refresh your browser or restart your browser.</li>
            <li>Wait the website fully loaded.</li>
        </ul>
  </div>
</div>
<?php
if(!empty($success_save)){?>
<div class="alert alert-success text-center"><?= $success_save ?></div>
<?php
}?>

<div class="card">
        <div class="card-header" style="color:black; font-weight:800vh; font-size:25px;">Monitoring</div>
        <div class="card-body" style="color:black; background:white;">
        <?php include '../admin/body/graph/monitoring.php'; ?>
        </div>
    </div>
<div class="container-fluid">
<form action="" method="POST" class="form-group" >
<div class="card mb-3">
  
  <div class="card-body" style="color:black; background:white;">
    <h5 class="card-title">Search</h5>
    <hr>
   <div class="row">
    <div class="col col-sm-2">
    <h5>School Year</h5>
    </div>
    <div class="col col-sm-2">
    <h5>Semester</h5>
    </div>
    <div class="col col-sm-2">
    <h5>Term</h5>
    </div>
    <div class="col col-sm-4">
    <h5>Assignment</h5>
    </div>
   </div>

   <div class="row">
   <div class="col col-sm-2">
    <select class="form-control">
        <?php 
        $assign = mysqli_query($con, "SELECT * FROM assignment WHERE school_year is not null");
        if(mysqli_num_rows($assign)>=1){
            while($assign_school_year = mysqli_fetch_assoc($assign)){
                $assign_now_school_year = $assign_school_year['school_year'];
                echo'<option value='.$assign_now_school_year.'>'.$assign_now_school_year.'</option>';
            }
        }
        ?>
    </select>
    </div>
    <div class="col col-sm-2">
    <select class="form-control">
    <?php 
        $semester = mysqli_query($con, "SELECT * FROM assignment WHERE semester is not null");
        if(mysqli_num_rows($semester)>=1){
            while($assign_semester = mysqli_fetch_assoc($semester)){
                $assign_semester_now = $assign_semester['semester'];
                echo'<option value='.$assign_semester_now.'>'.$assign_semester_now.'</option>';
            }
        }
        ?>
    </select>
    </div>
    <div class="col col-sm-2">
    <select class="form-control">
    <?php 
        $term = mysqli_query($con, "SELECT * FROM user WHERE term is not null");
        if(mysqli_num_rows($term)>=1){
            while($assign_term = mysqli_fetch_assoc($term)){
                $assign_term_now = $assign_term['term'];
                echo'<option value='.$assign_term_now.'>'.$assign_term_now.'</option>';
            }
        }
        ?>
    </select>
    </div>
    <div class="col col-sm-4">
    <select name="subject_code" class="form-control">
    <?php 
        $assignment = mysqli_query($con, "SELECT teacher.subject,user.subject_code FROM user inner join teacher on teacher.subject=user.subject_code WHERE teacher.username='$user' or teacher.teacher='$user_email'");
        if(mysqli_num_rows($assignment)>=1){
            while($assign_assignment = mysqli_fetch_assoc($assignment)){
                $assign_assignment_now = $assign_assignment['subject'];
                echo'<option value='.$assign_assignment_now.'>'.$assign_assignment_now.'</option>';
            }
        }
        ?>
    </select>
    </div>
    <div class="col col-sm-2">
    <button type="submit" name="search" class="btn btn-primary">Search</button>
    </div>
   </div>
    </form>
    <!-- Content Row -->
<br>    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="background: #6cbb5c;" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Student ID</th>
                                        <th>Fullname</th>
                                        <th>Year</th>
                                        <th>Course</th>
                                        <th>Subject Code</th>
                                    </tr>
                                </thead>
                                <tbody style="background: white; color:black;">
                                <?php

if(empty($tabs)){
    $tch = mysqli_query($con, "SELECT * FROM admin WHERE username='$user' OR email ='$user'");
    if(mysqli_num_rows($tch)>=1){
        while($row = mysqli_fetch_assoc($tch)){
            $user_tch = $row['username'];
            $user_email = $row['email'];
            $user_id = $row['ID'];
            $_SESSION['ID'] = $user_id;
        }
    }

    $test = mysqli_query($con,"SELECT * FROM teacher inner join user on teacher.subject=user.subject_code WHERE teacher.username='$user' or teacher.teacher='$user' order by teacher.subject asc");
if(mysqli_num_rows($test)>=1){
    while($testing = mysqli_fetch_array($test)){
        $personal = $testing['personal_status'];
        $academic = $testing['academic_status'];
        $financial = $testing['financial_status'];
        $student_id = $testing['student_id'];
        $level_of_stress = $testing['level_of_stress'];
        $date_of_call = $testing['date_of_call'];
        $user_id = $testing['ID'];
        $remove_emoji = $testing['remove_emoji'];
        if($personal != null){
            $personal = '<b style="color:red; border:2px solid red; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">P</b>';
        }
        if($academic != null){
            $academic = '<b style="color:green; border:2px solid green; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">A</b>';
        }
        if($financial != null){
            $financial = '<b style="color:blue; border:2px solid blue; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">F</b>';
        }
    
        if($date_of_call != null){
        $date_of_call = '<i class="fa fa-check-circle" style="font-size:20px; color:black;"></i>';
        }
        if($level_of_stress != null){
            $level_of_stress = '<i class="fa fa-frown-o" style="font-size:20px; color:black;"></i>';
        }
        if(($remove_emoji == null)){
            $status = '<i class="fa fa-smile-o" style="font-size:20px; color:darkgreen;"></i>';
        }
$fullname = $testing['lastname']  . ' '. $testing['firstname'] . ' '. $testing['middle'].'.';
echo'<tr><td>'.$personal. ' ' .$academic. ' ' .$financial. '  ' .$status. '  ' .$level_of_stress. ' ' .$date_of_call. '</td>
<td>'.$testing['student_id'].'</td>
<td>'.$fullname.'</td>
<td>'.$testing['year'].'</td>
<td>'.$testing['course'].'</td>
<form action="" method="POST">
<input type="hidden" name="student_id" value='.$student_id.'>
<input type="hidden" name="user_id" value='.$user_id.'>
<td>'.$testing['subject'].' <button style="margin-left:50px;" name="open_manage_student" class="btn btn-primary">Manage</button>
</form>
</tr>';
}
}
}

if(!empty($search_subject))
{
    $searching = mysqli_query($con,"SELECT * FROM user WHERE subject_code='$subject_code'");
    if(mysqli_num_rows($searching)>=1){
    while($search_data = mysqli_fetch_assoc($searching)){
        $personal = $search_data['personal_status'];
        $academic = $search_data['academic_status'];
        $financial = $search_data['financial_status'];
        $student_id = $search_data['student_id'];
        $level_of_stress = $search_data['level_of_stress'];
        $date_of_call = $search_data['date_of_call'];
        $user_id = $search_data['ID'];
        $remove_emoji = $search_data['remove_emoji'];
        if($personal != null){
            $personal = '<b style="color:red; border:2px solid red; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">P</b>';
        }
        if($academic != null){
            $academic = '<b style="color:green; border:2px solid green; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">A</b>';
        }
        if($financial != null){
            $financial = '<b style="color:blue; border:2px solid blue; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">F</b>';
        }
        if($level_of_stress != null){
            $level_of_stress = '<i class="fa fa-frown-o" style="font-size:20px; color:black;"></i>';
        }
        if($date_of_call != null){
            $date_of_call = '<i class="fa fa-check-circle" style="font-size:20px; color:black;"></i>';
        }
        if(($remove_emoji == null)){
            $status = '<i class="fa fa-smile-o" style="font-size:20px; color:darkgreen;"></i>';
        }

        $fullname = $search_data['lastname']  . ' '. $search_data['firstname'] . ' '. $search_data['middle'].'.';
echo'<tr><td><b >'.$personal. '</b> ' .$academic. ' ' .$financial. ' ' .$status. ' ' .$level_of_stress. ' '.$date_of_call. ' </td>
<td>'.$search_data['student_id'].'</td>
<td>'.$fullname.'</td>
<td>'.$search_data['year'].'</td>
<td>'.$search_data['course'].'</td>
<form action="" method="POST">
<input type="hidden" name="student_id" value='.$student_id.'>
<input type="hidden" name="user_id" value='.$user_id.'>
<td>'.$search_data['subject_code'].' <button style="margin-left:50px;" name="open_manage_student" class="btn btn-primary">Manage</button></form></tr>';
    }
}
}

?>         
</tbody>
</table>
</div>
</div>
<?php
if(!empty($set_status)){
    include 'manage_student/set_student.php';
}

if(!empty($manage_student)){
    include 'manage_student/manage_student.php';
}
if(!empty($student_stat)){
    include 'manage_student/student_status.php';
}
if(!empty($mmp2_show)){
    include 'manage_student/mmp2.php';
}
?>
    
                <!-- /.container-fluid -->

            </div>
           
</div>
  </div>

<script>$(document).ready(function () {
    $('#dataTable').DataTable();
});
</script>
<?php

?>


