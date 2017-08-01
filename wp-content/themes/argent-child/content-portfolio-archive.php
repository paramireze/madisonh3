<?php
/**
 * The template used for displaying Portfolio Archive view
 *
 * @package Argent
 */
?>

<header class="page-header">
	<?php echo "<h2 class='page-title'>News & Announcements</h2>" ?>

	<?php argent_portfolio_thumbnail( '<div class="portfolio-featured-image">', '</div>'); ?>

	<?php argent_portfolio_content( '<div class="taxonomy-description">', '</div>' ); ?>
</header><!-- .page-header -->
<div id="portfolio-wrapper">
    <h2 style="text-align:center;" class="section-title">Add News Item or Hashcap</h2>
    <div style="border-bottom:dotted black 1px; margin-bottom: 10px;">Have an announcement or a Hashcap you want to post? Well go fuck yourself. Then contact OTC at madjestic_stallion@yahoo.com with a copy of your post.</div>
    <?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'portfolio' ); ?>

	<?php endwhile; ?>
</div><!-- #portfolio-wrapper -->
<?php
	the_posts_navigation( array(
		'prev_text'          => esc_html__( 'Older projects', 'argent' ),
		'next_text'          => esc_html__( 'Newer projects', 'argent' ),
		'screen_reader_text' => esc_html__( 'Portfolio navigation', 'argent' ),
	) );
?>
