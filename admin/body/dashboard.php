<?php
include '../admin/function/server.php';
?>

<head>
    <link rel="stylesheet" href="../css/dashboard.css">
    <style>
    .swal-footer {
        text-align: center;
    }

    .card {
        margin-top: 10px;
        background: #6cbb5c;
        padding: 0px;
        color: white;

    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>

    <!-- <scrip src="../js/edit_student.js" defer></script> -->
</head>

<div class="container-fluid">
    <div class="row">
        <div class="card col-xl-3 col-md-6 mb-3">
            <div class="card-body" style="color:white; background:#6cbb5c;">
                <h4 class="card-title"> Total No. of Teachers: </h4>
                <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;">

                    <?php
        $query = "SELECT * FROM admin WHERE role='Teacher'";
        $query_run = mysqli_query($con, $query);

        if ($category_total = mysqli_num_rows($query_run)){
            echo '<h4 class="mb-0">' .$category_total. '</h4>';
        }
        else {
            echo '<h4 class="mb-0"> No Data </h4>';
}

        ?>
            </div>
        </div>
        <div class="card col-xl-3 col-md-6 mb-3">
            <div class="card-body" style="color:white; background:#6cbb5c;">
                <h4 class="card-title"> Total No. of Students:</h4>
                <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;">

                    <?php
        $query = "SELECT * FROM user ";
        $query_run = mysqli_query($con, $query);

        if ($category_total = mysqli_num_rows($query_run)){
            echo '<h4 class="mb-0">' .$category_total. '</h4>';
        }
        else {
            echo '<h4 class="mb-0"> No Data </h4>';
}

        ?>
            </div>
        </div>
        <div class="card col-xl-3 col-md-6 mb-3">
            <div class="card-body" style="color:white; background:#6cbb5c;">
                <h4 class="card-title"> SSP005:</h4>
                <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;">
                    <?php
        $query = "SELECT * FROM user WHERE year='2' and semester='1' ";
        $query_run = mysqli_query($con, $query);

        if ($category_total = mysqli_num_rows($query_run)){
            echo '<h4 class="mb-0">' .$category_total. '</h4>';
        }
        else {
            echo '<h4 class="mb-0"> No Data </h4>';
}

        ?>
            </div>
        </div>
        <div class="card col-xl-3 col-md-6 mb-3">
            <div class="card-body" style="color:white; background:#6cbb5c;">
                <h4 class="card-title"> SSP006:</h4>
                <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;">
                    <?php
        $query = "SELECT * FROM user WHERE year='2' and semester='2' ";
        $query_run = mysqli_query($con, $query);

        if ($category_total = mysqli_num_rows($query_run)){
            echo '<h4 class="mb-0">' .$category_total. '</h4>';
        }
        else {
            echo '<h4 class="mb-0"> No Data </h4>';
}

        ?>
            </div>
        </div>
        <div class="card col-xl-3 col-md-6 mb-3">
            <div class="card-body" style="color:white; background:#6cbb5c;">
                <h4 class="card-title"> SSP007:</h4>
                <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;">
                    <?php
        $query = "SELECT * FROM user WHERE year='3' and semester='1' ";
        $query_run = mysqli_query($con, $query);

        if ($category_total = mysqli_num_rows($query_run)){
            echo '<h4 class="mb-0">' .$category_total. '</h4>';
        }
        else {
            echo '<h4 class="mb-0"> No Data </h4>';
}

        ?>
            </div>
        </div>
        <div class="card col-xl-3 col-md-6 mb-3">
            <div class="card-body" style="color:white; background:#6cbb5c;">
                <h4 class="card-title"> SSP008:</h4>
                <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;">
                    <?php
        $query = "SELECT * FROM user WHERE year='3' and semester='2' ";
        $query_run = mysqli_query($con, $query);

        if ($category_total = mysqli_num_rows($query_run)){
            echo '<h4 class="mb-0">' .$category_total. '</h4>';
        }
        else {
            echo '<h4 class="mb-0"> No Data </h4>';
}

        ?>
            </div>
        </div>
        <div class="card col-xl-3 col-md-6 mb-3">
            <div class="card-body" style="color:white; background:#6cbb5c;">
                <h4 class="card-title"> SSP009:</h4>
                <p class="card-text text-left col-md" style="font-size:18px; font-weight:bold;">
                    <?php
        $query = "SELECT * FROM user WHERE year='4' and semester='1' ";
        $query_run = mysqli_query($con, $query);

        if ($category_total = mysqli_num_rows($query_run)){
            echo '<h4 class="mb-0">' .$category_total. '</h4>';
        }
        else {
            echo '<h4 class="mb-0"> No Data </h4>';
}

        ?>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-header" style="color:black; font-weight:800vh; font-size:25px;">Monitoring <div class="d-flex justify-content-end"> <div class="btn">Report</div></div>
        
        <div class="card-body" style="color:black;">
            <?php include 'graph/monitoring.php'; ?>
        </div>
    </div>
    <div class="alert"></div>
    <div class="container-fluid">
        <form action="#" method="POST" class="form-group">
            <div class="card mb-3">

                <div class="card-body" style="color:black; background:white;">
                    <h5 class="card-title">Search</h5>
                    <hr>
                    <div class="row">
                        <div class="col col-sm-2">
                            <h5>School Year</h5>
                        </div>
                        <div class="col col-sm-2">
                            <h5>Semester</h5>
                        </div>
                        <div class="col col-sm-2">
                            <h5>Term</h5>
                        </div>
                        <div class="col col-sm-4">
                            <h5>Assignment</h5>
                        </div>
                    </div>

                    <?php
include 'search.php';
   ?>
        </form>
        <br>
        <br>
        <?php
    include '../admin/function/server.php';
    if(!empty($searching)){
        ?>
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead style="background:#6cbb5c; color:white;">
                    <tr>
                        <th>Status</th>
                        <th>Student ID</th>
                        <th>Year</th>
                        <th></th>
                        <th>Course</th>
                        <th>Student Name</th>
                        <th>Subject Code</th>
                        <th></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    $status="";
$try = mysqli_query($con, "SELECT * FROM user WHERE subject_code='$subject_code_now' OR term='$term_now' OR school_year='$year_now' OR semester='$semester_now'");
if(mysqli_num_rows($try)){
    while($row = mysqli_fetch_assoc($try)){
        $user_id = $row['ID'];
        $student_id = $row['student_id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $middle = $row['middle'];
        $course = $row['course'];
        $subject_code = $row['subject_code'];
        $year = $row['year'];
        $personal = $row['personal_status'];
        $academic = $row['academic_status'];
        $financial = $row['financial_status'];
        $level_of_stress = $row['level_of_stress'];
        $date_of_call = $row['date_of_call'];
        $remove_emoji = $row['remove_emoji'];
        if($personal != null){
            $personal = '<b style="color:red; border:2px solid red; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">P</b>';
        }
        if($academic != null){
            $academic = '<b style="color:green; border:2px solid green; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">A</b>';
        }
        if($financial != null){
            $financial = '<b style="color:blue; border:2px solid blue; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">F</b>';
        }
        if($level_of_stress != null){
            $level_of_stress = '<i class="fa fa-frown-o" style="font-size:20px; color:black;"></i>';
        }
        if($date_of_call != null){
            $date_of_call = '<i class="	fa fa-check-circle" style="font-size:20px; color:black;"></i>';
        }
        if(($remove_emoji != null)){
            $status = '<i class="fa fa-smile-o" style="font-size:20px; color:darkgreen;"></i>';
        }
        echo'<tr>
        <td><b >'.$personal. '</b> ' .$academic. ' ' .$financial. ' ' .$status. ' ' .$level_of_stress. ' ' .$date_of_call. '</td>
        <td>'.$student_id.'</td>
        <td>'.$year.'</td>
        <td></td>
        <td>'.$course.'</td>
        <td>'.$lastname.', ' .$firstname. ' '.$middle. '.</td>
        <td>'.$subject_code.'</td>
        <td><form action="" method="POST"></td>
        <input type="hidden" name="student_id" value='.$student_id.'>';
        ?>
                    <td><button type="button" class="btn btn-primary" data-id="<?= $user_id ?>" name="manage"
                            id="manageID" data-toggle="modal" data-target="#exampleModal">Manage</button></td>
                    </tr>
                    </form>

                    <?php
    }
}
    }
    ?>

                    <?php

    include '../admin/function/server.php';
    if(empty($searching)){
        ?>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped">
                            <thead style="background:#6cbb5c; color:white;">
                                <tr>
                                    <th>Status</th>
                                    <th>Student ID</th>
                                    <th>Year</th>
                                    <th></th>
                                    <th>Course</th>
                                    <th>Student Name</th>
                                    <th>Subject Code</th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
    $status="";
$try = mysqli_query($con, "SELECT * FROM user WHERE school_year is not null");
if(mysqli_num_rows($try)){
    while($row = mysqli_fetch_assoc($try)){
        $user_id = $row['ID'];
        $student_id = $row['student_id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $middle = $row['middle'];
        $course = $row['course'];
        $subject_code = $row['subject_code'];
        $year = $row['year'];
        $personal = $row['personal_status'];
        $academic = $row['academic_status'];
        $financial = $row['financial_status'];
        $level_of_stress = $row['level_of_stress'];
        $date_of_call = $row['date_of_call'];
        $remove_emoji = $row['remove_emoji'];
        if($personal != null){
            $personal = '<b style="color:red; border:2px solid red; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">P</b>';
        }
        if($academic != null){
            $academic = '<b style="color:green; border:2px solid green; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">A</b>';
        }
        if($financial != null){
            $financial = '<b style="color:blue; border:2px solid blue; width:100px; border-radius:15px 15px 15px 15px; text-align:center;">F</b>';
        }
        if($level_of_stress != null){
            $level_of_stress = '<i class="fa fa-frown-o" style="font-size:20px; color:black;"></i>';
        }
        if($date_of_call != null){
            $date_of_call = '<i class="	fa fa-check-circle" style="font-size:20px; color:black;"></i>';
        }
        if(($remove_emoji == null)){
            $status = '<i class="fa fa-smile-o" style="font-size:20px; color:darkgreen;"></i>';
        }
        echo'<tr>
        <td><b >'.$personal. '</b> ' .$academic. ' ' .$financial. ' ' .$status. ' ' .$level_of_stress. ' ' .$date_of_call. '</td>
        <td>'.$student_id.'</td>
        <td>'.$year.'</td>
        <td></td>
        <td>'.$course.'</td>
        <td>'.$lastname.', ' .$firstname. ' '.$middle. '.</td>
        <td>'.$subject_code.'</td>
        <td><form action="" method="POST"></td>
        <input type="hidden" name="student_id" value='.$student_id.'>';
        ?>
                                <td><button type="button" class="btn btn-primary" data-id="<?= $user_id ?>"
                                        name="manage" id="manageID" data-toggle="modal"
                                        data-target="#exampleModal">Manage</button></td>
                                </tr>
                                </form>

                                <?php
    }
}
    }
    ?>


                            </tbody>

                        </table>
                    </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Manage Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="user_id" value="">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" />
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" />
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middle" name="middle" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Data of Birth</label>
                            <input type="date" class="form-control" id="date" name="date" />
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card">
                                <div class="card-header card-show" style="background: #6cbb5c;" onclick="show_other()">
                                    <h5 style="color:white;">Other</h5>
                                </div>
                                <div class="card-header card-hide" style="background: #6cbb5c;" onclick="card_hide()">
                                    <h5 style="color:white;">Other</h5>
                                </div>
                                <div class="card-body card-other" style="color:black;">
                                    <div class="col-sm-6">
                                        <label class="form-label">Subject</label>
                                        <select class="form-control" name="subject" id="subject">
                                            <option value="<?= $subject_code ?>"><?= $subject_code ?></option>
                                            <?php
                                            $user_data = mysqli_query($con,"SELECT * FROM assignment WHERE subject_code is not null");
                                            if(mysqli_num_rows($user_data)>=1){
                                                while($user_get_data = mysqli_fetch_assoc($user_data)){
                                                    $subject_code = $user_get_data['subject_code'];
                                                    ?>
                                            <option value="<?= $subject_code ?>"><?= $subject_code ?></option>
                                            <?php
                                                }
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Course</label>
                                        <select class="form-control" name="course" id="course">
                                            <option value="<?= $course ?>"><?= $course ?></option>
                                            <?php
                                        $user_data_course = mysqli_query($con, "SELECT * FROM assignment WHERE course is not null");
                                            if(mysqli_num_rows($user_data_course)>=1){
                                                while($user_data_get_course = mysqli_fetch_assoc($user_data_course)){
                                                    $course_data = $user_data_get_course['course'];
                                                    ?>
                                            <option value="<?= $course_data ?>"><?= $course_data ?></option>
                                            <?php
                                                }
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Year</label>
                                        <select class="form-control" name="year" id="year">
                                            <option value="<?= $year ?>"><?= $year ?></option>
                                            <?php
                                        $user_data_year = mysqli_query($con, "SELECT * FROM assignment WHERE year is not null");
                                            if(mysqli_num_rows($user_data_year)>=1){
                                                while($user_data_get_year = mysqli_fetch_assoc($user_data_year)){
                                                    $year_data = $user_data_get_year['year'];
                                                    ?>
                                            <option value="<?= $year_data ?>"><?= $year_data ?></option>
                                            <?php
                                                }
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Semester</label>
                                        <select class="form-control" name="semester" id="semester">
                                            <option value="<?= $semester_now ?>"><?= $semester_now ?></option>
                                            <?php
                                        $user_data_semester = mysqli_query($con, "SELECT * FROM assignment WHERE semester is not null");
                                            if(mysqli_num_rows($user_data_semester)>=1){
                                                while($user_data_get_semester = mysqli_fetch_assoc($user_data_semester)){
                                                    $semester_data = $user_data_get_semester['semester'];
                                                    ?>
                                            <option value="<?= $semester_data ?>"><?= $semester_data ?></option>
                                            <?php
                                                }
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Term</label>
                                        <select class="form-control" name="term" id="term">
                                            <option></option>
                                            <?php
                                        $user_data_term = mysqli_query($con, "SELECT * FROM assignment WHERE term is not null");
                                            if(mysqli_num_rows($user_data_term)>=1){
                                                while($user_data_get_term = mysqli_fetch_assoc($user_data_term)){
                                                    $term_data = $user_data_get_term['term'];
                                                    ?>
                                            <option value="<?= $term_data ?>"><?= $term_data ?></option>
                                            <?php
                                                }
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php

if(!empty($student_information_show)){
include 'student_information.php';
}
 ?>
    <?php
if(!empty($open_date_of_call)){
    include 'modal/date_of_call.php';
}
?>
    <?php
if(!empty($open_student_manage)){
    include 'modal/manage.php';
  }
  ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"
        integrity="sha512-pXR0JHbYm9+EGib6xR/w+uYs/u2V84ofPrBpkgLYyKvhZYJtUUvKSy1pgi8tJZAacsPwgf1kbhI4zwgu8OKOqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('.card-other').hide();
        $('.card-hide').hide();
    });

    $("#example").on('click', '#manageID', function() {
        var userID = $(this).data('id');
        $.post('body/student_data.php?studentID=' + userID, {
                studentID: userID
            },
            function(data) {
                const parseData = JSON.parse(data);
                $("#user_id").val(parseData[0].ID);
                $("#firstName").val(parseData[0].firstname);
                $("#lastName").val(parseData[0].lastname);
                $("#middle").val(parseData[0].middle);
                $("#username").val(parseData[0].username);
                $("#email").val(parseData[0].email);
                $("#date").val(parseData[0].date);
                $('#term').val(parseData[0].term);
            });
    });

    $("#save").click(function() {
        var update_information = "active";
        var firstname = $("#firstName").val();
        var lastname = $("#lastName").val();
        var middle = $('#middle').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var date = $('#date').val();
        var subject = $('#subject').val();
        var course = $('#course').val();
        var year = $('#year').val();
        var semester = $('#semester').val();
        var term = $('#term').val();
        var user_id = $('#user_id').val();
        $.ajax({
            method: 'POST',
            url: 'body/api/api.php',
            data: {
                firstname: firstname,
                update_information: update_information,
                middle: middle,
                lastname: lastname,
                username: username,
                email: email,
                date: date,
                subject: subject,
                course: course,
                semester: semester,
                year: year,
                term: term,
                user_id: user_id
            },
            success: function(res) {
                if (res) {
                    $('.alert').html(res)
                    console.log(res)
                }
            }
        })
    });

    function show_other() {
        $('.card-other').show();
        $('.card-hide').show();
        $('.card-show').hide();
    }

    function card_hide() {
        console.log('test')
        $('.card-other').hide();
        $('.card-hide').hide();
        $('.card-show').show();
    }
    </script>


    <!-- Page level plugins -->