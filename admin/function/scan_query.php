<?php
  $subject_scan = mysqli_query($con,"SELECT subject_code FROM assignment WHERE subject_code is not null");
  $schl_scan = mysqli_query($con,"SELECT year FROM assignment WHERE year is not null ");
  $schl_year_scan = mysqli_query($con,"SELECT school_year FROM assignment WHERE school_year is not null");
  $course_scan = mysqli_query($con,"SELECT course FROM assignment WHERE course is not null");
  $semester_scan = mysqli_query($con,"SELECT semester FROM assignment WHERE semester is not null");
  $term_scan = mysqli_query($con,"SELECT term FROM assignment WHERE term is not null");
  $teacher_select = mysqli_query($con,"SELECT * FROM admin WHERE role='Teacher'");
?>