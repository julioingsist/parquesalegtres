<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_post_thumbnail( 'large' ); ?>

					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'leathernote' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'leathernote' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

			</div><!-- #content -->

            <div id="page-bottom">
            	<div class="page-bottom-content">
                </div><!-- .page-bottom-content -->
            </div><!-- #page-bottom -->

		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
