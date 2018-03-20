<h2>Form Customer</h2>

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
                <th>Surname</th>
                <th>Bithday</th>                
                <th><center>Actions</center></th>
            </thead>
            <tbody>
                <?php foreach ($var_listCustomers as $value) { ?>
                <tr>
                    <td><?php echo $value->id_Customer; ?></td>
                    <td><?php echo $value->Name; ?></td>
                    <td><?php echo $value->Surname; ?></td>
                    <td><?php echo $value->Birthday; ?></td>                      
                    <td> 
                        <center>
                            <a href="<?php echo base_url('CustomerController/edit')."/".$value->id_Customer; ?>">Edit</a>
                            <a> | </a>
                            <a href="<?php echo base_url('CustomerController/listMeasurementxCustomer')."/".$value->id_Customer; ?>">Consult Measurement</a>
                             <a> | </a>
                            <a href="<?php echo base_url('AssignWeeklySplitController/listWSxCustomer')."/".$value->id_Customer; ?>">Assign Weekly Split</a>
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
                <form method="POST" action="<?php echo base_url('CustomerController/insert');?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="txtName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" title="Required field Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Surname</label>
                      <input type="text" name="txtSurname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname" title="Required field Surname" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Birthday</label>
                      <input type="date" name="dtBirthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Birthday" title="Required field Birthday" required>
                    </div>   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      
    </div>  
</div>
