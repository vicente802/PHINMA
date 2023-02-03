<?php

?>
  <form action="" method="POST">
<div class="row">
   <div class="col col-sm-2">
    <select class="form-control" name="year_now">
        <option>Year</option>
      <?php
      $search_now = mysqli_query($con, "SELECT school_year FROM assignment WHERE school_year is not null ");
      if(mysqli_num_rows($search_now)>=1){
       while($rows = mysqli_fetch_assoc($search_now)){
        $schl_year_now = $rows['school_year'];
    
       echo'<option value='.$schl_year_now.'>'.$schl_year_now.'</option>
      
      ';} 
       }?>
    </select>
    </div>
    <div class="col col-sm-2">
    <select class="form-control" name="semester_now">
    <option>Semester</option>
    <?php
      $search_now = mysqli_query($con, "SELECT semester FROM assignment WHERE semester is not null");
      if(mysqli_num_rows($search_now)>=1){
       while($rows = mysqli_fetch_assoc($search_now)){
        $semester_now = $rows['semester'];
    
       echo'<option value='.$semester_now.'>'.$semester_now.' Semester</option>
      
      ';} 
       }?>
    </select>
    </div>
    <div class="col col-sm-2">
    <select class="form-control" name="term_now">
    <option>Term</option>
    <?php
      $search_now = mysqli_query($con, "SELECT term FROM assignment WHERE term is not null");
      if(mysqli_num_rows($search_now)>=1){
       while($rows = mysqli_fetch_assoc($search_now)){
        $term_now = $rows['term'];
    
       echo'<option value='.$term_now.'>P'.$term_now.'</option>
      
      ';} 
       }?>
    </select>
    </div>
    <div class="col col-sm-4">
    <select class="form-control" name="subject_code_now">
    <option>Assignment</option>
    <?php
      $search_now = mysqli_query($con, "SELECT subject_code FROM assignment WHERE subject_code is not null");
      if(mysqli_num_rows($search_now)>=1){
       while($rows = mysqli_fetch_assoc($search_now)){
        $subject_code_now = $rows['subject_code'];
    
       echo'<option value='.$subject_code_now.' style="text-transform:uppercase;">'.$subject_code_now.'</option>
      
      ';} 
       }?>
    </select>
    </div>
    <div class="col col-sm-2">
    <button type="submit" name="search_now" class="btn btn-primary">Search</button>
    </div>
   </div>
  </div>
</div>
</form>
