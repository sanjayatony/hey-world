<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hey_World
 */

if ( ! is_singular() ) {
	$article_class = 'prose p-8 border border-gray-200 rounded-md shadow-lg mb-8';
} else {
	$article_class = 'prose';
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $article_class ); ?>>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta text-center text-gray-500 mb-2 text-sm">
				<?php
				hey_world_posted_on();
				?>
			</div><!-- .entry-meta -->
			<?php
		endif;
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title font-bold text-3xl text-center mb-8">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title font-bold text-2xl text-center mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( is_singular() ) :
			the_content();
		else :
			the_excerpt();
			?>
			<div class="text-center more-link">
				<a href="<?php echo get_the_permalink(); ?>">Read more</a>
			</div>
			<?php
		endif;
		?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hey-world' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<?php if ( is_singular() && get_field( 'twitter_url' ) ) : ?>
	<footer class="mt-16">
		<p class="text-sm italic">Want to talk about this post? <a href="<?php echo get_field( 'twitter_url' ); ?>" target="_blank" class="">Discuss this on Twitter</a></p>
	</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
