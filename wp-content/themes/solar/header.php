<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="utf-8">

	<title><?php wp_title('|'); ?></title>

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/_images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/_images/favicon.ico">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/_images/favicon.ico">
	<![endif]-->


	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!-- Google Analytics -->

	<!-- end analytics -->


</head>
<body <?php body_class(); ?>>

<?php

    //Get active language to set the logo url path to home
    global $languages, $currentLangCode;

    $languages = icl_get_languages('skip_missing=0&orderby=menu_order');

    //print_r($languages);

    foreach ($languages as $l) {
    	if($l['active'] == 1){
    		$currentLangCode = $l['language_code'];
    	}
    }


?>