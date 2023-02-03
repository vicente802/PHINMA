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
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
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
  
</div>
<div class="card-header" style="background:#6cbb5c; color:white;">
    <button type="submit" name="open_student_info" class="btn btn-md btn-primary">Manage</button>

  </div>
</div>
</form>
