<?php

/**
 * Helper functions
 *
 * @package   Tpfw/Functions
 * @category  Functions
 * @author    ThemesPond
 * @license   GPLv3
 * @version   1.0.0
 */

/**
 * Parse string like "title:Tpfw is useful|author:ThemesPond" to array('title' => 'Tpfw is useful', 'author' => 'ThemesPond')
 *
 * @param $value
 * @param array $default
 *
 * @since 1.0.0
 * @return array
 */
function tpfw_parse_multi_attribute( $value, $default = array() ) {
	$result = $default;
	$params_pairs = explode( '|', $value );
	if ( !empty( $params_pairs ) ) {
		foreach ( $params_pairs as $pair ) {
			$param = preg_split( '/\:/', $pair );
			if ( !empty( $param[0] ) && isset( $param[1] ) ) {
				$result[$param[0]] = rawurldecode( $param[1] );
			}
		}
	}

	return $result;
}

/**
 * Shortcut method to get the translation strings
 * @since 1.0.0
 * @param string $config_id The config ID.
 * @return array
 */
function tpfw_l10n_get_strings( $config_id = 'global' ) {

	$translation_strings = array(
		'background-color' => esc_attr__( 'Background Color', 'tp-framework' ),
		'background-image' => esc_attr__( 'Background Image', 'tp-framework' ),
		'no-repeat' => esc_attr__( 'No Repeat', 'tp-framework' ),
		'repeat-all' => esc_attr__( 'Repeat All', 'tp-framework' ),
		'repeat-x' => esc_attr__( 'Repeat Horizontally', 'tp-framework' ),
		'repeat-y' => esc_attr__( 'Repeat Vertically', 'tp-framework' ),
		'inherit' => esc_attr__( 'Inherit', 'tp-framework' ),
		'background-repeat' => esc_attr__( 'Background Repeat', 'tp-framework' ),
		'cover' => esc_attr__( 'Cover', 'tp-framework' ),
		'contain' => esc_attr__( 'Contain', 'tp-framework' ),
		'background-size' => esc_attr__( 'Background Size', 'tp-framework' ),
		'fixed' => esc_attr__( 'Fixed', 'tp-framework' ),
		'scroll' => esc_attr__( 'Scroll', 'tp-framework' ),
		'background-attachment' => esc_attr__( 'Background Attachment', 'tp-framework' ),
		'left-top' => esc_attr__( 'Left Top', 'tp-framework' ),
		'left-center' => esc_attr__( 'Left Center', 'tp-framework' ),
		'left-bottom' => esc_attr__( 'Left Bottom', 'tp-framework' ),
		'right-top' => esc_attr__( 'Right Top', 'tp-framework' ),
		'right-center' => esc_attr__( 'Right Center', 'tp-framework' ),
		'right-bottom' => esc_attr__( 'Right Bottom', 'tp-framework' ),
		'center-top' => esc_attr__( 'Center Top', 'tp-framework' ),
		'center-center' => esc_attr__( 'Center Center', 'tp-framework' ),
		'center-bottom' => esc_attr__( 'Center Bottom', 'tp-framework' ),
		'background-position' => esc_attr__( 'Background Position', 'tp-framework' ),
		'background-opacity' => esc_attr__( 'Background Opacity', 'tp-framework' ),
		'on' => esc_attr__( 'ON', 'tp-framework' ),
		'off' => esc_attr__( 'OFF', 'tp-framework' ),
		'all' => esc_attr__( 'All', 'tp-framework' ),
		'serif' => _x( 'Serif', 'font style', 'tp-framework' ),
		'sans-serif' => _x( 'Sans Serif', 'font style', 'tp-framework' ),
		'monospace' => _x( 'Monospace', 'font style', 'tp-framework' ),
		'font-family' => esc_attr__( 'Font Family', 'tp-framework' ),
		'font-size' => esc_attr__( 'Font Size', 'tp-framework' ),
		'font-weight' => esc_attr__( 'Font Weight', 'tp-framework' ),
		'line-height' => esc_attr__( 'Line Height', 'tp-framework' ),
		'font-style' => esc_attr__( 'Font Style', 'tp-framework' ),
		'letter-spacing' => esc_attr__( 'Letter Spacing', 'tp-framework' ),
		'top' => esc_attr__( 'Top', 'tp-framework' ),
		'bottom' => esc_attr__( 'Bottom', 'tp-framework' ),
		'left' => esc_attr__( 'Left', 'tp-framework' ),
		'right' => esc_attr__( 'Right', 'tp-framework' ),
		'center' => esc_attr__( 'Center', 'tp-framework' ),
		'justify' => esc_attr__( 'Justify', 'tp-framework' ),
		'color' => esc_attr__( 'Color', 'tp-framework' ),
		'add-image' => esc_attr__( 'Add Image', 'tp-framework' ),
		'change-image' => esc_attr__( 'Change Image', 'tp-framework' ),
		'no-image-selected' => esc_attr__( 'No Image Selected', 'tp-framework' ),
		'add-file' => esc_attr__( 'Add File', 'tp-framework' ),
		'change-file' => esc_attr__( 'Change File', 'tp-framework' ),
		'no-file-selected' => esc_attr__( 'No File Selected', 'tp-framework' ),
		'remove' => esc_attr__( 'Remove', 'tp-framework' ),
		'select-font-family' => esc_attr__( 'Select a font-family', 'tp-framework' ),
		'variant' => esc_attr__( 'Variant', 'tp-framework' ),
		'subsets' => esc_attr__( 'Subset', 'tp-framework' ),
		'size' => esc_attr__( 'Size', 'tp-framework' ),
		'height' => esc_attr__( 'Height', 'tp-framework' ),
		'spacing' => esc_attr__( 'Spacing', 'tp-framework' ),
		'invalid-value' => esc_attr__( 'Invalid Value', 'tp-framework' ),
		'add-new' => esc_attr__( 'Add new', 'tp-framework' ),
		'row' => esc_attr__( 'row', 'tp-framework' ),
		'limit-rows' => esc_attr__( 'Limit: %s rows', 'tp-framework' ),
		'open-section' => esc_attr__( 'Press return or enter to open this section', 'tp-framework' ),
		'back' => esc_attr__( 'Back', 'tp-framework' ),
		'reset-with-icon' => sprintf( esc_attr__( '%s Reset', 'tp-framework' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
		'text-align' => esc_attr__( 'Text Align', 'tp-framework' ),
		'text-transform' => esc_attr__( 'Text Transform', 'tp-framework' ),
		'none' => esc_attr__( 'None', 'tp-framework' ),
		'capitalize' => esc_attr__( 'Capitalize', 'tp-framework' ),
		'uppercase' => esc_attr__( 'Uppercase', 'tp-framework' ),
		'lowercase' => esc_attr__( 'Lowercase', 'tp-framework' ),
		'initial' => esc_attr__( 'Initial', 'tp-framework' ),
		'select-page' => esc_attr__( 'Select a Page', 'tp-framework' ),
		'open-editor' => esc_attr__( 'Open Editor', 'tp-framework' ),
		'close-editor' => esc_attr__( 'Close Editor', 'tp-framework' ),
		'switch-editor' => esc_attr__( 'Switch Editor', 'tp-framework' ),
		'hex-value' => esc_attr__( 'Hex Value', 'tp-framework' ),
	);

	$config = apply_filters( 'tpfw_config', array() );

	if ( isset( $config['i18n'] ) ) {
		$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
	}


	return apply_filters( 'tpfw_' . $config_id . '_l10n', $translation_strings );
}

/**
 * Sanitize checkbox is multiple
 * @since 1.0
 * @return array
 */
function tpfw_sanitize_checkbox_multiple( $value ) {

	if ( empty( $value ) ) {
		$value = array();
	}

	if ( is_string( $value ) ) {
		$value = explode( ',', $value );
	}

	return $value;
}


/**
 * Convert typography from string to array
 * 
 * @param string $value
 *
 * @since 1.0.0
 * @return array
 */
function tpfw_build_typography( $value ) {
	$subfields = array(
		'font-family' => '',
		'variants' => '',
		'subsets' => '',
		'line-height' => '',
		'font-size' => '',
		'letter-spacing' => '',
		'text-transform' => ''
	);

	if ( !empty( $value ) ) {
		$value = json_decode( urldecode( $value ), true );
		if ( is_array( $value ) ) {
			$value = wp_parse_args( $value, $subfields );
			return $value;
		}
	}

	return $subfields;
}
