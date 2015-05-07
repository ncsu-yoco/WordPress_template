<!DOCTYPE html>
<html>
	<head>		
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<title><?php wp_title(' :: ', true, 'right'); bloginfo('name'); ?></title>
		<link rel="shortcut icon" href="https://www.ncsu.edu/favicon.ico" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <!-- NC State Utility Bar -->
	    <script src="https://cdn.ncsu.edu/brand-assets/utility-bar/ub.php"></script>
		
		<!-- Social Networks Metadata -->
		<meta property="og:type" content="website" />
		<meta property="og:image" content="" />
		<meta name="twitter:card" value="summary" />
		<meta name="twitter:site" value="" />

		<meta name="description" content="" /> 
		<meta property="og:url" content="" />
		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="twitter:url" content="" />
		<meta property="twitter:title" content="" />
		<meta property="twitter:description" content="" />
		
		<?php wp_head(); ?> 
	</head>
	
	<body>
		<a class="sr-only" href="#main-content">Skip to main content</a>
		<div id="ncstate-utility-bar"></div>

		<?php include 'masthead.php'; ?>
		
		<div id="main-content" role="main">