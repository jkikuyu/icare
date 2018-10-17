<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login to iCare</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>assets/css/respond.min.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>assets/css/html5shiv.min.js" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="col-lg-5 col-lg-offset-2">
	    <h1>Registration Page</h1>
		<p>Fill in the details</p>
		<?php if(isset($_SESSION['success'])){?>
			<div class= "alert alert-success"> <?php echo $_SESSION['success'];?></div>
		<?php
		}
		?>
		

		 <form action "" method="POST">

			<div class="form-group">
		        <input class="form-control" name="firstname" placeholder="First name" 
					 id="firstname" type="text"  value="<?php echo set_value('firstname');?>" />
		        <?php echo form_error('firstname', '<div class="alert alert-danger">', '</div>'); ?>
		    </div>
			<div class="form-group">
		        <input class="form-control" name="lastname" id="lastname" placeholder="Last name" type="text" value="<?php echo set_value('lastname');?>" />
		       <?php echo form_error('lastname', '<div class="alert alert-danger">', '</div>'); ?>

		    </div>



		      <div class="form-group">
		        <input class="form-control" name="username" placeholder="Username" id="username" type="text" value="<?php echo set_value('username');?>" />
		        <?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
		      </div>
		      <div class="form-group">
		        <input class="form-control" name="password" placeholder="Password"id="password" type="password" />
		        <?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>

		      </div>
		      <div class="form-group">
		        <input class="form-control" name="confirm" placeholder="Confirm Password"  id="confirm" type="password" />
		        <?php echo form_error('confirm', '<div class="alert alert-danger">', '</div>'); ?>

		      </div>

		      <div class="form-group">
		        <input class="form-control" name="email" placeholder="Email" id="email" type="text" value="<?php echo set_value('email');?>"/>
		        <?php echo form_error('email', '<div class="alert alert-danger">', '</div>'); ?>

		      </div>
<!-- 		      <div class="form-group">
		        <label for="dob">Date of Birth:</label>
		        <input class="form-control" name="dob" id="dob">
		      </div>
		      <div class="form-group">
		        <label for="gender" >Gender:</label>
		        <select class="form-control" name="gender" id="gender">
		          <option value="M">Male</option>
		          <option value="F">Female</option>
		          </select>

		      </div>

		      <div class="form-group">
		        <label for="phone">Phone:</label>
		        <input class="form-control" name="phone" id="phone">
		      </div>
 -->
		      <div>
		        <button class="btn btn-primary" name="register">Register</button>
		      </div>
		</form>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<!--     <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
 -->  </body>
</html>