<?php get_header(); ?>
    <main class="wrap">
        <section class="content-area content-full-width">
            <article class="banner">
                <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );?>
                <img src="<?php echo $backgroundImg[0]; ?>" alt="Feature Image">
            </article>



            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="article-full">
                    <header>
                        <h2><?php the_title(); ?></h2>
                        By: <?php the_author(); ?>
                    </header>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; else : ?>
                <article>
                    <p>Sorry, no post was found!</p>
                </article>
            <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?><?php
