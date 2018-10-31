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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container"> 
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    

      <div class="panel panel-info" >
      <!--<?php// echo validation_errors('<div class="form-group alert alert-danger">','</div');?>
       -->
              <div class="panel-heading">
                  <div class="panel-title">Sign In</div>

              </div>     

                <div style="padding-top:30px" class="panel-body" >

                  <form id="loginform" role="form" action="" method="POST">
                  <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#`">Forgot password?</a></div>

                    <div class="form-group">
                      <label for="username">username:</label>
                      <input class="form-control" name="username" id="username" type="text" value="<?php echo set_value('username');?>"/>
                      <?php echo form_error('username', '<div class="form-control alert alert-danger">', '</div>'); ?>

                    </div>

                    <div class="form-group">
                      <label for="password">Password:</label>
                      <input class="form-control" name="password" id="password" type="password">
                      <?php echo form_error('confirm', '<div class="form-control alert alert-danger">', '</div>'); ?>

                    </div>

                    <div class="form-group" style="margin-top:10px">
                      <a id="btn-login" class='btn btn-primary' name="login" onclick="document.getElementById('loginform').submit();" role="button">Login</a>
                    </div>
                    <div classs="form-group">
                        <div style="border-top: 1px solid#888; padding-top:10px; font-size:85%">
                        
                          Don't have an account! <a href='index.php/auth/registration'>Sign up here</a>

                      </div>
                    </div>
                  </form>

                  </div>
              </div>

            </div
          </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>