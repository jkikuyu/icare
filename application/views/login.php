<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login to iCare</title>

    <!-- Bootstrap -->
    <link href=<?php echo base_url();?>"assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Registration Page</h1>
    <p>Fill in the details</p>
    <div class="col-lg-8 col-lg-offset-2">
      <div class="form-group">
        <label for="username" class="label-default">username:</label>
        <input class="form-control" name="username" id="username" type="text">
      </div>
      <div class="form-group">
        <label for="email" class="label-default">Email:</label>
        <input class="form-control" name="email" id="email" type="text">
      </div>
      <div class="form-group">
        <label for="dob" class="label-default">Date of Birth:</label>
        <input class="form-control" name="dob" id="dob">
      </div>
      <div class="form-group">
        <label for="gender" class="label-default">Gender:</label>
        <select class="form-control" name="gender" id="gender">
          <option value="M">Male</option>
          <option value="F">Female</option>
      </div>
      <div class="form-group">
        <label for="phone" class="label-default">Phone:</label>
        <input class="form-control" name="phone" id="phone">
      </div>

      <div class="text-center">
        <button class="btn btn-primary">Register</button>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=<?php echo base_url();?>"assets/  js/bootstrap.min.js"></script>
  </body>
</html>