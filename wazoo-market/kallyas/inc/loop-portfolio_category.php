<?php if(! defined('ABSPATH')){ return; }
global $zn_config;
//Items per page
$ports_num_columns = ! empty( $zn_config['port_columns'] ) ? $zn_config['port_columns'] : zget_option( 'ports_num_columns', 'portfolio_options', false, '4' );
$extra_content = ! empty( $zn_config['ports_extra_content'] ) ? $zn_config['ports_extra_content'] : zget_option( 'ports_extra_content', 'portfolio_options', false, 'no' );
$saved_alt = $saved_title = '';
$colWidth = str_replace('.', '', 12 / intval($ports_num_columns));

// Check if PB Element has style selected, if not use Portfolio style option. If no blog style option, use Global site skin.
$portfolio_scheme_global = zget_option( 'portfolio_scheme', 'portfolio_options', false, '' ) != '' ? zget_option( 'portfolio_scheme', 'portfolio_options', false, '' ) : zget_option( 'zn_main_style', 'color_options', false, 'light' );
$portfolio_scheme = isset($zn_config['portfolio_scheme']) && $zn_config['portfolio_scheme'] != '' ? $zn_config['portfolio_scheme'] : $portfolio_scheme_global;

// $zn_link_portfolio = zget_option( 'zn_link_portfolio', 'portfolio_options', false, 'no' );
$zn_link_portfolio = isset( $zn_config['zn_link_portfolio'] ) && !empty($zn_config['zn_link_portfolio']) ? $zn_config['zn_link_portfolio'] : zget_option( 'zn_link_portfolio', 'portfolio_options', false, 'no' );

echo '<div class="row kl-portfolio-category portfolio-cat--'.$portfolio_scheme.' element-scheme--'.$portfolio_scheme.'">';

    the_archive_description( '<div class="col-sm-12"><div class="kl-portfolio-category-description u-mb-50">', '</div></div>' );

	$i = 0; // size(width) counter
	// Start the loop
	if ( have_posts() ) : while ( have_posts() ) :  the_post();


		$title_link_start = '';
		$title_link_end = '';
		if ( $zn_link_portfolio != 'no_all' ) {
			$title_link_start = '<a href="'. get_permalink() .'">';
			$title_link_end = '</a>';
		}

		// $i += $colWidth;
		echo '<div class="col-xs-12 col-sm-4 col-lg-'.$colWidth.'">';

			echo '<div class="portfolio-item kl-has-overlay portfolio-item--overlay">';

				if( $ports_num_columns == 1 ){
					echo '<div class="row">';
					echo '<div class="col-sm-6">';
				}

				echo '<div class="img-intro portfolio-item-overlay-imgintro">';
					$port_media = get_post_meta( $post->ID, 'zn_port_media', true );
					if ( ! empty ( $port_media ) && is_array( $port_media ) ) {
						$size      = zn_get_size( 'eight' );
						$has_image = false;

						// Modified portfolio display
						// Check to see if we have images
						if ( $portfolio_image = $port_media[0]['port_media_image_comb'] ) {
							if ( is_array( $portfolio_image ) ) {
								if ( $saved_image = $portfolio_image['image'] ) {
									if ( ! empty( $portfolio_image['alt'] ) ) {
										$saved_alt = $portfolio_image['alt'];
									}
									else {
										$saved_alt = '';
									}

									if ( ! empty( $portfolio_image['title'] ) ) {
										$saved_title = 'title="' . $portfolio_image['title'] . '"';
									}
									else {
										$saved_title = '';
									}

									$has_image = true;
								}
							}
							else {
								$saved_image = $portfolio_image;
								$has_image   = true;
								$saved_alt   = ZngetImageAltFromUrl( $saved_image );
                                $saved_title = ZngetImageTitleFromUrl( $saved_image, true );
							}

							if ( $has_image ) {
								$image = vt_resize( '', $saved_image, $size['width'], '', true );
							}
						}

						// Check to see if we have video
						$portfolio_media = $port_media[0]['port_media_video_comb'];

						// Display the media
						if ( ! empty( $saved_image ) && $portfolio_media ) {
							echo '<a href="' . $portfolio_media . '" data-mfp="iframe" data-lightbox="iframe" class="portfolio-item-link hoverLink"></a>';
							echo '<img class="kl-ptf-catlist-img" src="' . $image['url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '" alt="' . $saved_alt . '" ' . $saved_title . ' />';
							echo '<div class="portfolio-item-overlay">';
							echo '<div class="portfolio-item-overlay-inner">';
							echo '<span class="portfolio-item-overlay-icon glyphicon glyphicon-play"></span>';
							echo '</div>';
							echo '</div>';
						}
						elseif ( ! empty( $saved_image ) ) {

							$overlay = '
							<div class="portfolio-item-overlay">
		                        <div class="portfolio-item-overlay-inner">
		                        	<span class="portfolio-item-overlay-icon glyphicon glyphicon-picture"></span>
		                        </div>
		                    </div>';

							if ( $zn_link_portfolio == 'yes' ) {
								echo '<a href="' . get_permalink() . '" class="portfolio-item-link hoverLink"></a>';
								echo '<img class="kl-ptf-catlist-img" src="' . $image['url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '" alt="' . $saved_alt . '" ' . $saved_title . ' />';
								echo $overlay;
							}
							else {
								echo '<a href="' . $saved_image . '" data-type="image" data-lightbox="image" class="portfolio-item-link hoverLink"></a>';
								echo '<img class="kl-ptf-catlist-img" src="' . $image['url'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '" alt="' . $saved_alt . '" ' . $saved_title . ' />';
								echo $overlay;
							}
						}
						elseif ( $portfolio_media ) {
							echo get_video_from_link( $portfolio_media, '', $size['width'], $size['height'] );
						}
					}
				echo '</div><!-- img intro -->';

				// If we have only 1 column
				if( $ports_num_columns == 1 ){
					echo '</div>';
					echo '<div class="col-sm-6">';
				}

				echo '<div class="portfolio-entry kl-ptf-catlist-details">';
					echo '<h3 class="title kl-ptf-catlist-title">';

						echo $title_link_start;
						echo get_the_title();
						echo $title_link_end;

					echo '</h3>';
					echo '<div class="pt-cat-desc kl-ptf-catlist-desc">';

						if (preg_match('/<!--more(.*?)?-->/', $post->post_content)) {
							the_content('');
						}
						else {
							$exc = get_the_excerpt();
							echo wpautop( wp_trim_words($exc, 10) );
						}

					echo '</div><!-- pt cat desc -->';

				if( $ports_num_columns == 1 && $extra_content == 'yes' ){
					get_template_part( 'inc/details', 'portfolio' );
				}

				echo '</div><!-- End portfolio-entry -->';

				// If we have only 1 column
				if( $ports_num_columns == 1 ){
					echo '</div>'; // End col-sm-6
					echo '</div>'; // End row
				}

			echo '</div><!-- END portfolio-item -->';
		echo '</div><!-- col-lg-'.$colWidth.' '.$i.' -->';

		if( ($i + 1) % intval($ports_num_columns) == 0 ){
			echo '<div class="clearfix hidden-xs hidden-sm hidden-md"></div>';
		}
		// Add clearfix for tablets on every 3rd
		elseif( ($i + 1) % 3 == 0 ){
			echo '<div class="clearfix hidden-sm hidden-lg"></div>';
		}

		$i++;
		endwhile;
	endif;
echo '</div>'; ?>
<div class="pagination--<?php echo $portfolio_scheme; ?>">
	<?php zn_pagination(); ?>
</div>
