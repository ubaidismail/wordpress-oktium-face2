<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
    <script src="https://cdn.oktium.com/face2widget-latest.min.js"></script>
      <script type="text/javascript">
        var myOktiumButton = new window.Oktium({
          face2Key: "<?= get_option('face2_option_face2Key'); ?>",
          tooltip: <?= get_option('face2_option_tooltip'); ?>,
          tooltipText: "<?= get_option('face2_option_tooltipText'); ?>",
          cornerRounding: <?= get_option('face2_option_cornerRounding'); ?>,
          dc: <?= get_option('face2_option_dc'); ?>,
          mobileSize: "<?= get_option('face2_option_mobileSize'); ?>",
          position: "<?= get_option('face2_option_position'); ?>",
          hideOfflineMobile: <?= get_option('face2_option_hideOfflineMobile'); ?>,
          hideOffline: <?= get_option('face2_option_hideOffline'); ?>
        });
        myOktiumButton.init();
</script>