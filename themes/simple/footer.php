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
<div id="footer">
    &copy;<?php echo date("Y");
echo " ";
bloginfo('name'); ?>
</div>

</div>

<?php wp_footer(); ?>

<!-- Don't forget analytics -->

</body>

</html>
