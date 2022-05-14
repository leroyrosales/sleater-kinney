<?php
/**
 * Quick view template.
 *
 * @package OceanWP WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

while ( have_posts() ) : the_post(); ?>

	<div id="product-<?php the_ID(); ?>" <?php post_class( 'product' ); ?>>
		<?php do_action( 'ocean_woo_quick_view_product_image' ); ?>
		<div class="summary entry-summary">
			<div class="summary-content">
				<?php do_action( 'ocean_woo_quick_view_product_content' ); ?>
<!-- 		ADD DATASHEET LINK TO QUICKVIEW		 -->
				<?php 
					$link = get_field('datasheet');

					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
				<a class= "button" id="datasheet-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
				<?php endif; ?>
<!-- 		END ADD DATASHEET LINK TO QUICKVIEW		 -->
			</div>
		</div>
	</div>

<?php
endwhile;