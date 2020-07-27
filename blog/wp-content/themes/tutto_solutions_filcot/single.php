<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                            Te brindamos la información que necesitas
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="containerBlogContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="back">
                        <a href="/blog">
                            <i class="fas fa-arrow-left"></i> Volver a lista de noticias
                        </a>
                    </div>
                </div>
            </div>
            <div class="row content">
                <div class="col-lg-12">
                    <div class="bannerSpecial">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <h1>
                        <?php the_title(); ?>
                    </h1>



                    <?php the_content(); ?>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="back bottom">
                        <a href="/blog">
                            <i class="fas fa-arrow-left"></i> Volver a lista de noticias
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>





<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>