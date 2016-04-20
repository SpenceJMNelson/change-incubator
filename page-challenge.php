<?php get_header(); ?>


  <div data-ix="nav-hide-show" class="w-section intro-section interior"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg.png" class="w-hidden-small w-hidden-tiny header-background-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bg2.png" class="w-hidden-small w-hidden-tiny header-background-img img-2">
    <div class="w-container">
      <div class="w-clearfix interior-nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img width="260" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg"></a>
        <div class="interior-nav-links">
          <div class="nav-object"><?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'intro-area-link' ) ); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="w-container">
      <div class="spacer-4em"></div>
      <div class="column-container-wider"></div>
    </div>

    <?php include ('socialblock-interior.php' ); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="narrow-container">
      <h2><?php the_title(); ?></h2>
        <div class="secondary-links">
        <?php
        $children = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=0' );
        if ( $children) : ?>
        <ul>
        <?php echo $children; ?>
        </ul>
        <?php endif; ?>
        </div>
    </div>
    
  </div>

  <div class="w-section interior-content-section">
    <div class="narrow-container">
    <div class="w-richtext w-clearfix">
    <p class="page-level-intro"><?php the_field('page_intro'); ?></p>
    <?php the_content(__('(more...)')); ?>
    </div>
    </div>
  </div>

  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

<?php include ('contentcallout2.php' ); ?>

<?php include ('emailform.php' ); ?>

<?php get_footer(); ?>