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
			<td><b>Question</b></td>
			<td><b>Article Category</b></td>
			<td><b>Tick to Change</b></td>
			<td><b>Date of Posting</b></td>
			<td><b>Question state</b></td>
		</tr>
			
		<?php foreach($question->result() as $row){?>
		<tr>
			<td>
				<?php echo $row->question;?>
			</td>
			<td>
				<?php echo "Medical conditions";?>
			</td>
			<td>
				<div class="checkbox">
					<label>
						<input type="checkbox">
					</label>
				</div>
			</td>
			<td>
				<?php echo date("l");?>
			</td>
			<td>
				<?php echo "Not yest answered";?>
			</td>
		</tr>
		<?php }?>
		
		</table>
		</div>
		
</div>
<?php
require_once('include_footer.php');		
?>