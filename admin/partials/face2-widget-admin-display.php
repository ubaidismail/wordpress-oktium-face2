<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://oktium.com
 * @since      1.0.0
 *
 * @package    Face2_Widget
 * @subpackage Face2_Widget/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
  <div>
  <h2>Face2 widget Setting Page</h2>
  <form method="post" action="options.php">
  <?php settings_fields( 'face2_widget_props' );
  do_settings_sections( 'face2_widget_props' );?>
  <table style="width: 100%;  max-width: 500px;">
  <tr valign="top">
  <th scope="row"><label for="face2_option_face2Key">Face2 Key</label></th>
  <td><input type="text" id="face2_option_face2Key" name="face2_option_face2Key" value="<?php echo get_option('face2_option_face2Key'); ?>" style="width: 100% " />
    <p class="description" id="tagline-description">Insert your Face2 key, which you received with the Wordpress plugin</p>
  </td>
  </tr>
  
  </table>
  <?php  submit_button(); ?>
  </form>
  </div>