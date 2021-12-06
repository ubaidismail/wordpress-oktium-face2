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
  <tr valign="top">
  <th scope="row"><label for="face2_option_tooltip">Tooltip</label></th>
  <td>
    <select id="face2_option_tooltip" name="face2_option_tooltip" style="width: 100%  ">
    <option value="true"<?php if( get_option('face2_option_tooltip') == 'true'): ?> selected="selected"<?php endif; ?>>True</option>
    <option value="false"<?php if( get_option('face2_option_tooltip') == 'false'): ?> selected="selected"<?php endif; ?>>False</option>
  </select>
  <p class="description" id="tagline-description">Enable/disable Face2 button text</p>
</td>
  </tr>
  <tr valign="top">
  <th scope="row"><label for="face2_option_tooltipText">Tooltip Text</label></th>
  <td><input type="text" id="face2_option_tooltipText" name="face2_option_tooltipText" value="<?php echo get_option('face2_option_tooltipText'); ?>" style="width: 100%  "/>
  <p class="description" id="tagline-description">Text for your Face2 button</p>
  </td>
  </tr>
  <tr valign="top"><?php $cornerRounding = get_option('face2_option_cornerRounding')?>
    <th scope="row"><label for="face2_option_cornerRounding">Corner Rounding</label></th>
    <td>
      <select id="face2_option_cornerRounding" name="face2_option_cornerRounding" style="width: 100%  ">
       <option value="true"<?php if( $cornerRounding == 'true'){echo "selected";};?>>True</option>
	   <option value="false"<?php if( $cornerRounding == 'false'){echo "selected";};?>>False</option>
    </select>
    <p class="description" id="tagline-description">The design of the Face2 button</p>
  </td>
  </tr>
    <tr valign="top">
    <th scope="row"><label for="face2_option_dc">DC</label></th>
    <td>
      <select id="face2_option_dc" name="face2_option_dc" style="width: 100%  ">
      <option value="true"<?php if( get_option('face2_option_dc') == true): ?> selected="selected"<?php endif; ?>>True</option>
      <option value="false"<?php if( get_option('face2_option_dc') == false): ?> selected="selected"<?php endif; ?>>False</option>
    </select>
    <p class="description" id="tagline-description">Enable/disable the Direct call feature</p>
  </td>
  </tr>
  <tr valign="top">
    <th scope="row"><label for="face2_option_mobileSize">Mobile Size</label></th>
    <td>
      <select id="face2_option_mobileSize" name="face2_option_mobileSize" style="width: 100%  ">
      <option value="small"<?php if( get_option('face2_option_mobileSize') == 'small'): ?> selected="selected"<?php endif; ?>>Small</option>
      <option value="medium"<?php if( get_option('face2_option_mobileSize') == 'medium'): ?> selected="selected"<?php endif; ?>>Medium</option>
      <option value="large"<?php if( get_option('face2_option_mobileSize') == 'large'): ?> selected="selected"<?php endif; ?>>Large</option>
    </select>
    <p class="description" id="tagline-description">Size of the Face2 button in mobile devices</p>
  </td>
  </tr>
  <tr valign="top">
    <th scope="row"><label for="face2_option_position">Position</label></th>
    <td>
      <select id="face2_option_position" name="face2_option_position" style="width: 100%  ">
      <option value="left"<?php if( get_option('face2_option_position') == 'left'): ?> selected="selected"<?php endif; ?>>Left</option>
      <option value="right"<?php if( get_option('face2_option_position') == 'right'): ?> selected="selected"<?php endif; ?>>Right</option>
    </select>
    <p class="description" id="tagline-description">Position of the Face2 button on your website</p>
  </td>
  </tr>
    <tr valign="top"><?php $hideOfflineMobile = get_option('face2_option_hideOfflineMobile')?>
    <th scope="row"><label for="face2_option_hideOfflineMobile">Hide Offline Mobile</label></th>
    <td>
      <select id="face2_option_hideOfflineMobile" name="face2_option_hideOfflineMobile" style="width: 100%  ">
        <option value="true"<?php if( $hideOfflineMobile == 'true'){echo "selected";};?>>True</option>
        <option value="false"<?php if( $hideOfflineMobile == 'false'){echo "selected";};?>>False</option>
    </select>
    <p class="description" id="tagline-description">Hide the Face2 button on mobile devices, while not available</p>
    </td>
  </tr>
    <tr valign="top"><?php $hideOffline = get_option('face2_option_hideOffline')?>
    <th scope="row"><label for="face2_option_hideOffline">Hide Offline</label></th>
    <td>
      <select id="face2_option_hideOffline" name="face2_option_hideOffline" style="width: 100%  ">
        <option value="true"<?php if( $hideOffline == 'true'){echo "selected";};?>>True</option>
        <option value="false"<?php if( $hideOffline == 'false'){echo "selected";};?>>False</option>
    </select>
    <p class="description" id="tagline-description">Hide the Face2 button on web, while not available</p>
    </td>
  </tr>
  </table>
  <?php  submit_button(); ?>
  </form>
  </div>