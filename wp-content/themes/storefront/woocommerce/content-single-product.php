<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2,6,1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>


<?php
echo "new changes";
?>
<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 // do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
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


<?php

global $product;

$image = get_the_post_thumbnail_url(get_the_ID());
?>
<section class="so-single-wrapper bg-light-gray">
        <div class="row so-single-product container">
            <div class="col-lg-4 so-product-slider">
                <div class="so-product-big-img" style="background-size:cover; background-position: center center;  background-image: url(<?php echo $image; ?>);">

                </div>
                <div class="so-image-slider">
				<?php
				$gallery = $product->get_gallery_image_ids();
					
				?>
                    <ul class="so-slide-thumbs">
					<?php
						  foreach( $gallery as $attachment_id ) {
							$image_link = wp_get_attachment_url( $attachment_id );
					?>
							<li style="background-image: url(<?php echo $image_link;?>);"></li>
					<?php
						}
					?>	
		
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 so-product-details">

                    <h2 class="so-product-single-title text-capitalize"><?php echo $product->get_title( );?></h2>
                    <p><?php echo $product->get_description();?></p>
                <div class="so-single-price-group">
                    <div class="so-product-single-price"><?php echo $product->get_price();?>&dollar;</div>
                    <div class="so-prod-volume">200ml</div>
                </div>

				<?php do_action( 'woocommerce_single_product_summary' ); ?>

<!--                 Descriptions of Benefits-->
                <div class="">
                    <h6 class="font-weight-bold text-uppercase">Benefaits</h6>
                    <ul class="pl-0 pl-lg-4">
                        <li v-for="n in 4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit
                        </li>
                        <li class="mt-4">
                            <small><u>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</u>
                            </small>
                        </li>
                    </ul>
                    <ul class="so-benefits-thumbs">
                        <li style="  background-image: url(https://www.danielehenkel.com/wp-content/uploads/2017/03/eclatDeRose_960x800-min-e1512434292570-600x499.png);"></li>
                        <li style="  background-image: url(https://www.danielehenkel.com/wp-content/uploads/2017/03/eclatDeRose_960x800-min-e1512434292570-600x499.png);"></li>
                        <li style="  background-image: url(https://www.danielehenkel.com/wp-content/uploads/2017/03/eclatDeRose_960x800-min-e1512434292570-600x499.png);"></li>
                    </ul>
                </div>
            </div>

        </div>
</section>
<!-- ingredients -->
<section class="so-ingredients-wrapper">
    <ul class="so-ingredients">
        <li>
            <div><img src="/wp-content/uploads/2018/05/plantbase.png" alt=""></div>
            <div>All Natural</div>
        </li>
        <li>
            <div><img src="/wp-content/uploads/2018/05/hydrating.png" alt=""></div>
            <div>Hydrating</div>
        </li>
        <li>
            <div> <img src="/wp-content/uploads/2018/05/night-day.png" alt=""></div>
            <div>Night & Day</div>
        </li>

        <li>
            <div> <img src="/wp-content/uploads/2018/05/lotion.png" alt=""></div>
            <div>All Natural</div>
        </li>
        <li>
            <div><img src="/wp-content/uploads/2018/05/organicseal.png" alt=""></div>
            <div>All Natural</div>
        </li>
        <li>
            <div><img src="/wp-content/uploads/2018/05/harmlesschemicals.png" alt=""></div>
            <div>All Natural</div>
        </li>
        <li>
            <div><img src="/wp-content/uploads/2018/05/lemon.png" alt=""></div>
            <div>All Natural</div>
        </li>
        <li>
            <div><img src="/wp-content/uploads/2018/05/rabbit.png" alt=""></div>
            <div>All Natural</div>
        </li>
        <li>
            <div><img src="/wp-content/uploads/2018/05/watertemp-1.png" alt=""></div>
            <div>All Natural</div>
        </li>
    </ul>
</section>


<section class="so-shop-menu-wrapper">
    <ul class="so-shop-menu">
        <li><a href="#">ROUTINE</a></li>
        <li><a href="#">ROUTINE</a></li>
        <li><a href="#">ROUTINE</a></li>
        <li><a href="#">ROUTINE</a></li>
        <li><a href="#">ROUTINE</a></li>
        <li><a href="#">ROUTINE</a></li>
    </ul>
</section>


