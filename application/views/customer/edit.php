<h2>Edit Customer</h2>
<br>
<div class="row">
    <div class="col-md-7 offset-md-2">
        <form method="POST" action="<?php echo base_url('CustomerController/update')?>">
                <?php foreach ($datesCustomer as $value) { ?>
                    <input type="hidden" name="txtIdCustomer" value="<?php echo $value->id_Customer?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="txtName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" title="Required field Name" value="<?php echo $value->Name ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Surname</label>
                        <input type="text" name="txtSurname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname" title="Required field Surname" value="<?php echo $value->Surname ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthday</label>
                        <input type="date" name="dtBirthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Birthday" title="Required field Birthday" value="<?php echo $value->Birthday ?>" required>
                    </div>
                <?php  }  ?>
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>  
    </div>
</div>

<?php
