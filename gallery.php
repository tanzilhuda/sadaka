

<?php

// Template Name:gallery

 get_header();


  ?>

 <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">
				<?php 
                $args=array('post_type'=>'gallery_post','posts_per_page'=>-1);

                $query=new WP_Query($args);

                while( $query->have_posts()):$query->the_post();
                 ?>

					<a href="assets/images/gallery/7610291856_931fb9f461_k.jpg" class="col-md-3 col-sm-4 gallery-item lightbox">

						<?php the_post_thumbnail(); ?>

						<span class="on-hover">
							<span class="hover-caption"><?php the_title(); ?></span>
						</span>

					</a> <!-- /.gallery-item -->

					<?php endwhile; ?>
				
			</div>
			
		</div>


	</div> <!-- /.main-container  -->

    
<?php get_footer(); ?>