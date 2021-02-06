<?php
/**
 * Template part for displaying a message that posts/page cannot be found
 */

?>

<section class="no-results not-found">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Nothing Found', 'winterchiropractor' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: Link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'winterchiropractor' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
				?>

				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'winterchiropractor' ); ?></p>
				<?php
				get_search_form();

			else :
				?>

				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'winterchiropractor' ); ?></p>
				<?php
				get_search_form();

			endif;
			?>
		</div><!-- .page-content -->
	</div>
</section><!-- .no-results -->