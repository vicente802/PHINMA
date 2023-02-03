<?php
session_start();
require_once '../connection/db.php';
include 'function/server.php';
include 'function/bootstrap.php';
$student_information_show="";
if(isset($_POST['manage'])){
  $student_id = $_POST['student_id'];
  $_SESSION['student_id'] = $student_id;
  $student_information_show="activate";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminstye.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
</head>
<body>
<nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="../img/upanglogoportal.png" />
    <h3 style="color:white;">PHINMA ED</h3>
  </header>
  <form action="" method="POST">
	<ul>
    <button type="submit" id="logout" name="dashboard"><li tabindex="0" id="dashboard" class="icon-dashboard"><span> Dashboard</span></li></button>
    <button type="submit" id="logout" name="add_students"><li tabindex="0" class="icon-users"><span>Add Students</span></li></button>
    <button type="submit" id="logout" name="add_teacher"><li tabindex="0" class="icon-teacher"><span>Add Teacher</span></li></button>
    <button type="submit" id="logout" name="assign">  <li tabindex="0" class="icon-assign"><span> Assign Teacher</span></li></button>
    <button type="submit" id="logout" name="settings"><li tabindex="0" class="icon-settings"><span>Manage Information</span></li></button>
    <button type="submit" id="logout" name="logout">  <li tabindex="0" class="icon-signout"><span> Signout</span></li></button>
  </ul>
  </form>
</nav>

<main>
  <div class="helper">
    <?php
    if(empty($dashboard)){
        include 'body/dashboard.php';
    }
    if(!empty($add_std)){
      include 'body/add_students.php';
    }
    if(!empty($add_teacher)){
      include 'body/add_teacher.php';
    }
    if(!empty($setting)){
      include 'body/manage.php';
    }
    if(!empty($assign)){
      include 'body/assign.php';
    }
    ?>
  </div>

</main>

</body>
</html>