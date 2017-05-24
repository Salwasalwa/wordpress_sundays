<?php
    /*template name: Article
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
                                    
                                        <h3 class="post-title"><?php the_title(); ?></h3>
                                        <h3>Description</h3>
                                        <p><?php the_content(); ?></p>
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
