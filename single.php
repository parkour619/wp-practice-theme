<?php
/**
 * Template Name: Single Book Listing
 *
 * @package TwentyTwentyFour
 */
 
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
} ?>
 
<?php get_header(); ?>
 
<?php
if (have_posts()) {
    while (have_posts()) :
        the_post();
        ?>
 
            <main id="content" <?php post_class('site-main'); ?>>
 
                    <header class="page-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header>
 
                <div class="page-content">
                   
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                </div>
                <?php comments_template(); ?>
            </main>
        </div>
 
    <?php endwhile;
} else {
    // Default template code
    get_template_part('single');
}?>
 
<?php get_footer(); ?>