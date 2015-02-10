<!DOCTYPE html>

 <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @link http://codex.wordpress.org/images/9/96/wp-template-hierarchy.jpg
 *
 * @package WordPress
 * @subpackage simple
 * @since simple 1.0
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <div class="postmetadata">
                <?php the_tags('Tags: ', ', ', '<br />'); ?>
                Posted in <?php the_category(', ') ?> | 
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
<?php else : ?>
    <h2>Not Found</h2>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
