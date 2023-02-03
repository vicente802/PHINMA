
<?php
include '../connection/db.php';
$data = $_POST;
if(!empty($data['update_information'])){
    $user_id = $data['user_id'];
   $semester = $data['semester'];
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $middle = $data['middle'];
    $username = $data['username'];
    $email = $data['email'];
    $date = $data['date'];
    $subject = $data['subject'];
    $course = $data['course'];
    $year = $data['year'];
    $term = $data['term'];
    $update_information = mysqli_query($con,"UPDATE `user` SET
    `year`='$year',
    `term`='$term',
    `semester`='$semester',
    `course`='$course',
    `firstname`='$firstname',
    `lastname`='$lastname',
    `middle`='$middle',
    `username`='$username',
    `email`='$email',
    `date`='$date',
    `subject_code`='$subject' WHERE ID='$user_id'");
    ?>
    <script>
        swal("Success",{
            icon:'success'
        })
    </script>
    <?php
}
?>