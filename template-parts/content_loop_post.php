<div class="section no_padding">
    <?php
    foreach ($posts as $post) {

        setup_postdata($post);
        $tags = wp_get_post_tags($post->ID);
        ?>
                <article class="">

                    <img src="http://lorempixel.com/200/200">
                    <h3 class="<?php echo $tags[0]->name; ?>"><?php echo $tags[0]->name; ?></h3>
                    <p><?php the_title(); ?></p>
                    <p><?php echo get_post_meta($post->ID, 'Prix', true); ?>$</p>

                </article>
    <?php } ?>

</div>
