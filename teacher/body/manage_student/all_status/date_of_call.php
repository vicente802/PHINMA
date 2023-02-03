
<?php

$student_data = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
if(mysqli_num_rows($student_data)>=1){
  while($row = mysqli_fetch_assoc($student_data)){
    $date_of_call_status = $row['date_of_call'];
    $date_of_call_status = date('Y-d-m',strtotime($date_of_call_status));
    
    }
}

?>
<form action="" method="POST">
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
      </thead>
      <tbody style="background:white; color:black;"> 
      </tbody>
    </table>
    <div class="card text-center">
      <?php if(!empty($date_of_call_success)){?> 
        <div class="alert alert-success text-center"><?= $date_of_call_success ?></div>
      <?php } ?>

  <div class="card-body" style="background:white; color:black;">
    <label>Data of call :</label>
    <input type="date" name="date_of_call" value='<?= $date_of_call_status ?>'>
  </div>
  <input type="hidden" name="student_id" value='<?= $student_id ?>'>

</div>



  </div>
  
</div>

</div>

</form>