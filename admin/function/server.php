<?php

use function PHPSTORM_META\map;
$add_teacher="";
$dashboard="";
$searching="";
$add_std="";
$ran = rand(00000000,11111111);
$student_num="Student";
if(!isset($_SESSION['role'])){
header('location: ../index.php');
}
if(isset($_POST['logout'])){
    session_reset();
    session_destroy();
    header('location: ../index.php');
}

if(isset($_POST['dashboard'])){
    $dashboard ="";
}

if(isset($_POST['add_students'])){
    $dashboard="activate";
    $add_std="activate";
    $add_teacher ="";
    $scan_year = mysqli_query($con,"SELECT school_year FROM assignment WHERE school_year is not null");
}
$number_students = mysqli_query($con,"SELECT * FROM user WHERE role='$student_num'");
$count = mysqli_num_rows($number_students);

if(isset($_POST['search_now'])){
    $searching="activate";
    $year_now = $_POST['year_now'];
    $semester_now = $_POST['semester_now'];
    $term_now = $_POST['term_now'];
    $subject_code_now = $_POST['subject_code_now'];
    
   
}
$first_name = '';
$last_name = '';
$middle = '';
$username = '';
$email = '';
$password = '';
$std_id = '';
$date ='';
$err ="";
$err1 ="";
if(isset($_POST['student_register'])){
    $scan_year = mysqli_query($con,"SELECT school_year FROM assignment WHERE school_year is not null");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle = $_POST['middle'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $std_id = $_POST['student_id'];
    $date = $_POST['birthdate'];
    $schl_year_now = $_POST['schoolyear_now'];
    $date = date("y-m-d", strtotime($date));
    $role = "Student";
    $dashboard="disabled";
    $add_std="activate";
    $add_teacher="";
    if(empty($first_name)){
        $err = "Empty Firstname";
    }
    elseif(empty($last_name)){
        $err = "Empty Lastname";
    }
    elseif(empty($username)){
        $err = "Empty Username";
    }
    elseif(empty($email)){
        $err = "Empty Email";
    }
    elseif(empty($password)){
        $err = "Empty Password";
    }
    elseif(empty($std_id)){
        $err = "Empty Student ID";
    }
    elseif(empty($date)){
        $err = "Empty Birthdate";
    }else{
        $dashboard="disabled";
        $add_std="activate";
        $add_teacher="";
        mysqli_query($con, "INSERT INTO `user`(`school_year`,`gender`, `role`,`student_id`,`firstname`, `lastname`, `middle`, `username`, `email`, `password`, `date`,`remove_emoji`) 
        VALUES ('$schl_year_now','$gender','$role','$std_id','$first_name','$last_name','$middle','$username','$email','$password','$date','smile')");
            $err1="Success";
            $first_name = '';
            $last_name = '';
            $middle = '';
            $username = '';
            $email = '';
            $password = '';
            $std_id = '';
            $date ='';  
        
    }
}
if(isset($_POST['add_teacher'])){
    $dashboard="activate";
    $add_std="";
    $add_teacher="activate";
}
if(isset($_POST['prof-register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['date'];
    $birthdate = date("y-m-d", strtotime($birthdate));
    
    $err ="";
    $err1 ="";
    $role = "Teacher";
    $dashboard="disabled";
    $add_std="";
    $add_teacher="activate";

    if(empty($firstname)){
        $err = "Empty Firstname";
    }
    elseif(empty($lastname)){
        $err = "Empty Lastname";
    }
    elseif(empty($gender)){
        $err = "Empty Gender";
    }
    elseif(empty($birthdate)){
        $err = "Empty Birthdate";
    }
    elseif(empty($username)){
        $err = "Empty Username";
    }
    elseif(empty($email)){
        $err = "Empty Email";
    }
     elseif(empty($password)){
        $err = "Empty Password";
    }
   
      else{
        $err1="Success";
        mysqli_query($con, "INSERT INTO `admin`(`firstname`,`lastname`,`gender`,`birthdate`,`email`, `username`, `password`, `role`) 
        VALUES ('$firstname','$lastname','$gender','$birthdate','$email','$username','$password','$role')");
        
    }
}
$success="";
if(isset($_POST['update_manage'])){
    $std_id = $_POST['std_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $email_sub = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $year_level = $_POST['year_level'];
    $year = $_POST['year'];
    $course_sub = $_POST['course_sub'];
    $semester_sub = $_POST['semester_sub'];
    $term_sub = $_POST['term_sub'];
    $sub_code  = $_POST['sub_code'];
    $gender = $_POST['gender_sub'];
    $date_local = $_POST['date_local'];
    $date_now = date("Y-m-d", strtotime($date_local));
    mysqli_query($con,"UPDATE `user` SET 
    `student_id`='$std_id',`year`='$year',`term`='$term_sub',`school_year`='$year_level',
    `semester`='$semester_sub',`course`='$course_sub',`firstname`='$fname',`lastname`='$lname',
    `middle`='$mname',`username`='$username',`email`='$email_sub',`gender`='$gender',
    `password`='$password',`date`='$date_now',`subject_code`='$sub_code' WHERE student_id='$std_id'");
        $success="Updated Successfully";
        
}
if(isset($_POST['delete_manage'])){
    $std_id = $_POST['std_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $email_sub = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $year_level = $_POST['year_level'];
    $year = $_POST['year'];
    $course_sub = $_POST['course_sub'];
    $semester_sub = $_POST['semester_sub'];
    $term_sub = $_POST['term_sub'];
    $sub_code  = $_POST['sub_code'];
    $gender = $_POST['gender_sub'];
    $date_local = $_POST['date_local'];
    $date_now = date("Y-m-d", strtotime($date_local));
    mysqli_query($con,"DELETE FROM user WHERE student_id='$std_id'");
        $success="Delete Successfully";
        header('location: ./index.php');
}

$setting ="";
if(isset($_POST['settings'])){
   $setting = "activate";
   $dashboard="disabled";
   $add_std = "";
   $add_teacher="";
   include 'scan_query.php';
}
$assign ="";
$result="";

if(isset($_POST['assign'])){
   $assign = "activate";
   $dashboard="disabled";
   $add_std = "";
   $add_teacher="";
   include 'scan_query.php';


}
$succ="";
if(isset($_POST['btn_sub'])){
    $add_sub = $_POST['add_sub'];
   
    if(empty($_POST['add_sub'])){
        $setting="activate";
        $dashboard="disabled";
    }
    else{
        mysqli_query($con, "INSERT INTO assignment(`subject_code`)VALUES('$add_sub')");
        $dashboard="disabled";
        $setting="activate";
        $succ="Sucess";
        include 'scan_query.php';
        
        
    }
}
if(isset($_POST['btn_year'])){
    include 'scan_query.php';
    $add_year = $_POST['add_year'];
    if(empty($_POST['add_year'])){
        $setting="activate";
        $dashboard="disabled";
    }
    else{
        mysqli_query($con, "INSERT INTO assignment(`year`)VALUES('$add_year')");
        $dashboard="disabled";
        $setting="activate";
        $succ="Sucess";
         include 'scan_query.php';
    }
}
if(isset($_POST['btn_school_year'])){
    include 'scan_query.php';
    $add_schl_year = $_POST['add_school_year'];
    if(empty($_POST['add_school_year'])){
        $setting="activate";
        $dashboard="disabled";
    }
    else{
        mysqli_query($con, "INSERT INTO assignment(`school_year`)VALUES('$add_schl_year')");
        $dashboard="disabled";
        $setting="activate";
        $succ="Sucess";
         include 'scan_query.php';
    }
}
if(isset($_POST['btn_course'])){
    include 'scan_query.php';
    $add_course = $_POST['add_course'];
    if(empty($_POST['add_course'])){
        $setting="activate";
        $dashboard="disabled";
    }
    else{
        mysqli_query($con, "INSERT INTO assignment(`course`)VALUES('$add_course')");
        $dashboard="disabled";
        $setting="activate";
        $succ="Sucess";
         include 'scan_query.php';
    }
}
    if(isset($_POST['btn_semester'])){
        include 'scan_query.php';
        $add_semester = $_POST['add_semester'];
        if(empty($_POST['add_semester'])){
            $setting="activate";
            $dashboard="disabled";
        }
        else{
            mysqli_query($con, "INSERT INTO assignment(`semester`)VALUES('$add_semester')");
            $dashboard="disabled";
            $setting="activate";
            $succ="Sucess";
             include 'scan_query.php';
        }
    }
    if(isset($_POST['btn_term'])){
        include 'scan_query.php';
        $add_term = $_POST['add_term'];
        if(empty($_POST['add_term'])){
            $setting="activate";
            $dashboard="disabled";
        }
        else{
            mysqli_query($con, "INSERT INTO assignment(`term`)VALUES('$add_term')");
            $dashboard="disabled";
            $setting="activate";
            $succ="Sucess";
             include 'scan_query.php';
        }
    }
    
if(isset($_POST['btn_sub_drop'])){
    $drop = $_POST['sub_drop'];
    mysqli_query($con, "DELETE FROM assignment WHERE subject_code='$drop'");
    $dashboard="disabled";
    $setting="activate";
    $succ="Sucess";
    include 'scan_query.php';
}
if(isset($_POST['btn_schl_drop'])){
    $drop = $_POST['schl_drop'];
    mysqli_query($con, "DELETE FROM assignment WHERE year='$drop'");
    $dashboard="disabled";
    $setting="activate";
    $succ="Sucess";
    include 'scan_query.php';
}
if(isset($_POST['btn_schl_year_drop'])){
    $drop = $_POST['schl_year_drop'];
    mysqli_query($con, "DELETE FROM assignment WHERE school_year='$drop'");
    $dashboard="disabled";
    $setting="activate";
    $succ="Sucess";
    include 'scan_query.php';
}
if(isset($_POST['btn_course_drop'])){
    $drop = $_POST['course_drop'];
    mysqli_query($con, "DELETE FROM assignment WHERE course='$drop'");
    $dashboard="disabled";
    $setting="activate";
    $succ="Sucess";
    include 'scan_query.php';
}
if(isset($_POST['btn_semester_drop'])){
    $semester_drop = $_POST['semester_drop'];
    mysqli_query($con, "DELETE FROM assignment WHERE semester='$semester_drop'");
    $dashboard="disabled";
    $setting="activate";
    $succ="Sucess";
    include 'scan_query.php';
}
if(isset($_POST['btn_term_drop'])){
    $term_drop = $_POST['term_drop'];
    mysqli_query($con, "DELETE FROM assignment WHERE term='$term_drop'");
    $dashboard="disabled";
    $setting="activate";
    $succ="Sucess";
    include 'scan_query.php';
}
$assign_success="";
$tch_user = $_SESSION['user_name'];
if(isset($_POST['teacher_subject_assign'])){
$teacher_assign = $_POST['teacher_assign'];
$username = $_POST['username'];
$assign_subject_now = $_POST['assign_subject_now'];
$assign_course_now = $_POST['assign_course_now'];
$assign_year_now = $_POST['assign_year_now'];
$assign_school_year_now = $_POST['assign_school_year_now'];
$assign_semester_now = $_POST['assign_semester_now'];
$assign_term_now = $_POST['assign_term_now'];

  $teacher_assign_now =  mysqli_query($con, "INSERT INTO `teacher`(`username`,`term`,`semester`,`school_year`,`teacher`, `subject`, `course`, `year`) 
  VALUES ('$username','$assign_term_now','$assign_semester_now','$assign_school_year_now','$teacher_assign','$assign_subject_now',' $assign_course_now','$assign_year_now')");
  
  $assign = "activate";
    $dashboard="disabled";
    $add_std = "";
    $add_teacher="";
   
    }
    if(isset($_POST['del_assign'])){
        $ID = $_POST['id_del'];
        mysqli_query($con, "DELETE FROM teacher WHERE ID='$ID'");
        $assign = "activate";
        $dashboard="disabled";
        $add_std = "";
        $add_teacher="";
    }
if(isset($_POST['scan_now'])){
    $assign = "activate";
    $dashboard="disabled";
    $add_std = "";
    $add_teacher="";
  $teacher_assign_now=mysqli_query($con,"SELECT * FROM teacher");
}
$open_student_manage="";
if(isset($_POST['open_student_info'])){
    $open_student_manage="activate";
    $student_information_show ="activate";
}
$open_date_of_call="";
if(isset($_POST['student_status'])){
    $open_date_of_call="activate";
    $open_student_manage="";
    $student_information_show ="activate";
}
$date_of_call_error="";
if(isset($_POST['date_of_call_submit'])){
    $student_id = $_POST['student_id'];
    $date_of_call = $_POST['date_of_call'];
    $date_of_call = date("Y-d-m",strtotime($date_of_call));
    $open_date_of_call="activate";
    $open_student_manage="";
    $student_information_show ="activate";
   mysqli_query($con,"UPDATE user set date_of_call='$date_of_call' WHERE student_id='$student_id'");
    $date_of_call_error = "Success";
}
?>