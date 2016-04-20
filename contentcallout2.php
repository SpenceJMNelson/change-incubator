<div class="content-callout-section">
   <div class="w-container">
      <div class="centered">
        <?php 
              $value = get_field( "resource_section-intro", 201 );
              if( $value ) {
              echo $value;
              } else {
              echo '';
              }
          ?>
      </div>
      <div class="spacer-4em"></div>
      <div class="w-row">
        <?php
        global $post;
        $myposts = get_posts('numberposts=3&category=0');
        foreach($myposts as $post) :
        ?>
        
        
        <div class="w-col w-col-4">
          <div class="w-clearfix resource"><span class="resource-tag"><?php the_category(); ?></span>
            <h4 class="resource-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <!-- <div class="w-clearfix byline"><img src="https://d3e54v103j8qbb.cloudfront.net/img/image-placeholder.svg" class="author-image">
              <div class="resource-byline">Author Name<span class="dateline"><?php the_date(); ?></span>
              </div>
            </div>-->
            <p class="large-paragraph"><?php the_excerpt(); ?></p><a href="<?php the_permalink(); ?>" class="w-button button orange-outline">Read More</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="centered"><a href="<?php echo get_page_link(11); ?>" class="w-button button orange-outline" style="margin:0 auto;">View the full Resource Library</a></div>
    </div>
  