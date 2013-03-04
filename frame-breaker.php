<?php
/*
Plugin Name: Die Digg-bar die!
Plugin URI: http://alicious.com/remove-digg-bar-from-website/
Description: You want people to visit your website rather than be stuck in a frame or iframe, you need this plugin. Updated for HTML5
Version: 1.0
Author: pbhj
Author URI: http://alicious.com
*/
add_action('wp_head', 'frameBreaker');
function frameBreaker() {
  // frame breaker code for , eg, Digg, Google Images, Ow.ly, Facebook
  // if the server name is not in the referer address field
  // serve the javascript for frame breaking
  if (!stristr($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME'])) { ?>

<script>
window.onload = function() {
  if (top.location != location) {
    top.location.href = document.location.href;
  }
}
</script>
<?php
  }
}
?>