<section class="so-single-sub-content-wrapper">
    <div class="so-shop-utilization">
        <div class="title px-3">
            <h3 class="so-single-section-title title__content font-weight-bold text-uppercase text-center bg-white px-4">
                UTILISATION
            </h3>
            <span class="title__line"></span>
        </div>

        <div class="container so-instruction-content">
            <div class="so-instruction">
                <img src="/wp-content/uploads/2018/05/plcexample.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
            </div>

            <div class="so-instruction">
                <img src="/wp-content/uploads/2018/05/plcexample.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
            </div>

            <div class="so-instruction">
                <img src="/wp-content/uploads/2018/05/plcexample.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
            </div>
        </div>

    </div>
</section>

<section class="so-single-sub-content-wrapper">
    <div class="so-shop-utilization">
        <div class="title px-3">
            <h3 class="so-single-section-title title__content font-weight-bold text-uppercase text-center bg-white px-4">
                INGREDIENTS VEDETTEt
            </h3>
            <span class="title__line"></span>
        </div>

        <div class="so-instruction-content">
            <div class="so-instruction">
                <img src="/wp-content/uploads/2018/05/witch-hazel-banner-1.png" width="160" height="150" alt="">
                <p></p>
            </div>

            <div class="so-instruction">
                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
            </div>

            <div class="so-instruction">
                <img src="/wp-content/uploads/2018/05/plcexample.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
            </div>
        </div>

    </div>
</section>


<section class="so-single-sub-content-wrapper">
    <div class="so-shop-utilization">
        <div class="title px-3">
            <h3 class="so-single-section-title title__content font-weight-bold text-uppercase text-center bg-white px-4">
                COMPLÉTER VOTRE ROUTINE
            </h3>
            <span class="title__line"></span>
        </div>

        <div class="container so-instruction-content">
            <div class="so-instruction">
                <img src="/wp-content/uploads/2018/05/witch-hazel-banner-1.png" width="160" height="150" alt="">
                <p></p>
            </div>

            <div class="so-instruction">
                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
            </div>

            <div class="so-instruction">
                <img src="/wp-content/uploads/2018/05/plcexample.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
            </div>
        </div>

    </div>
</section>

<section class="so-single-sub-content-wrapper">
    <div class="so-shop-utilization">
        <div class="title px-3">
            <h3 class="so-single-section-title title__content font-weight-bold text-uppercase text-center bg-white px-4">
                REVIEWS
            </h3>
            <span class="title__line"></span>
        </div>

        <div class=" container so-instruction-content">
		<?php
		$id = $product->id;
		$args = array ('post_type' => 'product', 'post_id' => $id);
		$comments = get_comments( $args );
		//get_comment_meta( $comment->comment_ID, 'rating', true ) ;
		foreach($comments as $comment) {
			$author_name = $comment->comment_author;
			//$rating = $comment->comment_ID;
			$rating = get_comment_meta( $comment->comment_ID, 'rating', true ) ;
			$num = (int)$rating;
			
		?>
		
            <div class="row so-product-review">
                <div class="so-rating">
                    <div class="stars">
					<?php
					for($i=1; $i<=$num; $i++) {
						echo '<i class="fas fa-star"></i>';
					}
					?>
					</div>
                    <div class="client-name"><?php echo $author_name; ?></div>
                </div>
                <div class="so-review-text">
                    <h3>Review Title</h3>
                    <p><?php echo $comment->comment_content;?></p>
                </div>

            </div>
		<?php	
			
		}

		?>

		
            <div class="row so-product-review">
                <div class="so-rating">
                    <div class="stars">****</div>
                    <div class="client-name">John Smith</div>
                </div>
                <div class="so-review-text">
                    <h3>Review Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
                </div>

            </div>
        </div>

    </div>
</section>



<?php
    global $product;
    if( count(wc_get_related_products($product->get_id())) >= 1 ) {
 ?>
<div class="row related-product">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            /**
                             * woocommerce_after_single_product_summary hook.
                             *
                             * @hooked woocommerce_output_product_data_tabs - 10
                             * @hooked woocommerce_upsell_display - 15
                             * @hooked woocommerce_output_related_products - 20
                             */
                             remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');
                             remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display');
                             remove_action('woocommerce_after_single_product_summary', 'comments_template', 50);


                             do_action( 'woocommerce_after_single_product_summary' );

                             // add_action( 'woocommerce_after_single_product_summary', 'comments_template', 50 );
                        ?>

                        <meta itemprop="url" content="<?php the_permalink(); ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    }
 ?>
<div class="row comments">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <?php
                            add_action( 'woocommerce_after_single_product', 'comments_template', 50 );
                            do_action( 'woocommerce_after_single_product' );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

