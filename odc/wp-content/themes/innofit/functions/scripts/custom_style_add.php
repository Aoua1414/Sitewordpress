<?php
function innofit_typography_fn(){
    $enable_custom_typography = get_theme_mod('enable_custom_typography',false);
    $enable_header_typography = get_theme_mod('enable_header_typography', false);
    $enable_post_typography = get_theme_mod('enable_post_typography', false);
    $enable_content_typography = get_theme_mod('enable_content_typography', false);
    $enable_shop_page_typography = get_theme_mod('enable_shop_page_typography', false);
    $enable_widget_content_typography= get_theme_mod('enable_widget_content_typography', false);
    if($enable_custom_typography == true)
    {
    ?>
    <style>
    p:not(.site-description)
    {
    	font-size:<?php echo intval(get_theme_mod('general_typography_fontsize','13')).'px'; ?> !important;
    	font-family:<?php echo esc_attr(get_theme_mod('general_typography_fontfamily','Dosis')); ?> !important;
    	line-height: <?php echo intval(get_theme_mod('general_typography_line_height','23')).'px'; ?> !important;

    }

    .navbar .nav > li > a{
    	font-size:<?php echo intval(get_theme_mod('menu_title_fontsize','18')).'px'; ?> !important;
    	font-family:<?php echo esc_attr(get_theme_mod('menu_title_fontfamily','Dosis')); ?> !important;
    	line-height: <?php echo intval(get_theme_mod('general_typography_line_height','28')).'px'; ?> !important;

    }
    .dropdown-menu .dropdown-item,.dropdown-menu>li>a{
                font-size:<?php echo intval(get_theme_mod('submenu_title_fontsize', '15')) . 'px'; ?> !important;
                font-family:<?php echo esc_attr(get_theme_mod('submenu_title_fontfamily', 'Dosis')); ?> !important;
                line-height: <?php echo intval(get_theme_mod('submenu_title_line_height','25')).'px'; ?> !important;

    }

    .section-header .section-title {
    	font-size:<?php echo intval(get_theme_mod('section_title_fontsize','48')).'px'; ?> !important;
    	font-family:<?php echo esc_attr(get_theme_mod('section_title_fontfamily','Dosis')); ?> !important;
    	line-height: <?php echo intval(get_theme_mod('section_title_line_height','58')).'px'; ?> !important;

    }

    .section-header .section-subtitle{
    	font-size:<?php echo intval(get_theme_mod('section_description_fontsize','18')).'px'; ?> !important;
    	font-family:<?php echo esc_attr(get_theme_mod('section_description_fontfamily','Dosis')); ?> !important;
    	line-height: <?php echo intval(get_theme_mod('section_description_line_height','28')).'px'; ?> !important;

    }

    .widget .widget-title, body .widget.widget_block .wp-block-search .wp-block-search__label, body .widget.widget_block h1, body  .widget.widget_block h2, body .widget.widget_block h3, body  .widget.widget_block h4, body .widget.widget_block h5, body .widget.widget_block h6, body .widget.widget_block .wc-block-product-search__label  {
    	font-size:<?php echo intval(get_theme_mod('widgets_title_fontsize','24')).'px'; ?> !important;
    	font-family:<?php echo esc_attr(get_theme_mod('widgets_title_fontfamily','Dosis')); ?> !important;
    	line-height: <?php echo intval(get_theme_mod('widgets_title_line_height','34')).'px'; ?> !important;

    }
    <?php if($enable_widget_content_typography == true) {?>
    .footer-sidebar .widget_recent_entries a, .footer-sidebar a:not(.site-info a, body .widget.widget_block .wp-block-social-links .wp-social-link a), .footer-sidebar .textwidget p,.sidebar .widget_recent_entries a, .sidebar a:not(body .sidebar .widget.widget_block .wp-block-social-links .wp-social-link a), .sidebar p, .widget .wp-block-latest-posts__post-excerpt, .widget.widget_block p {
        font-size:<?php echo intval(get_theme_mod('widgets_content_fontsize','16')).'px'; ?> !important;
        font-family:<?php echo esc_attr(get_theme_mod('widgets_content_fontfamily','Dosis')); ?> !important;
        line-height: <?php echo intval(get_theme_mod('widgets_content_line_height','26')).'px'; ?> !important;

    }
    <?php } ?>
    /* Site title and tagline */
    <?php if($enable_header_typography == true) {?>
            .site-title {
                font-size:<?php echo intval(get_theme_mod('site_title_fontsize', '36')) . 'px'; ?> !important;
                font-family:<?php echo esc_attr(get_theme_mod('site_title_fontfamily', 'Open Sans')); ?> !important;
                line-height: <?php echo intval(get_theme_mod('site_title_line_height','46')).'px'; ?> !important;

            }

            .site-description {
                font-size:<?php echo intval(get_theme_mod('site_tagline_fontsize', '20')) . 'px'; ?> !important;
                font-family:<?php echo esc_attr(get_theme_mod('site_tagline_fontfamily', 'Open Sans')); ?> !important;
                line-height: <?php echo intval(get_theme_mod('site_tagline_line_height','30')).'px'; ?> !important;

            }
    <?php } ?>

    /* Content */
    <?php if ($enable_content_typography == true) {?>

        /* Heading H1 */
        body:not(.woocommerce-page) .entry-content h1,body:not(.woocommerce-page) h1:not(.site-title,.main-slider .title,.section-title) {
            font-size:<?php echo intval(get_theme_mod('h1_typography_fontsize', '36')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h1_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('h1_typography_line_height','46')).'px'; ?> !important;

        }

        /* Heading H2 */
        body:not(.woocommerce-page) .entry-content h2, .section-module h2{
            font-size:<?php echo intval(get_theme_mod('h2_typography_fontsize', '30')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h2_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('h2_typography_line_height','40')).'px'; ?> !important;

        }

        /* Heading H3 */
        body:not(.woocommerce-page) .entry-content h3, .related-posts h3, .contact h3, .comment-form .comment-respond h3, .home-blog .entry-header h3.entry-title a {
            font-size:<?php echo intval(get_theme_mod('h3_typography_fontsize', '24')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h3_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('h3_typography_line_height','34')).'px'; ?> !important;

        }
        .comment-title h3{
            font-size:<?php echo intval(get_theme_mod('h3_typography_fontsize', '24')) + 4 . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h3_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('h3_typography_line_height','34')).'px'; ?> !important;

        }

        /* Heading H4 */
         .entry-header h4 a, h4:not(.footer-sidebar h4.widget-title), body:not(.woocommerce-page) h4 {

            font-size:<?php echo intval(get_theme_mod('h4_typography_fontsize', '20')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h4_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('h4_typography_line_height','30')).'px'; ?> !important;

        }

        /* Heading H5 */
        .entry-header h5,body h5:not(.page .footer-sidebar h5,.woocommerce-page h5,.widget .widget-title) {
            font-size:<?php echo intval(get_theme_mod('h5_typography_fontsize', '20')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h5_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('h5_typography_line_height','30')).'px'; ?> !important;

        }

        /* Heading H6 */
        .entry-content h6, .contact h6, body:not(.woocommerce-page) h6 {
            font-size:<?php echo intval(get_theme_mod('h6_typography_fontsize', '14')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('h6_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('h6_typography_line_height','24')).'px'; ?> !important;

        }
        /* Button Text */
        .btn-combo a, .mx-auto a, .pt-3 a, .wpcf7-form .wpcf7-submit,  .woocommerce .button, .btn-default, .btn-light, .sidebar .woocommerce button[type="submit"], .site-footer .woocommerce button[type="submit"], .widget .search-submit, #commentform input[type="submit"], .woocommerce .added_to_cart,.ptop-15 .btn-ex-small,.btn-small,.wp-block-button__link,.more-link,.btn-ex-small, .comment-reply-link, .widget .wp-block-search__button {
            font-size:<?php echo intval(get_theme_mod('button_text_typography_fontsize', '15')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('button_text_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('button_line_height','25')).'px'; ?>;
        }
<?php }?>

/* Blog / Archive / Single Post */
<?php if ($enable_post_typography == true) {?>
        .entry-header h2 a, .entry-header h3.entry-title a:not(.home-blog-title), .entry-header h3.entry-title:not(.home-blog-title){
            font-size:<?php echo intval(get_theme_mod('post-title_fontsize', '36')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('post-title_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('post-title_line_height','46')).'px'; ?> !important;

        }
    <?php } ?>

/* Shop Page */
<?php if ($enable_shop_page_typography == true) {?>
        /* Heading H1 */
         .woocommerce div.product .product_title{
            font-size:<?php echo intval(get_theme_mod('shop_h1_typography_fontsize','36')).'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('shop_h1_typography_fontfamily','Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('shop_h1_typography_line_height','46')).'px'; ?> !important;
        }

    	/* Heading H2 */
        .woocommerce .products h2, .woocommerce .cart_totals h2, .woocommerce-Tabs-panel h2, .woocommerce .cross-sells h2, .woocommerce div.product h2.product_title{
            font-size:<?php echo intval(get_theme_mod('shop_h2_typography_fontsize', '18')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('shop_h2_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('shop_h2_typography_line_height','28')).'px'; ?> !important;

        }

        /* Heading H3 */
        .woocommerce .checkout h3 {
            font-size:<?php echo intval(get_theme_mod('shop_h3_typography_fontsize', '24')) . 'px'; ?> !important;
            font-family:<?php echo esc_attr(get_theme_mod('shop_h3_typography_fontfamily', 'Open Sans')); ?> !important;
            line-height: <?php echo intval(get_theme_mod('shop_h3_typography_line_height','34')).'px'; ?> !important;

        }
    </style>
    <?php }
   }
}
add_action('wp_head','innofit_typography_fn');

// -----------------Colors & Background----------------------
function innofit_colors_background_fn(){
$footer_widget_title_color = get_theme_mod('footer_title_color','#fbf9f7');
$footer_widget_text_color = get_theme_mod('footer_text_color','#adbbcb');
$footer_widget_link_color = get_theme_mod('footer_link_color','#adbbcb');
$footer_widget_link_hover_color = get_theme_mod('footer_link_hover_color','#2a83e8');?>
<style type="text/css">
    <?php if (get_theme_mod('header_clr_enable', false) == true) : ?>

        /* Site Title & Tagline */
        body .site-branding-text h1.site-title > a{
            color: <?php echo esc_attr(get_theme_mod('site_title_link_color', '#fff')); ?>;
        }
        .site-branding-text h1.site-title > a:hover{
            color: <?php echo esc_attr(get_theme_mod('site_title_link_hover_color', '#2a83e8')); ?>;
        }
        .site-branding-text p.site-description{
            color: <?php echo esc_attr(get_theme_mod('site_tagline_text_color', '#ffffff')); ?> ;
        }
    <?php endif; ?>

    /* Primary Menu */
    <?php if (get_theme_mod('apply_menu_clr_enable', false) == true) : ?>
        .navbar-custom .nav li.menu-item > a,.navbar-custom  .content-center .nav li.menu-item > a {
            color: <?php echo esc_attr(get_theme_mod('menus_link_color', '#fff')); ?>;
        }
        .navbar-custom .nav li.menu-item > a:hover{
            color: <?php echo esc_attr(get_theme_mod('menus_link_hover_color', '#fff')); ?>;
        }

        /* Submenus */
        .navbar-custom .nav ul.dropdown-menu {
            background-color: <?php echo esc_attr(get_theme_mod('submenus_background_color', 'rgba(7, 15, 25, 0.9)')); ?>;
        }
        .navbar-custom .nav ul.dropdown-menu > li > a {
            color: <?php echo esc_attr(get_theme_mod('submenus_link_color', '#dbdbdb')); ?>!important;
        }
        .navbar-custom .nav ul.dropdown-menu > li > a:hover {
            color: <?php echo esc_attr(get_theme_mod('submenus_link_hover_color', '#dpdpdp')); ?>!important;
        }

    <?php endif; ?>

    /* Banner */
    .page-title h1{
        color: <?php echo esc_attr(get_theme_mod('banner_text_color', '#fff')); ?>!important;
    }

    /* Breadcrumb */
    <?php if (get_theme_mod('enable_brd_link_clr_setting', false) == true):?>
        .page-breadcrumb.text-center span, .page-breadcrumb.text-center span a,.page-breadcrumb.text-center li,.page-breadcrumb.text-center li a,.page-breadcrumb > li + li:before,.woocommerce .woocommerce-breadcrumb a {
            color: <?php echo esc_attr(get_theme_mod('breadcrumb_title_link_color', '#ffffff')); ?> !important;
        }
        .page-breadcrumb.text-center li a:hover,.woocommerce .woocommerce-breadcrumb a:hover {
            color: <?php echo esc_attr(get_theme_mod('breadcrumb_title_link_hover_color', '#2a83e8')); ?> !important;
        }
    <?php endif; ?>

    /* Content */
    body h1:not(.section-header h1.section-title,.main-slider .slider-caption .title, .footer-sidebar .widget.widget_block h1),.pricing-plans h1.price {
        color: <?php echo esc_attr(get_theme_mod('h1_color', '#333')); ?> ;
    }
    body .section-header h2, body h2{
        color: <?php echo esc_attr(get_theme_mod('h2_color', '#333')); ?>;
    }
    body h3,.home-blog h3 a{
        color: <?php echo esc_attr(get_theme_mod('h3_color', '#333')); ?>;
    }
    body .entry-header h4 > a:not(.single-post .entry-header .entry-title > a), body h4 {
        color: <?php echo esc_attr(get_theme_mod('h4_color', '#333')); ?>;
    }
    body .blog-author h5, body .comment-detail h5, body h5:not(.widget-title), body .section-module.services .entry-title > a {
        color: <?php echo esc_attr(get_theme_mod('h5_color', '#333')); ?>;
    }

    body .product-price h5 > a, .page-template-template-business h5.woocommerce-loop-product__title a{
        color: <?php echo esc_attr(get_theme_mod('h5_color', '#333')); ?>;
    }

    body h6 {
        color: <?php echo esc_attr(get_theme_mod('h6_color', '#333')); ?>;
    }
    p:not(.woocommerce-mini-cart__total,.sidebar .textwidget p,.site-description,.site-info .site-info p,.funfact p,.section-module.portfolio p,.footer-sidebar p,.testimonial p,.section-header p.section-subtitle){
        color: <?php echo esc_attr(get_theme_mod('p_color', '#393939')); ?>;
    }

    /* Sidebar */
    <?php if (get_theme_mod('apply_sibar_link_hover_clr_enable', false) == true): ?>
        body .sidebar .widget .widget-title, body .sidebar .wp-block-search .wp-block-search__label, body .sidebar .widget.widget_block h1, body .sidebar .widget.widget_block h2, body .sidebar .widget.widget_block h3, body .sidebar .widget.widget_block h4, body .sidebar .widget.widget_block h5, body .sidebar .widget.widget_block h6, body .sidebar .wc-block-product-search__label {
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_title_color', '#1c314c')); ?>;
        }
        body .sidebar p, .sidebar .widget .wp-block-latest-posts__post-excerpt, body .sidebar .wpcf7-form p label {
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_text_color', '#777777')); ?>!important;
        }
        body .sidebar a {
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_link_color', '#333333 ')); ?> !important;
        }
        body .sidebar.s-l-space .sidebar a:hover, body .sidebar .widget a:hover, body .sidebar .widget a:focus, .sidebar .widget .post .entry-title a:hover {
            color: <?php echo esc_attr(get_theme_mod('sidebar_widget_link_hover_color', '#2a83e8')); ?> !important;
        }
    <?php endif; ?>
    /*body .page-title-section{
         height: auto;
     }*/
     .footer-sidebar .widget .widget-title, .footer-sidebar .wp-block-search .wp-block-search__label, .footer-sidebar .widget.widget_block h1, .footer-sidebar .widget.widget_block h2, .footer-sidebar .widget.widget_block h3, .footer-sidebar .widget.widget_block h4, .footer-sidebar .widget.widget_block h5, .footer-sidebar .widget.widget_block h6 { color: <?php echo esc_attr($footer_widget_title_color); ?> }


    .footer-sidebar .widget .post .entry-content p,
    .footer-sidebar .widget, .footer-sidebar .widget p,
    .footer-sidebar .widget #wp-calendar td,
    .footer-sidebar .widget td,
    .footer-sidebar .widget #wp-calendar caption,
    .footer-sidebar .widget #wp-calendar th,
    .footer-sidebar .widget #wp-calendar a,
    .footer-sidebar .widget th,
    .footer-sidebar .widget ul > li,
    .footer-sidebar .widget .wp-caption .wp-caption-text,
    body .footer-sidebar .widget .wpcf7 p label
    {
        color: <?php echo esc_attr($footer_widget_text_color); ?>
    }


    .footer-sidebar .widget .post .entry-title a,
    .footer-sidebar .widget a,.footer-sidebar .widget_pages a
    {
        color: <?php echo esc_attr($footer_widget_link_color); ?>
    }

    <?php if (get_theme_mod('apply_footer_link_hover_enable', false) == true): ?>
    .footer-sidebar .widget a:hover,
    .footer-sidebar .widget a:focus,
    .footer-sidebar .widget .post .entry-title a:hover,
    .footer-sidebar .widget .post .entry-title a:focus
    body .widget.widget_block li a:hover, body .widget.widget_block li a:focus, body .footer-sidebar .widget.widget_block p a:hover, .footer-sidebar .widget.widget_block .wp-block-social-links .wp-social-link a:hover
    {
        color: <?php echo esc_attr($footer_widget_link_hover_color); ?> !important;
    }
    <?php endif; ?>


    @media (max-width: 1100px) {
    .desktop-header { display: none !important; }
    .mobile-header { display: block !important; }
    .navbar-custom .container-fluid {  padding: 0 50px; }
    .navbar-custom { background-color: rgba(0, 20, 42, 1); }
    .navbar-header { float: none; }
    .navbar-custom .navbar-brand { padding-top: 10px; padding-bottom: 10px; }
    .navbar-toggle { display: block; margin-top: 20px; margin-bottom: 20px; margin-right: 0; padding-right: 0; }
    .navbar-toggle:hover, .navbar-toggle:focus { background: transparent; }
    .navbar-toggle .icon-bar { width: 30px; height: 1px; }
    .navbar-toggle .icon-bar + .icon-bar { margin-top: 8px; }
    /*Collapsing*/
    .navbar-fixed-top .navbar-collapse { max-height: none; }
    .navbar-collapse { border-top: 1px solid transparent; box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1); }
    .navbar-collapse.collapse { display: none !important; }
    .navbar-custom .navbar-nav {
        margin: 0px;
        display: block;
        float: none !important;
        /*When we add more menu then use below css*/
        max-height: 300px; overflow-x: hidden;
    }
    .navbar-custom .navbar-nav > li { float: none; }
    .navbar-collapse.collapse.in { display: block !important; }
    .collapsing { overflow: hidden!important; }
    .navbar-collapse, .navbar-collapse.collapse.in { background-color: #00142b; padding-right: 0px; padding-left: 0px; }
    /*Menu*/
    .navbar-custom li > a {
        margin-left: 0rem !important;
        margin-right: 0rem !important;
        margin-top: 15px !important;
        margin-bottom: 15px !important;
    }
    .navbar-custom.navbar-transparent li > a {
        margin-left: 1.500rem !important;
        margin-right: 1.500rem !important;
    }
    .navbar-custom .nav li.active a:before,
    .navbar-custom .nav li a:hover:before {
        display: none;
    }
    /*Dropdown Menu*/
    .navbar-custom .navbar-nav .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        white-space: nowrap;
    }
    .navbar-custom .navbar-nav .dropdown-menu > li > a:hover,
    .navbar-custom .navbar-nav .dropdown-menu > li > a:focus    {
        color: #fff;
    }
    .navbar-custom .navbar-nav .open .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
        line-height: 20px;
    }
    .navbar-custom .navbar-nav .open .dropdown-menu .dropdown-header,
    .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
        padding: 12px 0px;
        margin-bottom: 0px !important;
        margin-top: 0px !important;
    }
    .navbar-custom .dropdown-search {
        border-bottom: 1px solid rgba(73, 71, 71, 0.30) !important;
    }
    /*Header Module*/
    .navbar-custom.navbar-transparent .header-module {
        margin-left: 1.500rem !important;
        margin-right: 1.500rem !important;
    }
    .header-module { margin-left: 0rem; margin-right: 0rem; margin-top: 0rem; }
    .site-branding-text { float: left; padding: 20px 15px; }
}
.page-title-section .overlay {
    background-color: rgba(0, 0, 0, 0.7);
}
    </style>
      <?php
    }
add_action('wp_footer','innofit_colors_background_fn');
