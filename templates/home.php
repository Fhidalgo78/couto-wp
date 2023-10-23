<?php
/* Template Name: Casa */
get_header();
?>
<section>

    <!-- carrusel pantallas pequeñas- medianas -->

    <div class="small-carousel">
        <div class="owl-carousel-one owl-carousel owl-theme" id="banner-carousel">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-home.png"
                    alt="Girl with skincare" class="">
            </div>
            <div class>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-home.png"
                    alt="Girl with skincare" class="">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-home.png"
                    alt="Girl with skincare" class="">
            </div>

        </div>

    </div>

    <!-- carrusel pantallas grandes -->
    <div class="desktop-carousel">
        <div class="owl-carousel-one owl-carousel owl-theme" id="banner-carousel">

            <section class="desktop-image-wrapper"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-homeLG.png">
                <div class="banner-text">
                    <h4>Lorem ipsum</h4>
                    <h3>Flash sale active</h3>
                </div>
            </section>

            <section class="desktop-image-wrapper"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-homeLG.png">
                <div class="banner-text">
                    <h4>Lorem ipsum</h4>
                    <h3>Flash sale active</h3>
                </div>
            </section>

            <section class="desktop-image-wrapper"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-homeLG.png">
                <div class="banner-text">
                    <h4>Lorem ipsum</h4>
                    <h3>Flash sale active</h3>
                </div>
            </section>


        </div>
    </div>



    <!-- productos pantallas pequeñas y medianas -->
    <div class="container mt-3" id="categories-small">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-skincare.png) ">
                    <h4 class="white-text">SKINCARE</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-sun-protection.png)">
                    <h4 class="white-text">sun protection</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-hair.png)">
                    <h4 class="white-text">Hair</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-makeup.png)">
                    <h4 class="white-text">Makeup</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>


        </div>

        <div class="row justify-content-center">
            <button class="black-backgound simple-button">All categories</button>
        </div>
    </div>

    <!-- productos pantallas grandes y extra grandes -->

    <div class="container mt-5" id="categories-desktop">
        <div class="owl-carousel-two owl-carousel owl-theme" id="desk-carousel">
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-skincare.png) ">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-sun-protection.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-hair.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-makeup.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cart-makeup.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row justify-content-center mb-2">
            <h3>
                All our brands
            </h3>
        </div>
    </div>

    <!-- marcas pantallas pequeñas-->
    <div class="container mt-3" id="brands-small">
        <div class="row">
            <div class="col-6 col-md-3">
                <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-alastin.png) ">
                    <h4 class="white-text">Alastin</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-avene.png)">
                    <h4 class="white-text">Avène</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-color.png)">
                    <h4 class="white-text">colorescience</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                <div class="contenedor"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-glytone.png)">
                    <h4 class="white-text">Glytone</h4>
                    <button class="black-backgound simple-button">View products</button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <button class="black-backgound simple-button">All categories</button>
        </div>
    </div>


    <!-- marcas pantallas grandes y extra grandes -->
    <div class="container mt-3" id="brands-desktop">
        <div class="owl-carousel-two owl-carousel owl-theme" id="desk-carousel">
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-alastin.png) ">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-avene.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-color.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-glytone.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
            <div class="contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-avene.png)">
                <h4 class="white-text">Makeup</h4>
                <button class="black-backgound simple-button">View products</button>
            </div>
        </div>
    </div>

    <div class="container-fluid flash-sale-wrapper">
        <div class="row">

            <div class="flash-sale-contenedor"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner-flash-sale.png)">
                <h3> FLASH SALE </h3>
                <div class="countdown-wrapper">
                    <div class="flash-sale-margins black-backgound">
                        05
                    </div>
                    <div class="two-points-wrapper">
                        :
                    </div>
                    <div class="flash-sale-margins black-backgound">
                        15
                    </div>
                    <div class="two-points-wrapper">
                        :
                    </div>
                    <div class="flash-sale-margins black-backgound">
                        55
                    </div>
                </div>
                <div class="countdown-wrapper">
                    <div class="flash-sale-margins ">
                        hrs
                    </div>
                    <div class="invisible-text two-points-wrapper">
                        :
                    </div>
                    <div class="flash-sale-margins">
                        mins
                    </div>
                    <div class="invisible-text two-points-wrapper">
                        :
                    </div>
                    <div class="flash-sale-margins">
                        s
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- sales para pantallas pequeñas y medianas -->
    <div class="container-fluid small-sales-wrapper">
        <div class="row gray-bg">
            <!-- <div class="col-12"> -->
            <div class="container " id="brands-div">
                <div class="row justify-content-center mb-2">
                    <h3 class="mt-3">
                        SALE
                    </h3>
                </div>

                <div class="row">
                    <div class="col-6 col-md-3">
                        <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                        <div class="product-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale1.png"
                                alt="product1" class="image-prod">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png"
                                alt="carrito" class="carrito-image">
                            <div class="sale-text-wrapper">
                                <h5>
                                    LOREM IPSUM
                                </h5>

                                <p>LOREM IPSUM LOREM IPSUM</p>

                                <div class="price-wrapper">
                                    <p>$28.80</p>
                                    <p>$36.00</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-6 col-md-3">
                        <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                        <div class="product-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale2.png"
                                alt="product2" class="image-prod">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png"
                                alt="carrito" class="carrito-image">
                            <div class="sale-text-wrapper">
                                <h5>
                                    LOREM IPSUM
                                </h5>

                                <p>LOREM IPSUM LOREM IPSUM</p>

                                <div class="price-wrapper">
                                    <p>$28.80</p>
                                    <p>$36.00</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                        <div class="product-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale3.png"
                                alt="product2" class="image-prod">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png"
                                alt="carrito" class="carrito-image">
                            <div class="sale-text-wrapper">
                                <h5>
                                    LOREM IPSUM
                                </h5>

                                <p>LOREM IPSUM LOREM IPSUM</p>

                                <div class="price-wrapper">
                                    <p>$28.80</p>
                                    <p>$36.00</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <!-- Para pantallas pequeñas, medianas, grandes y extra grandes -->
                        <div class="product-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale4.png"
                                alt="product4" class="image-prod">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png"
                                alt="carrito" class="carrito-image">
                            <div class="sale-text-wrapper">
                                <h5>
                                    LOREM IPSUM
                                </h5>

                                <p>LOREM IPSUM LOREM IPSUM</p>

                                <div class="price-wrapper">
                                    <p>$28.80</p>
                                    <p>$36.00</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <button class="black-backgound simple-button">Shop now</button>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <!-- sales para antallas grandes -->
    <div class="container-fluid big-sales-wrapper">
        <div class="row gray-bg">
            <!-- <div class="col-12"> -->
            <div class="container " id="brands-div">
                <div class="row justify-content-center mb-2">
                    <h3 class="mt-3">
                        SALE
                    </h3>
                </div>

                <div class="owl-carousel-two owl-carousel owl-theme" id="desk-carousel">
                    <div class="product-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale1.png"
                            alt="product1" class="image-prod">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png" alt="carrito"
                            class="carrito-image">
                        <div class="sale-text-wrapper">
                            <h5>
                                LOREM IPSUM
                            </h5>

                            <p>LOREM IPSUM LOREM IPSUM</p>

                            <div class="price-wrapper">
                                <p>$28.80</p>
                                <p>$36.00</p>
                            </div>

                        </div>
                    </div>

                    <div class="product-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale2.png"
                            alt="product2" class="image-prod">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png" alt="carrito"
                            class="carrito-image">
                        <div class="sale-text-wrapper">
                            <h5>
                                LOREM IPSUM
                            </h5>

                            <p>LOREM IPSUM LOREM IPSUM</p>

                            <div class="price-wrapper">
                                <p>$28.80</p>
                                <p>$36.00</p>
                            </div>

                        </div>
                    </div>

                    <div class="product-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale3.png"
                            alt="product2" class="image-prod">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png" alt="carrito"
                            class="carrito-image">
                        <div class="sale-text-wrapper">
                            <h5>
                                LOREM IPSUM
                            </h5>

                            <p>LOREM IPSUM LOREM IPSUM</p>

                            <div class="price-wrapper">
                                <p>$28.80</p>
                                <p>$36.00</p>
                            </div>

                        </div>
                    </div>

                    <div class="product-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-sale4.png"
                            alt="product4" class="image-prod">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrito.png" alt="carrito"
                            class="carrito-image">
                        <div class="sale-text-wrapper">
                            <h5>
                                LOREM IPSUM
                            </h5>

                            <p>LOREM IPSUM LOREM IPSUM</p>

                            <div class="price-wrapper">
                                <p>$28.80</p>
                                <p>$36.00</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </div>


</section>



<?php get_footer(); ?>