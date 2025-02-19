<?php get_header(); ?>
<?php
$lcmp_page_head = <<<TXT
<div class="contentLayout">
<div class="sidebar1">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
</div>
<div class="content">

TXT;
$lcmp_is_left = strpos($lcmp_page_head,"sidebar");
if($lcmp_is_left===FALSE){
    $lcmp_rightdefault = 'default';
    $lcmp_leftdefault = 'notdefault';
}else{
    $lcmp_leftdefault = 'default';
    $lcmp_rightdefault = 'notdefault';
}
?>
<div class="contentLayout">
<?php 
global $lcmp_sidebarloc;
if($lcmp_sidebarloc == $lcmp_leftdefault || $lcmp_sidebarloc == 'left'){ ?>
<div class="sidebar1">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
</div>
<?php } ?>
<div class="content">

<?php
$prev_link = get_previous_posts_link(__('Newer Entries &raquo;', 'kubrick'));
$next_link = get_next_posts_link(__('&laquo; Older Entries', 'kubrick'));
?>

<?php if ($prev_link || $next_link): ?>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner article">

<div class="PostContent">

<div class="navigation">
			<div class="alignleft"><?php echo $next_link; ?></div>
			<div class="alignright"><?php echo $prev_link; ?></div>
</div>

</div>
<div class="cleared"></div>


</div>

    </div>
</div>

<?php endif; ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner article">
<h2 class="PostHeaderIcon-wrapper">
<span class="PostHeader"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
<?php the_title(); ?>
</a></span>
</h2>
<?php $icons = array(); ?>
<?php if (!is_page()) : ?>
<?php ob_start(); ?>
<img src="<?php bloginfo('template_url'); ?>/images/PostDateIcon.png" width="18" height="18" alt="PostDateIcon" />
<?php the_time(__('F jS, Y', 'kubrick')) ?>
<?php $icons[] = ob_get_clean(); ?>
<?php endif; ?>
<?php if (!is_page()) : ?>
<?php ob_start(); ?>
<img src="<?php bloginfo('template_url'); ?>/images/PostAuthorIcon.png" width="18" height="18" alt="PostAuthorIcon" />
<?php _e('Author', 'kubrick'); ?>: <a href="#" title="<?php _e('Author', 'kubrick'); ?>"><?php the_author() ?></a>
<?php $icons[] = ob_get_clean(); ?>
<?php endif; ?>
<?php if (current_user_can( 'edit_post', $post->ID )) : ?><?php ob_start(); ?>
<img src="<?php bloginfo('template_url'); ?>/images/PostEditIcon.png" width="14" height="14" alt="PostEditIcon" />
<?php edit_post_link(__('Edit', 'kubrick'), ''); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?>
<?php if (0 != count($icons)): ?>
<div class="PostHeaderIcons metadata-icons">
<?php echo implode(' | ', $icons); ?>

</div>
<?php endif; ?>
<div class="PostContent">
<?php if (is_search()) the_excerpt(); else the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>

</div>
<div class="cleared"></div>
<?php $icons = array(); ?>
<?php if (!is_page()) : ?>
<?php ob_start(); ?>
<img src="<?php bloginfo('template_url'); ?>/images/PostCategoryIcon.png" width="16" height="16" alt="PostCategoryIcon" />
<?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?>
<?php $icons[] = ob_get_clean(); ?>
<?php endif; ?>
<?php if (!is_page() && get_the_tags()) : ?><?php ob_start(); ?>
<img src="<?php bloginfo('template_url'); ?>/images/PostTagIcon.png" width="18" height="18" alt="PostTagIcon" />
<?php the_tags(__('Tags:', 'kubrick') . ' ', ', ', ' '); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?>
<?php if (!is_page() && !is_single()) : ?><?php ob_start(); ?>
<img src="<?php bloginfo('template_url'); ?>/images/PostCommentsIcon.png" width="18" height="18" alt="PostCommentsIcon" />
<?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?>
<?php if (0 != count($icons)): ?>
<div class="PostFooterIcons metadata-icons">
<?php echo implode(' | ', $icons); ?>

</div>
<?php endif; ?>

</div>

    </div>
</div>

<?php endwhile; ?>

<?php if ($prev_link || $next_link): ?>
<div class="Post">
    <div class="Post-body">
<div class="Post-inner article">

<div class="PostContent">

<div class="navigation">
			<div class="alignleft"><?php echo $next_link; ?></div>
			<div class="alignright"><?php echo $prev_link; ?></div>
</div>

</div>
<div class="cleared"></div>


</div>

    </div>
</div>

<?php endif; ?>

<?php else : ?>
<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
if(function_exists('get_search_form')) get_search_form();
<?php endif; ?>
</div>
<?php 
global $lcmp_sidebarloc;
if($lcmp_sidebarloc == $lcmp_rightdefault || $lcmp_sidebarloc == 'right'){ ?>
<div class="sidebar1">
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?>
</div>
<?php } ?>
<?php if(file_exists(TEMPLATEPATH . '/sidebar2.php')){ ?>
<div class="sidebar2">
<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>
<?php } ?>
</div>
<div class="cleared"></div>
<?php get_footer(); ?>