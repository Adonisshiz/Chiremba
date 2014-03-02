<?php
require_once('include_header.php');
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
          <a class="navbar-brand" href="#">App Admin: Category Manager</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#">New Article</a>
			</li>
			<li>
				<a href="#">Delete Article</a>
			</li>
			</ul>
          </div>
        </div>
</nav>

<div class="container">
      <div class="row">
	  <br/>
		<table class="table table-striped">
		<tr>
			<td><b>Article Headline </b></td>
			<td><b>Article Category</b></td>
			<td><b>Tick to Change</b></td>
			<td><b>Date of Posting</b></td>
			<td><b>Journalist</b></td>
		</tr>
			
		<?php foreach($articles->result() as $row){?>
		<tr>
			<td>
				<?php echo $row->headline;?>
			</td>
			<td>
				<?php echo $row->category;?>
			</td>
			<td>
				<div class="checkbox">
					<label>
						<input type="checkbox">
					</label>
				</div>
			</td>
			<td>
				<?php echo $row->date;?>
			</td>
			<td>
				<?php echo $row->journalist;?>
			</td>
		</tr>
		<?php }?>
		
		</table>
		</div>
		
</div>
<?php
require_once('include_footer.php');		
?>