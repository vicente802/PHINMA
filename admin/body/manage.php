<head>
    <?php
include './function/bootstrap.php';
?>
    <style>
    #subject_show {
        text-align: center;
        cursor: pointer;
        margin-left:-10px;
    }

    #subject_hide {
        cursor: pointer;
        text-align: center;
        margin-left:155px;
    }

    #year_level_hide {
        cursor: pointer;
        text-align: center;
        margin-left:160px;
    }

    #year_level_show {
      margin-left:0px;
        cursor: pointer;
        text-align: center;
    }

    #school_year_show {
      margin-left:-5px;
        cursor: pointer;
        text-align: center;
    }

    #school_year_hide {
      margin-left:160px;
        cursor: pointer;
        text-align: center;
    }
    #course_show {
        cursor: pointer;
        text-align: center;
        margin-left:10px;
    }

    #course_hide {
      margin-left:160px;
        cursor: pointer;
        text-align: center;
    }
    #semester_show{
      cursor: pointer;
        text-align: center;
        margin-left:5px;
    }
    #semester_hide{
      margin-left:165px;
      cursor: pointer;
        text-align: center;
    }
    #term_hide{
      cursor: pointer;
        text-align: center;
        margin-left:160px;
    }
    #term_show{
      cursor: pointer;
        text-align: center;
        margin-left:25px;
    }
    @media screen and(max-width:800px) and (min-width:300px){
      #subject_show {
        text-align: center;
        cursor: pointer;
        margin-left:-200px;
    }

    #subject_hide {
        cursor: pointer;
        text-align: center;
        margin-left:155px;
    }

    #year_level_hide {
        cursor: pointer;
        text-align: center;
        margin-left:160px;
    }

    #year_level_show {
      margin-left:0px;
        cursor: pointer;
        text-align: center;
    }

    #school_year_show {
      margin-left:-5px;
        cursor: pointer;
        text-align: center;
    }

    #school_year_hide {
      margin-left:160px;
        cursor: pointer;
        text-align: center;
    }
    #course_show {
        cursor: pointer;
        text-align: center;
        margin-left:10px;
    }

    #course_hide {
      margin-left:160px;
        cursor: pointer;
        text-align: center;
    }
    #semester_show{
      cursor: pointer;
        text-align: center;
        margin-left:5px;
    }
    #semester_hide{
      margin-left:165px;
      cursor: pointer;
        text-align: center;
    }
    #term_hide{
      cursor: pointer;
        text-align: center;
        margin-left:-150px;
    }
    #term_show{
      cursor: pointer;
        text-align: center;
        margin-left:25px;
    }
    }
    </style>

