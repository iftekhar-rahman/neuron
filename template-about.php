<?php 
/*
* Template Name: About Template
*/ 

$enable_aboutpage_promo = cs_get_option('enable_homage_promo');
$enable_about_content = cs_get_option('enable_about_content');
$about_content_title = cs_get_option('about_content_title');
$about_content_text = cs_get_option('about_content_text');
$about_content_image = cs_get_option('about_content_image');
$about_content_image_array = wp_get_attachment_image_src(cs_get_option('about_content_image'), 'large');

if( !empty($about_content_image) ){
	$about_content_image = $about_content_image_array[0];
}else{
	$about_content_image = ''.get_template_directory_uri().'/assets/img/homepageblock.jpg';
}

get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <section <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" <?php endif; ?> class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2><?php the_title(); ?></h2>
                        <p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>
                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->

	<?php if($enable_about_content == true) : ?>
    <section class="block about-us-block section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- block text -->
                    <div class="block-text">
                        <h2><?php echo $about_content_title; ?></h2>
                        <?php echo wpautop($about_content_text); ?>
                    </div>
                </div>
				<div class="col-md-6">
					<div class="block-img">
						<img src="<?php echo $about_content_image; ?>" alt="" />
					</div>
				</div>
            </div>
        </div>
    </section>
	<?php endif; ?>

    <?php get_template_part('content/promo'); ?>

    <section class="accordian-section section-padding">
		<div class="container">

			<div class="row">
				<div class="col-md-6">
					<div class="accorian-item">
						
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<pre><?php echo var_dump(cs_get_option('faqs')); ?></pre>
						
							<?php 
								$faq_no = 0; 
								$faqs = cs_get_option('faqs'); 
								// if(!empty( $faqs))(
									foreach($faqs as $faq) :
								// );
								
								$faq_no++; 

								if($faq_no == 1){
									$aria_expanded = 'true';
									$in_class = 'in';
								} else{
									$aria_expanded = 'false';
									$in_class = '';
								}
							?>
							<!-- accordian item-<?php echo $faq_no; ?> -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading-<?php echo $faq_no; ?>">
									<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $faq_no; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse-<?php echo $faq_no; ?>">
									<?php echo $faq['title']; ?>
									</a>
									</h4>
								</div>
								<div id="collapse-<?php echo $faq_no; ?>" class="panel-collapse collapse <?php echo $in_class; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_no; ?>">
									<div class="panel-body">
										<?php echo wpautop($faq['content']); ?>
									</div>
								</div>
							</div>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<!-- accordian right text block -->
					<div class="accordian-right-content">
						<h2>Know More About Us</h2>
						<p>Intrinsicly synergize end-to-end results after robust models. Enthusiastically initiate wireless solutions via leading-edge users. Phosfluorescently repurpose world-class networks whereas bleeding-edge communities. Intrinsicly generate just in time infomediaries with resource maximizing deliverables. Credibly disintermediate collaborative ideas through visionary methods of empowerment.</p>
						<p>Globally reintermediate team building best practices with mission-critical "outside the box" thinking. Efficiently mesh synergistic manufactured products rather than turnkey e-commerce. Globally drive.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

    <?php endwhile; ?>

<?php get_footer(); ?>