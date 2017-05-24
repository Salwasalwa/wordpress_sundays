<?php
    /*template name: bloog*/
?>
<?php
get_header();
?>
<main>
    <div class="container-fluid no_padding">
        <div class="row">
            <h2 id="blog">Blog 2017</h2>
            <article class="">
                    <?php
                        $args = array('category_name' => "Blog",
                                'posts_per_page' => 15
                        );
                        $posts = get_posts($args);
                        get_template_part( 'template-parts/content_loop_article');

                    ?>
            </article>
        </div>
    </div>
</main>
<?php
    get_footer();
?>