</head>
<form action="" method="POST">
    <div class="container-fluid">
        <?php
    if(!empty($succ)){
        ?>
        <div class="alert alert-success text-center"><?php echo $succ ?></div>
        <?php
    }
    ?>
        <table id="sub_nav" class="table">
            <thead style="background:#6cbb5c; color:white; width:100px;">
                <tr>
                    <th>
                        <div class="row">
                          
                            <!--          <div class="col col-sm-3 text-center" style="margin-left:80px; font-size:20px;"></div> -->
                            <div class="col col-sm text-center" id="subject_show" onclick="subject_show()">Subject Code
                            </div>
                            <div class="col col-sm text-center" id="subject_hide" onclick="subject_hide()">Subject Code
                            </div>
                            
                    </th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="subject_tbody">
                <?php
   if(mysqli_num_rows($subject_scan)>=1){
    while($sub_scan = mysqli_fetch_assoc($subject_scan)){
        $sub_now = $sub_scan['subject_code'];
        echo'<tr> 
        <td style="text-transform:uppercase;"><div class="col col-sm">'.$sub_now.'</div>
        <input type="hidden" name="sub_drop" value='.$sub_now.'>
        <td><div class="col col-sm text-right"><button type="submit" name="btn_sub_drop" class="btn btn-danger">DROP</button></div></td>
      </tr>
        ';
    }
   }
   ?>
                <tr class="subject_tbody">
                    <td style="float:right; position:relative;"><input type="text"
                            style="height:30px; text-transform:Uppercase;" name="add_sub" minlength="6"
                            placeholder="Add Subject Code"> <button type="submit" name="btn_sub"
                            class="btn btn-primary ">Add</button></td>
                </tr>
            </tbody>

        </table>
    </div>
    <br>
    <br>
    <div class="container-fluid" style="margin-top: -60px;">
        <table id="year_nav" class="table">
            <thead style="background:#6cbb5c; color:white; width:100px;">
                <tr>
                    <th>
                        <div class="row">
                            <!--     <div class="col col-sm-3 text-center" style="margin-left:80px; font-size:20px;"></div> -->
                            <div class="col col-sm text-center" id="year_level_show" onclick="year_level_show()">Year
                                Level</div>
                            <div class="col col-sm text-center" onclick="year_level_hide()" id="year_level_hide">Year
                                Level</div>
                    </th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="year_level_tbody">
                <?php
   if(mysqli_num_rows($schl_scan)>=1){
    while($schl_year = mysqli_fetch_assoc($schl_scan)){
        $schl_now = $schl_year['year'];
        echo'<tr>
        <td><b>College Level : </b>'.$schl_now.'</td>
        <input type="hidden" name="schl_drop" value='.$schl_now.'>
        <td><div class="col col-sm text-right"><button type="submit" name="btn_schl_drop" class="btn btn-danger">DROP</button></div></td>
 
      </tr>
        ';
    }
   }
   ?>
                <tr class="year_level_tbody">
                    <td style="float:right; position:relative;"><input type="text"
                            style="height:30px;  text-transform:Uppercase;" name="add_year" placeholder="Year Level">
                        <button type="submit" name="btn_year" class="btn btn-primary ">Add</button>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>
    <br>
    <br>
    <div class="container-fluid" style="margin-top: -60px;">
        <table id="schl_year_nav" class="table">
            <thead style="background:#6cbb5c; color:white; width:100px;">
                <tr>
                    <th>
                        <div class="row">
                            <!--  <div class="col col-sm-3 text-center" style="margin-left:80px; font-size:20px;"></div> -->
                            <div class="col col-sm text-center" id="school_year_show" onclick="school_year_show()">
                                School Year</div>
                            <div class="col col-sm text-center" id="school_year_hide" onclick="school_year_hide()">
                                School Year</div>
                    </th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="school_year_tbody">
                <?php
   if(mysqli_num_rows($schl_year_scan)>=1){
    while($schlyear_scan= mysqli_fetch_assoc($schl_year_scan)){
        $schlscan = $schlyear_scan['school_year'];
        echo'<tr>
        <td><b>Year : </b>'.$schlscan.'</td>
        <input type="hidden" name="schl_year_drop" value='.$schlscan.'>
        <td><div class="col col-sm text-right"><button type="submit" name="btn_schl_year_drop" class="btn btn-danger">DROP</button></div></td>
 
      </tr>
        ';
    }
   }
   ?>
                <tr class="school_year_tbody">
                    <td style="float:right;"><input type="text" style="height:30px;  text-transform:Uppercase;"
                            name="add_school_year" placeholder="School Year"> <button type="submit"
                            name="btn_school_year" class="btn btn-primary ">Add</button></td>
                </tr>
            </tbody>

        </table>
    </div>
    <br>
    <br>
    <div class="container-fluid"  style="margin-top: -60px;">
        <table id="course_nav" class="table">
            <thead style="background:#6cbb5c; color:white; width:100px;">
                <tr>
                    <th>
                        <div class="row">
                            <!--    <div class="col col-sm-3 text-center" style="margin-left:80px; font-size:20px;"></div> -->
                            <div class="col col-sm text-center" id="course_show" onclick="course_show()">Courses</div>
                            <div class="col col-sm text-center" id="course_hide" onclick="course_hide()">Courses</div>
                    </th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="course_tbody">
                <?php
   if(mysqli_num_rows($course_scan)>=1){
    while($course_year_scan= mysqli_fetch_assoc($course_scan)){
        $course_now = $course_year_scan['course'];
        echo'<tr>
        <td><b>Course : </b>'.$course_now.'</td>
        <input type="hidden" name="course_drop" value='.$course_now.'>
        <td><div class="col col-sm text-right"><button type="submit" name="btn_course_drop" class="btn btn-danger">DROP</button></div></td>

      </tr>
        ';
    }
   }
   ?>
   <tr class="course_tbody">
                <td style="float:right;"><input type="text" style="height:30px;  text-transform:Uppercase;"
                        name="add_course" placeholder="Courses"> <button type="submit" name="btn_course"
                        class="btn btn-primary ">Add</button></td>
            </tr>
            </tbody>
            
        </table>
    </div>
    <br>
    <br>
    <div class="container-fluid" style="margin-top: -60px;">
        <table id="semester_nav" class="table">
            <thead style="background:#6cbb5c; color:white; width:100px;">
                <tr>
                    <th>
                        <div class="row">
                            <div class="col col-sm text-center" id="semester_show" onclick="semester_show()">Semester</div>
                            <div class="col col-sm text-center" id="semester_hide" onclick="semester_hide()">Semester</div>
                    </th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="semester_tbody">
                <?php
   if(mysqli_num_rows($semester_scan)>=1){
    while($semester_year_scan= mysqli_fetch_assoc($semester_scan)){
        $semester_now = $semester_year_scan['semester'];
        echo'<tr>
        <td><b>Semester : </b>'.$semester_now.'</td>
        <input type="hidden" name="semester_drop" value='.$semester_now.'>
        <td><div class="col col-sm text-right"><button type="submit" name="btn_semester_drop" class="btn btn-danger">DROP</button></div></td>

      </tr>
        ';
    }
   }
   ?>
    <tr class="semester_tbody">
                <td style="float:right;"><input type="text" style="height:30px;  text-transform:Uppercase;"
                        name="add_semester" placeholder="Semester"> <button type="submit" name="btn_semester"
                        class="btn btn-primary ">Add</button></td>
            </tr>
            </tbody>
           
        </table>
    </div>
    <br>
    <br>
    <div class="container-fluid" style="margin-top:-60px;">
        <table id="term_nav" class="table">
            <thead style="background:#6cbb5c; color:white; width:100px;">
                <tr>
                    <th>
                        <div class="row">
