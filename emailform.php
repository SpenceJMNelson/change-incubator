<div class="w-section callout-section interior">
    <div class="narrow-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <p class="page-level-intro white">

          <?php 
              $value = get_field( "email_description", 4 );

              if( $value ) {

              echo $value;

              } else {

              echo 'empty';

              }
          ?>

          </p>
        </div>
        <div class="w-col w-col-6">
          <?php
        gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true );
        ?>
        </div>
        

      </div>
    </div>
  </div>