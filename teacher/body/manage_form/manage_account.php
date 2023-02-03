<?php
include '../connection/db.php';
include './function/bootstrap.php';
$username = $_SESSION['user_name'];
$acc = mysqli_query($con,"SELECT * FROM admin WHERE username ='$username' or email='$username'");
if(mysqli_num_rows($acc)>=1){
while($row = mysqli_fetch_assoc($acc)){
  $first_name = $row['firstname'];
  $last_name = $row['lastname'];
  $middle = $row['middle'];
  $username = $row['username'];
  $gender = $row['gender'];
  $birthdate = $row['birthdate'];
  $email = $row['email'];
  $password = $row['password'];
}
}
?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
#success_message{ display: none;}

    </style>
</head>
<div class="container-fluid">
<div class="row">
<div class="col col-lg-29">
    <form class="well form-horizontal" style="background: white;" action="" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend style="text-align:center;"><h3>Manage Account</h3></legend>
<?php if(!empty($succ_teacher)){ ?>
<div class="alert alert-success text-center"><?= $succ_teacher ?></div>
<?php } ?>

<!-- Text input-->
<br>
<br>

<div class="form-group">
    <label class="col-md-4 control-label">First Name :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="form-group">
    <input name="first_name" placeholder="First Name" class="form-control" id="first_name" value="<?php echo $first_name ?>" type="text">

    </div>
    </div>
</div>

<!-- Text input-->

<div class="form-group">
    <label class="col-md-4 control-label" >Last Name :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="form-group">
    <input class="form-control"  name="last_name" value="<?php echo $last_name ?>" placeholder="Last Name" class="form-control"  type="text">
    </div>
    </div>
</div>

<!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label">Middle Initial(optional) :</label>  
    <div class="col-md-2 inputGroupContainer">
    <div class="input-group">
    <input name="middle" placeholder="Middle Name" value="<?php echo $middle ?>" class="form-control"  type="text">
    </div>
    </div>
    </div>
<!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label">Username : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <input name="username" placeholder="username" value="<?php echo $username ?>" class="form-control" type="text">
    </div>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-4 control-label">Gender : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <select name="gender" style="height:35px; padding:5px; " class="form-control">
    <option value="Male">Male</option>
    <option value="Femail">Female</option>
    </select>
    </div>
    </div>
    </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Email :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="email" placeholder="Email" value="<?php echo $email ?>" class="form-control" type="email">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Password :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="password" placeholder="Password" value="<?= $password; ?>" class="form-control"  type="password">
    </div>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label">Birthdate :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="birthdate" placeholder="" value='<?= $birthdate = date('Y-d-m',strtotime($birthdate));   ?>'  class="form-control"  type="date">
    </div>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4 text-right">
    <button type="submit" name="update_teacher" class="btn btn-primary">Update</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>
    </div><!-- /.container -->
