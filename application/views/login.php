<?php
require_once('include_header_admin.php');		
?>
    <div class="container">
      <!-- Example row of columns -->
      <div class="container login">
	  <?php echo form_open('home/login'); ?>
      <form class="form-signin">
		<h5 align="center"><font color="red"><?php if(isset($no_user)){echo $no_user;}?></font></h5>
        <h2 class="form-signin-heading" align="center">Please Login</h2>
        <input type="text" class="form-control" name="username" placeholder="Username" autofocus value="<?php echo set_value('username')?>">
		<font color="red"><?php echo form_error('username'); ?></font>
        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password')?>">
		<font color="red"><?php echo form_error('password'); ?></font>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

      <hr>
<!--    =============================================================
                        Bootstrap core JavaScript
          Placed at the end of the document so the pages load faster 
        =============================================================       -->
    <script src="<?php echo $base; ?>client_side/bootstrap/docs-assets/js/jquery.js"></script>
    <script src="<?php echo $base; ?>client_side/bootstrap/dist/js/bootstrap.min.js"></script>  
<!--    =============================================================        -->
</html>
