<?php
session_start();
include '../../connection/db.php';
header("Content-Type: application/json"); 
$data = $_POST;
$id = $data['id'];
$edit_student = mysqli_query($con,"SELECT * FROM user WHERE student_id='$id'");
$student_data = mysqli_fetch_assoc($edit_student);
echo json_encode($student_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$student_id = $student_data['student_id'];
$student_data['student_id'] = $student_id;





?>