<!DOCTYPE html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : 
           echo '<link rel="pingback" href=" '.esc_url(get_bloginfo( 'pingback_url' )).' ">';
        endif; ?>
	<?php wp_head(); ?>
</head>
	<?php 
	$innofit_layout_style=get_theme_mod('innofit_layout_style','wide');
	if($innofit_layout_style == "boxed")
	{ $class="boxed"; }
	else
	{ $class="wide"; }
    ?>
	<body <?php body_class($class); ?> data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
	<?php wp_body_open(); ?>	
<div id="page" class="site">
	<a class="skip-link innofit-screen-reader" href="#content"><?php esc_html_e( 'Skip to content', 'innofit' ); ?></a>	
		<div id="wrapper">	
			<?php if(!is_customize_preview()){ ?>
			<!--Custom Navbar For Desktop View-->
			<div id="loader-wrapper">
				<div id="loader"></div>
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
			<!--Custom Navbar For Desktop View-->
			<?php } ?>
			<?php
			if (function_exists( 'innofitp_activate' ) ){
				$all_plugins = get_plugins();
				$innofit_plugin_version=$all_plugins ['innofit-plus/innofit-plus.php']['Version'];
				if($innofit_plugin_version == 2.3 || $innofit_plugin_version > 2.3 )
				{
					do_action('innofit_plus_header_preset_hook');
				}
				else{ 
					do_action('innofit_navigation_hook');
				}
			}
			else{ 
			do_action('innofit_navigation_hook');  		 
		}?>

