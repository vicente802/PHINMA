<?php

?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>
</head>
<div class="container-fluid">   
   <div class="card mb-3">
  <div class="card-body" style="color:black; background:white;">
    <h4 class="card-header text-center">Assign Subjects</h4>
    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        
                                        <th>Subject Code</th>
                                        <th>Activity ID</th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
    if(mysqli_num_rows($assign_subject)>=1){
        while($subject_now = mysqli_fetch_assoc($assign_subject)){
        echo'<tr>
        <td>'.$subject_now['subject_code'].'</td>
        <td>'.$subject_now['activity_id'].'</td>
        <td><button type="submit" style="margin-top:-10px;" name="assign_student" class="btn btn-primary">Assign Student</button></td>
        </tr>';
        }
    }
?>                                  
</tbody>
</table>
</div>
</div>
 
  </div>
</div>
</div>
<script>$(document).ready(function () {
    $('#dataTable').DataTable();
});
</script>