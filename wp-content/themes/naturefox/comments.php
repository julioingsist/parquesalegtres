<?php // Do not delete these lines
		if ( post_password_required() ) : ?>
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'naturefox'); ?></p>

			<?php
				return;
			endif;
			?>
<?php
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->
<?php if ( ! comments_open() & is_single() )  : ?>
<p><?php _e( 'Comments are currently closed.', 'naturefox' ); ?></p>
<?php endif; ?>


<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number(__('No responses', 'naturefox'), __('One response', 'naturefox'), __('% Responses', 'naturefox')); ?> <?php _e('to', 'naturefox'); ?> &#8220;<?php the_title(); ?>&#8221;</h3>

	<ul class="commentlist">

	<?php wp_list_comments(); ?>

	</ul>

 <?php else : // this is displayed if there are no comments so far ?>

		<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
	<?php endif; ?>
<?php endif; ?>

<p><?php paginate_comments_links(); ?></p>
<br />

<?php if ( comments_open() ) : ?>

<?php comment_form(); ?>

<?php endif; // if you delete this the sky will fall on your head ?>



