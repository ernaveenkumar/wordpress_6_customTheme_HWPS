  <!-- https://www.motherspridepreschool.com/vision-mission.php -->

  <!-- https://www.youtube.com/watch?v=DcbPVzq8lHY&t=1924s -->
   <div class="container-fluid ">
     <header class="row">
      <section class="col logo pt-2 d-sm-flex justify-content-sm-center" >
          <?php $upload_dir = wp_upload_dir(); ?>
            <img
            src="<?php echo $upload_dir['url'].'/';?>THEHAWTHORNSCHOOLlogo.png"
            alt="logo"
            class="logo img-fluid rounded-circle img-thumbnail border border-warning"
            />
      </section>
    </header>
    </div>
    <div class="container-fluid ">
    <header class="row">
      <section class="col-12 slogan pt-2">
          <div class="d-md-flex flex-row">
            <div class="schoolname_logo ms-2 flex-grow-1">
              <h3 class="slogan-h text-center text-uppercase fw-bold ">The Hawthorn School</h3>
              <p class="slogan-p text-center text-capitalize fw-bolder">Together Towards the Future</p>
              <p class="slogan-p text-center text-capitalize fw-semibold" >Dream it. Beleive it. Do it.</p>
            </div>
          </div>
      </section>
      </header>
    </div>


  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
    <span class="navbar-toggler-icon"></span>
</button>
    <a class="navbar-brand" href="#">Navbar</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>