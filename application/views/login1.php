<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

</head>
<body>

<div id="container">
	<h1>Welcome to Levi Jennings Chart</h1>

	<div id="body">
    <?php 
    echo isset($error)? $error : '';
    echo form_open('login/checkpass');
    
    ?>
    <table border="0" cellpadding="2"  cellspacing="2">
    <tr>
        <td>User Name</td>    
        <td><input type='text' name='username' id='txtUsername'/></td>    
        
    </tr>
    <tr>
        <td>Password</td>    
        <td><input type='password' name='password' id='txtPassword'/></td>    
    </tr>
    <tr>
        <td>&nbsp;</td>    
        <td><input type='submit' id = 'btnLogin' value='login'/></td>    
    </tr>
    <tr>
        <td>&nbsp;</td>    
       
        <td><input type='checkbox' name='itsme' id='txtItsMe'/>&nbsp;remember me</td>    
       

    <tr>
        <td>&nbsp;</td>    
        <td> 
            <?php 
                echo anchor('login/forgot', 'Forgot Password');  
                echo '&nbsp;&nbsp'; 
                echo anchor('login/signup', 'Sign Up'); 
             ?>
       </td>    

    </tr>

    </table>
    <?php echo form_close();?>
	</div>

</div>

</body>
</html>