<h2>Form Weekly Split</h2>


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Consult</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
  </li>
</ul>
  
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table table-hover">
            <thead>
                <th>Id</th>
                <th>Name Split</th>
                <th>Day 1 Routine</th>
                <th>Day 2 Routine</th>
                <th>Day 3 Routine</th>
                <th>Day 4 Routine</th>
                <th>Day 5 Routine</th>
                <th>Day 6 Routine</th>
                <th>Day 7 Routine</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($var_listWeeklySplis as $value) { ?>
                <tr>
                    <td><?php echo $value->Id_Split; ?></td>
                    <td><?php echo $value->Name_Split; ?></td>
                    <td><?php echo $value->NR1; ?></td>
                    <td><?php echo $value->NR2; ?></td>
                    <td><?php echo $value->NR3; ?></td>
                    <td><?php echo $value->NR4; ?></td>
                    <td><?php echo $value->NR5; ?></td>
                    <td><?php echo $value->NR6; ?></td>
                    <td><?php echo $value->NR7; ?></td>
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
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

        <div class="row">
            <div class="col-md-7 offset-md-2">
                <form method="POST" action="<?php echo base_url('WeeklySplitController/insert')?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name Split</label>
                      <input type="text" name="txtName_Split" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name Split" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Day 1 Routine</label>
                      <select name="sltDay1_Id_Routine" class="form-control" required>
                          <?php foreach ($var_sltRoutine as $value) {?>
                          <option value="<?php echo $value->Id_Routine?>"> <?php echo $value->Name_Routine;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Day 2 Routine</label>
                      <select name="sltDay2_Id_Routine" class="form-control" required>
                          <?php foreach ($var_sltRoutine as $value) {?>
                          <option value="<?php echo $value->Id_Routine?>"> <?php echo $value->Name_Routine;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Day 3 Routine</label>
                      <select name="sltDay3_Id_Routine" class="form-control" required>
                          <?php foreach ($var_sltRoutine as $value) {?>
                          <option value="<?php echo $value->Id_Routine?>"> <?php echo $value->Name_Routine;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Day 4 Routine</label>
                      <select name="sltDay4_Id_Routine" class="form-control" required>
                          <?php foreach ($var_sltRoutine as $value) {?>
                          <option value="<?php echo $value->Id_Routine?>"> <?php echo $value->Name_Routine;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Day 5 Routine</label>
                      <select name="sltDay5_Id_Routine" class="form-control" required>
                          <?php foreach ($var_sltRoutine as $value) {?>
                          <option value="<?php echo $value->Id_Routine?>"> <?php echo $value->Name_Routine;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Day 6 Routine</label>
                      <select name="sltDay6_Id_Routine" class="form-control" required>
                          <?php foreach ($var_sltRoutine as $value) {?>
                          <option value="<?php echo $value->Id_Routine?>"> <?php echo $value->Name_Routine;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Day 7 Routine</label>
                      <select name="sltDay7_Id_Routine" class="form-control" required>
                          <?php foreach ($var_sltRoutine as $value) {?>
                          <option value="<?php echo $value->Id_Routine?>"> <?php echo $value->Name_Routine;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>                 
            </div>
        </div>
      
    </div>  
</div>
