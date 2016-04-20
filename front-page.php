<?php get_header(); ?>
<body class="body-styles">
  <div data-ix="nav-hide-show" class="w-section intro-section"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg.png" class="w-hidden-tiny header-background-img homepage"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg2.png" class="w-hidden-tiny header-background-img img-2 homepage">
    <div class="w-container"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img width="260" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" class="homepage-logo"></a>
      <div class="w-hidden-tiny spacer-4em"></div>
      <div class="w-clearfix column-container-wider">
        <div class="wide-column-left-inner">
          <div class="vertical-social-block">
            <a href="<?php $value = get_field( "social_link-facebook", 201 ); if( $value ) { echo $value; } else { echo ''; } ?>" class="w-inline-block social-link"><img width="32" src="<?php bloginfo('stylesheet_directory'); ?>/images/socail-02.svg" class="social-icon">
            </a>
            <a href="<?php $value = get_field( "social_link-linkedin", 201 ); if( $value ) { echo $value; } else { echo ''; } ?>" class="w-inline-block social-link"><img width="32" src="<?php bloginfo('stylesheet_directory'); ?>/images/socail-03.svg" class="social-icon">
            </a>
            <a href="<?php $value = get_field( "social_link-twitter", 201 ); if( $value ) { echo $value; } else { echo ''; } ?>" class="w-inline-block social-link"><img width="32" src="<?php bloginfo('stylesheet_directory'); ?>/images/socail-01.svg" class="social-icon">
            </a>
          </div>
        </div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  

        <div class="wide-column-right-inner">
          <h2><?php the_field('homepage_headline'); ?></h2>
          <p class="page-level-intro"><?php the_field('homepage_intro'); ?></p>
          <p><?php the_field('homepage_text'); ?></p>
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
                  <div class="section-marker"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/indicator-01.svg" class="indicator-img"></div>
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
    <div class="narrow-container" style="text-align:center">
          <p class="page-level-intro white"><?php the_field('home_interstitial_1_heading'); ?></p>
          <div class="homepage-4-up-stat">
                <p class="statistic-number"><?php the_field('home_interstitial_1_stat1'); ?></p>
                <p class="large-paragraph white"><?php the_field('home_interstitial_1_stat2'); ?></p>
              </div>
            <div class="homepage-4-up-stat">
                <p class="statistic-number"><?php the_field('home_interstitial_1_stat3'); ?></p>
                <p class="large-paragraph white"><?php the_field('home_interstitial_1_stat4'); ?></p>
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
                  <div class="section-marker"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/indicator-02.svg" class="indicator-img"></div>
                </div>
                <div class="narrow-column-right">
                  <div>
                    <h3><?php the_field('home_section_2_heading'); ?></h3>
                    <p class="large-paragraph"><?php the_field('home_section_2_text'); ?></p><a href="<?php echo get_page_link(6); ?>" class="w-button button orange-outline">More on the Challenge</a>
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
  <div class="header-offset-jumplink" id="sign-up"></div>
    <div class="narrow-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <p class="page-level-intro white"><?php the_field('email_description'); ?></p>
        </div>
        <div class="w-col w-col-6">
          <?php
        gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true );
        ?>
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
                  <div class="section-marker"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/indicator-03.svg" class="indicator-img"></div>
                </div>
                <div class="narrow-column-right">
                  <div>
                    <h3><?php the_field('home_section_3_heading'); ?></h3>
                    <p class="large-paragraph"><?php the_field('home_section_3_text'); ?></p><a href="<?php echo get_page_link(9); ?>" class="w-button button orange-outline">More on Our Solution</a>
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