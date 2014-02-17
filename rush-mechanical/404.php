<?php
get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="page-header">

					<h1 class="page-title"><?php _e( 'Our apologies, we can&#8217;t seem to find that page.', 'rush-mechanical' ); ?></h1>

				</header><!-- .page-header -->

				<div class="page-content">

					<p><?php _e( 'You can try going back to the <a href="/rush/">Home Page</a> or start a new search.', 'rush-mechanical' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
