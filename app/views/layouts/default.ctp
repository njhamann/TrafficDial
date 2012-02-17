<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">  
    <head>
    <meta charset="utf-8">
	<title>
		<?php __('TrafficDial: Making Social Worth It'); ?>
		<?php echo $title_for_layout; ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="/css/bootstrap/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>
    <?php echo $this->element('header'); ?>

    <div class="container">

            <?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
    </div> <!-- /container -->

    <?php
            //echo $javascript->link('/js/libs/modernizr-2.0.6.min');
            echo $javascript->link('/js/libs/jquery-1.7.1.min');    
            echo $javascript->link('/js/libs/bootstrap/bootstrap.min.js');  
            echo $javascript->link('/js/core.js');  
    ?>
	<?php
		echo $scripts_for_layout;
	?>
  </body>
</html>

