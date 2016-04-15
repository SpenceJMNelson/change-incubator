
 

<div class="w-section content-callout-section">
    <div class="w-container">
      <div class="centered">
        <div class="section-marker">4</div>
        <h3>Check Out These Resources and <br>Learn More About The Change Incubator</h3>
      </div>
      <div class="spacer-4em"></div>
      <div class="w-row">
        <?php
        global $post;
        $myposts = get_posts('numberposts=2&category=0');
        foreach($myposts as $post) :
        ?>
        
        
        <div class="w-col w-col-6">
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
  </div>
