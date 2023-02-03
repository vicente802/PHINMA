<?php

require_once './connection/db.php';
$err="";
$secondnd_verification="";
if(isset($_SESSION['role']) == "Admin"){
        header('location: ./admin/index.php');
}
if(isset($_SESSION['role']) == "Student"){
    header('location: ./student/index.php');
}
if(isset($_POST['login'])){
    $username = $_POST['user_name'];
    $password = $_POST['user_password'];
    if(empty($_POST['user_name'])){
        $err ="Empty username";
    }
    if(empty($_POST['user_password'])){
        $err ="Empty password";
    }
    else{
    $login_now = mysqli_query($con, "SELECT email,username,role,password FROM admin WHERE email='$username' OR username='$username' AND password='$password'");
    if(mysqli_num_rows($login_now)==1){
        While($row = mysqli_fetch_assoc($login_now)){
            $username = $row['username'];
            $email = $row['email'];
            $role = $row['role'];
        }
        if($role =="Admin"){
                $_SESSION['role'] = $role;
                $_SESSION['user_name'] = $username;
                header('location: ./admin/index.php');
            }
            if($role == "Teacher")
            {
                $_SESSION['role'] = $role;
                $_SESSION['user_name'] = $username;
                header('location: ./teacher/index.php');
            } 
            else{
                $err = "Incorrect Username or Password";
            }
            
    }
    else{
        $student_account = mysqli_query($con,"SELECT * FROM user WHERE username='$username' OR email='$username' and password='$password' ");
        if(mysqli_num_rows($student_account)>=1){
            $account1 = mysqli_fetch_assoc($student_account);
            $user_id = $account1['ID'];
            $role = $account1['role'];
            $_SESSION['user_name'] = $username;
            $_SESSION['ID'] = $user_id;
            $second_verification ="activate";
            
        }
        else{
            $err = "Incorrect Username or Password";
        }
    }
}
   /*  $login = mysqli_query($con,"SELECT * FROM admin WHERE username='$username' OR email='$username' AND password='$password'");
    if(mysqli_num_rows($login)==1){
        $account = mysqli_fetch_assoc($login);
        $role = $account['role'];
        $username = $account['username'];
        if($role =="Admin"){
            $_SESSION['role'] = $role;
            $_SESSION['user_name'] = $username;
            header('location: ./admin/index.php');
        }
        if($role == "Teacher")
        {
            $_SESSION['role'] = $role;
            $_SESSION['user_name'] = $username;
            header('location: ./teacher/index.php');
        } 
        else{
            $err = "Incorrect Username or Password";
        }
    }
    else{
        $student_account = mysqli_query($con,"SELECT * FROM user WHERE username='$username' OR email='$username' and password='$password' ");
        if(mysqli_num_rows($student_account)>=1){
            $account1 = mysqli_fetch_assoc($student_account);
            $role = $account1['role'];
            $_SESSION['user_name'] = $username;
            $_SESSION['role'] = $role;
            $second_verification ="activate";
        }
        else{
            $err = "Incorrect Username or Password";
        }
    } */
}
if(isset($_POST['verify'])){
    $user_id = $_POST['user_id'];
    $date = $_POST['verify_now'];
    $date = date("Y-m-d", strtotime($date));
    $student_account = mysqli_query($con,"SELECT * FROM user WHERE ID='$user_id' AND date='$date'");
    if(mysqli_num_rows($student_account)>=1){
        $show = mysqli_fetch_assoc($student_account);
        $role = $show['role'];
        $_SESSION['role'] = $role;
        header('location: ./student/');
    }
    else{
        $err1 = "Birthdate Incorrect";
    }
}
if(isset($_POST['back'])){
    session_reset();
    session_destroy();
    
}
?>