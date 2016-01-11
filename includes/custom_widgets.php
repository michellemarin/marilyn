<?php
// ==================================================================
// About author
// ==================================================================
class ace_author extends WP_Widget {

  function ace_author() {
    $widget_ops = array( 'description' => __( 'Show a short biography of author','ace' ) );
    //parent::WP_Widget( false, __( 'Ace Blog Author','ace' ), $widget_ops );      
    WP_Widget::__construct( false, __( 'Ace Blog Author','ace' ), $widget_ops );      
  }

  function widget( $args, $data ) {  
  extract( $args );
    $title          = $data['title'];
    $bio            = $data['bio'];
    $pic            = $data['pic'];
    $read_more_text = $data['read_more_text'];
    $read_more_url  = $data['read_more_url'];

    echo $before_widget; ?>

      <?php if ( $title ) { echo $before_title . $title . $after_title; } ?>

      <?php if ( $data['pic'] ) { ?><img src="<?php echo $pic; ?>" class="alignleft" alt="<?php echo $title; ?>" /><?php } ?>
      <p><?php echo $bio; ?></p><?php if ( $data['read_more_url'] ) echo '<br /><a href="' . $read_more_url . '">' . $read_more_text . '</a>'; ?>
      <div class="clearfix">&nbsp;</div>

    <?php echo $after_widget; }
    function update( $new_data, $old_data ) { return $new_data; }
    function form( $data ) {
      $title          = isset ( $data['title'] ) ? esc_attr( $data['title'] ) : '';
      $bio            = isset ( $data['bio'] ) ? esc_attr( $data['bio'] ) : '';
      $pic            = isset ( $data['pic'] ) ? esc_attr( $data['pic'] ) : '';
      $read_more_text = isset ( $data['read_more_text'] ) ? esc_attr( $data['read_more_text'] ) : '';
      $read_more_url  = isset ( $data['read_more_url'] ) ? esc_attr( $data['read_more_url'] ) : '';
    ?>

<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'pic' ); ?>"><?php _e( 'Picture','ace' ); ?>:</label>
  <p><em><?php _e( 'Please upload image via Media -> Add New and get the image file URL','ace' ); ?></em></p>
  <input type="text" name="<?php echo $this->get_field_name( 'pic' ); ?>"  value="<?php echo $pic; ?>" class="widefat" id="<?php echo $this->get_field_id( 'pic' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'bio' ); ?>"><?php _e( 'Short Description','ace' ); ?>:</label>
  <textarea name="<?php echo $this->get_field_name( 'bio' ); ?>" class="widefat" rows="5" id="<?php echo $this->get_field_id( 'bio' ); ?>"><?php echo $bio; ?></textarea>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'read_more_text' ); ?>"><?php _e( 'Read More Text (optional)','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'read_more_text' ); ?>"  value="<?php echo $read_more_text; ?>" class="widefat" id="<?php echo $this->get_field_id( 'read_more_text' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'read_more_url' ); ?>"><?php _e( 'Read More URL (optional)','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'read_more_url' ); ?>"  value="<?php echo $read_more_url; ?>" class="widefat" id="<?php echo $this->get_field_id( 'read_more_url' ); ?>" />
</p>
       
  <?php }

}

function ace_author() {
  register_widget( 'ace_author' );
}
add_action( 'widgets_init','ace_author');

// ==================================================================
// Location
// ==================================================================
class ace_contact_location extends WP_Widget {

  function ace_contact_location() {
    $widget_ops = array( 'description' => __( 'This is a contact and location widget','ace' ) );
    //parent::WP_Widget( false, __( 'Ace Contact Location','ace' ), $widget_ops );      
    WP_Widget::__construct( false, __( 'Ace Contact Location','ace' ), $widget_ops );      
  }
	
