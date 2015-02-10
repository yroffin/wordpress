<!-- search -->
<?php
/**
 * Copyright 2015 Yannick Roffin.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *      http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * search
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
