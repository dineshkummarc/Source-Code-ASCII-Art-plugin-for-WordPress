<?php
/*
Plugin Name: Source Code ASCII Art
Plugin URI: http://www.josscrowcroft.com/swag/source-code-ascii-art/
Description: Inserts ASCII art in HTML comments into your source code. Select from dozens of artworks, or insert your own. A quirky surprise for anybody inspecting your HTML source code!
Version: 0.1
Author: Joss Crowcroft
Author URI: http://www.josscrowcroft.com
*/

/*  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Plugin path:
define( 'SCAS_PLUGIN_PATH', WP_PLUGIN_DIR . '/' . str_replace( basename( __FILE__ ), '', plugin_basename( __FILE__ ) ) );

// Grab the ASCII artworks:
@include( SCAS_PLUGIN_PATH . '/scas-ascii-artwork.php' );


/************************************************************************
 * Output
 ************************************************************************/

/**
 * Displays the ASCII artwork in HTML comments using plugin options:
 * 
 * Hooks onto specified action.
 */
function source_code_ascii_art( $preview = false ) {
	if ( get_option('scas_use_custom_artwork') ) {
		$artwork = "\n".get_option('scas_custom_artwork')."\n";
	} else {
		global $scas_ascii_artwork;
		// Grab the artwork:
		$artwork = $scas_ascii_artwork[get_option( 'scas_artwork_name' )]['output'];
	}
	
	// Title is displayed above the artwork:
	$title = get_option( 'scas_artwork_title' );
	
	// Grab the after message:
	$after = get_option( 'scas_artwork_after' );
	
	// Output the mother:
	if ( $preview )
		echo $artwork;
	else
		echo "<!--
{$title}
{$artwork}
{$after}

-->
";
	
}
// Hook onto the action of your choosing, or not:
$hook = get_option( 'scas_output_hook' ) ? get_option( 'scas_output_hook' ) : 'source_code_ascii_art';
	add_action( $hook, 'source_code_ascii_art', 0 );

/************************************************************************
 * WordPress Admin Functions
 ************************************************************************/

/**
 * Register plugin options page
 */
function scas_add_pages() {
	add_options_page(
		__( 'Source Code ASCII Art', SCAS_TEXTDOMAIN ), 
		__( 'Source Code ASCII Art', SCAS_TEXTDOMAIN ), 
		'manage_options', 
		'scas-settings', 
		'scas_options_page'
	);
}
add_action('admin_menu', 'scas_add_pages');


/**
 * Displays the content for the plugin options page
 */