<!--                             <div class="col col-sm-3 text-center" style="margin-left:80px; font-size:20px;"></div> -->
                            <div class="col col-sm text-center" id="term_show"  onclick="term_show()">Term</div>
                            <div class="col col-sm text-center" id="term_hide" onclick="term_hide()">Term</div>
                    </th>
                    <th></th>
                </tr>
            </thead>

            <tbody class="term_tbody">
                <?php
   if(mysqli_num_rows($term_scan)>=1){
    while($term_year_scan= mysqli_fetch_assoc($term_scan)){
        $term_now = $term_year_scan['term'];
        echo'<tr>
        <td><b>Term : </b>'.$term_now.'</td>
        <input type="hidden" name="term_drop" value='.$semester_now.'>
        <td><div class="col col-sm text-right"><button type="submit" name="btn_term_drop" class="btn btn-danger">DROP</button></div></td>

        
      </tr>
        ';
    }
   }
   ?>
     <tr class="term_tbody">
                <td style="float:right;"><input type="text" style="height:30px;  text-transform:Uppercase;"
                        name="add_term" placeholder="Term"> <button type="submit" name="btn_term"
                        class="btn btn-primary ">Add</button></td>
            </tr>
            </tbody>
          
        </table>
    </div>

    <br>
    <br>

</form>
<script>
  function term_hide(){
    $('#term_hide').hide();
    $('#term_show').show();
    $('.term_tbody').hide();
  }
  function term_show(){
    $('#term_hide').show();
    $('#term_show').hide();
    $('.term_tbody').show();
  }
function semester_show(){
  $('#semester_hide').show();
  $('#semester_show').hide();
  $('.semester_tbody').show();
}
function semester_hide(){
  $('#semester_hide').hide();
  $('#semester_show').show();
  $('.semester_tbody').hide();
}
  function course_show(){
    $('#course_show').hide();
    $('#course_hide').show();
    $('.course_tbody').show();
  }
  function course_hide(){
    $('#course_show').show();
    $('#course_hide').hide();
    $('.course_tbody').hide();
  }
function school_year_hide() {
    $('#school_year_hide').hide();
    $('#school_year_show').show();
    $('.school_year_tbody').hide();
}

function school_year_show() {
    $('#school_year_hide').show();
    $('#school_year_show').hide();
    $('.school_year_tbody').show();
}

function year_level_show() {
    $('.year_level_tbody').show();
    $('#year_level_show').hide();
    $('#year_level_hide').show();
}

function year_level_hide() {
    $('.year_level_tbody').hide();
    $('#year_level_show').show();
    $('#year_level_hide').hide();
}

function subject_hide() {
    if ($('.subject_tbody').show()) {
        $('.subject_tbody').hide();
        $('#subject_show').show();
        $('#subject_hide').hide();
    }
}

function subject_show() {
    if ($('.subject_tbody').hide()) {
        $('.subject_tbody').show();
        $('#subject_show').hide();
        $('#subject_hide').show();
    }
    exit;
}
$(document).ready(function() {
  $('.term_tbody').hide();
  $('#term_hide').hide();
  $('.semester_tbody').hide();
  $('#semester_hide').hide();
  $('.course_tbody').hide();
  $('#course_hide').hide();
    $('.school_year_tbody').hide();
    $('#school_year_hide').hide();
    $('#subject_hide').hide();
    $('.year_level_tbody').hide();
    $('#year_level_hide').hide();
    $('.subject_tbody').hide();
    $('#subject_hide').hide();
    $('#term_nav').DataTable();
});
</script>
<script>
$(document).ready(function() {
    $('#sub_nav').DataTable();
});
</script>
<script>
$(document).ready(function() {
    $('#year_nav').DataTable();
});
</script>
<script>
$(document).ready(function() {
    $('#schl_year_nav').DataTable();
});
</script>
<script>
$(document).ready(function() {
    $('#course_nav').DataTable();
});
</script>
<script>
$(document).ready(function() {
    $('#semester_nav').DataTable();
});
</script>