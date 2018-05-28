<?php /* Template Name: CustomPageT1 */ ?>

<p>this is the single collection page</p><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templates</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="assets/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/node_modules/rateyo/min/jquery.rateyo.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/main.css">
	<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/font-awesome.css">
	
	<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://localhost/working/wp-content/themes/storefront/assets/css/jquery.rateyo.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<style>
		.img-brand {
			margin-top: 15px;
			height: 50px;
		}
		
		
		.text-brand {
			text-transform: uppercase;
			color: white;
			display: block;
			margin-top: -62px;
		}
	</style>
</head>
<body>

<div id="app">
    <app-header></app-header>

    <div id="main-content">

        <div class="page-product-categories-single">

            <section class="">
                <div class="bg-light-gray">
                    <div class="boxed">
                        <div class="d-flex flex-column text-center flex-lg-row text-lg-left px-2 py-5">
                            <!--product slider-->
                            <div class="collection-slider mx-auto mx-lg-0">
                                <div class="collection-slider-slider-for">
                                    <div v-for="n in 3" class="collection-slider-slider-for__item"
                                         style="background-image: url(http://localhost/working/wp-content/uploads/2018/05/product_img-2.png)">
                                    </div>
                                </div>

                                <div class="collection-slider-slider-nav mt-3">
                                    <div class="collection-slider-slider-nav__item mx-2"
                                         style="background-image: url(http://localhost/working/wp-content/uploads/2018/05/product_img-2.png)">
                                    </div>
									
									
									<div class="collection-slider-slider-nav__item mx-2"
                                         style="background-image: url(http://localhost/working/wp-content/uploads/2018/05/product_img-2.png)">
                                    </div>
									
									
									<div class="collection-slider-slider-nav__item mx-2"
                                         style="background-image: url(http://localhost/working/wp-content/uploads/2018/05/product_img-2.png)">
                                    </div>
                                </div>
								
								
								
								
                            </div>

                            <!--product desc-->
                            <div class="my-4 mt-lg-0 ml-lg-4 ml-xl-5">
                                <div class="">
                                    <h2 class="text-capitalize">Collection duo</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <h4 class="">164&dollar;</h4>
                                </div>
                                <div class="">
                                    <form action="" class="">
                                        <div class="form-group mt-2 mb-2 d-lg-inline-block">
                                            <label for="">
                                                <small>Quantity</small>
                                            </label>
                                            <div class="input-group input-group--qty-group mx-auto ml-lg-0">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-dark input-group--qty-group__change"
                                                            type="button" data-change-type="minus">-
                                                    </button>
                                                </div>
                                                <input type="number"
                                                       class="form-control text-center font-weight-bold input-group--qty-group__input"
                                                       value="1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-dark input-group--qty-group__change"
                                                            type="button" data-change-type="plus">+
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark rounded-0 text-uppercase" type="submit"
                                                value="Add to cart">Add to cart
                                        </button>
                                    </form>
                                </div>
                                <div class="mt-4">
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
                                </div>

                                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4">
                                    <div v-for="n in 3"
                                         class="collection-category__item__icon border-white border bg-light-gray d-flex flex-column justify-content-center align-items-center">
                                        <img src="http://localhost/working/wp-content/uploads/2018/05/all_kind.png" />
                                        <span class="d-block text-uppercase"><small>All skin types</small></span>
                                    </div>
									
									<div v-for="n in 3"
                                         class="collection-category__item__icon border-white border bg-light-gray d-flex flex-column justify-content-center align-items-center">
                                        <img src="http://localhost/working/wp-content/uploads/2018/05/day_and_night.png"/>
                                        <span class="d-block text-uppercase"><small>Day & Night</small></span>
                                    </div>
									
									
									<div v-for="n in 3"
                                         class="collection-category__item__icon border-white border bg-light-gray d-flex flex-column justify-content-center align-items-center">
                                        
										<img src="http://localhost/working/wp-content/uploads/2018/05/all_kind.png"/>
                                        <span class="d-block text-uppercase"><small>Cleaning</small></span>
                                    </div>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


			
			
			
			<section style="height:151px; background-color: 89898d; line-height: 200px;">
				
				<div class="col-sm-2 text-align">
					<img src="http://localhost/working/wp-content/uploads/2018/05/rubbish.png" class="img-brand" />
					<span class="text-brand">Non testés sur les animaux </span>
				</div>
				
				
				<div class="col-sm-2 text-align">
					<img src="http://localhost/working/wp-content/uploads/2018/05/2.png" class="img-brand"/>
					<span class="text-brand">Vitamine C </span>
				</div>
				
				
				<div class="col-sm-2 text-align">
					<img src="http://localhost/working/wp-content/uploads/2018/05/3.png" class="img-brand" />
					<span class="text-brand">À base de plantes </span>
				</div>
				
				
				<div class="col-sm-2 text-align">
					<img src="http://localhost/working/wp-content/uploads/2018/05/4.png" class="img-brand" />
					<span class="text-brand">100% naturel </span>
				</div>
				
				
				<div class="col-sm-2 text-align">					
					<img src="http://localhost/working/wp-content/uploads/2018/05/5.png" class="img-brand" />
					<span class="text-brand">Aucun produit chimique </span>
				</div>
				
				
				<div class="col-sm-2 text-align">
					<img src="http://localhost/working/wp-content/uploads/2018/05/6.png" class="img-brand" />
					<span class="text-brand">Non-comédogène </span>
				</div>
			
			</section>
            <!---->
            <section class="">
                <div class="boxed row">
                    <div v-for="n in 6" class="col">
                        <div class="text-center px-2 py-4">
                            <i class="fa fa-check fa-2x"></i>
                            <span class="d-block text-uppercase">
                                <small>Lorem ipsum dolor sit amet consectetur.</small>
                            </span>
                        </div>
                    </div>
                </div>
            </section>


            <!---->
            <section class="">
                <div class="bg-light-gray">
                    <div class="boxed row">
                        <div v-for="n in 3" class="col py-4">
                            <span class="d-block text-uppercase text-center font-weight-bold">lorem ipsum</span>
                        </div>
                    </div>
                </div>
            </section>


            <!---->
            <section>
                <div class="">
                    <div class="boxed pt-5">
                        <div class="title px-3">
                            <h4 class="title__content text-uppercase text-center bg-white px-4">
                                Includes dans ce kit
                            </h4>
                            <span class="title__line"></span>
                        </div>
                    </div>

                    <div class="boxed boxed--lg">
                        <div class="mt-5">
                            <div class="product-section__row d-flex justify-content-around flex-wrap mb-5">
                                <div v-for="n in 2"
                                     class="product-section__row__item d-flex flex-column justify-content-center py-2 px-3 mb-3">
                                    <div class="">
                                        <div class="product-section__row__item__image text-center">
                                            <img src="https://goo.gl/Mf68vm" height="150" alt="">
                                        </div>
                                        <div class="product-section__row__item__desc px-3 mt-3">
                                            <span class="d-block font-weight-bold">Lorem ipsum dolor</span>
                                            <span class="d-block"><small>Lorem ipsum dolor</small></span>
                                            <span class="d-block"><small>Lorem ipsum dolor</small></span>
                                        </div>
                                        <div class="mt-3">
                                            <button class="text-uppercase btn btn-outline-dark btn-block rounded-0">
                                                Lorem ipsum
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!---->
            <section>
                <div class="boxed mt-lg-5">
                    <div class="title px-3">
                        <h3 class="title__content font-weight-bold text-uppercase text-center bg-white px-4">
                            Collections complimentaires
                        </h3>
                        <span class="title__line"></span>
                    </div>
                    <div class="mt-3 mt-lg-5">
                        <div v-for="n in 2" :class="{ 'collection-category__item--alternate': (n == 2) }"
                             class="collection-category__item text-center text-lg-left px-2 py-4">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="collection-category__item__left">
                                    <img class="collection-category__item__image"
                                         src="http://localhost/working/wp-content/uploads/2018/05/product_img-2.png" alt="">
                                </div>
                                <div class="collection-category__item__right mt-3 mt-lg-0 ml-lg-4 ml-xl-5">
                                    <div class="">
                                        <h3 class="text-uppercase font-weight-bold">Collection Duo</h3>
                                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At
                                            deleniti ex,
                                            iure
                                            placeat quidem quo quos. Accusamus assumenda consequatur distinctio.</p>
                                    </div>
                                    <div class="d-flex flex-column flex-md-row justify-content-md-between text-md-left my-4">
                                        <div class="border-left-red px-2">
                                            <h6 class="text-uppercase">Lait nettoyant</h6>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                                        </div>
                                        <div class="my-2 mx-md-4">
                                            <i class="fa fa-plus-circle color-light-gray fa-2x"></i>
                                        </div>
                                        <div class="border-left-red px-2">
                                            <h6 class="text-uppercase">Lait nettoyant</h6>
                                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mt-4 flex-xl-row justify-content-xl-between">
                                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                                            <div v-for="n in 3"
                                                 class="collection-category__item__icon border-white border bg-light-gray d-flex flex-column justify-content-center align-items-center">
                                                <i class="fa fa-check fa-3x"></i>
                                                <span class="d-block text-uppercase"><small>All skin types</small></span>
                                            </div>
                                        </div>
                                        <div class="collection-category__item__actions mt-4 mt-xl-0 text-xl-right">
                                            <h3>78.00&dollar;</h3>
                                            <button class="btn btn-outline-dark text-uppercase rounded-0">Learn more
                                            </button>
                                            <button class="btn btn-dark text-uppercase rounded-0 mt-xl-2">Learn
                                                more
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--reviews-->
            <section>
                <div class="boxed my-5">
                    <div class="title px-3">
                        <h3 class="title__content font-weight-bold text-uppercase text-center bg-white px-4">
                            Reviews
                        </h3>
                        <span class="title__line"></span>
                    </div>
                    <div class="mt-4 mb-5">
                        <span class="d-block text-center">Be the first one to leave a review.</span>
                    </div>

                    <div class="">
                        <form action="">
                            <div class="row px-2">
                                <div class="col-12 text-center text-md-right mb-2">
                                    <span class="d-inline-block">Your rating</span>
                                    <span class="star-rating d-inline-block" data-input-name="name_of_input"></span>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text"
                                               class="form-control text-uppercase font-weight-bold rounded-0"
                                               placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email"
                                               class="form-control text-uppercase font-weight-bold rounded-0"
                                               placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="" class="form-control font-weight-bold rounded-0" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center col-md-6 text-md-left">
                                    <span><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consectetur corporis.</small></span>
                                </div>
                                <div class="col-12 text-center col-md-6 text-md-right">
                                    <button class="btn btn-dark rounded-0 text-uppercase mt-2">Submit review</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <app-footer></app-footer>
</div>


<script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/node_modules/slick-carousel/slick/slick.min.js"></script>
<script src="assets/node_modules/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<script src="assets/node_modules/rateyo/min/jquery.rateyo.min.js"></script>
<script src="assets/node_modules/vue/dist/vue.min.js"></script>
<script src="assets/js/components/header.js"></script>
<script src="assets/js/components/footer.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>