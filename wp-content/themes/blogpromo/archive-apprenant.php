<?php get_header(); ?>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$custom_args = array(
	'post_type' => 'apprenant',
	'posts_per_page' => 5,
	'post_status' => ' published',
	'order_by' => 'post_date',
	'order' => 'DESC',
	'paged' => $paged
);
?> <?php $custom_query = new WP_Query($custom_args); ?>
<?php if ($custom_query->have_posts()) : ?>
	<?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>
		<?php echo '<a href="' . esc_url($featured_img_url) . '" rel="lightbox">';
		the_post_thumbnail('thumbnail');
		echo '</a>'; ?>

		</p>
		<header class="page-header">
			</p>
			<h3 class="entry-title"> <a href="<?php get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></h3>
			<p>
		</header>
		<p>
		</p>
		<div class="entry-content">
			<?php the_excerpt(); ?>

		</div>
		<p>

		<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	<?php get_footer(); ?>