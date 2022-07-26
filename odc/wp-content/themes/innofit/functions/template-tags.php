<?php
if ( ! function_exists( 'innofit_blog_meta_content' ) ) :
function innofit_blog_meta_content()
{ 
	$innofit_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
	
	if( $innofit_blog_meta_section_enable == true ) { ?>
	<div class="entry-meta">
		<span class="entry-date">
			<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time datetime=""><?php echo esc_html(get_the_date()); ?></time></a>
		</span>
	</div>
<?php } 
}
endif;

if ( ! function_exists( 'innofit_blog_category_content' ) ) :
function innofit_blog_category_content()
{
	$innofit_blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
	
	if( $innofit_blog_meta_section_enable == true ) {

?>
<div class="entry-meta">
	<span class="author"><?php esc_html_e('By','innofit');?> <a rel="tag" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php echo esc_html(get_the_author());?></a>
	
	</span>
	<?php 	
	$innofit_cat_list = get_the_category_list();
		if(!empty($innofit_cat_list)) { ?>
	<span class="cat-links"><?php esc_html_e('in','innofit');?><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
	<?php } 

	 $innofit_tag_list = get_the_tag_list();
		if(!empty($innofit_tag_list)) { ?>
				<span class="tag-links"><?php esc_html_e('Tag','innofit');?> <?php the_tags('', ', ', ''); ?></span>
				<?php }

		?>

</div>	 
<?php } } endif;
// avator class
function innofit_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='img-responsive img-circle", $class);
    return $class;
}
add_filter('get_avatar','innofit_gravatar_class');

// blogs,pages and archive page title
function innofit_archive_page_title(){
	if( is_archive() )
	{
		$innofit_archive_text = get_theme_mod('archive_prefix',__('Archives','innofit'));
		
		echo '<div class="page-title text-center"><h1 class="text-white">';
		
		if ( is_day() ) :
		
		  printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_archive_text), esc_html(get_the_date()) );
		  
        elseif ( is_month() ) :
		
		  printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_archive_text), esc_html(get_the_date()) );
		  
        elseif ( is_year() ) :
		
		  printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_archive_text), esc_html(get_the_date()) );
		  
        elseif( is_category() ):
		
			$innofit_category_text = get_theme_mod('category_prefix',__('Category','innofit'));
			
			printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_category_text), esc_html(single_cat_title( '', false )) );
			
		elseif( is_author() ):
			
			$innofit_author_text = get_theme_mod('author_prefix',__('All posts by','innofit'));
		
			printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_author_text), esc_html(get_the_author()) );
			
		elseif( is_tag() ):
			
			$innofit_tag_text = get_theme_mod('tag_prefix',__('Tag','innofit'));
			
			printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_tag_text), single_tag_title( '', false ) );
			
		elseif( class_exists( 'WooCommerce' ) && is_shop() ):
			
			$innofit_shop_text = get_theme_mod('shop_prefix',__('Shop','innofit'));
			
			printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_shop_text), single_tag_title( '', false ));
			
        elseif( is_archive() ): 
		the_archive_title( '<h1>', '</h1>' ); 
		
		endif;
		

		echo '</h1></div>';
	}
	elseif( is_search() )
	{
		$innofit_search_text = get_theme_mod('search_prefix',__('Search results for','innofit'));
		
		echo '<div class="page-title text-center"><h1 class="text-white">';
		
		printf( esc_html__( '%1$s %2$s', 'innofit' ), esc_html($innofit_search_text), get_search_query() );
		
		echo '</h1></div>';
	}
	elseif( is_404() )
	{
		$innofit_breadcrumbs_text = get_theme_mod('404_prefix',__('404','innofit'));
		
		echo '<div class="page-title text-center"><h1 class="text-white">';
		
		printf( esc_html__( '%1$s  %2$s', 'innofit' ) , esc_html($innofit_breadcrumbs_text),'' );
		
		echo '</h1></div>';
	}
	else
	{
			$allowed_html = array(
									'br'     => array(),
									'em'     => array(),
									'strong' => array(),
									'i'      => array(
										'class' => array(),
									),
									'span'   => array(),
								);
		
		echo '<div class="page-title text-center"><h1 class="text-white">'.wp_kses( force_balance_tags( get_the_title()), $allowed_html ).'</h1></div>';
	}
}

