<?php
get_header();
?>

<main>
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
</main>
<?php
    get_footer();
?>
<main>
