<?php get_header(); ?>
<body class="body-styles">
  <div data-ix="nav-hide-show" class="w-section intro-section"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg.png" class="w-hidden-tiny header-background-img homepage"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg2.png" class="w-hidden-tiny header-background-img img-2 homepage">
    <div class="w-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img width="260" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" class="homepage-logo"></a>
      <div class="w-hidden-tiny spacer-4em"></div>
      <div class="w-clearfix column-container-wider">
        <div class="wide-column-left-inner">
          <div class="vertical-social-block">
            <a href="#" class="w-inline-block social-link"><img width="32" src="<?php bloginfo('stylesheet_directory'); ?>/images/socail-02.svg" class="social-icon">
            </a>
            <a href="#" class="w-inline-block social-link"><img width="32" src="<?php bloginfo('stylesheet_directory'); ?>/images/socail-03.svg" class="social-icon">
            </a>
            <a href="#" class="w-inline-block social-link"><img width="32" src="<?php bloginfo('stylesheet_directory'); ?>/images/socail-01.svg" class="social-icon">
            </a>
          </div>
        </div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  

        <div class="wide-column-right-inner">
          <h2><?php the_field('homepage_headline'); ?></h2>
          <p class="page-level-intro"><?php the_field('homepage_intro'); ?></p>
          <div class="navigation-homepage">
            <div class="nav-object"><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'intro-area-link' ) ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="w-section image-text-section" style="background-image: url('<?php the_field('section_1_image'); ?>');">
    <div class="w-row">
      <div class="w-col w-col-6 w-clearfix no-column-margin">
        <div class="left-homepage-callout-wrapper">
          <div class="homepage-callout-inner-wrapper">
            <div class="w-clearfix homepage-callout-content">
              <div class="w-clearfix narrow-column-layout">
                <div class="narrow-column-left">
                  <div class="section-marker">1</div>
                </div>
                <div class="narrow-column-right">
                  <div>
                    <h3><?php the_field('home_section_1_heading'); ?></h3>
                    <p class="large-paragraph"><?php the_field('home_section_1_text'); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-col w-col-6 no-column-margin"></div>
    </div>
  </div>
  <div class="w-section callout-section">
    <div class="narrow-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <p class="page-level-intro white"><?php the_field('home_interstitial_1_heading'); ?></p>
        </div>
        <div class="w-col w-col-6">
          <div class="w-row">
            <div class="w-col w-col-6">
              <div class="homepage-4-up-stat">
                <p class="large-paragraph white"><?php the_field('home_interstitial_1_stat1'); ?></p>
              </div>
            </div>
            <div class="w-col w-col-6">
              <div class="homepage-4-up-stat">
                <p class="large-paragraph white"><?php the_field('home_interstitial_1_stat2'); ?></p>
              </div>
            </div>
          </div>
          <div class="w-row">
            <div class="w-col w-col-6">
              <div class="homepage-4-up-stat">
                <p class="large-paragraph white"><?php the_field('home_interstitial_1_stat3'); ?></p>
              </div>
            </div>
            <div class="w-col w-col-6">
              <div class="homepage-4-up-stat">
                <p class="large-paragraph white"><?php the_field('home_interstitial_1_stat4'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section image-text-section" style="background-image: url('<?php the_field('section_2_image'); ?>');">
    <div class="w-row">
      <div class="w-col w-col-6 no-column-margin"></div>
      <div class="w-col w-col-6 w-clearfix no-column-margin">
        <div class="left-homepage-callout-wrapper right">
          <div class="w-clearfix homepage-callout-inner-wrapper right">
            <div class="w-clearfix homepage-callout-content right">
              <div class="w-clearfix narrow-column-layout right">
                <div class="narrow-column-left">
                  <div class="section-marker">2</div>
                </div>
                <div class="narrow-column-right">
                  <div>
                    <h3><?php the_field('home_section_2_heading'); ?></h3>
                    <p class="large-paragraph"><?php the_field('home_section_2_text'); ?></p><a href="#" class="w-button button orange-outline">More on the Challenge</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section callout-section">
    <div class="narrow-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <p class="page-level-intro white">Seeing issues in your organization? Get in touch and join the Incubator.</p>
        </div>
        <div class="w-col w-col-6">
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix signup-form">
              <input id="name" type="text" placeholder="Enter your name" name="name" data-name="Name" class="w-input callout-email-signup">
              <input type="submit" value="›" data-wait="Please wait..." class="w-button callout-submit-button">
            </form>
            <div class="w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section image-text-section" style="background-image: url('<?php the_field('section_3_image'); ?>');">
    <div class="w-row">
      <div class="w-col w-col-6 w-clearfix no-column-margin">
        <div class="left-homepage-callout-wrapper">
          <div class="homepage-callout-inner-wrapper">
            <div class="w-clearfix homepage-callout-content">
              <div class="w-clearfix narrow-column-layout">
                <div class="narrow-column-left">
                  <div class="section-marker">3</div>
                </div>
                <div class="narrow-column-right">
                  <div>
                    <h3><?php the_field('home_section_3_heading'); ?></h3>
                    <p class="large-paragraph"><?php the_field('home_section_3_text'); ?></p><a href="#" class="w-button button orange-outline">More on Our Solution</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-col w-col-6 no-column-margin"></div>
    </div>
  </div>

  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

  <?php get_sidebar(); ?>  

  <?php get_footer(); ?>