
<!Doctype html>
<html lang="en">
	<head>
		<title> TEST GYM</title>
		<link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
                <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
		<script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
	</head>
	<body>
            <div id="container">
                <div class="col-md-10 offset-md-1">
                    
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="<?php echo base_url('Welcome/index'); ?>">TEST GYM</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
<!--                                <a class="nav-link" href="<?php echo base_url('Welcome/index'); ?>">Home <span class="sr-only">(current)</span></a>-->
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('CustomerController/index'); ?>">Customer</a>
                            </li>
<!--                            <li class="nav-item">
                              <a class="nav-link" href="<?php echo base_url('ExerciseController/index'); ?>">Exercise</a>
                            </li>-->
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Setting
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('ExerciseController/index'); ?>">1-Exercise</a>
                                <a class="dropdown-item" href="<?php echo base_url('RoutineController/index'); ?>">2-Routine</a>
                                <a class="dropdown-item" href="<?php echo base_url('WeeklySplitController/index'); ?>">3-Weekly Split</a>
                              </div>
                            </li>
<!--                            <li class="nav-item">
                              <a class="nav-link disabled" href="#">Disabled</a>
                            </li>-->
                          </ul>
                          <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                            <td>&nbsp;</td>
                            <?php echo anchor('LoginController/logout','Logout');?>
                          </form>
                        </div>
                      </nav>
                    
                    <div class="row">                            
                        <div class="col-md-12">
                            <?php
                            $this->load->view($content)
                            ?>
                        </div>
                    </div>
                    <footer>
                        <hr style="border-top: 1px solid #6c757d">
                        <center>&copy; 2018 | All rights reserved.</center>
                    </footer>
                </div>
            </div>
            
<!--		<footer class="text-center">
			<p>&copy; 2018</p>
		</footer>-->
	</body>
</html>