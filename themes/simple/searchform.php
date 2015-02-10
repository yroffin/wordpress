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
<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    <div>
        <label for="s" class="screen-reader-text">Search for:</label>
        <input type="text" id="s" name="s" value="" />

        <input type="submit" value="Search" id="searchsubmit" />
    </div>
</form>