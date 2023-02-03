<?php
$student_id = $_SESSION['student_id'];
$show_personal = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
if(mysqli_num_rows($show_personal)>=1){
  while($show_data = mysqli_fetch_assoc($show_personal)){
    $user_id = $show_data['ID'];
  }
}
$academic_data = mysqli_query($con, "SELECT * FROM academic_concern WHERE user_id='$user_id'");
if(mysqli_num_rows($academic_data)>=1){
  $academic_data_show = mysqli_fetch_assoc($academic_data);
  $academic_concern = $academic_data_show['concern_reason'];
  $academic_action = $academic_data_show['action'];
}
?>

<div class="card text-center">
  <div class="card-header">
Academic Concern  </div>
  <div class="card-body text-left" style="background:white; color:black;">
  <div class="row"> 
    <div class="col col-sm">
    <b>Concern/Reasons</b>
    <select class="form-control" style="margin-top: 10px;" name="academic_concern_select">
    <option value="<?php if(empty($academic_concern)){}else echo $academic_concern; ?>"><?php  if(empty($academic_concern)){}else echo $academic_concern;  ?></option>
      <option value="Difficulty with lessons">Difficulty with lessons</option>
      <option value="Course is not a fit">Course is not a fit</option>
      <option value="Concern with teacher">Concern with teacher</option>
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col col-sm">
        <br>
    <b>Action Taken</b>
    <select class="form-control"  style="margin-top: 10px;" name="academic_concern_action">
    <option value="<?php if(empty($academic_action)){}else echo $academic_action; ?>"><?php if(empty($academic_action)){}else echo $academic_action; ?></option>
  <option value="Refer to CSDL">Refer to CSDL</option>
  <option value="Resolve by Adviser">Resolve by Adviser</option>
    </select>
    </div>
    </div>
</div>
</div>