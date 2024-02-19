<?php
get_header();

// Start the loop
while (have_posts()) : the_post();
    ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        // Display post content
        the_content();

        // Display custom fields
        $publish_date = get_post_meta(get_the_ID(), '_publish_date', true);
        $author_name = get_post_meta(get_the_ID(), '_author_name', true);
        $book_price = get_post_meta(get_the_ID(), '_book_price', true);

        if (!empty($publish_date)) {
            echo '<p><strong>Publish Date:</strong> ' . esc_html($publish_date) . '</p>';
        }

        if (!empty($author_name)) {
            echo '<p><strong>Author Name:</strong> ' . esc_html($author_name) . '</p>';
        }

        if (!empty($book_price)) {
            echo '<p><strong>Book Price:</strong> ' . esc_html($book_price) . '</p>';
        }

        // Display repeater field
        $repeater_values = get_post_meta(get_the_ID(), 'repeater_field', true);
        $repeater_textarea_values = get_post_meta(get_the_ID(), 'repeater_field_textarea', true);
        if (!empty($repeater_values)) {
            echo '<h2>Repeater Field</h2>';
            echo '<div class="repeater-accordion">';
            foreach ($repeater_values as $key => $value) {
                $textarea_value = isset($repeater_textarea_values[$key]) ? esc_html($repeater_textarea_values[$key]) : '';
                echo '<div class="accordion-item">';
                echo '<button class="accordion-button" onclick="toggleAccordion(this)"><i class="fa fa-plus"></i>' . esc_html($value) . '</button>';
                echo '<div class="accordion-content">';
                echo '<p>' . esc_html($textarea_value) . '</p>'; // Displaying the text as regular text
                echo '</div>'; // .accordion-content
                echo '</div>'; // .accordion-item
            }
            echo '</div>'; // .repeater-accordion
        }
        
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->



<?php endwhile; // End of the loop.

get_footer();


