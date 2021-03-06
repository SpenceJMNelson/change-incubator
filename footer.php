  <div class="w-section callout-section footer-section">
    <div class="narrow-container">
      <div class="w-row">
        <div class="w-col w-col-6"><a href="http://www.geofunders.org"><img width="159" src="<?php bloginfo('stylesheet_directory'); ?>/images/whitelogogeo.svg" class="footer-logo"></a>
          <p class="footer-text">1725 DeSales St. NW Suite 404
            <br>Washington, DC 20036
            <br>Phone: (202) 898-1840
            <br>Fax: (202) 898-0318
            <br>info@geofunders.org</p>
        </div>
        <div class="w-col w-col-6">
          <div class="footer-callout">
            <?php $value = get_field( "footer_callout_section", 201 ); if( $value ) { echo $value; } else { echo ''; } ?>
          </div>
          <div class="footer-links"><a href="<?php echo get_page_link(132); ?>" class="footer-link">Contact us</a><a href="<?php echo get_page_link(134); ?>" class="footer-link">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-clearfix w-hidden-small w-hidden-tiny fixed-nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img width="184" src="<?php bloginfo('stylesheet_directory'); ?>/images/ci-logo.svg" class="sticky-logo"></a>
    <div class="fixed-nav-items">
      <div class="nav-object"><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'intro-area-link' ) ); ?>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>