// Innofit post navigation
function innofit_post_nav()
{
	global $post;
	echo '<div style="text-align:center;">';
	posts_nav_link( ' &#183; ', esc_html__('previous page','innofit'), esc_html__('next page','innofit') );
	echo '</div>';
}


//Hide Title of woocommerce shop page
add_filter( 'woocommerce_show_page_title' , 'innofit_woo_hide_page_title' );

function innofit_woo_hide_page_title() {
	
	return false;
	
}

if(!function_exists( 'innofit_image_thumbnail')) : 					
		function innofit_image_thumbnail($preset,$class){
		if(has_post_thumbnail()){  $defalt_arg =array('class' => $class);
	the_post_thumbnail($preset, $defalt_arg); } } 
endif;

    add_action( 'wp_footer', 'innofit_demo_store' );
	function innofit_demo_store() {
	if ( class_exists( 'WooCommerce' ) ) {
	$woocommerce_demo_store = get_option('woocommerce_demo_store', 'no');
	if($woocommerce_demo_store !='no')
	{
	?>
	<style>
	.woocommerce-store-notice .demo_store, #wrapper {
		margin-top: 50px !important;
	}
	</style>
<?php } } } 

/*----Custom Header & Footer Background color----*/ 
function innofit_header_footer_bgcolor() {
    innofit_custom_header_footer_bgcolor();
}
add_action('wp_footer','innofit_header_footer_bgcolor');

/*----Custom Header & Footer Background color----*/ 
function innofit_custom_header_footer_bgcolor() {
	
$innofit_header_background_color = get_theme_mod('header_background_color','#21202e');
$innofit_footer_background_color = get_theme_mod('footer_background_color','#21202e');

?>
<style type="text/css">
.header-widget-info, .navbar-classic, .stiky-header{
	background: <?php echo esc_attr( $innofit_header_background_color);?>;
}
.site-footer{
	background: <?php echo esc_attr( $innofit_footer_background_color);?>;
}
</style>
<?php } 

if ( ! function_exists( 'innofit_posted_content' ) ) :
    function innofit_posted_content() { 
      $innofit_blog_content  = get_theme_mod('innofit_blog_content','excerpt');
      $innofit_excerpt_length  = get_theme_mod('innofit_blog_content_length',55);

      if ( 'excerpt' == $innofit_blog_content ){
      $innofit_excerpt = innofit_the_excerpt( absint( $innofit_excerpt_length ) );
      if ( !empty( $innofit_excerpt ) ) :                   
          echo wp_kses_post( wpautop( $innofit_excerpt ) );
           endif; 
      } else{ 
       the_content(); 
        }
 }
endif;

if ( ! function_exists( 'innofit_the_excerpt' ) ) :

    /**
     * Generate excerpt.
     *
     */
    function innofit_the_excerpt( $length = 0, $post_obj = null ) {

        global $post;

        if ( is_null( $post_obj ) ) {
            $post_obj = $post;
        }

        $length = absint( $length );

        if ( 0 === $length ) {
            return;
        }

        $source_content = $post_obj->post_content;

        if ( ! empty( $post_obj->post_excerpt ) ) {
            $source_content = $post_obj->post_excerpt;
        }

        $source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '&hellip;' );
        return $trimmed_content;

    }
endif;

if ( ! function_exists( 'innofitp_activate' ) ):
//Container Setting For Page
function innofit_container()
{
  $container_width= '';
return $container_width;
}

//Container Setting For Blog Post
function innofit_blog_post_container()
{
  $container_width= '';
return $container_width;
}

//Conainer Setting For Single Post

function innofit_single_post_container()
{
  $container_width= '';
return $container_width;
}
endif;

function innofit_blog_template_fn(){
	 $innofit_pages = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$innofit_args = array( 'post_type' => 'post','paged'=>$innofit_pages);
				$innofit_loop = new WP_Query( $innofit_args );
				if ( $innofit_loop->have_posts() ) :
					// Start the Loop.
					while ( $innofit_loop->have_posts() ) : $innofit_loop->the_post();
						// Include the post format-specific template for the content.
						get_template_part( 'content','');
					endwhile;

				if (  function_exists( 'innofitp_activate' ) ):
				// pagination function
					$innofit_obj = new innofit_pagination();
					$innofit_obj->innofit_page($innofit_loop);
				endif;

				endif;
				wp_reset_postdata();
			
}
add_action('innofit_blog_template_hook','innofit_blog_template_fn');

