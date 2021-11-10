<?php
/**
 * Template part for displaying page content in page-archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alexrodriguez
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php alexrodriguez_post_thumbnail(); ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
