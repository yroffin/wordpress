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
 * The main index file
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
        <!-- Main page -->
        <div data-role="page" id="post-<?php the_ID(); ?>" data-theme="{{theme}}" <?php post_class() ?>>
            <!-- Header here -->
            <div role="main" class="ui-content">
                <div>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                    <?php the_content(); ?>
                    <div class="postmetadata">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                            Posted in <?php the_category(', ') ?> | 
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </div>
                </div> <!-- content-->
            </div>
            <!-- Footer here -->
        </div>
    <?php endwhile; ?>
    <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
<?php else : ?>
    <h2>Not Found</h2>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
