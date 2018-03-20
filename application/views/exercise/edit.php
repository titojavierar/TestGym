<h2>Edit Exercise</h2>
<br>
<div class="row">
    <div class="col-md-7 offset-md-2">
        <form method="POST" action="<?php echo base_url('ExerciseController/update')?>">
            <?php foreach ($datesExercise as $value) { ?>

             <input type="hidden" name="txtIdExercise" value="<?php echo $value->Id_Exercise?>">
             <div class="form-group">
                <label for="exampleInputEmail1">Skill level</label>
                    <?php foreach ($var_selSkill_level as $reg) {
                        $list[$reg->Id_Skill_Level] = $reg->Name_Skill_Level;
                    }
                    echo form_dropdown('txtIdSkilLevel',$list,$value->Id_Skill_Level,'class="form-control"');
                    ?>  
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Name Exercise</label>
              <input type="text" name="txtName_Exercise" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->Name_Exercise ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description Exercise</label>
              <input type="text" name="txtDescription_Exercise" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->Description_Exercise ?>">
            </div>   
            <div class="form-group">
              <label for="exampleInputEmail1">Type</label>
              <input type="text" name="txtType" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->Type ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Body Parts</label>
              <input type="text" name="txtBodyParts" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->BodyParts ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Name Equipment</label>
              <input type="text" name="txtEquipmentName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->EquipmentName ?>">
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Descripcion Equipment</label>
              <input type="text" name="txtEquipmentDescripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->EquipmentDescripcion ?>">
            </div>
             <?php }    ?>
            <button type="submit" class="btn btn-primary">Update Exercise</button>

            <!--<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>-->
 </form>  
    </div>
</div>


 
<?php
