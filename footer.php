

    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                <?php dynamic_sidebar( 'foter_widget' ); ?>
                    
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                Sadaka @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Ouarmedia</a>
            </div>
        </div>
        
    </footer> <!-- main-footer -->







    <!--  Scripts
    ================================================== -->

    <!-- jQuery -->
    <script src="<?php echo esc_url(get_template_directory_uri());?>///ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Bootsrap javascript file -->
    <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
<?php wp_footer(); ?>
    </body>
</html>
