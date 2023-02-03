<?php 

include '../../connection/db.php';


if(isset($_POST['studentID'])) {

    $student_id = $_POST['studentID'];
    $student_data = mysqli_query($con, "SELECT * FROM user WHERE ID = '$student_id'");
    $studentArray = array();

    while($row = mysqli_fetch_assoc($student_data)) {
        $studentArray[] = $row;
    }
    
    echo json_encode($studentArray);
}


mysqli_close($con);

?>