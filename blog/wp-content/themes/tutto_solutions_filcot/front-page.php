<?php get_header('blog'); ?>
<style>
.bannerBlog {
    background-image: url("https://filcot.pe/assets/about/banner.jpg");
}
</style>

<main class="blogStyle">
    <div class="bannerBlog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-banner">
                        <h3>
                            Entérate más aquí, en nuestro
                        </h3>

                        <h2>
                            Blog
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    // the query
    $the_query = new WP_Query(array(
        'posts_per_page' => 20,
    ));
    ?>
    <section class="containerBlog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid">

                        <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>



                        <article><a href=<?php echo get_permalink(); ?>>
                                <div class="articleImg">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <div class="articleText">
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </div>
                                <div class="articleReadMore">
                                    <i class="fab fa-readme"></i> Ver más
                                </div>
                            </a>
                        </article>




                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                        <p><?php __('No hay noticias por el momento'); ?></p>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php
get_footer();
?>