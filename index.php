<?php get_header(); ?>


  <div data-ix="nav-hide-show" class="w-section intro-section interior">
    <?php include ('socialblock-interior.php' ); ?>
  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg.png" class="w-hidden-small w-hidden-tiny header-background-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg2.png" class="w-hidden-small w-hidden-tiny header-background-img img-2">
    <div class="w-container">
      <div class="w-clearfix interior-nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img width="260" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg"></a>
        <div class="interior-nav-links">
          <div class="nav-object"><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'intro-area-link' ) ); ?>
          </div>
        </div>
      </div>
      <div class="w-hidden-small w-hidden-tiny spacer-4em"></div>
      <div class="column-container-wider"></div>
    </div>
    <div class="narrow-container">
      <h2>Resources</h2>
      <?php wp_nav_menu( array( 'theme_location' => 'resources-menu', 'container_class' => 'secondary-links' ) ); ?>
    </div>
  </div>
  </div>
  <div class="w-section interior-content-section">
    






    <div class="post-content index-post-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div>
      <span class="resource-tag"><?php the_category(); ?></span>
        <h2 class="index-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="w-clearfix byline"><img src="<?php the_field('author_photo'); ?>" class="author-image">
          <div class="resource-byline post">by <?php the_field('author_name'); ?>, <?php the_field('author_title'); ?> <span class="dateline">| <?php the_time('F jS, Y') ?></span>
          </div>
        </div>
        <div class="w-richtext w-clearfix">
          <p class="page-level-intro"><?php echo(get_the_excerpt()); ?></p>
        </div>
      </div>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    </div>
  </div>


  
  <?php include ('emailform.php' ); ?>

  <?php get_footer(); ?>