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

 <div class="meta">
    <em>Posted on:</em> <?php the_time('F jS, Y') ?>
    <em>by</em> <?php the_author() ?>
    <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</div>