<h2>Form Exercise</h2>
 <!--<?php
      print_r($var_selSkill_level)
  ?>-->

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
                <th>Skill Level</th>
                <th>Name Exercise</th>
                <th>Description Exercise</th>
                <th>Type</th>
                <th>Body Parts</th>
                <th>Name Equipment</th>
                <th>Description Equipment</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($var_listExercise as $value) { ?>
                <tr>
                    <td><?php echo $value->Id_Exercise; ?></td>
                    <td><?php echo $value->Name_Skill_Level; ?></td>
                    <td><?php echo $value->Name_Exercise; ?></td>
                    <td><?php echo $value->Description_Exercise; ?></td>
                    <td><?php echo $value->Type; ?></td>
                    <td><?php echo $value->BodyParts; ?></td>
                    <td><?php echo $value->EquipmentName; ?></td>
                    <td><?php echo $value->EquipmentDescripcion ; ?></td>
                    <td> 
                        <center>
                            <a href="<?php echo base_url('ExerciseController/edit')."/".$value->Id_Exercise; ?>">Edit</a>
                            <a> | </a>
                            <a href="<?php echo base_url('ExerciseController/delete')."/".$value->Id_Exercise; ?>">Delete</a>
                            <!--<span class="glyphicon glyphicon-transh" aria-hidden="true"></span>-->
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
                <form method="POST" action="<?php echo base_url('ExerciseController/insert')?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Skill level</label>
                      <select name="txtIdSkilLevel" class="form-control" required>
                          <?php foreach ($var_selSkill_level as $value) {?>
                          <option value="<?php echo $value->Id_Skill_Level?>"> <?php echo $value->Name_Skill_Level;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name Exercise</label>
                      <input type="text" name="txtName_Exercise" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name Exercise" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description Exercise</label>
                      <input type="text" name="txtDescription_Exercise" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Description Exercise">
                    </div>   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Type</label>
                      <input type="text" name="txtType" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Body Parts</label>
                      <input type="text" name="txtBodyParts" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Body Parts" required>
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Name Equipment</label>
                      <input type="text" name="txtEquipmentName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name Equipment">
                    </div>
                      <div class="form-group">
                      <label for="exampleInputEmail1">Descripcion Equipment</label>
                      <input type="text" name="txtEquipmentDescripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descripcion Equipment">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <!--<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>-->
                </form>                 
            </div>
        </div>
      
    </div>  
</div>
  

