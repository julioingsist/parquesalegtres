<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function mc_user_profile() {
	global $user_ID;
	get_currentuserinfo();
	if ( isset($_GET['user_id']) ) { 
		$user_ID = (int) $_GET['user_id'];
	}
	$mc_us = get_user_meta( $user_ID, 'my_calendar_user_settings', true );
	$options = get_option('mc_user_settings');
	if ( is_array( $options ) ) {
		foreach ($options as $key=>$value) {
			if ( isset($value['enabled']) && $value['enabled'] == 'on') {
				$name = $key;
				$label = $value['label'];
				$values = $value['values'];
				$form = "<input type='hidden' name='mc_users' value='1' />";
				$form .= "
				<tr>
				<th scope='row'><label for='my_calendar_user_settings'>$label</label></th>
				<td><select name='my_calendar_user_settings[$name]' id='my_calendar_user_settings'>
				<option value='none'>No preference</option>\n";		
				foreach ($values as $optkey=>$optvalue) {
					if ( isset($mc_use[$name]) ) {
						$selected = ($mc_us[$name]==$optkey)?" selected='selected'":'';
					} else {
						$selected = '';
					}
						$form .= "<option value='$optkey'$selected>$optvalue</option>\n";
				}
				$form .= "</select></td>
				</tr>";
			}	
		}
	}
	if ( get_option('mc_user_settings_enabled') == 'true' ) { ?>
		<h3><?php _e('My Calendar User Settings', 'my-calendar'); ?></h3>
		<table class="form-table">
		<?php 
			echo $form; 
			do_action( 'mc_update_user_form', $user_ID );
		?>
		</table>
	<?php } 
}

function mc_user_save_profile() {
	global $user_ID;
	get_currentuserinfo();
	if ( isset($_POST['user_id']) ) { $user_ID = (int) $_POST['user_id']; } 
	if ( isset( $_POST['mc_users'] ) ) {
		update_user_meta($user_ID ,'my_calendar_user_settings' , $_POST['my_calendar_user_settings'] );
		do_action( 'mc_update_user_data', $_POST, $user_ID );
	}
}
?>