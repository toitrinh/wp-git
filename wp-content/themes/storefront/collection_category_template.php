<?php /* Template Name: category collection */ ?>
<div id="app">
    <app-header></app-header>

    <div id="main-content">

        <div class="page-product-categories">
            <section>
                <div class="jumbotron mb-0">
                    <h1 class="text-white text-center text-uppercase">Placeholder Jumbotron</h1>
                </div>
            </section>

            <section class="">
                <div class="boxed pt-5 px-4 text-right">
                    <form action="" class="sort-products-form form-inline">
                        <div class="form-group ml-auto mr-auto text-center mr-xl-0">
                            <label for="">
                                <small>Showing 1-12 of 46 results</small>
                            </label>
                            <select name=""
                                    class="form-control rounded-0 ml-0 ml-sm-2 text-uppercase font-weight-bold">
                                <option value="">Sort by popularity</option>
                            </select>
                        </div>
                    </form>
                </div>
            </section>

            <section>
                <div class="boxed">
                    <div class="mt-lg-5">
                        <div v-for="n in 2" :class="{ 'collection-category__item--alternate': (n == 2) }"
                             class="collection-category__item text-center text-lg-left px-2 py-4">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="collection-category__item__left">
                                    <img class="collection-category__item__image"
                                         src="assets/imgs/image-placeholder.png" alt="">
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
                                                <i class="fa fa-check fa-2x"></i>
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

        </div>

    </div>

    <app-footer></app-footer>
</div>

