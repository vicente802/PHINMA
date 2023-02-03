<?php

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

<form action="" method="POST" class="form-group" >
<div class="card mb-3">
  
  <div class="card-body" style="color:black; background:white;">
    <h5 class="card-title" style="text-align: center;">Manage</h5>
    <hr>


    <!-- Content Row -->
 <div class="card-body">
                      <div class="container">
                        <div class="form-group">
                            <div class="row">
                                <div class="col col-sm">
                                    <?php
if(!empty($err_addform)){
    ?>
<div class="alert alert-danger text-center"><?= $err_addform ?></div>
    <?php
    
}
if(!empty($success_addform)){
    ?>
<div class="alert alert-success text-center"><?= $success_addform ?></div>
    <?php
}
if(!empty($del_form)){
    ?>
    <div class="alert alert-danger text-center"><?= $del_form ?></div>
    <?php
}
                                    ?>
                                    <label style="font-weight: bold; font-size:20px;">Type of forms :</label><br>
                                    <?php
                                    $list_of_forms = mysqli_query($con, "SELECT * FROM form WHERE type_of_forms is not null");
                                    if(mysqli_num_rows($list_of_forms)>=1){
                                        while($type_of_form = mysqli_fetch_assoc($list_of_forms)){
                                            echo '<p style="font-size:15px;">'.$type_of_form['type_of_forms'].'<input type="hidden" name="del_form" value='.$type_of_form['type_of_forms'].'> <input type="submit" name="del" value="delete"></p>';
                                        }
                                    }
                                    ?>
                                    <div class="col col-sm text-right"><input type="text" name="add_form" placeholder="Add forms" style="height:37px;"><button type="submit" name="add" value="Add Form" class="btn btn-primary">Add Forms</button>
                                </div>
                                </div>

                            </div>
                        </div>
                      </div>
</div>
    
                <!-- /.container-fluid -->
   <!-- Content Row -->
   <div class="card-body">
                      <div class="container">
                        <div class="form-group">
                            <div class="row">
                                <div class="col col-sm">
                                    <?php
if(!empty($err_addform1)){
    ?>
<div class="alert alert-danger text-center"><?= $err_addform1 ?></div>
    <?php
    
}
if(!empty($success_addform1)){
    ?>
<div class="alert alert-success text-center"><?= $success_addform1 ?></div>
    <?php
}
if(!empty($del_form1)){
    ?>
    <div class="alert alert-danger text-center"><?= $del_form1 ?></div>
    <?php
}
                                    ?>
                                    <label style="font-weight: bold; font-size:20px;">Type of Answers :</label><br>
                                    <?php
                                    $list_of_answer = mysqli_query($con, "SELECT * FROM form WHERE answer is not null");
                                    if(mysqli_num_rows($list_of_answer)>=1){
                                        while($type_of_answer = mysqli_fetch_assoc($list_of_answer)){
                                            echo '<p style="font-size:15px;">'.$type_of_answer['answer'].'<input type="hidden" name="del_answer" value='.$type_of_answer['answer'].'> <input type="submit" name="del_form_answer" value="delete"></p>';
                                        }
                                    }
                                    ?>
                                    <div class="col col-sm text-right"><input type="text" name="add_answer" placeholder="Add forms" style="height:37px;"><button type="submit" name="add_btn_answer" value="Add Form" class="btn btn-primary">Add Answer</button>
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
