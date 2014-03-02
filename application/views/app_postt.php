<?php
require_once('include_header_admin.php');		
?>
<?php echo form_open('/backend/addArticle');?>
<br/>
<nav class="navbar navbar" role="navigation">
<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">App Admin: New Answer</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li>
				<input class="btn btn-block btn-lg" name="Save" value="Save" type="submit">
			</li>
			</ul>
          </div>
        </div>
</nav>

<div class="container">
		<div class="row">
		<br/>
			
			<label for="journalist">The Question to Answer</label>
			<select class="form-control" name="questions">
					<?php foreach($question->result() as $row){?>
					<option>
					<?php echo $row->question;?>
					</option>
					<?php }?>
			</select>
			<br/>
			<div class="form-inline">
				<div class="col-xs-3">
					<label class="" for="headline">Diagnosis</label>
				</div>
					<textarea class="form-control" rows="6" name="diagnosis" placeholder="please give a detailed diagnosis on how to deal with this issue?..."></textarea>
			</div>
			<br/>
<?php
require_once('include_footer.php');		
?>
