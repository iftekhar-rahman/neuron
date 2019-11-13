		<?php 
		/*
		* Template Name: Homepage Template
		*/ 

		$home_content_title = cs_get_option('home_content_title');
		$home_content_text = cs_get_option('home_content_text');
		$home_content_image = cs_get_option('home_content_image');
		$home_content_image_array = wp_get_attachment_image_src(cs_get_option('home_content_image'), 'large');

		if ( !empty($home_content_image) ){
			$home_content_image = $home_content_image_array[0];
		} else{
			$home_content_image = ''.get_template_directory_uri().'/assets/img/homepageblock.jpg';
		}

		get_header(); ?>

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">

		<?php
		global $post;
		$args = array( 'posts_per_page' => 5, 'post_type'=> 'slide', 'orderby' => 'menu_order', 'order' => 'ASC' );
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) : setup_postdata($post); ?>

		<?php 
		$btn_text= get_post_meta($post->ID, 'btn_text', true); 
		$btn_link= get_post_meta($post->ID, 'btn_link', true); 
		?>

		<!-- slide item one -->
		<div style="background-image: url(<?php the_post_thumbnail_url(); ?>);"  class="homepage-slider">
			<div class="display-table">
				<div class="display-table-cell">
					<div class="container">
						<div class="row">
							<div class="col-sm-7">
								<div class="slider-content">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
									<a href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?> <i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; wp_reset_query(); ?>

		</section><!-- slider area end -->
	
		<?php get_template_part('content/promo'); ?>
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo $home_content_title; ?></h2>
							<?php echo wpautop($home_content_text); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo $home_content_image; ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<?php get_template_part('content/services'); ?>
	
		<?php get_footer(); ?>