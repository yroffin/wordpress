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
?>

<?php wp_footer(); ?>

        <!-- JQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.3/jquery.mobile.min.js"></script>
        <!-- AngularJS -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-resource.min.js"></script>

        <!-- Application -->
        <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/services.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/controllers.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/filters.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/directives.js"></script>
    </body>
</html>
