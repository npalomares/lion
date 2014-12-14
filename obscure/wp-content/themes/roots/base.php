<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
  <div class="hero-wrap">
  <?php if( is_front_page() ) { ?>
    <div class="slideshow-wrap">
      <div class="slideshow container">
        <h6 class="text-center"><i>Opening December 2nd, 2014</i></h6>
        <?php echo do_shortcode('[metaslider id=43]'); ?>
        <!-- <p class="text-center">
          <img src="http://localhost/lion/obscure/media/logoSM.jpg" alt="The Little Lion Cafe and Bar" title="The Little Lion Cafe and Bar" class="logo-img" />
        </p> -->
        <?php //echo do_shortcode('[gm_slideshow]'); ?>
      </div>
    </div>

    <section class="cta-wrapper">
      <div class="container">
        <?php dynamic_sidebar('call-to-action-a'); ?>
        <?php dynamic_sidebar('call-to-action-b'); ?>
        <?php dynamic_sidebar('call-to-action-c'); ?>
      </div>
    </section>
    
    <?php } else { ?>
    

    <!-- This may go away - Opt for different design -->
    <div class="interior-banner-wrap">
      <div class="interior-banner container">
        <h2 class="banner-title text-center"><?php the_title(); ?></h2>
      </div>
    </div>

    <?php } ?>


  <div class="wrap container" role="document">
    <div class="content row">

      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php if( !is_front_page() ) { ?>
    <section class="cta-wrapper">
      <div class="container">
        <?php dynamic_sidebar('call-to-action-a'); ?>
        <?php dynamic_sidebar('call-to-action-b'); ?>
        <?php dynamic_sidebar('call-to-action-c'); ?>
      </div>
    </section>

  <?php } ?>

  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Join Our Newsletter</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="51" title="Newsletter"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
