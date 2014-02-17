<?php
/**
 * @package Rush Mechanical
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>

		<div class="entry-meta">

			<?php rush_mechanical_posted_on(); ?>

		</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<?php else : ?>

	<div class="entry-content">

		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rush-mechanical' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'rush-mechanical' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			<?php

				/* translators: used between list items, there is a space after the comma */

				$categories_list = get_the_category_list( __( ', ', 'rush-mechanical' ) );
				if ( $categories_list && rush_mechanical_categorized_blog() ) :
			?>

			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'rush-mechanical' ), $categories_list ); ?>
			</span>

			<?php endif; // End if categories ?>

			<?php

				/* translators: used between list items, there is a space after the comma */

				$tags_list = get_the_tag_list( '', __( ', ', 'rush-mechanical' ) );
				if ( $tags_list ) :

			?>

			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'rush-mechanical' ), $tags_list ); ?>
			</span>

			<?php endif; // End if $tags_list ?>

		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'rush-mechanical' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
