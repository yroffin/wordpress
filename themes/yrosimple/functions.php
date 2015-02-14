<!-- function -->
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
 * RSS
 */
automatic_feed_links();

/**
 * jquery and bootstrap
 */
if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false);
    wp_enqueue_script('jquery');

    wp_deregister_script('bootstrap');
    wp_register_script('bootstrap', ("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"), false);
    wp_enqueue_script('bootstrap');
}

/**
 * cleanup head
 */
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

/**
 * register sidebar
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'responsive-grid-row-fluid-1',
        'id' => 'sidebar-widgets',
        'description' => 'Default sidebar.',
        'before_widget' => '<div class="col-md-3">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => ''
    ));
}

/**
 * Add Customizer functionality.
 */
require get_template_directory() . '/inc/customizer.php';
?>