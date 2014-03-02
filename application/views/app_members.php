<?php
require_once('include_header_admin.php');
?>
<br/>
<nav class="navbar navbar" role="navigation">
<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">App Admin: Questions Manager</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li>
				<a href="../backend/answer">Respond to question</a>
			</li>
			<!--<li>
				<a href="#">Refer to a Doctor</a>
			</li>-->
			</ul>
          </div>
        </div>
</nav>

<div class="container">
      <div class="row">
	  <br/>
		<table class="table table-striped">
		<tr>
			<td><b>Name</b></td>
			<td><b>Surname</b></td>
			<td><b>Select Student</b></td>
			<td><b>ID Number</b></td>
			<td><b>Previous treatments</b></td>
			<td><b>In Case of an emergency</b></td>
		</tr>
			
		<?php foreach($info->result() as $row){?>
		<tr>
			<td>
				<?php echo $row->Name;?>
			</td>
			<td>
				<?php echo $row->Surname;?>
			</td>
			<td>
				<div class="checkbox">
					<label>
						<input type="checkbox">
					</label>
				</div>
			</td>
			
			<td>
				<?php echo $row->IDnumber;?>
			</td>
			<td>
				<?php echo $row->treatments;?>
			</td>
			<td>
				<?php echo $row->help;?>
			</td>
		</tr>
		<?php }?>
		
		</table>
		</div>
		
</div>
<?php
require_once('include_footer.php');		
?>