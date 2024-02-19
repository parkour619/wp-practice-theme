<?php
/**
 * Archive Book Listing Template
 * 
 * This template is used to display the archive page for book listings.
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
            </header><!-- .page-header -->

            <?php
            // Start the loop
            while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <p><?php esc_html_e('No books found.', 'text-domain'); ?></p>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
