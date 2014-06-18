<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>


<h2><?php the_title(); ?></h2>
<div class="col-2-3">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<article class="module main">
	<?php the_content(); ?>
</article>
<?php endwhile; ?>

<?php
$args = array( 'post_type' => 'services', 'order' => 'DESC', 'orderby' => 'menu_order' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>	
	<article class="module services outline-dash">
	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
	</article>
<?php endwhile; ?>
</div>
<div class="col-1-3" id="sidebar">
	<?php dynamic_sidebar('home') ?>
</div>




<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>