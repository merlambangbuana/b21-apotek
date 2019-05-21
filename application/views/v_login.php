<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Simple login form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css'); ?>">

  
</head>

<body>

  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      </strong> Sign In<h1>
      <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
		  <a href="<?php echo site_url('Login/home')?>" class="lnk">
              
              Home
            </a>
             
           <button type="submit" class="btn btn--right">Login </button>
    
          </div>
      </form>
  </div>
</div>
  
  

    <script  src="<?= base_url()?>assets/js/index.js"></script>




</body>

</html>
