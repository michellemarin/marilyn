<form role="search" class="sideform" method="get" action="<?php echo esc_url( home_url() ); ?>">
  <fieldset>
  <input type="text" name="s" class="sidetext" size="15" title="<?php esc_attr_e( 'Search','ace' ); ?>" />
  <!--<input type="submit" value="<?php esc_attr_e( 'Search','ace' ); ?>" />-->
  <button type="submit" class="input-button"><?php esc_attr_e( 'Search','ace' ); ?></button>
  </fieldset>
</form>