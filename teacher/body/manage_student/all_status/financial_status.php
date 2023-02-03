<?php
$student_id = $_SESSION['student_id'];
$show_personal = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
if(mysqli_num_rows($show_personal)>=1){
  while($show_data = mysqli_fetch_assoc($show_personal)){
    $user_id = $show_data['ID'];
  }
}
$financial_data = mysqli_query($con, "SELECT * FROM financial_concern WHERE user_id='$user_id'");
if(mysqli_num_rows($financial_data)>=1){
  $financial_data_show = mysqli_fetch_assoc($financial_data);
  $financial_concern = $financial_data_show['cash_flow_problems'];
  $less_of_support = $financial_data_show['less_of_support'];
  $financial_action = $financial_data_show['action'];
}
?>
<div class="card text-center">
  <div class="card-header">
Financial Concern  </div>
  <div class="card-body text-left" style="background:white; color:black;">
  <div class="row"> 
    <div class="col col-sm">
    <b>Cash Flow Problems</b>
    <select class="form-control" style="margin-top: 10px;" name="financial_cash_problems">
    <option value="<?php if(empty($financial_concern)){}else echo $financial_concern; ?>"><?php if(empty($financial_concern)){}else echo $financial_concern; ?></option>
    <option value="Cash Flow Problems">Cash Flow Problems</option>
      <option value="Delayed Remittance or Salary of Provider">Delayed Remittance or Salary of Provider</option>
      <option value="Lack of funds for transportation">Lack of funds for transportation</option>
      <option value="Lack of funds for food">Lack of funds for food</option>
      <option value="Lack of funds project and/or school supplies">Lack of funds project and/or school supplies</option>
      <option value="Delayed harvest">Delayed harvest</option>
      <option value="Death in Family (not provider)">Death in Family (not provider)</option>
      <option value="Illness in Family (not provider)">Illness in Family (not provider)</option>
    
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col col-sm">
        <br>
    <b>Loss of Support</b>
    <select class="form-control"  style="margin-top: 10px;" name="financial_loss_support">
    <option value="<?php if(empty($less_of_support)){}else echo $less_of_support; ?>"><?php if(empty($less_of_support)){}else echo $less_of_support; ?></option>
    <option value="Death of Provider">Death of Provider</option>
      <option value="Illness of Provider">Illness of Provider</option>
      <option value="Loss of Job of Provider">Loss of Job of Provider</option>
      <option value="Closure of Business">Closure of Business</option>
      <option value="Loss from/failed harvest">Loss from/failed harvest</option>
    </select>
    </div>
    </div>
    <div class="row">
    <div class="col col-sm">
        <br>
    <b>Action Taken</b>
    <select class="form-control"  style="margin-top: 10px;" name="financial_action">
    <option value="<?php if(empty($financial_action)){}else echo $financial_action; ?>"><?php if(empty($financial_action)){}else echo $financial_action; ?></option>
        <option value="Refer to Finance">Refer to Finance</option>
        <option value="Resolved by Adviser">Resolved by Adviser</option>
    </select>
    </div>
    </div>
</div>
</div>