  function widget( $args, $data ) {  
  extract( $args );
    $title    = $data['title'];
    $location = $data['location'];
    $email    = $data['email'];
    $phone    = $data['phone'];
    $fax      = $data['fax'];

    echo $before_widget; ?>
    
      <?php if ( $title ) { echo $before_title . $title . $after_title; } ?>

      <ul class="location">
        <?php if ( $data['location'] ) { ?><li class="address"><?php $line_break = nl2br( $data['location'] ); echo $line_break; ?></li><?php } ?>
        <?php if ( $data['email'] ) echo '<li class="email">' . $email . '</li>'; ?>
        <?php if ( $data['phone'] ) echo '<li class="phone">' . $phone . '</li>'; ?>
        <?php if ( $data['fax'] ) echo '<li class="fax">' . $fax . '</li>'; ?>
      </ul>
      <div class="clearfix">&nbsp;</div>

    <?php echo $after_widget; }
    function update( $new_data, $old_data ) { return $new_data; }
    function form($data) {
      $title    = isset( $data['title'] ) ? esc_attr( $data['title'] ) : '';
      $location = isset( $data['location'] ) ? esc_attr( $data['location'] ) : '';
      $email    = isset( $data['email'] ) ? esc_attr( $data['email'] ) : '';
      $phone    = isset( $data['phone'] ) ? esc_attr( $data['phone'] ) : '';
      $fax      = isset( $data['fax'] ) ? esc_attr( $data['fax'] ) : '';
    ?>

<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'location' ); ?>"><?php _e( 'Address','ace' ); ?>:</label>
  <textarea name="<?php echo $this->get_field_name( 'location' ); ?>" class="widefat" rows="5" id="<?php echo $this->get_field_id( 'location' ); ?>"><?php echo $location; ?></textarea>
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email address','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'email' ); ?>"  value="<?php echo $email; ?>" class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone number','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'phone' ); ?>"  value="<?php echo $phone; ?>" class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'fax' ); ?>"><?php _e( 'Fax number','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'fax' ); ?>"  value="<?php echo $fax; ?>" class="widefat" id="<?php echo $this->get_field_id( 'fax' ); ?>" />
</p>

  <?php }

}

function ace_contact_location() {
  register_widget( 'ace_contact_location' );
}
add_action( 'widgets_init','ace_contact_location' );

// ==================================================================
// Ace Featured
// ==================================================================
class ace_featured extends WP_Widget {

  function ace_featured() {
    $widget_ops = array( 'description' => __( 'Featured widget','ace' ) );
    //parent::WP_Widget( false, __( 'Ace Featured','ace' ), $widget_ops );      
    WP_Widget::__construct( false, __( 'Ace Featured','ace' ), $widget_ops );      
  }

  function widget( $args, $data ) {  
  extract( $args );
    $title  = $data['title'];
    $pic    = $data['pic'];
    $url    = $data['url'];

    echo $before_widget; ?>


      <?php if ( $url ) { echo '<a href="' . $url . '">'; } ?>
        <?php if ( $pic ) { ?><img src="<?php echo $pic; ?>" width="300" height="300" alt="<?php if ( $title ) { echo $title; } ?>" /><?php } ?>
      <?php if ( $url ) { echo '</a>'; } ?>


      <?php if ( $url ) { echo '<a href="' . $url . '">'; } ?>
        <?php if ( $title ) { echo '<h3 class="home-widgets-title">' . $title . '</h3>'; } ?>
      <?php if ( $url ) { echo '</a>'; } ?>



    <?php echo $after_widget; }
    function update( $new_data, $old_data ) { return $new_data; }
    function form( $data ) {
      $title  = isset( $data['title'] ) ? esc_attr( $data['title'] ) : '';
      $pic    = isset( $data['pic'] ) ? esc_attr( $data['pic'] ) : '';
      $url    = isset( $data['url'] ) ? esc_attr( $data['url'] ) : '';
    ?>

<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'pic' ); ?>"><?php _e( 'Picture (300x300)','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'pic' ); ?>"  value="<?php echo $pic; ?>" class="widefat" id="<?php echo $this->get_field_id( 'pic' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Image/Title URL (optional)','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'url' ); ?>"  value="<?php echo $url; ?>" class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" />
</p>
       
  <?php }

}

function ace_featured() {
  register_widget( 'ace_featured' );
}
add_action( 'widgets_init','ace_featured');

// ==================================================================
// Social network
// ==================================================================
class ace_social extends WP_Widget {

