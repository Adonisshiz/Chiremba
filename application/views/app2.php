<?php require_once('include_header.php');?>
          <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="top_part">
        <div class="col-lg-12">
            <div class="col-lg-6">
				<?php echo form_open('home/index'); ?>
				<div class="input-group">
					<input type="text" class="form-control" name="question" value="<?php echo $question?>">
						<span class="input-group-btn">
							<button class="btn btn-success" type="submit" name="bvunza">Bvunza Chiremba</button>
						</span>
						</form>
				</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div>
	
	<hr/>
	<div class="main">
	
	
	<?php if(!$searchResults):?>
	<h4>Sorry we could not find anything...</h4>
	<div class="alert alert-info">
	We could not find an answer for you at the moment from our diagnosis, would you like your question forwarded to a doctor & we will get back to you?
	<br/><br/>
	<p align="center"><a href="/chiremba/home/contact/" class="alert-link">Click Here to Forward Question</a></p>
	<br/>
	<p align="center"><a href="/chiremba/home" class="alert-link">Click Here to try another search</a></p>
	</div>
	<?php else:;?>
	
	<?php $i = 0;?>
	<?php foreach ($searchResults as $elasticaResult): ?>
				<?php $result = $elasticaResult->getData();?>
				<?php $i++;?>
	<?php endforeach; ?>	
	
	<h4>There are <?php echo $i?> possible illnesse(s) associated with these symptoms...</h4>

	<?php foreach ($searchResults as $elasticaResult): ?>
				<?php $result = $elasticaResult->getData();?>
				<?php echo "<br/>"; ?>
				<div class="well">
				<?php echo "<h3>".$result["name"]."</h3>";?>
				<?php if($result["ranking"]==5):?>
				<div class="alert alert-danger">
				This is a critical illness and help must be sought immediately with a healthcare practitioner.
				</div>
				<?php elseif($result["ranking"]==3):?>
				<div class="alert alert-warning">
				This is a dangerous illness and help must be sought in time to prevent further developments.
				</div>
				<?php elseif($result["ranking"]<3):?>
				<div class="alert alert-info">
				This is a common illness and is not life threatening.
				</div>
				<?php endif;?>
				It could be <?php echo $result["name"];?> if other possible symptoms you might be exhibiting include <?php echo $result["symptom"]["english"];?>.
				<?php echo "<br/>";?>
				<?php echo $result["description"];?>
				<?php echo "<br/>";?>
				<?php echo "<br/>";?>
				<a href="<?php $base;?>marwadzoe/illness/<?php echo $result["name"];?>" class="h4">Book an appointment with a doctor</a>
				<br/><br/>
				<a href="/chiremba/home/readmore/<?php echo $result["name"]?>" class="h4">Read More>></a>
				</div>
	<?php endforeach; ?>
	</div>
	<?php endif;?>
	
<?php require_once('include_footer.php');?>
<!--
/* End of file app.php */
/* Location: ./application/views/app.php */
-->