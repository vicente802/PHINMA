<?php
$username = $_SESSION['user_name'];
?>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
       
       .card{
           margin-top: 10px;
           background: #6cbb5c;
           padding: 0px;
           color:white;
           
       }
           </style>
</head>

<div class="container-fluid">   
   <div class="card mb-3">
  <div class="card-body" style="color:white;">
    <h4 class="card-title"><i class="fa fa-exclamation"> Take Note :</i></h4>
        <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;"><i class="fa fa-exclamation-circle"> Things to do When selection Assignment are not showing from the selection.</i></h1>
        <ul style="font-size: 15px; margin-top:-13px;">
            <li>You must check you internet connection if working properly.</li>
            <li>Refresh your browser or restart your browser.</li>
            <li>Wait the website fully loaded.</li>
        </ul>
  </div>
</div>
<?php
if(!empty($add_success)){
  ?>
<div class="alert alert-success text-center"><?php echo $add_success ?></div>
  <?php
}
?>
<form action="" method="POST" class="form-group" >
<div class="card mb-3">
  
  <div class="card-body" style="color:black; background:white;">
    <h5 class="card-title" style="text-align: center;">Manage Forms</h5>
    <hr>


    <!-- Content Row -->
 <div class="card-body">
                    
 <?php
$username = $_SESSION['user_name'];
$user_acc = mysqli_query($con,"SELECT * FROM teacher WHERE username='$username' OR teacher='$username'");
if(mysqli_num_rows($user_acc)>=1){
   $user_now = mysqli_fetch_assoc($user_acc);
   $email = $user_now['teacher'];
}
?>
<?php 
if(!empty($assign_now_succ)){
    ?>
    <div class="alert alert-success text-center"><?php echo $assign_now_succ ?></div>
    <?php
}
?>
<div class="container">
<div class="card mb-3">
  <div class="card-body" style="color:black; background:white;">
    <h4 class="card-header"> Create Form</h4>
   <?php
    $question_scan = mysqli_query($con, "SELECT * FROM qustioner");
    if(mysqli_num_rows($question_scan)>=1){
        $row1 = mysqli_fetch_assoc($question_scan);
       echo '  <h4 class="card-header text-center" style="font-weight:bold;"> '.$row1['Title'].'</h4>';
    }
   ?>
        <br>
        <?php
        $n=1;
       
$questioner = mysqli_query($con, "SELECT * FROM qustioner ");
if(mysqli_num_rows($questioner)){

    while($question = mysqli_fetch_assoc($questioner)){
        $title = $question['Title'];
        $id = $question['ID'];
        echo '<form action="" method="POST"><br><b>' .$n++. '. ' .$question['question']. ' <br>  '.$question['status'].'</b>
        <input type="hidden" name="id" value='.$id.'><input type="submit" name="delete_act" class="btn btn-danger float-right" value="Delete"></form><br>';
        
    }
    
}
        ?>
        <br>
        
    <form action="" method="POST">
        <label style="margin-top:30px; font-weight:bold;">Input Questions :</label>
        <input type="hidden" name="username" value='<?php echo $username ?>'>
        <input type="hidden" name="activity_id" value='<?php echo $activity_id ?>'>
        <input type="hidden" name="email" value='<?php echo $email ?>'>
    <input type="text"  name="questioner" placeholder="Input Questions Here..." class="form-control">
    <select name="for_subject" class="form-control float-right" style="width: 200px;">
    <option value='personal_status'>Personal Status</option>
    <option value='academic_status'>Academic Status</option>
    <option value='financial_status'>Financial Status</option>
    <option value='level_of_stress'>Level Of Stress</option>
    </select>
    <br>
    <br>
    <input type="hidden" name="id" value='<?php echo $id ?>'>
    <div class="col col-sm-4  float-right">
    <input type="submit" name="add_que" class="btn btn-primary text-right float-right" value="Add now">
<br>
<br>
</form>

  </div>
  </div>
</div>
</div>
            </div>   
            <?php
    if(!empty($selection)){
      include 'selection.php';
    }
    if(!empty($add_form)){
      include 'add.php';
    }
    if(!empty($manage_form)){
      include 'manage_form/manage_form.php';
    }
   
    ?>  
                                </div>
                                </div>

                            </div>
                        </div>
                      </div>
</div>
    
   

            </div>           
</div>
</form>
  </div>
