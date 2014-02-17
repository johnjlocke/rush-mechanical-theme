<?php
/*
 * Template Name: Home
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    <!-- <header class="entry-header">
				<h1 class="entry-title"></h1>
			     </header> -->

	                     <div class="entry-content">
		              <?php the_content(); ?>
				<?php
				   wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'rush-mechanical' ),
					'after'  => '</div>',
				    ) );
				?>
			     </div><!-- .entry-content -->
			     <?php edit_post_link( __( 'Edit', 'rush-mechanical' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
		          </article><!-- #post-## -->
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php require_once('home-fw.php'); ?>
<?php get_footer(); ?>