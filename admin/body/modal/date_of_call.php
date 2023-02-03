
<?php

$student_data = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
if(mysqli_num_rows($student_data)>=1){
  while($row = mysqli_fetch_assoc($student_data)){
    $date_of_call_status = $row['date_of_call'];
    $date_of_call_status = date('Y-d-m',strtotime($date_of_call_status));
    
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
  <?php 
  if(!empty($date_of_call_error)){
    ?>
    <div class="alert alert-success text-center"><?php echo $date_of_call_error ?></div>
    <?php
  }
  ?>
<div class="row">
  <div class="col col-sm">
    <table class="table" style="background:#6cbb5c; color:white;">
      <thead style="text-align:center;">
      </thead>
      <tbody style="background:white; color:black;"> 
      </tbody>
    </table>
    <div class="card text-center">
      <?php if(!empty($date_of_call_success)){?> 
        <div class="alert alert-success text-center"><?= $date_of_call_success ?></div>
      <?php } ?>
  <div class="card-header" style="font-weight: bold; background:#6cbb5c;">
    Form of Contacts
  </div>
  <div class="card-body" style="background:white; color:black;">
    <label>Data of call :</label>
    <input type="date" name="date_of_call" value='<?= $date_of_call_status ?>'>
  </div>
  <input type="hidden" name="student_id" value='<?= $student_id ?>'>
  <button class="btn btn-primary" type="submit" name="date_of_call_submit">Save</button>
</div>



  </div>
  
</div>

</div>

</form>