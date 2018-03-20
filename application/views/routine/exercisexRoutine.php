<h2>Form Exercises by Routine</h2>
 <!--<?php
      print_r($var_selSkill_level)
  ?>-->

  <?php echo validation_errors(); ?> 
 <?php
    if ($this->session->flashdata('ControllerMessage') != '')
    {
    ?>
        <p style="color: red;"><?php echo $this->session->flashdata('ControllerMessage'); ?></p> 
    <?php
    }
        ?>
  
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#consult" role="tab" aria-controls="home" aria-selected="true">Consult</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#new" role="tab" aria-controls="profile" aria-selected="false">New</a>
  </li>
</ul>
  
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="consult" role="tabpanel" aria-labelledby="home-tab">
        <table class="table table-hover">
            <thead>
                <th>Id Exercise</th>
                <th>Name Exercise</th>
                <th>Id Routine</th>
                <th>Name Routine</th>
                <th>Amount Sets</th>
                <th>Reps</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($datesExercisexRoutine as $value) { ?>
                <tr>
                    <td><?php echo $value->tbl_Exercise_Id_Exercise; ?></td>
                    <td><?php echo $value->Name_Exercise; ?></td>
                    <td><?php echo $value->tbl_Routine_Id_Routine; ?></td>
                    <td><?php echo $value->Name_Routine; ?></td>
                    <td><?php echo $value->Amount_Sets; ?></td>
                    <td><?php echo $value->Reps; ?></td>
                    <td> 
                        <center>
                            <a href="#">Edit</a>
                            <!--<a> | </a>
                            <a href="<?php echo base_url('ExerciseController/delete')."/".$value->Id_Exercise; ?>">Delete</a>
                            <span class="glyphicon glyphicon-transh" aria-hidden="true"></span>-->
                        </center>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="profile-tab">

        <div class="row">
            <div class="col-md-7 offset-md-2">
                <form method="POST" action="<?php echo base_url('RoutineController/insertExercisexRoutine')?>">
                    <input type="hidden" name="txtIdRoutine" value="<?php echo $idRoutine?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Exercises</label>
                      <select name="sltIdExercise" class="form-control" required>
                          <?php foreach ($var_selExercise as $value) {?>
                          <option value="<?php echo $value->Id_Exercise?>"> <?php echo $value->Name_Exercise;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Amount Sets</label>
                      <input type="number" name="txtAmount_Sets" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Amount Sets" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Reps</label>
                      <input type="text" name="txtReps" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Reps. e.g. 12,16,10,12" required>
                    </div>   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>                 
            </div>
        </div>
      
    </div>  
</div>
  
