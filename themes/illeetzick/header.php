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

<?php include (TEMPLATEPATH . '/inc/bootstrap.php' ); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >
    <head profile="http://gmpg.org/xfn/11">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8"  />
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" /> 
        <?php } ?>

        <title>
            <?php
            if (function_exists('is_tag') && is_tag()) {
            single_tag_title("Tag Archive for &quot;");
            echo '&quot; - ';
            } elseif (is_archive()) {
            wp_title('');
            echo ' Archive - ';
            } elseif (is_search()) {
            echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
            } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title('');
            echo ' - ';
            } elseif (is_404()) {
            echo 'Not Found - ';
            }
            if (is_home()) {
            bloginfo('name');
            echo ' - ';
            bloginfo('description');
            } else {
            bloginfo('name');
            }
            if ($paged > 1) {
            echo ' - page ' . $paged;
            }
            ?>
        </title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" media="screen">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

                <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
                <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
                <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
                <script src="<?php bloginfo('template_url'); ?>/js/config.js"></script>

                <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
                <?php wp_head(); ?>
                </head>

                <body class="container-fluid" >

                    <div class="page-header">
                        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                        <div class="description"><?php bloginfo('description'); ?></div>
                    </div>

                    <?php bootstrap::menu(); ?>
