<!-- sidebar -->
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
 * sidebar
 *
 * @package WordPress
 * @subpackage simple
 * @since simple 1.0
 */
?>
<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

        <?php get_search_form(); ?>

        <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>

        <h2>Archives</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>

        <h2>Categories</h2>
        <ul>
            <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>

        <?php wp_list_bookmarks(); ?>

        <h2>Meta</h2>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
            <?php wp_meta(); ?>
        </ul>

        <h2>Subscribe</h2>
        <ul>
            <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
            <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
        </ul>

    <?php endif; ?>

</div>