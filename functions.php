<?php
/*
Plugin Name: Prettify Code
Plugin URI: http://www.g2w.me/tag/prettycode/
Description: One-click to highlight selection code using <code>google-code-prettify</code>.
Version: 1.0
Author: greatghoul
Author URI: http://www.g2w.me
 */
// Get real file path
function g2w_prettycode_path($file) {
	return get_option('siteurl') . '/wp-content/plugins/prettycode/' . $file;
}

/* ----- Button Settings -----*/

// Load the TinyMCE plugin : editor_plugin.js 
function g2w_prettycode_add_tinymce_plugin($plugin_array) {
   $plugin_array['prettycode'] = g2w_prettycode_path('editor_plugin.js');
   return $plugin_array;
}

// Regist the TinyMCE plugin: editor_plugin.js
function g2w_prettycode_reg_button($buttons) {
   array_push($buttons, "prettycode");
   return $buttons;
}

// Add the button
function g2w_prettycode_add_button() {
	// Don't bother doing this stuff if the current user lacks permissions
	if (!current_user_can('edit_posts') && !current_user_can('edit_pages'))
		return;
 
	// Add only in Rich Editor mode
	if (get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "g2w_prettycode_add_tinymce_plugin");
		add_filter('mce_buttons', 'g2w_prettycode_reg_button');
	}
}

// Refresh TinyMCE
function g2w_prettycode_refresh_mce($ver) {
  $ver += 3;
  return $ver;
}

// Extend wp_head
function g2w_prettycode_get_head() {
?>
<!-- START: Pretty Code -->
<link type="text/css" rel="stylesheet" href="<?php echo g2w_prettycode_path('prettify.css'); ?>" />
<script type="text/javascript" src="<?php echo g2w_prettycode_path('prettify.js'); ?>"></script>
<script type="text/javascript">
if (window.document.all) {
	window.attachEvent('onload', prettyPrint);
} else {
	window.addEventListener('load', prettyPrint, false);
}
</script>
<!-- END: Pretty Code -->
<?php
}

/* ----- Element Settings -----*/

// Add to extended_valid_elements for TinyMCE
function g2w_prettycode_change_mce_options($init) {
    // Command separated string of extended elements
    $ext = 'pre[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

// Add Filter
add_filter('tiny_mce_before_init', 'g2w_prettycode_change_mce_options');
add_filter('tiny_mce_version', 'g2w_prettycode_refresh_mce');
// Add Action
add_action('init', 'g2w_prettycode_add_button');
add_action('wp_head', 'g2w_prettycode_get_head');

/*
function g2w_prettycode_footer() {
	echo '<script type="text/javascript"> window.onload = function() { prettyPrint(); }; </script>'
}
add_action('get_footer','gcp_footer');
*/
?>
