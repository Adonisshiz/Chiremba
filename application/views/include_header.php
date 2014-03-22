<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- 			======================================================================================
                                Site Configuration variables
                ======================================================================================
				<?php $base = $this->config->item('base_url');
					   $css	= $this->config->item('css');
					   $session = $this->session->userdata('is_logged_in');
					   $username = $this->session->userdata('username');
				?> 
				======================================================================================		-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo $base?>/client_side/images/body/diagnosis.png">



<!-- ==========================================================================
                                    CSS Files
     ======================================================================= -->
    <!-- Bootstrap core -->
    <link href="<?php echo $base; ?>client_side/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    
    <!-- Responsive Bootstrap -->
    <link href="<?php echo $base; ?>client_side/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Custom styles-->
    <link href="<?php echo $base; ?>client_side/css/main.css" rel="stylesheet">
<!-- ====================================================================== -->
   
   
<!-- ==========================================================================
                                    JS Files
     ======================================================================= -->
    <!-- example.js -->
	<script type="text/javascript" src="<?php echo $base; ?>client_side/js/example.js"></script>
<!-- ====================================================================== -->
   
   
   
<!--    ================================================================== 
         Additional JS files for Responsiveness & IE support [Bootstrap]
    HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
            !!!WARNING!!! change these valyyues from localhost when deploying
        =================================================================   -->
    <!--[if lt IE 9]>
      <script src="http://localhost/soundhub/client_side/bootstrap/docs-assets/js/html5shiv.js"></script>
      <script src="http://localhost/soundhub/client_side/bootstrap/docs-assets/js/respond.min.js"></script>
    <![endif]-->
<!--    ================================================================    -->
    

<!--    ===============================================================
        ==============================================================      -->
        <title>Chiremba: Ask the doc</title>
<!--    ===============================================================     -->
  </head>
	<div class="dark-top">
            <a href="<?php echo $base?>home">Chiremba</a> &nbsp;&nbsp;
            <a href="<?php echo $base?>herbs">Herbs Wiki</a> &nbsp;&nbsp;
            <a href="<?php echo $base?>locate">Chiremba Locate</a> &nbsp;&nbsp;
            <a href="<?php echo $base?>locate">Chiremba Precautions</a>
    </div>

  <body>