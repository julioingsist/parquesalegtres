<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
<div class="main" id="content" role="main">
    <div class="top improve"></div>
    <div class="container" id="inner-content" >

	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	    	<?php get_template_part( 'partials/loop', 'case' ); ?>

	    <?php endwhile; else : ?>

	   		<?php get_template_part( 'partials/content', 'missing' ); ?>

	    <?php endif; ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>