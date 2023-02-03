<?php
$username = $_SESSION['user_name'];
?>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>
</head>
<div class="container">
<div class="card-body">
                        <div class="table-responsive">
                       
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead style="color:black;">
                                
                                    <tr>
                                    <div class="card-header" style="background: #6cbb5c; text-align:center; color:white;">
    Activity List
  </div>
                                  <th>#</th>      
                                  <th>Title</th>   
                                  <th></th>
                                  <th></th>
                                  <th>Form Type</th>
                                    </tr>
                                </thead>
                                <tbody style="color: black;"> 
                                  
    <?php
    $n++;
    
    
while($row = mysqli_fetch_assoc($scan))
{
  $questioner = $row['title'];
  $acad = $row['form_type'];
  $activity_id = $row['activity_id'];
  echo'
  <tr><form action="" method="POST">
  <td>'.$n++.'</td>
  <td>'.$questioner.'</td>

  <td></td>
  <td>'.$acad.'</td>
  <input type="hidden" name="username" value=' .$username.'>
  <td><input type="hidden" name="activity_id" value='.$activity_id.'></td>
  <td><div class="row"><div class="col col-sm-5"></div><div class="col col-sm"><button type="submit" name="create_form" class="btn btn-success">Create</button>
  <button type="submit" name="manage_form" class="btn btn-primary">Manage</button></div></div></td>
  </form></tr>
  ';
}    ?>

</tbody>
</table>

<button type="submit" name="add_form" class="btn btn-primary text-right float-right">Add <?php echo $selected_form ?></button>
</div>
</div>
</div>
<script>$(document).ready(function () {
    $('#dataTable').DataTable();
});
</script>