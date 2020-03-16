<?php 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
			<img src="<?php echo get_template_directory_uri();?>/img/hashtag-hero-mobile.jpg" class="img-fluid" alt="Responsive image">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23EF6C00&amp;ctz=America%2FLos_Angeles&amp;src=bmF0YWxpZS5na3cud3BAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=b3YzdHJxbmRmaGNyaXRyNW9ydHA4aDM3NzRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y3J1ei5na3cud3BAZ21haWwuY29t&amp;src=Y3J5c3RhbC5na3cud3BAZ21haWwuY29t&amp;src=dGhvbS5na3cud3BAZ21haWwuY29t&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%237986CB&amp;color=%230B8043&amp;color=%23E67C73&amp;color=%23F6BF26&amp;color=%23E4C441&amp;mode=MONTH" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
