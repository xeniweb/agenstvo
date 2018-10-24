<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'loop-templates/content', 'single' ); ?>
						<?php if ( is_singular( 'nedvishimost' ) ) : ?>
							<div class="nedvishimost-cf">
							<p><strong>Площадь: </strong> <?php the_field('площадь'); ?></p>
							<p><strong>Стоимость: </strong><?php the_field('стоимость'); ?></p>
							<p><strong>Адрес: </strong><?php the_field('адрес'); ?></p>
							<p><strong>Жидая площадь: </strong><?php the_field('жилая_площадь'); ?></p>
							<p><strong>Общая площадь: </strong><?php the_field('площадь'); ?></p>
							<p><strong>Этаж: </strong><?php the_field('этаж'); ?></p>
							</div>
							<div class="post-cat-three">
							<?php else : ?>
							<div class="post">
						<?php endif; ?>
				
				

						<?php understrap_post_nav(); ?>



				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
