<?php

/** 
  * Author: Domenico Monaco - domenico.monaco@kiuz.it
  * 
  * ## LOCAL FILES IMPORT
  * 
  * Simply and noob snippet to import Bootstrap and Font Awesome into your wordpress theme 
  * 
  * You must simply import into Wordpress theme this file and include
  * previous </head> tag this function: include_once( 'btn-loc-head.php' );
  * 
  * now you are ready to use Bootstrap and Font Awesome
  * 
  **/
  ?>

<!-- Font Awesome -->
	<link rel="stylesheet" href = "<?php echo get_template_directory_uri();?>/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Bootstrap minified CSS -->
	<link rel="stylesheet" href = "<?php echo get_template_directory_uri();?>/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Bootstrap optional theme -->
	<link rel="stylesheet" href = "<?php echo get_template_directory_uri();?>/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Bootstrap minified JavaScript -->
	<script src="<?php echo get_template_directory_uri();?>/bootstrap/3.3.4/js/bootstrap.min.js"></script>
