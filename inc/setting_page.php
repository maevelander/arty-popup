<div id="icon-options-general" class="icon32"></div><h2>Arty Popup Settings</h2>
    <?php arty_settings_update_check(); ?>
	<form method="post" action="options.php" style="float:left;">
	<?php settings_fields('arty_settings'); ?>
	<?php global $arty_settings; $options = $arty_settings; ?>  
    <style type="text/css">
.arty_table{
	width:795px;
	margin-top:10px;
	background:#ffffff;

}
.arty_table td, .arty_table th{
	border:none;	
}
.arty_table td{
	padding-top:12px;
	padding-bottom:12px;	
}

</style>

<table class="wp-list-table widefat arty_table" cellspacing="0" width="786">
	<thead>
	<tr>
		<th width="243" style="font-size:18px;" colspan="2">Settings</th>	</tr>
	</thead>
		

                    <tr>
                        <td>Testing</td>
                        <td><input type="checkbox" name="arty_settings[popup_testing]" value="true" <?php if($options['popup_testing']=='true'){echo 'checked="checked"';} ?>  /> Show Popup to admin only</td>
                    </tr>
		
                    <tr valign="top">
						<td>Popup Image</td>			
						<td><input id="st_upload" class="upload-url" type="text" name="arty_settings[st_upload]" value="<?php echo $options['st_upload'] ?>"><input id="st_upload_button" class="st_upload_button" type="button" name="upload_button" value="Upload"></td>
					</tr>
                    
                    <tr valign="top">
						<td>Darken Background</td>			
						<td><input type="checkbox" name="arty_settings[popup_dark_bg]" id="dark_bg" value="true" <?php if($options['popup_dark_bg']=='true'){echo 'checked="checked"';} ?>> Darken Background behind popup</td>
					</tr>
                    <tr valign="top">
						<td>Visible On</td>			
						<td>
                        	<p><input type="checkbox" name="arty_settings[popup_v_pages]" id="v_pages" value="true" <?php if($options['popup_v_pages']=='true'){echo 'checked="checked"';} ?>> Pages</p>
                            <p><input type="checkbox" name="arty_settings[popup_v_Posts]" id="v_Posts" value="true" <?php if($options['popup_v_Posts']=='true'){echo 'checked="checked"';} ?>> Post</p>
                            <p><input type="checkbox" name="arty_settings[popup_v_fpage]" id="v_fpage" value="true" <?php if($options['popup_v_fpage']=='true'){echo 'checked="checked"';} ?>> Front Page</p>
                        </td>
					</tr>
                    <tr valign="top">
						<td>Cookie Lifetime</td>			
						<td><input type="text" name="arty_settings[popup_cookie_time]" id="cookie_time" size="3" value="<?php echo $options['popup_cookie_time']; ?>"> Number of days for the popup to stay hidden once the user has closed it</td>
					</tr>
                    <tr valign="top">
						<td>Contact Form</td>			
						<td>
                        	<p><input type="text" name="arty_settings[contact_form]" size="60" value="<?php echo $options['contact_form'] ?>" /> Enter Contact Form 7 shortcode</p>
                            <p><input type="checkbox" name="arty_settings[popup_enable_form]" id="enable_form" value="true" <?php if($options['popup_enable_form']=='true'){echo 'checked="checked"';} ?>> Enable Form</p>
                        </td>
					</tr>
       
		<tr>
		<input type="hidden" name="arty_settings[update]" value="UPDATED" />
		<tr>
	<td><input type="submit" class="button-primary" value="<?php _e('Save Settings') ?>" /></td>
	</tr>
  
	</table>
	</form>
    <div class="right" style="float:left; margin-left:30px; width:266px; margin-top:12px;">
    	<table cellpadding="0" class="widefat donation" style="margin-bottom:20px; border:solid 2px #008001;" width="50%">
            	<thead>
                	<tr><th scope="col"><strong style="color:#008001;">Help Improve This Plugin!</strong></th>
                </tr></thead>
                <tbody>
                	<tr>
                    	<td style="border:0; padding:15px 10px 15px 10px;">Enjoyed this plugin? All donations are used to improve and further develop this plugin. Thanks for your contributaion.</td>
                    </tr>
                    <tr>
                    	<td style="border:0; padding:15px 10px 15px 10px;"><!--<img src=""  align="middle" />--><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="A74K2K689DWTY">
<input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form></td>
                    </tr>
                    <tr>
                    	<td style="border:0; padding:15px 10px 15px 10px;">you can also help by <a href="http://www.wordpress.org/plugin/arty-popup">rating this plugin plugin on wordpress.org</a></td>
                    </tr>
                   
                </tbody>
            </table>
            
            <table cellpadding="0" class="widefat" border="0">
            	<thead>
                	<tr><th scope="col">Free Design Templates</th>
                </tr></thead>
                <tbody>
                	<tr>
                    	<td style="border:0; padding:15px 10px 15px 10px;">Looking for a cool diesgin for you popup <a href="http://www.enigmaweb.com.au/arty-popup">Browse Our Free Templates</a></td>
                    </tr>
                   
                </tbody>
            </table>
            
            <table cellpadding="" class="widefat" border="0" style="margin-top:20px">
            	<thead>
                	<tr><th scope="col">Need Support</th>
                </tr></thead>
                <tbody>
                	<tr>
                    	<td style="border:0; padding:15px 10px 15px 10px;">If you are having problems with plugin please talk about them on <a href="http://www.wordpress.org/support/plugins/arty-popup">Support Forums</a></td>
                    </tr>
                   
                </tbody>
            </table>
    </div>