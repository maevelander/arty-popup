<?php

 
	global $arty_settings;
	$options = $arty_settings;
	$newline = "\n"; // line break
	$v_posts		=	$options['popup_v_Posts']; 
	$v_pages		=	$options['popup_v_pages'];
	$f_page			=	$options['popup_v_fpage'];
	$form_enable	=	$options['popup_enable_form'];
	$contact_form	=	$options['popup_form_code'];
	


	// possible future use
	$args = wp_parse_args($args, $arty_settings);
	if($options['popup_testing']=='true'){
		if(is_user_logged_in()){
		
	global $current_user;

	$user_roles = $current_user->roles;
	$user_role = array_shift($user_roles);
		
			if($user_role=='administrator'){

	
	echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
	echo '<div class="inner1">'.$newline;
	if($form_enable=='true'){
	echo do_shortcode($arty_settings['contact_form']);
	}
	echo '</div>'.$newline;
	echo '</div>';
	if($options['popup_dark_bg']=='true'){
	echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
	}
			}
		}
	}else{
		
		if($v_posts=='true' and $v_pages=='true' and $f_page=='true'){
			if(is_front_page() or is_page() or is_single()){
			echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
			echo '<div class="inner1">'.$newline;
			if($form_enable=='true'){
				echo do_shortcode($arty_settings['contact_form']);
			}
			echo '</div>'.$newline;
			echo '</div>';
			if($options['popup_dark_bg']=='true'){
			echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
			}
			}
		}
		if($v_posts=='true' and $v_pages=='true' and $f_page!='true'){
			if(is_single() or is_page() or !is_front()){
				
			
			echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
			echo '<div class="inner1">'.$newline;
			if($form_enable=='true'){
				echo do_shortcode($arty_settings['contact_form']);
			}
			echo '</div>'.$newline;
			echo '</div>';
			if($options['popup_dark_bg']=='true'){
			echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
			}
			}
		
		}
		
		if($v_posts=='true' and $v_pages!='true' and $f_page!='true'){
			if(is_single()){
			echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
			echo '<div class="inner1">'.$newline;
			if($form_enable=='true'){
				echo do_shortcode($arty_settings['contact_form']);
			}
			echo '</div>'.$newline;
			echo '</div>';
			if($options['popup_dark_bg']=='true'){
			echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
			}
			}
		}
		
		if($v_posts!='true' and $v_pages=='true' and $f_page!='true'){
			if(is_page()){
			echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
			echo '<div class="inner1">'.$newline;
			if($form_enable=='true'){
				echo do_shortcode($arty_settings['contact_form']);
			}
			echo '</div>'.$newline;
			echo '</div>';
			if($options['popup_dark_bg']=='true'){
			echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
			}
			}
		}
		
		if($v_posts!='true' and $v_pages!='true' and $f_page=='true'){
			if(is_front_page()){
			echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
			echo '<div class="inner1">'.$newline;
			if($form_enable=='true'){
				echo do_shortcode($arty_settings['contact_form']);
			}
			echo '</div>'.$newline;
			echo '</div>';
			if($options['popup_dark_bg']=='true'){
			echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
			}
			
			}
		}
		
		
		
		if($v_posts!='true' and $v_pages=='true' and $f_page=='true'){
			if(is_page() or is_front_page()){
			echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
			echo '<div class="inner1">'.$newline;
			if($form_enable=='true'){
				echo do_shortcode($arty_settings['contact_form']);
			}
			echo '</div>'.$newline;
			echo '</div>';
			if($options['popup_dark_bg']=='true'){
			echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
			}
			}
		}
		
		if($v_posts=='true' and $v_pages!='true' and $f_page=='true'){
			if(is_single() or is_front_page()){
			echo '<div id="popup_box"><a id="popupBoxClose">X</a>';
			echo '<div class="inner1">'.$newline;
			if($form_enable=='true'){
				echo do_shortcode($arty_settings['contact_form']);
			}
			echo '</div>'.$newline;
			echo '</div>';
			if($options['popup_dark_bg']=='true'){
			echo '<div id="wrap-out" style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index:10000;"></div>';
			}
			}
		}
	} 
