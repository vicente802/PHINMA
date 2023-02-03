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
    $question_scan = mysqli_query($con, "SELECT * FROM qustioner WHERE activity_id='$activity_id'");
    if(mysqli_num_rows($question_scan)>=1){
        $row1 = mysqli_fetch_assoc($question_scan);
       echo '  <h4 class="card-header text-center" style="font-weight:bold;"> '.$row1['Title'].'</h4>';
    }
   ?>
        <br>
        <?php
        $n=1;
       
$questioner = mysqli_query($con, "SELECT * FROM qustioner WHERE activity_id='$activity_id'");
if(mysqli_num_rows($questioner)){

    while($question = mysqli_fetch_assoc($questioner)){
        $title = $question['Title'];
        $id = $question['ID'];
        echo '<form action="" method="POST"><br><b>' .$n++. '. ' .$question['question']. '<br>Answer: </b>'.$question['correct'].'
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
    <br>
    <label><b>Select Answer Here: </b></label><br>
    <?php
    $answers = mysqli_query($con,"SELECT * FROM form WHERE answer is not null");
    if(mysqli_num_rows($answers)){
        while($row = mysqli_fetch_assoc($answers)){
            echo'  <input type="radio" id="defaultRadio" value='.$row['answer'].' name="status">  
            <label for="defaultRadio">'.$row['answer'].'</label> <br>
            ';
        }
    }
    ?>
    <input type="hidden" name="id" value='<?php echo $id ?>'>
    <div class="col col-sm-4  float-right">
    <input type="submit" name="add_que" class="btn btn-primary text-right float-right" value="Add now">
<br>
<br>
    <select name="assign_into" class="form-control" style="margin-top: 0px;">
        <?php
    $assignment = mysqli_query($con,"SELECT subject FROM teacher WHERE username='$username' OR teacher='$username'");
    if(mysqli_num_rows($assignment)){
        while($assignment_now = mysqli_fetch_assoc($assignment)){
            echo'<option value='.$assignment_now['subject'].'>'.$assignment_now['subject'].'</option>';
        }
    }
        ?>
    </select>
    <input type="submit" name="assign_now" class="btn btn-primary text-right float-right" style="margin-top: 10px;" value="Assign Now">
</form>
</div>
</div>

</div>
</div>