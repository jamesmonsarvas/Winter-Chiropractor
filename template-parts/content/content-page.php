<?php
/**
 * Template part for displaying pages
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php the_content(get_the_title()); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
