<?php
$student_data = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
if(mysqli_num_rows($student_data)>=1){
  while($row = mysqli_fetch_assoc($student_data)){
    $date_of_call_status = $row['date_of_call'];
    $date_of_call_status = date('Y-d-m',strtotime($date_of_call_status));
    
    }
}
if(!empty($err_save)){ ?>
<div class="alert alert-danger text-center"><?= $err_save ?></div>
<?php }
if(!empty($success_save)){?>
<div class="alert alert-success text-center"><?= $success_save ?></div>
<?php }
?>
<div class="card text-center">
<div class="card-header" style="font-weight: bold;">
    Form of Contacts
</div>
  <div class="card-body" style="background:white; color:black;">
    <?php
    $personal_status_display="";
    $academic_status_display="";
    $financial_status_display="";
    $display = mysqli_query($con,"SELECT * FROM user WHERE student_id='$student_id'");
    if(mysqli_num_rows($display)>=1){
      while($display_status = mysqli_fetch_assoc($display)){
        $personal_status = $display_status['personal_status'];
        $academic_status = $display_status['academic_status'];
        $financial_status = $display_status['financial_status'];
        if($personal_status != null){
          $personal_status_display="activate";
        }
        if($academic_status != null){
          $academic_status_display="activate";
        }
        if($financial_status != null){
          $financial_status_display="activate";
        }
      }
    }
    ?><form action="" method="POST">
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
<br>
<div class="card-header" style="background:#6cbb5c; color:white; font-weight: bold;">
    Risk Factors
</div>
      <div class="row">
     
          <div class="col col-sm">
          <?php if(!empty($personal_status_display)){ include 'all_status/personal_status.php'; } ?>
          </div>
          <div class="col col-sm">
          <?php if(!empty($academic_status_display)){ include 'all_status/academic_status.php'; } ?>
          </div>
          <div class="col col-sm">
          <?php if(!empty($financial_status_display)){ include 'all_status/financial_status.php'; } ?>
          </div>
      </div>
      </div>
      </div>
      </div>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
  </form>
</div>
