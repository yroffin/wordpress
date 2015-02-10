<!-- page -->
<!--
Copyright 2015 Yannick Roffin.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
     http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->
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
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2>
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            <div class="entry">
                <?php the_content(); ?>
                <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            </div>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
        </div>
        <?php comments_template(); ?>
    <?php endwhile;
endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
