
    <?php
    foreach ($posts as $post) {

        setup_postdata($post);
        $tags = wp_get_post_tags($post->ID);
        ?>
            <div class="col-md-3 no_padding">
                <article class="">

                    <img src="http://lorempixel.com/200/200">
                    <h3 class="<?php echo $tags[0]->name; ?>"><?php echo $tags[0]->name; ?></h3>
                    <p id=""><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
                    <p><?php echo get_post_meta($post->ID, 'Prix', true); ?>$</p>

                </article>
            </div>
    <?php } ?>
