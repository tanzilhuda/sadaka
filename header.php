<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <?php bloginfo('title') ?>
        <meta name="description" content="<?php bloginfo('description') ;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='<?php echo esc_url(get_template_directory_uri());?>/http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='<?php echo esc_url(get_template_directory_uri());?>/http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ;?>">
        <!-- Modernizr -->
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/modernizr-2.6.2.min.js"></script>

<?php wp_head(); ?>
    </head>

    <body>


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="<?php bloginfo('home');?>"><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/sadaka-logo.png" alt=""></a>
                  
                </div>

                <div id="menu" class="pull-right">
                      <?php 


                      wp_nav_menu(array(
    'theme_location'=>'main_menu'

)); ?>
                   <!-- <ul class="nav navbar-nav">

                    <li><a class="is-active" href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="has-child"><a href="#">CAUSES</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="causes.html">Causes list </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                         <li class="submenu-item"><a href="causes-single.html">Single cause </a></li>
                      </ul>

                    </li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="contact.html">CONTACT</a></li>

                  </ul>  -->

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->