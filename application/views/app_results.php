<?php
require_once('include_header.php');		
?>
<hr/>
<div class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <form class="form-inline">
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 input-group">
			  <input type="text" class="form-control input-lg" id="question" placeholder="Your illness displays here..." name="question">
			  <span class="input-group-btn">
				<button class="btn btn-success btn-lg" type="button">Bvunza futi</button>
			  </span>
			</div>
			
          </form>
        </div>
        <div class="navbar-collapse collapse">
          
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
	  <br/>
          <div class="tabbable"> <!-- Only required for left/right tabs -->
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab1" data-toggle="tab">Chiremba Diagnosis</a>
				</li>
				<li>
					<a href="#tab2" data-toggle="tab">Chiremba Locate</a>
				</li>
    		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab1">
			<br/>
				<p>
				<?php
					echo $treatment;
				?>
				</p>
			</div>
		<div class="tab-pane" id="tab2">
			<br/>
			<p>Location of nearest doctor or pharmacy.</p>
		</div>
		</div>
		</div>
      </div>

      <hr>

<?php
require_once('include_footer.php');		
?>
