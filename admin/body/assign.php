<?php

?>
<head>
  <style>
    .professor{
        margin-left:270px;
       
      }
    @media screen and (max-width:500px){
      
      .container-fluid{
        width: 100px;
        margin-left: -10px;
      }
      .professor{
        margin-left:150px;
      }
    }
  </style>
</head>

<form action="" method="POST" style="margin-top:10px;">

<div class="container-fluid">
<div class="row">
  <div class="col col-sm">
   
    <table class="table" style="background:#6cbb5c; color:white;">
      <thead style="text-align:center;">
       
      <th><div class="col col-sm float-center" ></div><div class="col col-sm "><p class="professor">Professor Subject Assigned</p></div></th>
      </thead>
      <tbody style="background:white; color:black;"> 
    <tr>
      <td><h6><br><div class="col col-sm-7">Teacher : 
        <select name="teacher_assign" class="form-control">
          <?php
         
          $teacher_select = mysqli_query($con,"SELECT * FROM admin WHERE role='Teacher' and firstname is not null");
          if(mysqli_num_rows($teacher_select)>=1){
            while($teacher_scan = mysqli_fetch_assoc($teacher_select)){
              $username = $teacher_scan['username'];
              $teacher_now = $teacher_scan['email'];
              $fullname = $teacher_scan['firstname']. ' '.$teacher_scan['lastname'];
              $teacher_user = $fullname;
              echo'<option value="'.$fullname.'">'.$fullname.'</option>
              ';
              
            }
          }
          ?>
        </select>
       
        <br> 
        <button type="submit" name="scan_now" class="btn btn-primary ">View</button>
      </div></h6>
  </td>
    <td><br><div class="col col-sm float-right">
    <h6>Subject Available : </h6>
    <select name="assign_subject_now" class="form-control">
      <?php
$assign_subject = mysqli_query($con, "SELECT subject_code FROM assignment WHERE subject_code is not null");
if(mysqli_num_rows($assign_subject)>=1){
  while($data_out = mysqli_fetch_assoc($assign_subject)){
    $assign_subject_code = $data_out['subject_code'];
    echo'
    <option value='.$assign_subject_code.'>'.$assign_subject_code.'</option>';
  }
}
      ?>
    </select>
    <h6>Course : </h6>
    <select name="assign_course_now" class="form-control">
      <?php
$assign_course = mysqli_query($con, "SELECT course FROM assignment WHERE course is not null");
if(mysqli_num_rows($assign_course)>=1){
  while($data_out_course = mysqli_fetch_assoc($assign_course)){
    $assign_course_code = $data_out_course['course'];
    echo'
    <option value='.$assign_course_code.'>'.$assign_course_code.'</option>';
  }
}
      ?>
    </select>
    <h6>Year : </h6>
    <select name="assign_year_now" class="form-control">
      <?php
$assign_year = mysqli_query($con, "SELECT year FROM assignment WHERE year is not null");
if(mysqli_num_rows($assign_year)>=1){
  while($data_out_year = mysqli_fetch_assoc($assign_year)){
    $assign_subject_year = $data_out_year['year'];
    echo'
    <option value='.$assign_subject_year.'>'.$assign_subject_year.'</option>';
  }
}
      ?>
    </select>
    <h6>School Year: </h6>
    <select name="assign_school_year_now" class="form-control">
      <?php
$assign_year = mysqli_query($con, "SELECT school_year FROM assignment WHERE school_year is not null");
if(mysqli_num_rows($assign_year)>=1){
  while($data_out_year = mysqli_fetch_assoc($assign_year)){
    $assign_subject_year = $data_out_year['school_year'];
    echo'
    <option value='.$assign_subject_year.'>'.$assign_subject_year.'</option>';
  }
}
      ?>
    </select>
    <h6>Semester: </h6>
    <select name="assign_semester_now" class="form-control">
      <?php
$assign_year = mysqli_query($con, "SELECT semester FROM assignment WHERE semester is not null");
if(mysqli_num_rows($assign_year)>=1){
  while($data_out_year = mysqli_fetch_assoc($assign_year)){
    $assign_subject_year = $data_out_year['semester'];
    echo'
    <option value='.$assign_subject_year.'>'.$assign_subject_year.'</option>';
  }
}
      ?>
    </select>
    <h6>Term: </h6>
    <select name="assign_term_now" class="form-control">
      <?php
$assign_year = mysqli_query($con, "SELECT term FROM assignment WHERE term is not null");
if(mysqli_num_rows($assign_year)>=1){
  while($data_out_year = mysqli_fetch_assoc($assign_year)){
    $assign_subject_year = $data_out_year['term'];
    echo'
    <option value='.$assign_subject_year.'>'.$assign_subject_year.'</option>';
  }
}
      ?>
    </select>
    <br>
    <input type="hidden" name="username" value='<?= $username ?>'>
    <button type="submit" name="teacher_subject_assign" class="btn btn-primary btn-md float-right">Assign</button>
  </div></td>
    </tr>
   
      </tbody>
    </table>
  </div>
</div>
</div>
</form>
<div class="table-responsive">
<div class="container-fluid">
<div class="row">
  <div class="col col-sm">
    <table class="table" style="background:green; color:white;">
      <thead style="text-align:center;">
       
      <th><div class="col col-sm float-center" ></div><div class="col col-sm "style="text-align:center;"></div></th>
      </thead>
      <tbody style="background:white; color:black;"> 
      <tr>
        <td><b>Teacher</b></td>
        <td> <b>Assignment</b></td>
        <td><b>Course</b></td>
        <td><b>Year</b></td>
        <td><b></b></td>
      </tr>
      <tr>
      <?php 
      $teacher_assign_now = mysqli_query($con, "SELECT * FROM teacher");
      if(mysqli_num_rows($teacher_assign_now) >=1){
        while($assign_now = mysqli_fetch_assoc($teacher_assign_now)){
          $teacher = $assign_now['teacher'];
          $subject_row = $assign_now['subject'];
          $year_row = $assign_now['year'];
          $course_row = $assign_now['course'];
          $ID = $assign_now['ID'];
          echo'<form action="" method="POST"><tr><td> '.$teacher.'</td>
          <td> '.$subject_row.'</td>
          <td> '.$course_row.'</td>
          <td> '.$year_row.'</td>
          <input type="hidden" value='.$ID.' name="id_del">
          <td><button type="submit" class="btn btn-danger" name="del_assign">Delete</button></td>
          </tr></form> ';
        }
      }
    
      ?>
      
      
      </tr>
      </tbody>
      
    </table>
    <h4 style="color:black; text-align:center"><?php
    if(!empty($err_result)){
      echo $err_result;
    }
    ?></h1>
  </div>
</div>
</div>
