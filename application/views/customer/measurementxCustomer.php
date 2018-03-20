<h2>Form Measurements by Customer</h2>

<!--print_r($NameC)
<?php
print_r($idCustomer)
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
                <th>Weight</th>
                <th>Height (cm)</th>
                <th>Date of Measurement</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php foreach ($datesMeasuremxCust as $value) { ?>
                <tr>
                    <td><?php echo $value->Id_Measurement; ?></td>
                    <td><?php echo $value->Weight; ?></td>
                    <td><?php echo $value->Height; ?></td>
                    <td><?php echo $value->Date; ?></td>
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
                <form method="POST" action="<?php echo base_url('CustomerController/insertMeasurement')?>">
                    <input type="hidden" name="txtIdCustomer" value="<?php echo $idCustomer?>">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Weight</label>
                      <input type="number" name="txtWeight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Weight" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Height</label>
                      <input type="number" name="txtHeight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Height in centimetres" required>
                    </div>   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Date</label>
                      <input type="date" name="txtDate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>                 
            </div>
        </div>
      
    </div>  
</div>