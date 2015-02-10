<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage simple
 * @since simple 1.0
 */
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <h2>Search Results</h2>

    <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

    <?php while (have_posts()) : the_post(); ?>

        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <h2><?php the_title(); ?></h2>

            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

            <div class="entry">

                <?php the_excerpt(); ?>

            </div>

        </div>

    <?php endwhile; ?>

    <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php else : ?>

    <h2>No posts found.</h2>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
