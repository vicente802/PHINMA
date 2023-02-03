<?php
$student_id = $_SESSION['student_id'];
$student_data = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
if(mysqli_num_rows($student_data)>=1){
  while($row = mysqli_fetch_assoc($student_data)){
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $middle = $row['middle'];
  $term = $row['term'];
  $student_id = $row['student_id'];
  $semester = $row['semester'];
  $year = $row['year'];
  $course = $row['course'];
  $subject_code = $row['subject_code'];
  $email = $row['email'];
  $password = $row['password'];
  $username = $row['username'];
  $schl_year = $row['school_year'];
  $gender = $row['gender'];
  $date = $row['date'];
  $birthdate = date('Y-m-d', strtotime($date));
  }
}
?>
<form action="#" method="POST">
<div class="container-fluid">
  <?php 
  if(!empty($success)){
    ?>
    <div class="alert alert-success text-center"><?php echo $success ?></div>
    <?php
  }
  ?>
<div class="row">
  <div class="col col-sm">
    <table class="table" style="background:#6cbb5c; color:white;">
      <thead style="text-align:center;">
       
      <th><div class="col col-sm float-center" ></div><div class="col col-sm "style="margin-left:190px;">Student Information</div></th>
      </thead>
      <tbody style="background:white; color:black;"> 
    <tr>
      <td><h6><br><div class="col col-sm-7">Firstname : <input type="text" name="fname" class="form-control" value="<?php echo $firstname ?>"></div></h6>
    <div class="col col-sm-7"><h6>Lastname : <input type="text" name="lname" class="form-control" value="<?php echo $lastname ?>"></h6></div>
    <div class="col col-sm-7"><h6>Middle Name : <input type="text" name="mname" class="form-control" value="<?php echo $middle ?>"></h6></div>
    <div class="col col-sm-7"><h6>Email : <input type="text" name="email" class="form-control" value="<?php echo $email ?>"></h6></div>
    <div class="col col-sm-7"><h6>Username : <input type="text" name="username" class="form-control" value="<?php echo $username ?>"></h6></div>
    <div class="col col-sm-7"><h6>Gender : 
      <select name="gender_sub" class="form-control">
        <?php
      echo'<option value='.$gender.'>'.$gender.'</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      ';
        ?>
      </select>
    </h6></div>
    <div class="col col-sm-7"><h6>Password : <input type="text" name="password" class="form-control" value="<?php echo $password ?>"></h6></div>
    <div class="col col-sm-7"><h6>Birthdate : <input type="date" name="date_local" class="form-control" value="<?php echo $birthdate  ?>"></h6></div>

  </td>
    <td><br><div class="col col-sm float-right"><h6>Student ID : <input type="text" name="std_id" class="form-control" value="<?php echo $student_id ?>"></h6>
    <h6>School Year : </h6>
    <select name="year_level" class="form-control">
    <option value="<?php echo $schl_year ?>"><?php echo $schl_year ?></option>
      <?php
$select_value_sub = mysqli_query($con, "SELECT school_year FROM assignment WHERE school_year is not null ");
if(mysqli_num_rows($select_value_sub)>=1){
  while($data_in = mysqli_fetch_assoc($select_value_sub)){
    $schl_year_sub = $data_in['school_year'];
    echo'
    <option value='.$schl_year_sub.'>'.$schl_year_sub.'</option>';
  }
}
      ?>
    </select>
    <h6>Year Level : </h6>
    <select name="year" class="form-control">
    <option value="<?php echo $year ?>"><?php echo $year ?></option>
      <?php
$select_value_sub = mysqli_query($con, "SELECT year FROM assignment WHERE year is not null");
if(mysqli_num_rows($select_value_sub)>=1){
  while($data_in = mysqli_fetch_assoc($select_value_sub)){
    $year = $data_in['year'];
    echo'
    <option value='.$year.'>'.$year.'</option>';
  }
}
      ?>
    </select>
    <h6>Course : </h6>
    <select name="course_sub" class="form-control">
    <option value="<?php echo $course ?>"><?php echo $course ?></option>
      <?php
$select_value_sub = mysqli_query($con, "SELECT course FROM assignment WHERE course is not null");
if(mysqli_num_rows($select_value_sub)>=1){
  while($data_in = mysqli_fetch_assoc($select_value_sub)){
    $course_sub = $data_in['course'];
    echo'
    <option value='.$course_sub.'>'.$course_sub.'</option>';
  }
}
      ?>
    </select>
    <h6>Semester :</h6>
    <select name="semester_sub" class="form-control">
    <option value="<?php echo $semester ?> "><?php echo $semester ?> Semester</option>
      <?php
$select_value_sub = mysqli_query($con, "SELECT semester FROM assignment WHERE semester is not null");
if(mysqli_num_rows($select_value_sub)>=1){
  while($data_in = mysqli_fetch_assoc($select_value_sub)){
    $semester_sub = $data_in['semester'];
    echo'
    <option value='.$semester_sub.'>'.$semester_sub.' Semester</option>';
  }
}
      ?>
    </select>
    <h6>Term :</h6>
    <select name="term_sub" class="form-control">
    <option value="<?php echo $term ?>"><?php echo $term ?></option>
      <?php
$select_value_sub = mysqli_query($con, "SELECT term FROM assignment WHERE term is not null");
if(mysqli_num_rows($select_value_sub)>=1){
  while($data_in = mysqli_fetch_assoc($select_value_sub)){
    $term_sub = $data_in['term'];
    echo'
    <option value='.$term_sub.'>P'.$term_sub.'</option>';
  }
}
      ?>
    </select>
    <h6>Assignment :</h6>
    <select name="sub_code" class="form-control">
    <option value="<?php echo $subject_code ?>"><?php echo $subject_code ?></option>
      <?php
$select_value_sub = mysqli_query($con, "SELECT subject_code FROM assignment WHERE subject_code is not null");
if(mysqli_num_rows($select_value_sub)>=1){
  while($data_in = mysqli_fetch_assoc($select_value_sub)){
    $sub_code = $data_in['subject_code'];
    echo'
    <option value='.$sub_code.'>'.$sub_code.'</option>';
  }
}
      ?>
    </select>


    <br>
   
    <button type="submit" name="update_manage" class="btn btn-primary btn-md float-right">Update</button>
    <button type="submit" name="delete_manage" class="btn btn-danger btn-md float-right">Delete</button>
  </div></td>
    </tr>
   
      </tbody>
    </table>
  </div>
</div>
</div>
</form>