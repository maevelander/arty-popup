<?php 

/*
Plugin Name: Arty Popup
Plugin URI: http://www.wordpress.org/plugins/arty-popup
Description: Use Arty Popup to create a designer popup with optional form integration.
Version: 1.1
Author: Enigma Plugins
Author URI: http://www.enigmaplugins.com
*/

// default settings
$arty_defaults = apply_filters('arty_defaults', array(
	'popup_width' => 800,
	'popup_height' => 650,
	'popup_v_pages' =>'true',
	'popup_v_Posts' => 'true',
	'popup_v_fpage' => 'true'

));

//	pull the settings from the db
$arty_settings = get_option('arty_settings');

//	fallback
$arty_settings = wp_parse_args($arty_settings, $arty_defaults);


function art_scripts() {
		
		
		
		//Media Uploader Scripts
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_deregister_script( 'my-upload' );
wp_register_script('my-upload',plugins_url('arty-popup/uploader.js') , array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');

}

function art_styles() {
		
		//Media Uploader Style
wp_enqueue_style('thickbox');
}
add_action( 'admin_enqueue_scripts', 'art_styles' );
add_action( 'admin_enqueue_scripts', 'art_scripts' );


/*
///////////////////////////////////////////////
This section hooks the proper functions
to the proper actions in WordPress
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
*/

//	this function registers our settings in the db
add_action('admin_init', 'arty_register_settings');
function arty_register_settings() {
	register_setting('arty_settings', 'arty_settings', 'arty_settings_validate');
}

add_action('admin_menu', 'arty_menu');
function arty_menu() {
	add_menu_page('Arty Popup', 'Arty Popup', 'edit_pages', 'settingspage', 'arty_settings_page', plugin_dir_url( __FILE__ )."icon.png");
}


//	this function checks to see if we just updated the settings
//	if so, it displays the "updated" message.
function arty_settings_update_check() {
	global $arty_settings;
	if(isset($arty_settings['update'])) {
		echo '<div class="updated fade" id="message" style="margin-left:0;"><p>Arty Popup Settings <strong>'.$arty_settings['update'].'</strong></p></div>';
		unset($arty_settings['update']);
		update_option('arty_settings', $arty_settings);
	}
}

// functions
function arty_settings_page() { 
	require 'inc/setting_page.php' ; 
}



/*
///////////////////////////////////////////////
these two functions sanitize the data before it
gets stored in the database via options.php
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
*/
//	this function sanitizes our settings data for storage
function arty_settings_validate($input) {
	$input['popup_testing'] 	= $input['popup_testing'];
	$input['popup_dark_bg'] 	= $input['popup_dark_bg'];
	$input['popup_v_pages'] 	= $input['popup_v_pages'];
	$input['popup_v_Posts'] 	= $input['popup_v_Posts'];
	$input['popup_v_fpage'] 	= $input['popup_v_fpage'];
	//$input['popup_cookie_time'] = $input['popup_cookie_time'];
	$code	=	$input['contact_form'];
	$code	=	str_replace('"',"'",$code);
	$input['contact_form'] 		= $code;/*$input['contact_form'];*/
	$input['popup_form_code'] 	= $input['popup_form_code'];
	$input['st_upload'] 		= $input['st_upload'];
	
	return $input;
}



/*
///////////////////////////////////////////////
this final section generates all the code that
is displayed on the front-end of the WP Theme
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
*/
function arty_popup($args = array(), $content = null) {
	require 'inc/popup.php';	
}

add_action( 'wp_head', 'arty_header' );
function arty_header() { 
	global $arty_settings;
	$options = $arty_settings;
?>
<script src="http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready( function() {
		if (document.cookie.indexOf("arty_popup_cookie1") <= 0) {
  
  		loadPopupBox();
		}		
	
	
	$('#wrap-out, #popupBoxClose').click( function() {
		unloadPopupBox();
		
		var c_name	=	'arty_popup_cookie';
		var value	=	'arty_popup_cookie1';
		var exdays	=	<?php echo '$options["popup_cookie_time"]'; ?>;
		
		 var exdate=new Date();
		exdate.setDate(exdate.getDate() + exdays);
		var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
		document.cookie=c_name + "=" + c_value;

	});
	
	function unloadPopupBox() {
		$('#popup_box').fadeOut(200);
		$("#wrap-out").css({	
			"display": "none"  
		}); 
	}
	
	function loadPopupBox() {
		$('#popup_box').fadeIn(200);
		$("#wrap-out").css({
			"background": "#000",
			"opacity": "0.7"  
		}); 		
	}
	
	
});


</script>	
<style type="text/css" media="screen">
/* Popup */
#popup_box {
	display:none;
	position:fixed;
	_position:absolute; 
	height:<?php echo $arty_settings['popup_height']; ?>px;
	width:<?php echo $arty_settings['popup_width']; ?>px;
	left: 50%;
	top: 50%;
	z-index:10001;
	background:#fff;
	margin: -<?php echo $arty_settings['popup_height'] / 2; ?>px 0 0 -<?php echo $arty_settings['popup_width'] / 2; ?>px;
	box-shadow: 0px 0px 15px #000;
}
#popup_box .inner1 {
	height:<?php echo $arty_settings['popup_height']; ?>px;
	background:url(<?php echo $options['st_upload']; ?>) no-repeat center !important;
	text-align: center;
	padding:0 40px;
	color:#000;
}
#popupBoxClose {
	font-size:0;
	right:-14px;
	top:-14px;
	position:absolute;
	cursor: pointer;
	width: 38px;
	height: 37px;
	display: block;
	background:url(<?php echo plugin_dir_url( __FILE__ )."cross.png"; ?>) no-repeat;
}


<?php echo $arty_settings['popup_style']; ?>
/* Popup ends */
</style>



<?php arty_popup(); ?>

<?php }

//add_action( 'wp_footer', 'arty_footer' );
function arty_footer() {
	echo '</div>'; 
}