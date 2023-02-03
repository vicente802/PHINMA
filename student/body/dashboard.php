<?php
include '../admin/function/server.php';

?>
<head>
    <link rel="stylesheet" href="css/style.css">
    <style>
.card{
    margin-top: 10px;
    background: #6cbb5c;
    padding: 0px;
    color:white;
    
}
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h5 class="card-header text-center">Activities</h5>
    <hr>
    <div class="card-body">
                        <?php
                        $n=1;
                        $activity = mysqli_query($con, "SELECT * FROM qustioner");
                        if(mysqli_num_rows($activity)>=1){
                            while($row = mysqli_fetch_assoc($activity)){
                                echo '<br>' .$n++.'. ' .$row['question'];
                            }
                        }
                        ?>
                        </div>
                    </div>
            </div>
</div>
</div>
</div>
</form>
</div>



