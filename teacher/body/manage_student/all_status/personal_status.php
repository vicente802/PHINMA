<?php
$student_id = $_SESSION['student_id'];
$show_personal = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
if(mysqli_num_rows($show_personal)>=1){
  while($show_data = mysqli_fetch_assoc($show_personal)){
    $user_id = $show_data['ID'];
  }
}
$personal_data = mysqli_query($con, "SELECT * FROM personal_concern WHERE user_id='$user_id'");
if(mysqli_num_rows($personal_data)>=1){
  $personal_data_show = mysqli_fetch_assoc($personal_data);
  $concern = $personal_data_show['concern_reason'];
  $action = $personal_data_show['action'];
}
?>
<div class="card text-center">
  <div class="card-header">
Personal Concern  </div>
  <div class="card-body text-left" style="background:white; color:black;">
  <div class="row"> 
    <div class="col col-sm">
    <b>Concern/Reasons</b>
    <select class="form-control" style="margin-top: 10px;" name="personal_reason">
        <option value="<?php if(empty($concern)){}else echo $concern; ?>"><?php if(empty($concern)){}else echo $concern; ?></option>
      <option value="Family Problem">Family Problem</option>
      <option value="Addiction">Addiction (Substance Abuse)</option>
      <option value="Physical Health Problem">Physical Health Problem (Pregnance Sickness)</option>
      <option value="Mental Problem">Mental Problem (Lack of Interest, Depression, Stress, Anxiety)</option>
      <option value="Social Problem">Social Problem (Peer Influence, Peer Pressure, Bullying)</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col col-sm">
        <br>
    <b>Action Taken</b>
    <select class="form-control"  style="margin-top: 10px;" name="personal_action">
    <option value="<?php if(empty($action)){}else echo $action; ?>"><?php if(empty($action)){}else echo $action; ?> </option>
  <option value="Refer to CSDL">Refer to CSDL</option>
  <option value="Resolve by Adviser">Resolve by Adviser</option>
    </select>
    </div>
    </div>
</div>
</div>