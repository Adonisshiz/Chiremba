<?php
require_once('include_header_admin.php');		
?>
    <div class="container">
	
	<?php 
	if($success != null){
		echo $success;
	}
	?>
	
      <!-- Example row of columns -->
      <div class="row">
	  <br/>
	  
	  <p class="h1" align="center">App Admin</p>
		<!--
        <div class="well well-sm col-md-4 col-sm-4 col-lg-4 col-xs-4">
          <h3 align="center">Add New Article</h3>
		  <p class="h1" align="center"><span class="glyphicon glyphicon-pencil"></span></p>
          <p><a class="btn btn-lg btn-block btn-primary" href="<?php echo $base?>backend/post" role="button">Post Articles To App</a></p>
       </div>
	   <div class="well well-sm col-md-4 col-sm-4 col-lg-4 col-xs-4">
          <h3 align="center">Article Manager</h3>
          <p class="h1" align="center"><span class="glyphicon glyphicon-folder-open"></span></p>
          <p><a class="btn btn-lg btn-block btn-primary" href="<?php echo $base?>backend/articles" role="button">Manage posted Articles</a></p>
       </div>
	   <div class="well well-sm col-md-4 col-sm-4 col-lg-4 col-xs-4">
          <h3 align="center">Category Manager</h3>
          <p class="h1" align="center"><span class="glyphicon glyphicon-list"></span></p>
          <p><a class="btn btn-lg btn-block btn-primary" href="<?php echo $base?>backend/categories" role="button">Manage Categories to Publish to</a></p>
       </div>
	   -->
	   <div class="well well-sm col-md-4 col-sm-4 col-lg-4 col-xs-4">
          <h3 align="center">Client Manager</h3>
          <p class="h1" align="center"><span class="glyphicon glyphicon-tower"></span></p>
          <p><a class="btn btn-lg btn-block btn-primary" href="<?php echo $base?>backend/showClients" role="button">Manage App Administrators</a></p>
       </div>
	   <div class="well well-sm col-md-4 col-sm-4 col-lg-4 col-xs-4">
			<h3 align="center">Questions Manager</h3>
			<p class="h1" align="center"><span class="glyphicon glyphicon-tower"></span></p>
          <p><a class="btn btn-lg btn-block btn-primary" href="<?php echo $base?>backend/respond" role="button">Respond to Issues from Community</a></p>
      </div>
	  <div class="well well-sm col-md-4 col-sm-4 col-lg-4 col-xs-4">
			<h3 align="center">Post precautions</h3>
			<p class="h1" align="center"><span class="glyphicon glyphicon-tower"></span></p>
          <p><a class="btn btn-lg btn-block btn-primary" href="<?php echo $base?>backend/respond" role="button">Post on regional patterns & trends</a></p>
      </div>

<?php
require_once('include_footer.php');		
?>
