<?php

/* 
 * Copyright 2015 yannick.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

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

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <div>
                        <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>

                <h1><?php the_title(); ?></h1>
        </header><!-- .entry-header -->
        <div>
        <?php
        the_content();
 	$defaults = array(
		'before'           => '<p>' . __( 'Pages:' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page' ),
		'previouspagelink' => __( 'Previous page' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
        wp_link_pages();
        ?>
	</div>
        <footer>
                <?php edit_post_link(); ?>
        </footer><!-- .entry-meta -->
        <?php comments_template(); ?>
    </article><!-- #post -->
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>