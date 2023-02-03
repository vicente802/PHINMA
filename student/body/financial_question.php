<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<div class="card text-center">
<div class="card-header" style="color:red;">   
<h3>Financial | Section</h3>
</div>
<div class="card-body">
<section>
<?php
        $n=1;
        $financial = query("SELECT * FROM qustioner WHERE status='financial_status'");
        if(mysqli_num_rows($financial)>=1){?>
            <form action="" method="POST">
          <?php  while($financial_data = mysqli_fetch_assoc($financial)){?>
            <br><h5><?= $n. '. '.$financial_data['question'] ?></h5><br> <div class="stars">
          

                <input class="sad star-4" id="star-4-group-<?= $n?>" value="<?= $financial_data['ID'] ?>,4"  type="radio" name="star-<?= $n ?>"/>
                <label class="sad star-4" for="star-4-group-<?= $n?>"></label>

                <input class="no star-3" id="star-3-group-<?= $n?>" value="<?= $financial_data['ID'] ?>,3" type="radio" name="star-<?= $n ?>"/>
                <label class="no star-3" for="star-3-group-<?= $n?>"></label>

                <input class="smile star-2" id="star-2-group-<?= $n?>" value="<?= $financial_data['ID'] ?>,2" type="radio" name="star-<?= $n ?>"/>
                <label class="smile star-2" for="star-2-group-<?= $n?>"></label>

                <input class="haha star-1" id="star-1-group-<?= $n?>" value="<?= $financial_data['ID'] ?>,1" type="radio" name="star-<?= $n ?>"/>
                <label class="haha star-1" for="star-1-group-<?= $n?>"></label>
                </div>
            
            <?php
            $n++;
            }
            ?><br><br><button type="submit" name="skip" style="background: lightgrey; color:black;" class="personal">Back</button> <button type="submit" name="financial_submit" class="personal">Next</button><?php
        }
        ?></form>
            </section>
</div>
</div>
