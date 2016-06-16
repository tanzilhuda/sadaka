<?php

// Template Name:about us

 get_header();


  ?> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">ABOUT US <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row fadeIn animated">
				<?php 
				$args=array('post_type'=>'about_post','posts_per_page'=>1);
				$query=new WP_Query($args);
				while ($query->have_posts()):$query->the_post();
				 ?>
				<div class="col-md-6">

					<?php the_post_thumbnail(); ?>

				</div>

				<div class="col-md-6">

					<h2 class="title-style-2"><?php the_title(); ?> <span class="title-under"></span></h2>

					<?php the_content(); ?>
					
				</div>
			<?php endwhile; ?>

			</div> <!-- /.row -->

			<div class="section-home about-us">
			            <div class="row">

	<?php 
	      $args=array('post_type'=>'future_post','posts_per_page'=>4);
	      $query= new WP_Query($args);
	      while($query->have_posts()):$query->the_post();
      ?>
                <div class="col-md-3 col-sm-6">
                
                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <?php the_post_thumbnail(); ?>
                        </div>
                        <h3 class="col-title"><?php the_title(); ?></h3>
                        <div class="col-details">

    <?php redmore(19); ?> 


                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"> Read more </a>
                    
                  </div>
                  
                </div>
<?php endwhile; ?>

			                
			            </div> <!-- /.row -->

			      
			    </div> 

		</div> <!-- /.about-us -->


	    <div class="our-team">

	        <div class="container">

	            <h2 class="title-style-1">Our Team <span class="title-under"></span></h2>

	            <div class="row">


<?php 

$args=array('post_type'=>'ourteam_post','posts_per_page'=>4);
				$query=new WP_Query($args);
				while ($query->have_posts()):$query->the_post();
				 ?>
	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                           <?php the_post_thumbnail(); ?>
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#"><?php the_title(); ?></a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>
<?php endwhile; ?>
	               

	            </div> <!-- /.row -->

	        </div>

	    </div>
		


	</div>


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <?php get_footer(); ?>
