<?php

include '../connection/db.php';
include './function/bootstrap.php';
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
    <form class="well form-horizontal" style="margin-top:10px;background: white;" action="" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend style="text-align:center; background:#28a745; color:white;"><h3>Add Professor</h3></legend>
<?php if(!empty($err)) { ?>
<div class="alert alert-danger text-center"><?= $err ?></div>
<?php } ?>
<?php if(!empty($err1)) { ?>
<div class="alert alert-success text-center"><?= $err1 ?></div>
<?php } ?>
<!-- Text input-->
<br>
<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Firstname : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      
  <input name="firstname" placeholder="Firstname" class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Lastname : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      
  <input name="lastname" placeholder="Lastname" class="form-control" type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Username : </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
      
  <input name="username" placeholder="username" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Email :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="email" placeholder="Email" class="form-control" type="email">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Gender :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <select class="form-control" name="gender" style="height:30px ;">
    <option value='Male'>Male</option>
    <option value='Female'>Female</option>
  </select>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Birthdate :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="date" placeholder="Email" class="form-control" type="date">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Password :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <input name="password" placeholder="Password" class="form-control"  type="password">
    </div>
  </div>
</div>
<!-- Select Basic -->
 

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4 text-right">
    <button type="submit" name="prof-register" class="btn btn-primary">Add Professor</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>
    </div><!-- /.container -->
