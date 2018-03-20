<h2>Form Assign Weekly Split by Customer</h2>
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
        
    <?php
    if ($this->session->flashdata('FullNameCustomer') != '')
    {
    ?>
        <p><?php echo $this->session->flashdata('FullNameCustomer'); ?></p> 
    <?php
    }
        ?>
        
        
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
                <th>Id Customer</th>
                <th>Split</th>
                <th>Start Date</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($datesCustomer_WeeklySplit as $value) { ?>
                <tr>
                    <td><?php echo $value->tbl_Customer_id_Customer; ?></td>
                    <td><?php echo $value->Name_Split; ?></td>
                    <td><?php echo $value->Start_Date; ?></td>
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
                <form method="POST" action="<?php echo base_url('AssignWeeklySplitController/insertWSxCustomer')?>">
                    <input type="hidden" name="txtId_Customer" value="<?php echo $idCustomer?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Weekly Split</label>
                      <select name="sltId_Split" class="form-control" required>
                          <?php foreach ($var_listWeeklySplis as $value) {?>
                          <option value="<?php echo $value->Id_Split?>"> <?php echo $value->Name_Split;?> </option>
                          <?php } ?>        
                      </select>    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Start Date</label>
                      <input type="date" name="txtStart_Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Start Date" required>
                    </div>   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>                 
            </div>
        </div>
      
    </div>  
</div>
