<h2>Form Edit Measurements by Customer</h2>
<br>
<div class="row">
    <div class="col-md-7 offset-md-2">
        <form method="POST" action="<?php echo base_url('CustomerController/updateMeasurement')?>">
            <?php foreach ($datesCustomerMea as $value) { ?>
                <input type="hidden" name="txtIdMeasurement" value="<?php echo $value->Id_Measurement?>">
                <input type="hidden" name="txtIdCustomer" value="<?php echo $value->tbl_Customer_id_Customer?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Weight</label>
                  <input type="number" name="txtWeight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Weight" value="<?php echo $value->Weight ?>" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Height</label>
                  <input type="number" name="txtHeight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Height in centimetres" value="<?php echo $value->Height ?>" required>
                </div>   
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="txtDate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date" value="<?php echo $value->Date ?>" required>
                </div>
            <?php  }  ?>
            <button type="submit" class="btn btn-primary">Update Measurements</button>
        </form>                 
    </div>
</div>
      
<?php