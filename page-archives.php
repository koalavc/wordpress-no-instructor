<?php get_header(); ?>

	<main role="main" class="container">
		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
			<h2>LOL22</h2>
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
