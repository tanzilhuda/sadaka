<?php

// Template Name:causes

 get_header();


  ?>

  <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">OUR CAUSES <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="our-causes fadeIn animated">

	        <div class="container">

	            <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

	            <div class="row">

	      				 <?php 

                $args=array(
                  'post_type'=>'causes_post','posts_per_page'=>4
                  );
                $query= new Wp_Query($args);

                while($query->have_posts()):$query->the_post();

                 ?>
                <div class="col-md-3 col-sm-6">

                    <div class="cause">

                        <?php the_post_thumbnail(); ?>

                        <div class="progress cause-progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                            10$ / 500$
                          </div>
                        </div>

                        <h4 class="cause-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="cause-details">
                           <?php redmore(29); ?>
                        </div>

                        <div class="btn-holder text-center">

                          <a href="<?php the_permalink(); ?>" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
                          
                        </div>

                        

                    </div> <!-- /.cause -->
                    
                </div> 
              <?php endwhile; ?>



	            </div>

	         </div>
	        
	    </div> <!-- /.our-causes -->

		


	</div> <!-- /.main-container  -->


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>
<?php get_footer(); ?>


        <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">

                 <?php 
                    while (have_posts()):the_post();
                ?>
                       <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>
                            <?php the_content() ?>
                            <?php comments_template();?>
                    <?php endwhile; ?>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->




       
        
   
