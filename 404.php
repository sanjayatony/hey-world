<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hey_World
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header text-center mb-10">
				<h1 class="page-title text-green-600 text-2xl font-bold"><?php esc_html_e( 'Yo Marimo, are you lost?', 'hey-world' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content text-center prose">
				<p class="text-xs italic text-gray-400">*it's an <a href="https://www.youtube.com/watch?v=s5G5SujrODg" target="_blank">One Piece</a> reference, in case you don't understand</p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
