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

<div class="navigation">
    <div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
    <div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>