function scas_options_page() {
?>
	<div class="wrap">
	
		<div id="icon-options-general" class="icon32"><br /></div>
		<h2><?php _e( 'Source Code ASCII Art', SCAS_TEXTDOMAIN );?></h2>
		<form method="post" action="options.php">
			<fieldset>
				<?php wp_nonce_field('update-options'); ?>
				<?php _e('<p>The <strong>Source Code ASCII Art</strong> plugin inserts an ASCII character drawing into your source code, wherever you specify, using WordPress action hooks or a handy PHP tag.</p>
				<p>Nothing is visually changed on your site - the drawing is inserted inside &lt;!-- --&gt; tags and is only visible to people viewing your source code.</p>', SCAS_TEXTDOMAIN ); ?>
				<br/>
				<?php _e('<h3>General</h3>', SCAS_TEXTDOMAIN ); ?>
				<?php _e("<p>Specify the WordPress <strong>action hook</strong> where you want the source code ASCII art to be inserted (NB: not all themes may support these). Select from recommended, or enter your own. Don't use any actions that fire before <code>send_headers</code> as this will create PHP 'Headers already sent' errors. Also, if you insert HTML comments before the <code>&lt;DOCTYPE html&gt;</code>, IE and Firefox go berserk.</p>
				<p>Alternatively, leave this blank and insert this line: <code>&lt;?php do_action('source_code_ascii_art');?&gt;</code> anywhere in your theme template files.</p>", SCAS_TEXTDOMAIN ); ?>
				
				<table class="form-table">
					<tbody>
						<?php /* Fields have the same names as the plugin's options (stored in the options table): */ ?>
	
						<tr valign="top">
							<th scope="row"><?php _e('Action Hook:', SCAS_TEXTDOMAIN ); ?></th>
							<td>
								<input type="text" placeholder="No hook selected" name="scas_output_hook" size="30" id="scas_output_hook" value="<?php echo get_option('scas_output_hook');?>" />
								<p id="scas-output-hook-links">
									<strong><?php _e('Recommended hooks', SCAS_TEXTDOMAIN ); ?></strong>: 
									<a href="#" rel="wp_head" title="<?php _e("Usually fired in the &lt;head&gt; section of your HTML", SCAS_TEXTDOMAIN ); ?>">wp_head</a>
									 / <a href="#" rel="wp_footer" title="<?php _e("Usually fired before the closing &lt;/body&gt; tag", SCAS_TEXTDOMAIN ); ?>">wp_footer</a>
									 / <a href="#" rel="shutdown" title="<?php _e("Fired after the closing &lt;/html&gt; tag", SCAS_TEXTDOMAIN ); ?>">shutdown</a>
									<br />
									<small><em><?php _e("Hover for description, click to use.", SCAS_TEXTDOMAIN ); ?></em></small>
								</p>
								
							</td>
						</tr>
					</tbody>
				</table>
	
				<h3><?php _e("ASCII Artwork", SCAS_TEXTDOMAIN ); ?></h3>
	
				<p><?php _e("Select the artwork you want to appear in the HTML source code:", SCAS_TEXTDOMAIN ); ?></p>
				<table class="form-table">
					<tbody>
						<tr valign="top">
							<th scope="row"><?php _e("Select ASCII Art:", SCAS_TEXTDOMAIN ); ?></th>
							<td>
								<select <?php echo get_option('scas_use_custom_artwork') ? 'disabled="disabled"' : '';?> name="scas_artwork_name" id="scas_artwork_name">
									<?php global $scas_ascii_artwork;
									$sel = get_option('scas_artwork_name');
									foreach ( $scas_ascii_artwork as $keyname => $val ) {
										if ( strpos( $keyname, 'section_' ) !== false ) {
											echo '<optgroup label="- '.$val['name'].' -"></optgroup>';
										} else {
											$selected = ( $sel == $keyname ) ? ' selected="selected"' : '';
											echo '<option'.$selected.' value="'.$keyname.'" data-output="'.$val['output'].'" data-title="'.(isset($val['title']) ? $val['title'] : $val['name']).'">'.$val['name'].'</option>';
										}
									}
									?>
								</select>
	 							<p><?php $checked = get_option('scas_use_custom_artwork') ? 'checked="checked"' : ''; 
									printf( 
										__('or %s Use custom ASCII artwork</a>', SCAS_TEXTDOMAIN), 
										'<label for="scas_use_custom_artwork"><input type="checkbox" id="scas_use_custom_artwork" name="scas_use_custom_artwork" value="1" '.$checked.'/>' 
									); ?>
								</p>
							</td>
						</tr>
						
						<tr id="scas_custom_artwork-tr" valign="top"<?php echo get_option('scas_use_custom_artwork') ? '' : ' style="display:none"';?>>
							<th scope="row"><?php _e("Custom ASCII Artwork:", SCAS_TEXTDOMAIN ); ?></th>
							<td>
								<textarea id="scas_custom_artwork" name="scas_custom_artwork" rows="10" cols="100" style="font-family:'Courier New', Courier, monospace;font-size:14px;background:#fefefe;border:1px solid #ccc; padding:10px; line-height:1.3em; overflow:auto;float:left;"><?php echo get_option('scas_custom_artwork');?></textarea>
								<div style="clear:both"></div>
								<em>NB: Don't use the <code>&lt;</code> or <code>&gt;</code> arrows in your ASCII artwork, as these close the comment and break your page layout. (Everything else is fine!)</em>
							</td>
						</tr>
						
						<tr valign="top">
							<th scope="row"><?php _e("Title:", SCAS_TEXTDOMAIN ); ?></th>
							<td>
								<input type="text" id="scas_artwork_title" name="scas_artwork_title" size="100" value="<?php echo get_option('scas_artwork_title');?>" /> &nbsp; <em><?php _e("Displayed directly above artwork in the source code (leave blank if preferred)", SCAS_TEXTDOMAIN ); ?></em>
							</td>
						</tr>
						<tr id="scas-preview-tr" valign="top"<?php echo get_option('scas_use_custom_artwork') ? ' style="display:none"' : '';?>>
							<th scope="row"><?php _e("Artwork Preview:", SCAS_TEXTDOMAIN ); ?></th>
							<td>
								<pre id="scas-preview" style="font-family:'Courier New', Courier, monospace;font-size:14px;background:#fefefe;border:1px solid #ccc; padding:10px; line-height:1.3em; overflow:hidden;float:left;"><?php echo $scas_ascii_artwork[$sel]['output'];?></pre>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><?php _e("After Artwork:", SCAS_TEXTDOMAIN ); ?></th>
							<td>
								<input type="text" id="scas_artwork_after" name="scas_artwork_after" size="100" value="<?php echo get_option('scas_artwork_after');?>" /> &nbsp; <em><?php _e("Displayed directly beneath artwork - help spread the word! :o)", SCAS_TEXTDOMAIN ); ?></em>
							</td>
						</tr>
					</tbody>
				</table>
	
				<?php /* Hidden field 'page_options' contains comma separated list of all the options to be written on save: */ ?>
				<input type="hidden" name="page_options" value="scas_output_hook,scas_artwork_name,scas_artwork_title,scas_artwork_after,scas_use_custom_artwork,scas_custom_artwork" />
				<input type="hidden" name="action" value="update" />
				
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
				</p>
			</fieldset>
		</form>
		
		<h3><?php _e("Author's note", SCAS_TEXTDOMAIN ); ?></h3>
		<?php _e("<p>The Source Code ASCII Art plugin is the culmination of over 10,000 hours spread over 2.5 years of development*. If you appreciate it, please don't donate any money. Just tweet it out, report bugs, and get other people using it :)</p>
		<p>* Just kidding, it took a few hours on a lazy Monday afternoon. But still spread the word anyway. Kthx.</p>", SCAS_TEXTDOMAIN ); ?>
		
	</div><!-- .wrap -->
	
	<!-- These make the options page work: -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('#scas-output-hook-links a').click(function() {
				$('#scas_output_hook').val( $(this).attr('rel') ).focus();
			});
			
			$('select#scas_artwork_name').change(function() {
				$('#scas-preview').html( $('select#scas_artwork_name option:selected').attr('data-output') );
				$('#scas_artwork_title').val( $('select#scas_artwork_name option:selected').attr('data-title') );
			});
			
			$('#scas_use_custom_artwork').change(function() {
				if ( $(this).is(':checked') ) {
					$('#scas_custom_artwork-tr').css('display','table-row');
	 				$('#scas-preview-tr').css('display','none');
	 				$('select#scas_artwork_name').attr('disabled', 'disabled');
				} else {
					$('#scas_custom_artwork-tr').css('display','none');
	 				$('#scas-preview-tr').css('display','table-row');
	 				$('select#scas_artwork_name').removeAttr('disabled');
				}
			});
		});
	</script>
	<?php
}


/**
 * Provide contextual help on the plugin options screen:
 */
function scas_contextual_help_text( $contextual_help, $screen_id, $screen ) { 
	if ('settings_page_scas-settings' == $screen->id ) {
		echo '<pre>
   ___           _              _           _         _                             _   _     _       _    
  |_  |         | |            | |         | |       | |                           | | | |   (_)     | |   
    | |_   _ ___| |_  __      _| |__   __ _| |_    __| | ___    _   _  ___  _   _  | |_| |__  _ _ __ | | __
    | | | | / __| __| \ \ /\ / /  _ \ / _` | __|  / _` |/ _ \  | | | |/ _ \| | | | | __|  _ \| |  _ \| |/ /
/\__/ / |_| \__ \ |_   \ V  V /| | | | (_| | |_  | (_| | (_) | | |_| | (_) | |_| | | |_| | | | | | | |   < 
\____/ \__,_|___/\__|   \_/\_/ |_| |_|\__,_|\__|  \__,_|\___/   \__, |\___/ \__,_|  \__|_| |_|_|_| |_|_|\_\
                                                                 __/ |                                     
                                                                |___/                                      
                                  _       _                       _                ___  
                                 | |     (_)                     | |              |__ \ 
 _   _  ___  _   _ _ __ ___    __| | ___  _ _ __   __ _        __| | __ ___   _____  ) |
| | | |/ _ \| | | |  __/ _ \  / _` |/ _ \| |  _ \ / _` |      / _` |/ _` \ \ / / _ \/ / 
| |_| | (_) | |_| | | |  __/ | (_| | (_) | | | | | (_| |  _  | (_| | (_| |\ V /  __/_|  
 \__, |\___/ \__,_|_|  \___|  \__,_|\___/|_|_| |_|\__, | ( )  \__,_|\__,_| \_/ \___(_)  
  __/ |                                            __/ | //                             
 |___/                                            |___/                                 
</pre>';
	}
}
// Hook onto the 'contextual help' action to display our help:
add_action( 'contextual_help', 'scas_contextual_help_text', 10, 3 );



/************************************************************************
 * Plugin Installation
 ************************************************************************/

/**
 * Set initial plugin options on install:
 */
function scas_plugin_install() {

	// Register the default plugin options:
	$default_options = array(
		'scas_output_hook' => 'wp_footer',
		'scas_artwork_name' => 'cat',
		'scas_artwork_title' => 'O hai ... i\'z in ur src code',
		'scas_artwork_after' => 'Source Code ASCII Art for WordPress - http://bit.ly/eN7PA0'
	);
	foreach ( $default_options as $opt => $val ) {
		if ( get_option( $opt ) === false )
			update_option( $opt, $val );
	}
}
register_activation_hook( __FILE__, 'scas_plugin_install' );

// That's all, folks!
?>