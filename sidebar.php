
 

<div class="w-section content-callout-section">
    <div class="w-container">
      <div class="centered">
        <div class="section-marker"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/indicator-04.svg" class="indicator-img"></div>

        <h3><a href="<?php echo get_page_link(115); ?>" class="w-button button orange-outline">Learn More About The Change Incubator</a></h3>
        <p>or Check out additional resources to help you build effective,<br/> open and honest relationships with the nonprofits you support.</p>
      </div>
      <div class="spacer-4em"></div>
      <div class="w-row">
        <?php
        global $post;
        $myposts = get_posts('numberposts=1&category=5');
        foreach($myposts as $post) :
        ?>
        
        
        <div class="w-col w-col-6">

          <div class="w-clearfix resource"><span class="resource-tag"><?php the_category(); ?></span>
            <h4 class="resource-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <!-- <div class="w-clearfix byline"><img src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" class="author-image">
              <div class="resource-byline">Author Name<span class="dateline"><?php the_date(); ?></span>
              </div>
            </div>-->
            <p class="large-paragraph"><?php the_excerpt(); ?></p><a href="<?php echo get_category_link(5); ?> " class="w-button button orange-outline">More in <?php echo get_cat_name(5);?></a>
          </div>
        </div>
        <?php endforeach; ?>

        <?php
        global $post;
        $myposts = get_posts('numberposts=1&category=4');
        foreach($myposts as $post) :
        ?>
        
        
        <div class="w-col w-col-6">

          <div class="w-clearfix resource"><span class="resource-tag"><?php the_category(); ?></span>
            <h4 class="resource-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <!-- <div class="w-clearfix byline"><img src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" class="author-image">
              <div class="resource-byline">Author Name<span class="dateline"><?php the_date(); ?></span>
              </div>
            </div>-->
            <p class="large-paragraph"><?php the_excerpt(); ?></p><a href="<?php echo get_category_link('4'); ?>" class="w-button button orange-outline">More in <?php echo get_cat_name(4);?></a>
          </div>
        </div>
        <?php endforeach; ?>

       
      </div>
    </div>
     <div class="centered"><a href="<?php echo get_page_link(11); ?>" class="w-button button orange-outline" style="margin:0 auto;">View the full Resource Library</a></div>
  </div>
