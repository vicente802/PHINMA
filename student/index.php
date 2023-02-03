<?php

function arraytojson($array){
  if(is_array($array)){
      return json_encode($array,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  }else{
      return false;
  }
}
function query($query){
  $con = $GLOBALS['con'];
  return mysqli_query($con,$query);
}
session_start();
require_once '../connection/db.php';
include 'function/server.php';
$user_id = $_SESSION['ID'];
if(!isset($_SESSION['ID'])){
  header('location: ../index.php');
}
function navigate($path){
  echo '<script>window.location.href = '.$path.'</script>';
  exit();
}

$show_sucess="";
if(isset($_POST['submit'])){
  $data = $_POST;
  $sum_of_personal_problem=0;
  $question_data_json = array();
  $group_of_star = array_keys($data);
  foreach($group_of_star as $star){
    if($star != "submit"){
      $question_data = $data[$star];
      $question_data_array = explode(",",$question_data);
      $question_id = $question_data_array[0];
      $question_score = $question_data_array[1];
      $sum_of_personal_problem = $sum_of_personal_problem + $question_score;
      $question_data_json[] = array(
        "question_id" => $question_id,
        "question_score" => $question_score
      );
    }
  }
  $question_data_json[] = array(
    "total_score" => $sum_of_personal_problem
  );
  $question_data_json_string = arraytojson($question_data_json);
  $submit_answer = query("
  INSERT INTO `tbl_question_score`(
        `user_id`,
        `question_data`
    )
    VALUES(
        $user_id,
        '$question_data_json_string'
    )
  ");
  if($sum_of_personal_problem == 0){
    $personal_question="disabled";
    $academic_question="activate";
    $financial_question="";
    $show_sucess="";
  }else{
  if($sum_of_personal_problem >= 10){
    $user_select = query("SELECT * FROM user WHERE ID='$user_id'");
    if(mysqli_num_rows($user_select)==1){
      query("UPDATE user SET personal_status='P',remove_emoji='asd' WHERE ID='$user_id'");
    
    }
  } 
    $personal_question="disabled";
    $academic_question="activate";
    $financial_question="";
    $show_sucess="";
  
}
}
if(isset($_POST['academic_submit'])){
  $academic = $_POST;
  $sum_of_academic_data=0;
  $academic_data_json = array();
  $academic_group = array_keys($academic);
  foreach($academic_group as $academic_star){
    if($academic_star != "academic_submit"){
      $academic_data = $academic[$academic_star];
      $academic_data_array = explode(",",$academic_data);
      $academic_id = $academic_data_array[0];
      $academic_score = $academic_data_array[1];
      $sum_of_academic_data = $sum_of_academic_data + $academic_score;
      $academic_data_json[] = array(
        'academic_id' => $academic_id,
        'academic_score' => $academic_score
      );
    }
  }
  $academic_data_json[] = array(
    'total_score' => $sum_of_academic_data
  );
  $academic_data_json_string = arraytojson($academic_data_json);
  $academic_answer = query("
  INSERT INTO `tbl_question_score`(
        `user_id`,
        `academic_data`
    )
    VALUES(
        $user_id,
        '$academic_data_json_string'
    )
  ");
  if($sum_of_academic_data == 0){
    $personal_question="disabled";
    $academic_question="";
    $show_sucess="";
    $financial_question="financial";
  }else{
  if($sum_of_academic_data >= 10){
    $user_select = query("SELECT * FROM user WHERE ID='$user_id'");
    if(mysqli_num_rows($user_select)==1){
      $home="disabled";
      query("UPDATE user SET academic_status='A', remove_emoji='asd' WHERE ID='$user_id'");
    }
  }
  $personal_question="disabled";
    $academic_question="";
    $financial_question="financial";
    $show_sucess="";
}
}
/* THIS IS FOR FINANCIAL FUNCTION

   
*/

if(isset($_POST['financial_submit'])){
$financial = $_POST;
$sum_of_financial=0;
$financial_data_json = array();
$financial_group = array_keys($financial);
  foreach($financial_group as $financial_stars){
    if($financial_stars != "financial_submit"){
      $financial_data  = $financial[$financial_stars];
      $financial_data_array = explode(",",$financial_data);
      $financial_id = $financial_data_array[0];
      $financial_score = $financial_data_array[1];
      $sum_of_financial = $sum_of_financial + $financial_score;
      $financial_data_json[] = array(
        "financial_id" => $financial_id,
        "financial_score" => $financial_score
      );
    }
  }
  $financial_data_json[] = array(
    "total_score:" => $sum_of_financial
  );
  $financial_data_json_string = arraytojson($financial_data_json);
  $financial_answer = query("
  INSERT INTO `tbl_question_score`(
        `user_id`,
        `financial_data`
    )
    VALUES(
        $user_id,
        '$financial_data_json_string'
    )
  ");
  if($sum_of_financial == 0){
    $personal_question="disabled";
    $financial_question="";
    $academic_question="";
    $level_of_stress="activate";
    $show_sucess="";
  }else{
  if($sum_of_financial >= 8){
    $user_select = query("SELECT * FROM user WHERE ID='$user_id'");
    if(mysqli_num_rows($user_select)==1){
      query("UPDATE user SET financial_status='F',remove_emoji='asd' WHERE ID='$user_id'");
     
    }
  }
  $personal_question="disabled";
  $financial_question="";
  $academic_question="";
  $level_of_stress="activate";
  $show_sucess="";
}
}
if(isset($_POST['level_of_stress_submit'])){
  $level_of_stress = $_POST;
  $sum_of_stress=0;
  $stress_data_json = array();
  $stress_group = array_keys($level_of_stress);
    foreach($stress_group as $stress_stars){
      if($stress_stars != "level_of_stress_submit"){
        $stress_data  = $level_of_stress[$stress_stars];
        $stress_data_array = explode(",",$stress_data);
        $stress_id = $stress_data_array[0];
        $stress_score = $stress_data_array[1];
        $sum_of_stress = $sum_of_stress + $stress_score;
        $stress_data_json[] = array(
          "stress_id" => $stress_id,
          "stress_score" => $stress_score
        );
      }
    }
    $stress_data_json[] = array(
      "total_score:" => $sum_of_stress
    );
    $stress_data_json_string = arraytojson($stress_data_json);
    $stress_answer = query("
    INSERT INTO `tbl_question_score`(
          `user_id`,
          `stress_data`
      )
      VALUES(
          $user_id,
          '$stress_data_json_string'
      )
    ");
    if($sum_of_stress == 0){
      $personal_question="disabled";
      $show_sucess="a";
      $financial_question="";
      $academic_question="";
      $level_of_stress="";
    }else{
    if($sum_of_stress >= 15){
      $user_select = query("SELECT * FROM user WHERE ID='$user_id'");
      if(mysqli_num_rows($user_select)==1){
        query("UPDATE user SET level_of_stress='SA',remove_emoji='asd' WHERE ID='$user_id'");
       
      }
    }
    $personal_question="disabled";
    $financial_question="";
    $show_sucess="activate";
    $academic_question="";
    $level_of_stress="";
    $get_all = mysqli_query($con,"SELECT * FROM user WHERE ID='$user_id'");
    if(mysqli_num_rows($get_all)==1){
      $get_all_data = mysqli_fetch_assoc($get_all);
      $get_personal_data = $get_all_data['personal_status'];
      $get_financial_data = $get_all_data['financial_status'];
      $get_academic_data = $get_all_data['academic_status'];
      $get_level_of_stress_data = $get_all_data['level_of_stress'];
      $get_remove_emoji = $get_all_data['remove_emoji'];
      if($get_academic_data == null && $get_personal_data==null && $get_financial_data == null && $get_level_of_stress_data=null){
        mysqli_query($con, "UPDATE user SET remove_emoji =null WHERE ID='$user_id'");
      }
    }
  }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="dashboard.css">

    <link rel="icon" href="upanglogo.png">
    <style>
    .btn1 {
        border: none;
        background: transparent;
        cursor: pointer;
        color: white;
    }

    .btn1:hover {
        color: #0056b3;
    }
    </style>

    <title> PHINMA ED | STUDENT </title>

</head>

<body>

    <header>
      <div class="container-fluid">
              <div class="row">
            <div class="col col-sm-10">
                <img class="logo" src="upanglogo.png" alt="logo">
                <div class="phinmaeduc text-left" style="margin-top:20px;">PHINMA EDUCATION<br>MAKING LIVES BETTER
                    THOURGH EDUCATION</div>
            </div>
            <div class="col col-sm text-right">
                <form action="" method="POST">
                    <button type="submit" name="logout" style="margin-top:20px;" class="btn">Logout</button>
                </form>
            </div>
        </div>
        </div>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojione/4.5.0/lib/js/emojione.min.js"
        integrity="sha512-E2Ai/A9+KcoBm0lvfnd5krbr7TWUigQGWTfcoMToNpfmCvQKkZdTbpwyIM4PFbCGMtSmMjE/DAXGjVXpWGdFaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<?php
$get_personal = mysqli_query($con,"SELECT * FROM tbl_question_score WHERE user_id='$user_id' AND stress_data is not null");
if(mysqli_num_rows($get_personal) >= 1){
  $personal_question ="active";
  $show_sucess="active";
}
?>

    <!-- SECTION HOME -->


    <!-- SECTION PERSONAL -->
    <?php

if(empty($personal_question)){
  include 'body/personal_question.php';
}
?>
    <!-- SECTION ACADEMIC -->
    <?php
if(!empty($academic_question)){
  include 'body/academic_question.php';
}
?>
    <!-- SECTION FINANCIAL -->
    <?php
if(!empty($financial_question)){
  include 'body/financial_question.php';
}
?>
    <?php
if(!empty($level_of_stress)){
  include 'body/level_of_stress.php';
}
if(!empty($show_sucess)){
  include 'body/success.php';
}
?>
   
</body>

</html>