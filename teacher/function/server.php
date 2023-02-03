<?php
$dashboard="";
$searching="";
$tabs="";
$setting="";
$student_num="Student";
$form="";

if(!isset($_SESSION['role'])){
header('location: ../index.php');
}
if(isset($_POST['logout'])){
    session_destroy();
    header('location: ../index.php');
}

if(isset($_POST['dashboard'])){
    $dashboard ="";
   mysqli_query($con, "SELECT * FROM admin WHERE role='".$_SESSION['role']."'");

}
if(isset($_POST['settings'])){
    $setting="activate";
    $dashboard="disabled";
    
}
if(isset($_POST['add_students'])){
    $dashboard="activate";
}
$number_students = mysqli_query($con,"SELECT * FROM user WHERE role='$student_num'");
$count = mysqli_num_rows($number_students);
$search_subject = "";
if(isset($_POST['search'])){
    $searching="activate";
   $tabs="disabled";
   $search_subject="activate";
   $subject_code = $_POST['subject_code'];
   $_SESSION['subject_code'] = $subject_code;
  
 
}

if(isset($_POST['form']))
{
    $form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="disabled";

}
$n=0;
$selection = "";
if(isset($_POST['select'])){
    $selected_form = $_POST['selected_form'];
    $username = $_POST['username'];
    $scan = mysqli_query($con, "SELECT * FROM activity WHERE form_type='$selected_form' AND teacher_assign='$username'");
    $form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="disabled";
    $selection="activate";
}
$manage_form="";
if(isset($_POST['manage_form'])){
    $activity_id = $_POST['activity_id'];
    $username = $_POST['username'];
    $assign_subject = mysqli_query($con, "SELECT * FROM assign WHERE activity_id='$activity_id' ");
    $form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="disabled";
    $selection="";
   $manage_form = "activated";

}
$add_form="";
if(isset($_POST['add_form'])){
    $selected_form = $_POST['selected_form'];
    $username = $_POST['username'];
    $scan = mysqli_query($con, "SELECT * FROM activity WHERE form_type='$selected_form' AND teacher_assign='$username'");
    $form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="disabled";
    $selection="activate";
    $add_form="activated";
}
$form_err = "";
$form_err1 = "";
$add_success="";
if(isset($_POST['add_form_now'])){
    $form_type = $_POST['select_form_type'];
    $activity_name = $_POST['activity_name'];
    $username = $_POST['username'];
    $selected_form = $_POST['selected_form'];
    $email = $_POST['email'];
    $scan = mysqli_query($con, "SELECT * FROM activity WHERE form_type='$form_type' AND teacher_assign='$username'");
    $form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="";
    $selection="";
    $add_form="";
    $n = rand(1111111,0000000);
    if(empty($activity_name)){
        $form_err="Empty Activity Name";
    }
    elseif(empty($form_type)){
        $form_err1="Empty Form Type";
    }
    else{
        $form="activated";
        $dashboard="disabled";
        $setting="";
    $tabs="";
    $selection="";
    $add_form="";
    $add_success="Added Successfully";
        mysqli_query($con, "INSERT INTO `activity`(`title`, `form_type`, `activity_id`,`teacher_assign`,`email`) VALUES ('$activity_name','$form_type','$n','$username','$email')");
       
       
    }

}
$err_addform1="";
$success_addform1="";
$del_form1="";
if(isset($_POST['add_btn_answer'])){
    $add_answer = $_POST['add_answer'];
    $dashboard="disabled";
    $setting="activate";
    $tabs="disabled";
    $selection="";
    $manage_form="";
    $add_form="";
    if(empty($_POST['add_answer'])){
        $err_addform1="Empty Forms";
        $form="";
    }
    else{
        $setting="activated";
 $dashboard="disabled";
 $tabs="disabled";
 $form="";
        mysqli_query($con, "INSERT INTO form (`answer`)values('$add_answer')");
        $success_addform1="Added Successfully";
    }
}
if(isset($_POST['del_form_answer'])){
    $del_answer = $_POST['del_answer'];
 $setting="activated";
 $dashboard="disabled";
 $tabs="disabled";
 $form="";
   mysqli_query($con, "DELETE FROM form WHERE answer='$del_answer'"); 
   $del_form1="Deleted Successfully";
}

