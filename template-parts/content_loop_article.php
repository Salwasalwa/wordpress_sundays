<?php
foreach ($posts as $post) {

    setup_postdata($post);
    $tags = wp_get_post_tags($post->ID);
    ?>
        <div class="col-md-4 no_padding">
            <article class="">

                <img src="http://lorempixel.com/200/200">
                <p id=""><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
                <p><?php the_content(); ?></p>

            </article>
        </div>
<?php } ?>
