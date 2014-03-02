<?php require_once('include_header.php');?>
<div class="container">
    <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		  <div class="row">
			<p align="center"><img src="<?php echo $base?>/client_side/images/body/diagnosis.jpg" class="img-circle"></p>
		  </div>

		  <?php echo form_open('marwadzoe/index'); ?>
          <form role="form">
            <div class="form-group">
                <div class="col-xs-8 col-md-8 col-lg-8 col-sm-8 align-center">
                <input type="text" class="form-control" placeholder="e.g Ziso rangu riri kupfura neche kumusoro" name="question">
                </div>
                <br/>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <p align="center"><button type="submit" class="btn btn-default" name="bvunza">Bvunza Chiremba</button></p>
                </div>
                <!-- <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                    <a href="http://localhost/chiremba/backend/showClients"><button type="submit" class="btn btn-default" name="emergency">Emergency Info</button></a>
                </div>
                -->

            </div>
          </form>
          </div>
      </div>
    </div>
<?php require_once('include_footer.php');?>
<!--
/* End of file app.php */
/* Location: ./application/views/app.php */
-->