$err_addform="";
$success_addform="";
if(isset($_POST['add'])){
    $add_form = $_POST['add_form'];
    $form="";
    $setting="activated";
    if(empty($add_form)){
        $tabs="disabled";
        $dashboard="disabled";
        $setting="activate";
        $err_addform="Empty textbox";
        
    }
    else{
        
        $setting="activated";
        mysqli_query($con, "INSERT form(`type_of_forms`)values('$add_form')");
        $success_addform="Add Successfully"; 
    }
}
$del_form="";
if(isset($_POST['del'])){
    $del_form = $_POST['del_form'];
    $setting="activated";
 $dashboard="disabled";
 $tabs="disabled";
 $form="";
    mysqli_query($con, "DELETE FROM form WHERE type_of_forms='$del_form'");
    $del_form="Deleted Successfully";
}
$create_form="";
if(isset($_POST['create_form'])){
    $activity_id = $_POST['activity_id'];
    $create_form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="disabled";
    $form="activated";
}
if(isset($_POST['add_que'])){
    $questioner = $_POST['questioner'];
    $activity_id = $_POST['for_subject'];
    $create_form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="disabled";
    $form="activated";
    mysqli_query($con, "INSERT INTO `qustioner`(`question`, `status`) VALUES
     ('$questioner','$activity_id')");
}
if(isset($_POST['input_title'])){
    $activity_id = $_POST['id'];
    $title = $_POST['title'];
    $create_form="activated";
    $dashboard="disabled";
    $setting="";
    $tabs="disabled";
    $form="activated";
    mysqli_query($con, "UPDATE qustioner SET Title='$title' ");
}
if(isset($_POST['delete_act'])){
 
    $id = $_POST['id'];
    $create_form="activated";
    $form="activated";
    $dashboard="disbled";
    mysqli_query($con, "DELETE FROM qustioner WHERE ID='$id'");
   
}
$assign_now_succ="";
if(isset($_POST['assign_now'])){
    $activity_id = $_POST['activity_id'];
    $assign_into = $_POST['assign_into'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $create_form="activated";
    $form="activated";
    $dashboard="disbled";
    $assign_now_succ="Assign Successfully";
    mysqli_query($con,"INSERT INTO `assign`(`subject_code`,`activity_id`,`teacher_assign`,`email`) VALUES
     ('$assign_into','$activity_id','$username','$email')");
}
$set_status="";

if(isset($_POST['open_manage_student'])){
    $student_id = $_POST['student_id'];
    $user_id = $_POST['user_id'];
    $subject_code = $_SESSION['subject_code'];
    $_SESSION['student_id'] = $student_id;
    $_SESSION['user_id'] = $user_id;
    $tabs="disabled";
    $search_subject="activate";
    $form="";
    $dashboard="";
    $set_status="activate";

    
   
  
}
$manage_student="";
if(isset($_POST['open_student_info'])){
    $student_id = $_POST['student_id'];
    $dashboard="";
    $set_status="activate";
    $manage_student="activated";
    
}
$mmp2_show="";
if(isset($_POST['mmp2'])){
    $mmp2_show="activate";
    $student_id = $_POST['student_id'];
    $dashboard="";
    $set_status="activated";
    $student_stat="";
    $manage_student="";
}
$student_stat="";
if(isset($_POST['student_status'])){
    $student_id = $_POST['student_id'];
    $dashboard="";
    $set_status="activated";
    $student_stat="";
    $manage_student="";
    $mmp2_show="activate";
    
}

if(isset($_POST['set_status'])){
$problem = $_POST['problem'];
$student_id = $_POST['student_id'];
if(empty($_POST['problem'])){
    echo 'error';
}else{
mysqli_query($con, "UPDATE user SET status='$problem' WHERE student_id='$student_id'");
}
}
$manage_account="";

if(isset($_POST['manage_account'])){
    $manage_account="activate";
    $dashboard="disabled";
}

$succ_teacher="";
if(isset($_POST['update_teacher'])){
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $middle = $_POST['middle'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate =$_POST['birthdate'];
    $birthdate = date("y-d-m", strtotime($birthdate));
    $succ_teacher = "Updated Successfully";
    $manage_account="activate";
    $dashboard="disabled";
    mysqli_query($con, "UPDATE `admin` SET `email`='$email',`username`='$username',`password`='$password',`firstname`='$firstname',
    `middle`='$middle',`gender`='$gender',`birthdate`='$birthdate',`lastname`='$lastname' WHERE username='$username' OR email='$username'");
}
$date_of_call_success="";
if(isset($_POST['date_of_call_submit'])){
    $student_id = $_POST['student_id'];
   
    $date_of_call = $_POST['date_of_call'];
    $date_of_call = date('Y-d-m', strtotime($date_of_call));
    mysqli_query($con,"UPDATE user SET date_of_call='$date_of_call',remove_emoji=null WHERE student_id='$student_id'");
     $date_of_call_success="Successfully Inserted";
     $dashboard="";
    $set_status="activated";
    $student_stat ="activated";
}
$success_save="";
$err_save = "";
if(isset($_POST['save'])){

    $dashboard="";
    $set_status="";
    $student_stat ="";
    $mmp2_show="";
    $student_id = $_SESSION['student_id'];
    $date_of_call = $_POST['date_of_call'];
    $date_of_call = date('Y-d-m', strtotime($date_of_call));
    if(empty($date_of_call)){

}else{
    mysqli_query($con,"UPDATE user SET date_of_call='$date_of_call' WHERE student_id='$student_id'");
    }
    $personal_check = mysqli_query($con, "SELECT * FROM user WHERE student_id='$student_id'");
    if(mysqli_num_rows($personal_check)>=1){
        while($personal_data = mysqli_fetch_assoc($personal_check)){
            $personal_status = $personal_data['personal_status'];
            $financial_status = $personal_data['financial_status'];
            $academic_status = $personal_data['academic_status'];

            $user_id = $personal_data['ID'];
            if($personal_status != null){
                $personal_reason = $_POST['personal_reason'];
                $personal_action = $_POST['personal_action'];   
                if(empty($personal_reason)){
                }
                elseif(empty($personal_action)){
                }else{
                mysqli_query($con, "INSERT INTO `personal_concern`(`user_id`, `concern_reason`, `action`) 
                VALUES ('$user_id','$personal_reason','$personal_action')");
                mysqli_query($con, "UPDATE user SET personal_status= null , level_of_stress=null WHERE ID='$user_id'");
                $dashboard="";
                $set_status="";
                $student_stat ="";
                $mmp2_show="";
                $success_save="Save Successfully";
                }
            }
            if($academic_status != null){
                $academic_reason = $_POST['academic_concern_select'];
                $academic_concern_action = $_POST['academic_concern_action'];
                if(empty($academic_reason)){
                  
                }
                elseif(empty($academic_concern_action)){
                   
                }else{
                mysqli_query($con, "INSERT INTO `academic_concern`(`user_id`, `concern_reason`, `action`) 
                VALUES ('$user_id','$academic_reason','$academic_concern_action')");
                 mysqli_query($con, "UPDATE user SET academic_status= null , level_of_stress=null WHERE ID='$user_id'");
                $success_save="Save Successfully";
                
                }
            }
            if($financial_status != null){
                $financial_cash_problem = $_POST['financial_cash_problems'];
                $financial_loss_support = $_POST['financial_loss_support'];
                $financial_action = $_POST['financial_action'];
                if(empty($financial_cash_problem)){
                    
                }
                elseif(empty($financial_loss_support)){
                   
                }
                elseif(empty($financial_action)){
                  
                }else{
                mysqli_query($con, "INSERT INTO `financial_concern`(`user_id`, `cash_flow_problems`,`less_of_support`, `action`) 
                VALUES ('$user_id','$financial_cash_problem','$financial_loss_support','$financial_action')");
                 mysqli_query($con, "UPDATE user SET financial_status= null,level_of_stress=null WHERE ID='$user_id'");
                $success_save="Save Successfully";
                }
            }
        }
    }
}

?>