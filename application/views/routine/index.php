<h2>Form Routine </h2>

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
                <th>Name</th>
                <th>Amount Exercise</th>             
                <th><center>Actions</center></th>
            </thead>
            <tbody>
                <?php foreach ($var_listRoutines as $value) { ?>
                <tr>
                    <td><?php echo $value->Id_Routine; ?></td>
                    <td><?php echo $value->Name_Routine; ?></td>
                    <td><?php echo $value->Amount_Exercise; ?></td>                  
                    <td> 
                        <center>
                            <a href="#">Edit</a>
                            <a> | </a>
                            <a href="<?php echo base_url('RoutineController/listExercisexRoutine')."/".$value->Id_Routine; ?>">Consult Exercises</a>
                             <!--<a> | </a>
                            <a href="#">Add Measurement</a>
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
                <form method="POST" action="<?php echo base_url('RoutineController/insert');?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name Routine</label>
                      <input type="text" name="txtName_Routine" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name Routine" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Amount Exercise</label>
                      <input type="number" name="txtAmount_Exercise" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount Exercise" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      
    </div>  
</div>


