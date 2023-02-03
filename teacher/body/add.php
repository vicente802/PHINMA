<?php
include '../connection/db.php';
$username = $_SESSION['user_name'];
$user_acc = mysqli_query($con , "SELECT * FROM teacher WHERE username='$username' OR teacher='$username'");
if(mysqli_num_rows($user_acc)>=1){
  $user = mysqli_fetch_assoc($user_acc);
  $email = $user['teacher'];
}
?>
<head>


    <style>
#success_message{ display: none;}

    </style>
</head>
<div class="container-fluid">
<div class="row">
<div class="col col-lg-29">
<center> 
  <br>
  <?php
if(!empty($form_err)){
  ?>
<div class="alert alert-danger"><?php echo $form_err ?></div>
  <?php
}
  ?>
   <?php
if(!empty($form_err1)){
  ?>
<div class="alert alert-danger"><?php echo $form_err ?></div>
  <?php
}
  ?>
    <form class="well" style="margin-top:120px;background: white;" action="" method="POST"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend style="text-align:center; "><h3>Add <?php echo $selected_form ?></h3></legend>

<!-- Text input-->
<br>
<br>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Title </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      
  <input name="activity_name" placeholder="Activity Name" class="form-control" type="text">
  <input name="username" placeholder="" value='<?php echo $username ?>' class="form-control" type="hidden">
  <input name="email" placeholder="" value='<?php echo $email ?>' class="form-control" type="hidden">
  <input name="selected_form" placeholder="" value='<?php echo $selected_form ?>' class="form-control" type="hidden">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Form Type</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
 <select name="select_form_type" class="form-control">
  <?php 
  $scan = mysqli_query($con, "SELECT * FROM form WHERE type_of_forms is not null");
  if(mysqli_num_rows($scan)>=1){
    while($row = mysqli_fetch_assoc($scan)){
      echo'
      <option value='.$row['type_of_forms'].'>'.$row['type_of_forms'].'</option>';
    }
  }
  ?>
 </select>
    </div>
  </div>
</div>

<!-- Select Basic -->
 

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4 ">
    <button type="submit" name="add_form_now" class="btn btn-primary">Add Now</button>
  </div>
</div>

</fieldset>
</form>
</center>
</div>
</div>
</div>
    </div><!-- /.container -->
 