  function ace_social() {
    $widget_ops = array( 'description' => __( 'Show social network like Twitter, Facebook, RSS, etc.','ace' ) );
    //parent::WP_Widget( false, __( 'Ace Social Networks','ace' ), $widget_ops );      
    WP_Widget::__construct( false, __( 'Ace Social Networks','ace' ), $widget_ops );      
  }

  function widget( $args, $data ) {  
  extract( $args );
    $title    	  = $data[ 'title' ];
    $new_windows  = isset( $_POST['new_windows']) ? $_POST['new_windows'] : '';
    $rss      	  = $data[ 'rss' ];
    $email    	  = $data[ 'email' ];
    $facebook 	  = $data[ 'facebook' ];
    $twitter  	  = $data[ 'twitter' ];
    $google       = $data[ 'google' ];
    $flickr       = $data[ 'flickr' ];
    $linkedin     = $data[ 'linkedin' ];
    $youtube      = $data[ 'youtube' ];
    $vimeo        = $data[ 'vimeo' ];
    $instagram    = $data[ 'instagram' ];
    $bloglovin    = $data[ 'bloglovin' ];
    $pinterest    = $data[ 'pinterest' ];
    $tumblr       = $data[ 'tumblr' ];

    echo $before_widget; ?>

      <?php if ( $title ) { echo $before_title . $title . $after_title; } ?>

      <div class="textwidget">
        <ul class="social-icons">
          <?php if ( $data['twitter'] ) { ?><li><a href="<?php echo $twitter; ?>" class="social-twitter radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Twitter</a></li><?php } ?>
          <?php if ( $data['facebook'] ) { ?><li><a href="<?php echo $facebook; ?>" class="social-facebook radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Facebook</a></li><?php } ?>
          <?php if ( $data['google'] ) { ?><li><a href="<?php echo $google; ?>" class="social-google radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Google Plus</a></li><?php } ?>
          <?php if ( $data['flickr'] ) { ?><li><a href="<?php echo $flickr; ?>" class="social-flickr radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Flickr</a></li><?php } ?>
          <?php if ( $data['linkedin'] ) { ?><li><a href="<?php echo $linkedin; ?>" class="social-linkedin radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Linkedin</a></li><?php } ?>
          <?php if ( $data['youtube'] ) { ?><li><a href="<?php echo $youtube; ?>" class="social-youtube radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>YouTube</a></li><?php } ?>
          <?php if ( $data['vimeo'] ) { ?><li><a href="<?php echo $vimeo; ?>" class="social-vimeo radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Vimeo</a></li><?php } ?>
          <?php if ( $data['instagram'] ) { ?><li><a href="<?php echo $instagram; ?>" class="social-instagram radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Instagram</a></li><?php } ?>
          <?php if ( $data['bloglovin'] ) { ?><li><a href="<?php echo $bloglovin; ?>" class="social-bloglovin radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Bloglovin</a></li><?php } ?>
          <?php if ( $data['pinterest'] ) { ?><li><a href="<?php echo $pinterest; ?>" class="social-pinterest radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Pinterest</a></li><?php } ?>
          <?php if ( $data['tumblr'] ) { ?><li><a href="<?php echo $tumblr; ?>" class="social-tumblr radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Tumblr</a></li><?php } ?>
          <?php if ( $data['email'] ) { ?><li><a href="mailto:<?php echo $email; ?>" class="social-email radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>Email</a></li><?php } ?>
          <?php if ( $data['rss'] ) { ?><li><a href="<?php echo $rss; ?>" class="social-rss radius-50" <?php if( isset( $data[ 'new_windows' ] ) ) echo 'target="_blank"'; ?>>RSS feed</a></li><?php } ?>
        </ul>
        <div class="clearfix">&nbsp;</div>
      </div>

    <?php	 echo $after_widget; }
    function update( $new_data, $old_data ) { return $new_data; }
    function form( $data ) {
      $title        = isset( $data[ 'title' ] ) ? esc_attr( $data[ 'title' ] ) : '';
      $new_windows  = isset( $data[ 'new_windows' ] ) ? esc_attr( $data[ 'new_windows' ] ) : '';
      $rss          = isset( $data[ 'rss' ] ) ? esc_attr( $data[ 'rss' ] ) : '';
      $email        = isset( $data[ 'email' ] ) ? esc_attr( $data[ 'email' ] ) : '';
      $facebook     = isset( $data[ 'facebook' ] ) ? esc_attr( $data[ 'facebook' ] ) : '';
      $twitter      = isset( $data[ 'twitter' ] ) ? esc_attr( $data[ 'twitter' ] ) : '';
      $google       = isset( $data[ 'google' ] ) ? esc_attr( $data[ 'google' ] ) : '';
      $flickr       = isset( $data[ 'flickr' ] ) ? esc_attr( $data[ 'flickr' ] ) : '';
      $linkedin     = isset( $data[ 'linkedin' ] ) ? esc_attr( $data[ 'linkedin' ] ) : '';
      $youtube      = isset( $data[ 'youtube' ] ) ? esc_attr( $data[ 'youtube' ] ) : '';
      $vimeo        = isset( $data[ 'vimeo' ] ) ? esc_attr( $data[ 'vimeo' ] ) : '';
      $instagram    = isset( $data[ 'instagram' ] ) ? esc_attr( $data[ 'instagram' ] ) : '';
      $bloglovin    = isset( $data[ 'bloglovin' ] ) ? esc_attr( $data[ 'bloglovin' ] ) : '';
      $pinterest    = isset( $data[ 'pinterest' ] ) ? esc_attr( $data[ 'pinterest' ] ) : '';
      $tumblr       = isset( $data[ 'tumblr' ] ) ? esc_attr( $data[ 'tumblr' ] ) : '';
    ?>

<p>
  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'new_windows' ); ?>">
    <?php if( isset( $data[ 'new_windows' ] ) ){ $checked = "checked=\"checked\""; } else { $checked = ""; } ?>
    <input type="checkbox" name="<?php echo $this->get_field_name( 'new_windows' ); ?>" value="true" id="<?php echo $this->get_field_id( 'new_windows' ); ?>"  <?php echo $checked; ?> />
    <?php _e( 'Open links in new windows', 'ace' ); ?></label>
</p>
<p style="background:#fcf8e3; color:#c09853; border:1px solid #fbeee0; padding:5px;"><em><?php _e( 'Insert full URL include http:// except for email', 'ace' ); ?></em></p>
<p>
  <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'email' ); ?>"  value="<?php echo $email; ?>" class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'rss' ); ?>"><?php _e( 'Custom RSS feed','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'rss' ); ?>"  value="<?php echo $rss; ?>" class="widefat" id="<?php echo $this->get_field_id( 'rss' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'facebook' ); ?>"  value="<?php echo $facebook; ?>" class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name( 'twitter' ); ?>"  value="<?php echo $twitter; ?>" class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e( 'Google Plus','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('google'); ?>"  value="<?php echo $google; ?>" class="widefat" id="<?php echo $this->get_field_id('google'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e( 'Flickr','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('flickr'); ?>"  value="<?php echo $flickr; ?>" class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e( 'Linkedin','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('linkedin'); ?>"  value="<?php echo $linkedin; ?>" class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e( 'YouTube','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('youtube'); ?>"  value="<?php echo $youtube; ?>" class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e( 'Vimeo','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('vimeo'); ?>"  value="<?php echo $vimeo; ?>" class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e( 'Instagram','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('instagram'); ?>"  value="<?php echo $instagram; ?>" class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e( 'Pinterest','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('pinterest'); ?>"  value="<?php echo $pinterest; ?>" class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php _e( 'Tumblr:','ace' ); ?></label>
  <input type="text" name="<?php echo $this->get_field_name('tumblr'); ?>"  value="<?php echo $tumblr; ?>" class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" />
</p>
<p>
  <label for="<?php echo $this->get_field_id('bloglovin'); ?>"><?php _e( 'Bloglovin','ace' ); ?>:</label>
  <input type="text" name="<?php echo $this->get_field_name('bloglovin'); ?>"  value="<?php echo $bloglovin; ?>" class="widefat" id="<?php echo $this->get_field_id('bloglovin'); ?>" />
</p>

  <?php }

}

function ace_social() {
  register_widget( 'ace_social' );
}
add_action( 'widgets_init','ace_social' );
