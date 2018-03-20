<!DOCTYPE html>  
 <html lang="en">  
    <head>  
        <meta charset="utf-8">
        <title>Login Test Gym</title>
        <link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
        <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
    </head>  
    <body>
        
    <div class="mx-auto" style="width: 300px;">
        <br>
        <h4>Login Test Gym</h4>        
        <hr style="border-top: 1px solid #6c757d">
        <div class="container">
            <div class="row">
                    <?php echo form_open("LoginController/process"); ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>                    
                        <input class="form-control" placeholder="Username" type="text" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input class="form-control" placeholder="Password" type="password" name="password">
                    </div>
                    
                    <input class="btn btn-outline-primary my-2 my-sm-0" type="submit" value="Login">
                    
                    <?php echo form_close(); ?>                    
                    <p style="color: red;"><?php echo isset($error) ? $error : ''; ?></p>
            </div>
        </div>
        </div>
    </body>  
 </html>  