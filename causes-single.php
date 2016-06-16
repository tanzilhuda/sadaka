<?php

// Template Name:causes-single page

 get_header();


  ?><!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CAUSE TITLE <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row">

				<div class="col-md-12 ">

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

				<div class="col-md-12">

					<div id="cause-carousel" class="carousel slide cause-carousel" data-ride="carousel">

						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#cause-carousel" data-slide-to="0" class="active"></li>
						    <li data-target="#cause-carousel" data-slide-to="1"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">

						    <div class="item active">

						      <img src="assets/images/causes/slider/cause-slider-1.jpg" alt="">
						      
						    </div>

						    <div class="item">

						      <img src="assets/images/causes/slider/cause-slider-2.jpg" alt="">
						      
						    </div>

						  </div>
					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-md-6">

					<h2 class="title-style-2"> Cause sub title <span class="title-under"></span></h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

				<div class="col-md-6">

					<h2 class="title-style-2"> Cause sub title <span class="title-under"></span></h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

			</div>

			<div class="row ">

				<div class="col-md-12">

					<h2 class="title-style-2"> Tabs <span class="title-under"></span></h2>

					
						<div role="tabpanel">

							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
							    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
							    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
							    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							  </ul>

							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="home">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur mollitia, libero quisquam impedit obcaecati, dignissimos, eum similique minima ab amet eos sequi distinctio qui modi? Possimus quos, fugit quia.</div>
							    <div role="tabpanel" class="tab-pane" id="profile">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae aut culpa a commodi. Quidem asperiores aliquid sequi incidunt quas soluta eum ab fugiat deleniti in at iste, illum ipsam nisi.</div>
							    <div role="tabpanel" class="tab-pane" id="messages">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex aliquam corrupti quibusdam nostrum, aspernatur iure illo, alias vitae, reiciendis culpa explicabo minus iusto ipsum cum tempore incidunt iste praesentium nihil.</div>
							    <div role="tabpanel" class="tab-pane" id="settings">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ducimus ullam distinctio fugiat voluptates! Vero quis adipisci asperiores aliquam ullam doloremque dolor, reprehenderit, accusamus nisi ut eveniet quas reiciendis dolore.</div>
							  </div>

						</div>

						<p></p>
					

				</div>

				<div class="col-md-12">
				
					<h2 class="title-style-2"> Accordion <span class="title-under"></span></h2>

					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					 
<?php $args=array('post_type'=>'causes_tab_post','posts_per_page'=>4);

$query=new WP_Query($args);
while($query->have_posts()):$query-> the_post();
 ?>

					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          <?php the_title() ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
					      <?php the_content(); ?>
					       
					      </div>
					    </div>
					  </div>
<?php endwhile; ?>


					  
					  <!-- <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					           <?php the_content(); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="panel-body">
					      <?php the_title() ?>
					      </div>
					    </div>
					  </div> -->
					</div>

					<p></p>

				</div>


				<div class="col-md-12">

					<h2 class="title-style-2">Tables <span class="title-under"></span></h2>
					
						<h4>TABLE STYLE 1</h4>
						<table class="table table-style-1">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>First Name</th>
					          <th>Last Name</th>
					          <th>Username</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <th scope="row">1</th>
					          <td>Mark</td>
					          <td>Otto</td>
					          <td>@mdo</td>
					        </tr>
					        <tr>
					          <th scope="row">2</th>
					          <td>Jacob</td>
					          <td>Thornton</td>
					          <td>@fat</td>
					        </tr>
					        <tr>
					          <th scope="row">3</th>
					          <td>Larry</td>
					          <td>the Bird</td>
					          <td>@twitter</td>
					        </tr>
					      </tbody>
					    </table>

						<h4>TABLE STYLE 2</h4>
					    <table class="table table-style-2">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>First Name</th>
					          <th>Last Name</th>
					          <th>Username</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <th scope="row">1</th>
					          <td>Mark</td>
					          <td>Otto</td>
					          <td>@mdo</td>
					        </tr>
					        <tr>
					          <th scope="row">2</th>
					          <td>Jacob</td>
					          <td>Thornton</td>
					          <td>@fat</td>
					        </tr>
					        <tr>
					          <th scope="row">3</th>
					          <td>Larry</td>
					          <td>the Bird</td>
					          <td>@twitter</td>
					        </tr>

					          <tr>
					          <th scope="row">1</th>
					          <td>Mark</td>
					          <td>Otto</td>
					          <td>@mdo</td>
					        </tr>
					        <tr>
					          <th scope="row">2</th>
					          <td>Jacob</td>
					          <td>Thornton</td>
					          <td>@fat</td>
					        </tr>
					        <tr>
					          <th scope="row">3</th>
					          <td>Larry</td>
					          <td>the Bird</td>
					          <td>@twitter</td>
					        </tr>

					      </tbody>
					    </table>
					
				</div>
				
			</div>

		</div>

		

		


	</div> <!-- /.main-container  -->

<?php get_footer(); ?>