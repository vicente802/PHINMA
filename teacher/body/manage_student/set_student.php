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
<form action="" method="POST">

<div class="container-fluid">
<div class="row">
  <div class="col col-sm">
    <table class="table" style="background:#6cbb5c; color:white;">
      <thead style="text-align:center;">
       
      <div class="card-header text-center" style="font-weight: bold; color:white; background:#6cbb5c;">
Student Information  </div>
      </thead>
      <tbody style="background:white; color:black;"> 
    <tr>
      <td><h6><br>Firstname : <b> <?php echo $firstname ?> </b></h6>
    <h6>Lastname : <b><?php echo $lastname ?></b></h6> 
   <h6>Email :<b> <?php echo $email ?></b></h6>
    
    </h6></div>
   
  </td>
    <td><br><h6>Student ID : <b><?php echo $student_id ?></b></h6>
    <h6>School Year :<b> <?php echo $schl_year ?></b></h6>
    <h6>Year Level :<b> <?php echo $year ?></b></h6>
     
    </select>
    <h6>Course :<b> <?php echo $course ?></b></h6>
    <br>
   
  </div></td>
    </tr>
    
      </tbody>
    </table>
  </div>
  <input type="hidden" name="student_id" value='<?= $student_id ?>'>
</div>
<div class="card-header" style="background:#6cbb5c; color:white;">
    <button type="submit" name="open_student_info" class="btn btn-md btn-primary">Manage</button>
    <button type="submit" name="student_status" class="btn btn-md btn-primary">MM P1</button>
    <button type="submit" name="mmp2" class="btn btn-md btn-primary">MM P2</button>
    <button type="submit" name="mmp2" class="btn btn-md btn-primary">MM P3</button>
  </div>
</div>
</form>
