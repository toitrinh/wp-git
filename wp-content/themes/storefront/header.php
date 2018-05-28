<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="assets/node_modules/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/node_modules/rateyo/min/jquery.rateyo.min.css">
<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/main.css">
<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/font-awesome.css">
	
<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/jquery.rateyo.min.css">
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


<style>
    .so-single-wrapper {
        display: flex;
        padding-top: 62px;
        width: calc(30px + 100% + 30px) !important;
        left: -30px;
        position: relative;
        justify-content: center;
    }

    .so-product-big-img{
        width: 344px;
        height: 357px;
        background-color: #ffffff;
        border: 3px solid #eaeaea;
    }
    .so-slide-thumbs {
        display: flex;
        margin-top: 30px;
        padding: 0px;
        list-style: none;
        justify-content: space-between;
    }

    .so-benefits-thumbs {
        display: flex;
        margin-top: 30px;
        padding: 0px;
        list-style: none;
        justify-content: left;
    }

    .so-benefits-thumbs li {
        width: 107px;
        height: 111px;
        background-color: #ffffff;
        border: 3px solid #eaeaea;
        background-size: cover;
        background-position: center center;
        margin-right: -3px !important;
        background-repeat:no-repeat;
    }

    .so-product-details{

    }
    .so-slide-thumbs li{
        width: 107px;
        height: 111px;
        background-color: #ffffff;
        border: 3px solid #eaeaea;

        background-size:cover;
        background-position: center center;
        background-repeat: none;
    }

    .so-product-details {
        height: 357px;
        font-family: "Montserrat",sans-serif;
        padding-left: 40px;
    }

    .so-product-single-title {
        font-size: 32px;
        line-height: 10px;
        color: rgb(51,55,58);
        border-left: 0px;
        margin-top: 10px;
        padding-left: 0px;
    }



    .so-product-single-price{
        font-size: 24px;
        line-height: auto;
        color: rgb(51,55,58);
        font-family: "Montserrat", sans-serif;
    }

    .so-single-price-group{
        display:flex !important;
        justify-content: left;
    }

    .so-ingredients-wrapper{
        display:flex;

        background-color: #ffffff;
        justify-content:center;

        margin-bottom:18px;
    }

    .so-ingredients{
        display:flex;
        justify-items: stretch;
        justify-content:center;
        margin:0px;
        padding:0px;


    }
    .so-ingredients li{
        width: 140px;
       margin-top: 20px;
        list-style:none;

        padding: 0px;
        text-align: center;
        font-size: 13px;
        font-weight: 400;
        text-transform: uppercase;
    }

    .so-shop-menu-wrapper {
        min-height: 70px;
        align-items: center;
        display: flex;
        background-color: #e7e7e7;
        width: calc( 100% + 32px);
        left: -16px;
        position: relative;
        font-weight: 500;
        margin-bottom: 35px;
    }

    .so-review-text{
        text-align: left;
    }
    .title{margin-top: 30px;}
    .so-shop-menu {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        width: 100%;
        margin-top: 18px;
        font-weight: 500;
    }

    .so-shop-menu li{
        list-style: none;
    }

    .so-single-sub-content-wrapper{
        display: flex;
        justify-content: stretch center;

    }
    .fancy span {
        display: inline-block;
        position: relative;
    }
    .so-single-section-title{
        margin-bottom: 52px;
    }
    .so-shop-utilization {
        width: 100%;
        text-align: center;
    }
    .title__line {
        content: '';
        display: block;
        height: 1px;
        width: 100%;
        background-color: black;
        position: absolute;
        top: 18px;
        left: 0;
        right: 0;
        z-index: -1;
    }

    .so-instruction {
        max-width: 160px;
        margin-left: 60px;
        margin-right: 60px;
    }
    .so-instruction img{
        margin-bottom: 10px;
    }

    .so-instruction-content{
        display:flex;
        justify-content:center;
    }

    .so-product-review{
        display:flex;
        justify-content: left;
        min-height:160px;
        width: 100%;
    }
    .so-rating{
        min-width: 120px;
        padding-right: 60px;
    }
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' ); ?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
