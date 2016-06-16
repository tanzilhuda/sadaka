<?php

// Template Name:contact page

 get_header();


  ?>

 <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form"> 

                <?php 
                    while (have_posts()):the_post();
                ?>
                        <h2><a href="#"><?php the_title(); ?></a></h2>
                            <?php the_content() ?>
                            <?php comments_template();?>
                    <?php endwhile; ?>

				</div>
				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> SADAKA CONTACTS <span class="title-under"></span></h2>
					<p>
						<b>Sadaka</b> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla .
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> 135 Hay el nahda, Rabat, Morocco</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 00 210 25 55  55 11</li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> contact@sadaka.org</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

	<div id="contact-map" class="contact-map">
		
	</div>


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>

<?php get_footer(); ?>