<?php
require_once('include_header.php');		
?>
<?php echo form_open('theherald/post');?>
<br/>
<nav class="navbar navbar" role="navigation">
<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">App Admin: New Article</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li>
				<input class="btn btn-block btn-lg" name="save" value="Save" type="submit">
			</li>
			<li>
				<a href="#"></a>
			</li>
			<li>
				<input class="btn btn-block btn-lg" name="save" value="Save & Post a New Article" type="submit">
			</li>
			<li>
				<a href="#"></a>
			</li>
			<li>
				<input class="btn btn-block btn-lg" name="save" value="Save & Close" type="submit">
			</li>
			</ul>
          </div>
        </div>
</nav>

<div class="container">
		<div class="row">
		<br/>
			
			<label for="journalist">The Category for the Article</label>
			<select class="form-control" name="category">
					<?php foreach(question as $row){?>
					<option>
					<?php echo $row->question;?>
					</option>
					<?php }?>
			</select>
			<br/>
			<div class="form-inline">
				<label for="journalist">Journalist</label>
				<input type="text" class="form-control" name="journalist" placeholder="The Writers Name...">
			</div>
			<br/>
			<div class="form-inline">
				<div class="col-xs-3">
					<label class="" for="headline">Headline</label>
				</div>
					<textarea class="form-control" rows="3" name="headline" placeholder="What's the Story About?..."></textarea>
			</div>
			<br/>
			<div class="form-inline">
				<div class="col-xs-2">
					<label class="" for="full_story">Full Story</label>
				</div>
			<textarea class="form-control" rows="6" name="story" placeholder="The Article..."></textarea>
			</div>
			<br/>
<?php
require_once('include_footer.php');		
?>
