<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1 class="content-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="clear"></div>			
				<?php edit_post_link(__('Edit this entry.', 'naturefox'), '<p>', '</p>'); ?>
		</div>
		
		<?php comments_template(); ?>
		
		<?php endwhile; endif; ?>

		<?php get_sidebar(); ?>

<?php get_footer(); ?>
