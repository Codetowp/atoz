<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AtoZ
 */

?>


<footer class="footer-bottom" style="background-color: <?php  echo esc_attr(get_theme_mod( 'atoz_footer_bck_color' ));?>";>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3 col-xs-12 col-sm-12">
            
               <?php 
                if (  is_active_sidebar( 'widget-footer1' ) ) {
	               dynamic_sidebar('widget-footer1' );
                }
                else
                { ?>
			 <section class="widget widget_text">
               <h2 class="widget-title"><?php esc_html_e( 'Footer Widgets 1', 'atoz'); ?></h2>
              <div class="textwidget"><p>Go to Appearance -> Widgets and add upto four footer widgets you like.</p>
				</div>
			      </section>
              <?php }?>
			  
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12 ">

               <?php 
                if (  is_active_sidebar( 'widget-footer2' ) ) {
	               dynamic_sidebar('widget-footer2' );
                }
                else
                { ?>
			 <section class="widget widget_archive">
               <h2 class="widget-title">categories</h2>
               <ul >
                <li><a href="#"> Support <span >(01)</span> </a> </li><br>
                <li><a href="#"> DESIGN<span >(10)</span> </a></li><br>
                <li><a href="#"> USER INTERFACE<span>(100)</span> </a> </li><br>
                <li><a href="#"> Wiki<span >(100)</span> </a></li>
               </ul>
			      </section>
              <?php }?>
       
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
          
                <?php 
                if (  is_active_sidebar( 'widget-footer3' ) ) {
	               dynamic_sidebar('widget-footer3' );
                }
                else
                { ?>
			<section  class="widget recent-po ">
                <h2 class="widget-title">Recent posts</h2>
                 <ul class="media-list main-list ltst-upd">
              <li class="media"> <a class="pull-left" href="#"> <img class="media-object img-responsive" src="<?php echo get_template_directory_uri();?>/img/blog-.jpg" alt="..."> </a>
                <div class="media-body">
                  <p class="media-heading"><a href="#">Name of the post</a></p>
                  <p class="by-author"><a href="#">Read more</a></p>
                </div>
              </li>
              <li class="media"> <a class="pull-left" href="#"> <img class="media-object img-responsive" src="<?php echo get_template_directory_uri();?>/img/blog-1.jpg" alt="..."> </a>
                <div class="media-body">
                  <p class="media-heading"><a href="#">Name of the post</a></p>
                  <p class="by-author"><a href="#">Read more</a></p>
                </div>
              </li>
            </ul>
                <?php }?>
           
          </section>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-12">
         
            
             <?php 
                if (  is_active_sidebar( 'widget-footer4' ) ) {
	               dynamic_sidebar('widget-footer4' );
                }
                else
                { ?>
             <h2 class="widget-title">Follow us</h2>
          <ul class="list-inline">
            <li ><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li ><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li ><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li ><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li ><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li ><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
            <?php }?>
        </div>
      </div>
      <div class=" col-md-12 col-sm-12  fnav text-center">
        <p>ALL RIGHTS RESERVED. COPYRIGHT &#169; 2017. A theme by <?php printf( '<a href="' . esc_url( 'https://dcrazed.com/' ) . '" target="_blank">Dcrazed</a>' ); ?> </p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script>
       new WOW().init();
</script> 

<!-- Javascripts
    ================================================== --> 
</body>
</html>