//innofit navigation 
function innofit_navigation_fn(){
	$innofit_home_page_slider_enabled = get_theme_mod('home_page_slider_enabled','on');
			if($innofit_home_page_slider_enabled !='on' || is_home())
			{?>
			<nav class="navbar navbar-custom navbar-fixed-top one-page innofit-boxed desktop-header" role="navigation">
			<?php } else { ?>
			<nav class="navbar navbar-custom <?php if(is_page_template('template-business.php')) { echo 'navbar-transparent'; } ?> navbar-fixed-top one-page innofit-boxed desktop-header" role="navigation">
			<?php } ?>
				<div class="container-fluid">
					<div class="row v-center">
					
						<div class="col-lg-2 col-md-3 col-xs-5">
							<?php the_custom_logo(); ?>
			<div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$innofit_description = get_bloginfo( 'description', 'display' );
				if ( $innofit_description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo esc_html($innofit_description); ?></p>
				<?php endif; ?>
			</div>
						</div>
						
						<div class="col-lg-8 col-md-6 col-xs-2">
							
								<?php 	
							    wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'        => 'nav navbar-nav navbar-right',
								'fallback_cb'       => 'innofit_fallback_page_menu',
								'walker'            => new Innofit_nav_walker())
								);
								?>	
									
						</div>
						
						<div class="col-lg-2 col-md-3 col-xs-5 text-right">						   
						   <div class="header-module">
						
						    <?php if(is_active_sidebar('menu_social_media_sidebar')): ?>
							
							<?php dynamic_sidebar( 'menu_social_media_sidebar' );  ?>
						
						    <?php endif; ?> 
						
					 	    <?php 
								 if ( class_exists( 'WooCommerce' ) ) {
									 
									$innofit_shop_button = '';
									$innofit_shop_button .= '<div class="cart-header">';
											global $woocommerce; 
											$innofit_cart_link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
											$innofit_shop_button .= '<a class="cart-icon" href="'.esc_url($innofit_cart_link).'" >';
											
											if ($woocommerce->cart->cart_contents_count == 0){
													$innofit_shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
												}
												else
												{
													$innofit_shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
												}
												   
												$innofit_shop_button .= '</a>';
												
												$innofit_shop_button .= '<a href="'.esc_url($innofit_cart_link).'" ><span class="cart-total">
												'.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'innofit'), $woocommerce->cart->cart_contents_count).'</span></a>';
													
													
												echo $innofit_shop_button;
										}
								?>
								
							</div>
						</div>
						
					</div>	
				</div>
			</nav>
			<!--/End of Custom Navbar For Desktop View-->
			
			
			<!--Custom Navbar For Mobile View-->
			<nav class="navbar navbar-custom navbar-fixed-top one-page mobile-header" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<?php the_custom_logo(); ?>
						<div class="site-branding-text">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							$innofit_description = get_bloginfo( 'description', 'display' );
							if ( $innofit_description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo esc_html($innofit_description); ?></p>
							<?php endif; ?>
						</div>
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
							<span class="sr-only"> <?php esc_html_e('Toggle navigation','innofit'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="custom-collapse">
					<?php 	
					   wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'innofit_fallback_page_menu',
						'walker'            => new Innofit_nav_walker())
					);
					?>
						<div class="header-module">
						
						    <?php if(is_active_sidebar('menu_social_media_sidebar')): ?>
							
							<?php dynamic_sidebar( 'menu_social_media_sidebar' );  ?>
						
						    <?php endif; ?> 
						
					 	    <?php 
								 if ( class_exists( 'WooCommerce' ) ) {
									 
									$innofit_shop_button = '';
									$innofit_shop_button .= '<div class="cart-header">';
											global $woocommerce; 
											$innofit_cart_link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
											$innofit_shop_button .= '<a class="cart-icon" href="'.esc_url($innofit_cart_link).'" >';
											
											if ($woocommerce->cart->cart_contents_count == 0){
													$innofit_shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
												}
												else
												{
													$innofit_shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
												}
												   
												$innofit_shop_button .= '</a>';
												
												$innofit_shop_button .= '<a href="'.esc_url($innofit_cart_link).'" ><span class="cart-total">
													'.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'innofit'), $woocommerce->cart->cart_contents_count).'</span></a>';
													
													
												echo $innofit_shop_button;
										}
								?>
								
							</div>
						</div>
				</div>
			</nav>
<?php					
}
add_action('innofit_navigation_hook','innofit_navigation_fn');