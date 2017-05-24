<?php
get_header();
?>
<main>
    <div class="container-fluid no_padding">
        <div class="row">

            <?php if (get_the_ID()== 42) : ?>
            <h2 id="Catalog">spring summer 2017</h2>
                <article class="">
                        <?php
                            $args = array('category_name' => "Catalog",
                                    'posts_per_page' => 15
                            );
                            $posts = get_posts($args);
                            get_template_part( 'template-parts/content_loop_post');

                        ?>
                </article>
            <?php elseif (get_the_ID()== 44 ): ?>
                <h2 id="Catalog">Blog</h2>

                <article class="">
                        <?php
                            $args = array('category_name' => "Blog",
                                    'posts_per_page' => 15
                            );
                            $posts = get_posts($args);
                            get_template_part( 'template-parts/content_loop_article');

                        ?>
                </article>

            <?php endif; ?>
        </div>
    </div>
</main>
<?php
    get_footer();
?>
