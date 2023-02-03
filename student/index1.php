<?php
session_start();
require_once '../connection/db.php';
include 'function/server.php';
include 'function/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminstye.css">
    <title>Dashboard</title>
</head>
<body>
<nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="../img/upanglogoportal.png" />
    <h3>PHINMA ED</h3>
  </header>
  <form action="" method="POST">
	<ul>
    <button type="submit" id="logout" name="dashboard"><li tabindex="0" id="dashboard" class="icon-dashboard"><span> Home</span></li></button>
    <button type="submit" id="logout" name="settings"><li tabindex="0" class="icon-settings"><span>Settings</span></li></button>
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
    ?>
  </div>
</main>
</body>
</html>