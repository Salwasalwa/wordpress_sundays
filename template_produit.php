<?php
    /*template name: Produit
    template post type: post
    */
?>
<?php
get_header();
?>
<main>
    <div class="main single">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="container">
                <div id="main_area">
                    <!-- Slider -->
                    <div class="row">
                        <div class="col-xs-12" id="slider">
                            <div class="row">
                                <div class="col-sm-6" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="http://lorempixel.com/200/200">
                                            </div>

                                            <div class="item" data-slide-number="1">
                                                <img src="http://lorempixel.com/200/200">
                                            </div>

                                            <div class="item" data-slide-number="2">
                                                <img src="http://lorempixel.com/200/200">
                                            </div>

                                            <div class="item" data-slide-number="3">
                                                <img src="http://lorempixel.com/200/200">
                                            </div>

                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-sm-4" id="carousel-text">
                                    <a href="./cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                        <h3><?php echo get_post_meta($post->ID, 'Prix', true); ?>$</h3>
                                        <button type="button" name="button">Acheter</button>
                                        <h3 class="<?php echo $tags[0]->name; ?>"><?php echo $tags[0]->name; ?></h3>
                                        <h3>Description</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Slider-->

                    <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="http://lorempixel.com/200/200"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="http://lorempixel.com/200/200"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="http://lorempixel.com/200/200"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="http://lorempixel.com/200/200"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
            <?php endwhile; ?>
        <?php endif; ?>
</div>
</main>
<?php
    get_footer();
?>
